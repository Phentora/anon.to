<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $url = request()->server('QUERY_STRING');

        if (is_valid_url($url)) {
            return app(RedirectController::class)->anonymousRedirect($url);
        }

        return view('home');
    }
}
