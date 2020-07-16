<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Link;
use App\Models\Redirect;
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

        $params['order_appends'] = request()->only(['hash', 'host', 'path']);
        $params['order'] = request()->get('order', 'added');
        $params['sort'] = request()->get('sort', 'desc');

        $links = $this->searchLinks($links);
        $links = $this->sortLinks($links, $params);

        return view('admin.links.index', ['links' => $links->paginate(100), 'params' => $params]);
    }

    public function searchLinks($links)
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

    public function sortLinks($links, $params)
    {
        switch ($params['order']) {

            case 'added':
                $links = $links->orderBy('created_at', $params['sort']);
                break;

            case 'visits':
                $links = $links->orderBy('visits', $params['sort']);
                break;

            case 'visited':
                $links = $links->orderBy('visited_at', $params['sort']);
                break;

            case 'host':
                $links = $links->orderBy('url_host', $params['sort']);
                break;

            case 'path':
                $links = $links->orderBy('url_path', $params['sort']);
                break;

            case 'hash':
                $links = $links->orderBy('hash', $params['sort']);
                break;

            case 'url':
                if ($links instanceof Redirect) {
                    $links = $links->orderBy('url', $params['sort']);
                }
                break;

            default:
                $links = $links->orderBy('created_at', 'desc');
                break;
        }

        return $links;
    }
}
