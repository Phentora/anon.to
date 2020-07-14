<?php

namespace App\Http\Controllers;

use App\Models\Link;

class ReportController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('report');
    }
}
