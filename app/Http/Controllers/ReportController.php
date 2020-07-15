<?php

namespace App\Http\Controllers;

class ReportController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        meta()->setMeta('Report a link');

        return view('report');
    }
}
