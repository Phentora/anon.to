<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Redirect;

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

    private function searchLinks($redirects)
    {
        if ($url = request()->get('url')) {
            $redirects = $redirects->where('url', 'LIKE', '%' . $url . '%');
        }

        return $redirects;
    }
}
