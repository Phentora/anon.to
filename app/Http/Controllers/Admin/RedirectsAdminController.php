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

        $redirects = app(Redirect::class);

        $redirects = $this->searchLinks($redirects);
        $redirects = $this->sortLinks($redirects);

        return view('admin.redirects.index', ['redirects' => $redirects->paginate(100)]);
    }

    private function searchLinks($redirects)
    {
        if ($url = request()->get('url')) {
            $redirects = $redirects->where('url', 'LIKE', '%' . $url . '%');
        }

        return $redirects;
    }

    private function sortLinks($redirects)
    {
        return $redirects->latest();
    }
}
