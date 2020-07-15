<?php

namespace App\Http\Controllers;

use App\Services\AnonServices;

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
        return app(AnonServices::class)->redirect($key);
    }
}
