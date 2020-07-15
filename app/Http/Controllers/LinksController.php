<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Rules\Recaptcha;
use App\Services\AnonServices;
use Illuminate\Support\Arr;

class LinksController extends Controller
{
    /**
     * @var \App\Services\AnonServices
     */
    private $anon_service;

    public function __construct()
    {
        $this->anon_service = app(AnonServices::class);
    }

    public function index()
    {
        meta()->setMeta('My Links');

        $links = Link::where('created_by', auth()->id())->latest();
//        $links = Link::latest();

        if ($hash = request()->get('hash')) {
            $hash = explode('/', $hash);
            $hash = Arr::last($hash);
            $links->where('hash', $hash);
        }

        if ($host = request()->get('host')) {
            if (is_valid_url($host)) {
                $host = $this->anon_service->parseUrl($host)['host'];
            }

            $links->where('url_host', 'LIKE', '%' . $host . '%');
        }

        if ($path = request()->get('path')) {
            $links->where(function ($q) use ($path) {
                $q->orWhere('url_path', 'LIKE', '%' . $path . '%');
                $q->orWhere('url_query', 'LIKE', '%' . $path . '%');
                $q->orWhere('url_fragment', 'LIKE', '%' . $path . '%');
            });
        }

        return view('links', ['links' => $links->paginate(100)]);
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

        $url = request()->get('url');
        $parsed_url = $this->anon_service->parseUrl($url);

        if ($parsed_url['host'] == parse_url(env('APP_URL'), PHP_URL_HOST)) {
            return response()->json(['message' => 'App URL', 'url' => url($url)]);
        }

        if ($link = $this->anon_service->findLink($parsed_url)) {
            return response()->json(['message' => 'Existing URL', 'url' => url($link->hash)], 200);
        }

        $link = $this->anon_service->addLink($parsed_url);

        return response()->json(['message' => 'New URL', 'url' => url($link->hash)]);
    }
}
