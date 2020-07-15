<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Services\AnonServices;
use Illuminate\Support\Arr;

class LinksAdminController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        meta()->setMeta('Links');

        $links = Link::with('user');

        $links = $this->searchLinks($links);
        $links = $this->sortLinks($links);

        return view('admin.links.index', ['links' => $links->paginate(100)]);
    }

    private function searchLinks($links)
    {
        if ($hash = request()->get('hash')) {
            $hash = explode('/', $hash);
            $hash = Arr::last($hash);
            $links = $links->where('hash', $hash);
        }

        if ($host = request()->get('host')) {
            if (is_valid_url($host)) {
                $host = app(AnonServices::class)->parseUrl($host)['host'];
            }

            $links = $links->where('url_host', 'LIKE', '%' . $host . '%');
        }

        if ($path = request()->get('path')) {
            $links = $links->where(function ($q) use ($path) {
                $q->orWhere('url_path', 'LIKE', '%' . $path . '%');
                $q->orWhere('url_query', 'LIKE', '%' . $path . '%');
                $q->orWhere('url_fragment', 'LIKE', '%' . $path . '%');
            });
        }

        return $links;
    }

    private function sortLinks($links)
    {
        return $links->latest();
    }
}
