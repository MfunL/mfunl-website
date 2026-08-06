<?php
/** @var string $content */
/** @var \App\Core\Seo $seo */
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<?= \App\Core\View::partial('head', ['seo' => $seo, 'bodyClass' => $bodyClass ?? '']) ?>
</head>
<body class="<?= htmlspecialchars($bodyClass ?? '', ENT_QUOTES, 'UTF-8') ?>">
<a class="skip-link" href="#main-content">Skip to content</a>

<?= \App\Core\View::partial('header') ?>

<main id="main-content">
<?= $content ?>
</main>

<?= \App\Core\View::partial('footer') ?>
<?= \App\Core\View::partial('floating-buttons') ?>
<?= \App\Core\View::partial('modals') ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="/assets/js/main.js" defer></script>
<script src="/assets/js/nav.js" defer></script>
<script src="/assets/js/slider.js" defer></script>
<script src="/assets/js/forms.js" defer></script>
</body>
</html>
