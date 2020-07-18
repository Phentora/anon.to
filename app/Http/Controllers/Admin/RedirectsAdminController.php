<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AllowList;
use App\Models\Redirect;
use App\Services\AnonServices;

class RedirectsAdminController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        meta()->setMeta('Redirects');

        $params['order_appends'] = request()->only(['url']);
        $params['order'] = request()->get('order', 'added');
        $params['sort'] = request()->get('sort', 'desc');

        $redirects = app(Redirect::class);
        $redirects = $this->searchLinks($redirects);
        $redirects = app(LinksAdminController::class)->sortLinks($redirects, $params);

        return view('admin.redirects.index', ['redirects' => $redirects->paginate(100), 'params' => $params]);
    }

    public function allow($id)
    {
        $redirect = Redirect::findOrFail($id);
        $parsed = app(AnonServices::class)->parseUrl($redirect->url);

        AllowList::updateOrInsert(['url_host' => $parsed['host'],], [
            'url_host' => $parsed['host'],
            'allow' => true,
            'reason' => $parsed['host'],
            'created_at' => carbon(),
            'updated_at' => carbon(),
        ]);

        app(ListsAdminController::class)->cacheList();

        return response()->json(['message' => $parsed['host'] . ' added to allowed list.']);
    }

    public function ban($id)
    {
        $redirect = Redirect::findOrFail($id);
        $parsed = app(AnonServices::class)->parseUrl($redirect->url);

        AllowList::updateOrInsert(['url_host' => $parsed['host'],], [
            'url_host' => $parsed['host'],
            'allow' => false,
            'reason' => $redirect->url,
            'created_at' => carbon(),
            'updated_at' => carbon(),
        ]);

        $redirect->delete();

        app(ListsAdminController::class)->cacheList();

        return response()->json(['message' => 'Redirect deleted and banned successfully']);
    }

    private function searchLinks($redirects)
    {
        if ($url = request()->get('url')) {
            $redirects = $redirects->where('url', 'LIKE', '%' . $url . '%');
        }

        return $redirects;
    }
}
