<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AllowList;
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

    public function ignore($id)
    {
        $report = Report::findOrFail($id);
        $report->dealt_at = carbon();
        $report->save();

        return response()->json(['message' => 'Report ignored successfully']);
    }

    public function delete($id)
    {
        $report = Report::with(['link', 'user'])->findOrFail($id);
        $report->dealt_at = carbon();
        $report->save();

        if ($report->link) {
            $report->link->delete();
        }

        return response()->json(['message' => 'Link deleted successfully']);
    }

    public function ban($id)
    {
        $report = Report::with(['link', 'user'])->findOrFail($id);
        $report->dealt_at = carbon();
        $report->save();

        if ($report->link) {
            AllowList::updateOrInsert(['url_host' => $report->link->url_host,], [
                'url_host' => $report->link->url_host,
                'allow' => false,
                'reason' => 'report:' . $report->id,
                'created_at' => carbon(),
                'updated_at' => carbon(),
            ]);

            $report->link->delete();
        }

        app(ListsAdminController::class)->cacheList();

        return response()->json(['message' => 'Link deleted and banned successfully']);
    }
}
