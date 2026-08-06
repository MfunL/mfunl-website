<?php

declare(strict_types=1);

namespace App\Core;

/**
 * Small rule-based validator: Validator::make($data, ['email' => 'required|email'])->fails().
 */
final class Validator
{
    private array $errors = [];

    private function __construct(private readonly array $data, private readonly array $rules)
    {
        $this->run();
    }

    public static function make(array $data, array $rules): self
    {
        return new self($data, $rules);
    }

    private function run(): void
    {
        foreach ($this->rules as $field => $ruleString) {
            $value = $this->data[$field] ?? null;
            foreach (explode('|', $ruleString) as $rule) {
                $this->applyRule($field, $value, $rule);
            }
        }
    }

    private function applyRule(string $field, mixed $value, string $rule): void
    {
        [$name, $param] = array_pad(explode(':', $rule, 2), 2, null);

        $isEmpty = $value === null || (is_string($value) && trim($value) === '');

        match ($name) {
            'required' => $isEmpty && $this->fail($field, 'This field is required.'),
            'email' => !$isEmpty && !filter_var($value, FILTER_VALIDATE_EMAIL) && $this->fail($field, 'Enter a valid email address.'),
            'max' => !$isEmpty && mb_strlen((string) $value) > (int) $param && $this->fail($field, "Must be {$param} characters or fewer."),
            'min' => !$isEmpty && mb_strlen((string) $value) < (int) $param && $this->fail($field, "Must be at least {$param} characters."),
            'phone' => !$isEmpty && !preg_match('/^[0-9+\-\s()]{7,15}$/', (string) $value) && $this->fail($field, 'Enter a valid phone number.'),
            'in' => !$isEmpty && !in_array($value, explode(',', (string) $param), true) && $this->fail($field, 'Invalid selection.'),
            default => null,
        };
    }

    private function fail(string $field, string $message): void
    {
        $this->errors[$field][] = $message;
    }

    public function fails(): bool
    {
        return $this->errors !== [];
    }

    public function errors(): array
    {
        return $this->errors;
    }

    public function firstError(string $field): ?string
    {
        return $this->errors[$field][0] ?? null;
    }
}
