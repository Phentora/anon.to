<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

class RedirectController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
    }

    public function redirect($key)
    {

    }

    public function anonymousRedirect($url)
    {
        $url = urldecode($url);

        return response()->view('anonymous', compact('url'))
            ->setExpires(Carbon::now()->addHours(1))
            ->header('Cache-Control', 'public,max-age=' . (3600) . ',s-maxage=' . (3600));
    }
}
