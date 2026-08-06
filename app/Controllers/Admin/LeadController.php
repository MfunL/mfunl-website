<?php

declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Core\Controller;
use App\Core\Seo;

final class LeadController extends Controller
{
    public function index(array $routeMeta): string
    {
        $seo = new Seo(title: 'Leads', description: 'MfunL admin leads.', path: '/admin/leads/', noindex: true);

        return $this->view('admin/leads-index', ['seo' => $seo, 'bodyClass' => 'admin-leads'], 'admin');
    }

    public function show(array $routeMeta, string $id): string
    {
        $seo = new Seo(title: 'Lead Detail', description: 'MfunL admin lead detail.', path: "/admin/leads/{$id}/", noindex: true);

        return $this->view('admin/lead-detail', ['seo' => $seo, 'bodyClass' => 'admin-lead-detail', 'id' => $id], 'admin');
    }

    public function export(array $routeMeta): never
    {
        header('Content-Type: text/csv; charset=utf-8');
        header('Content-Disposition: attachment; filename="leads.csv"');
        echo "id,name,email,phone,status,created_at\n";
        exit;
    }
}
