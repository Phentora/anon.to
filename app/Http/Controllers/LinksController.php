<?php

namespace App\Http\Controllers;

use App\Rules\Recaptcha;

class LinksController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
    }

    public function shorten()
    {
        $rules = [
            'url' => 'required|url',
        ];

        if (env('RECAPTCHA_SITE_KEY')) {
            $rules['g-recaptcha-response'] = [new Recaptcha()];
        }

        $this->validate(request(), $rules, [
            'url.required' => 'Please paste a link to shorten',
            'url.url' => 'Must be a valid url starting with http:// or https://',
        ]);

        return response()->json(['message' => 'Success', 'url' => 'https://anon.to/jAkcrj']);
    }
}
