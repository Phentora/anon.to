<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;

class ReportsAdminController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        meta()->setMeta('Reports');

        $reports = Report::with(['link', 'user'])->latest();

        return view('admin.reports.index', ['reports' => $reports->paginate(100)]);
    }
}
