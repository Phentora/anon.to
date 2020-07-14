<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

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
        if ($url = Cache::get($key)) {
            return $this->anonymousRedirect($url);
        }

        $link = url_services()->getLink($key);

        if ($link) {
            url_services()->cacheLink($link);
            return $this->anonymousRedirect(url_services()->unParseUrlFromDb($link));
        }

        abort(404);
    }

    public function anonymousRedirect($url)
    {
        $url = urldecode($url);

        return response()->view('anonymous', ['url' => $url, 'allow_redirect' => true])
            ->setExpires(Carbon::now()->addHours(1))
            ->header('Cache-Control', 'public,max-age=' . (3600) . ',s-maxage=' . (3600));
    }
}
