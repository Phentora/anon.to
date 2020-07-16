<?php

namespace App\Http\Controllers;

use App\Services\AnonServices;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $url = request()->server('QUERY_STRING');
        if (is_valid_url($url)) {
            return app(AnonServices::class)->redirect($url);
        }

        return view('home');
    }
}
