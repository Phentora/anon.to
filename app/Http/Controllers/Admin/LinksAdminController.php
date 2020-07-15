<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Link;

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
        return $links;
    }

    private function sortLinks($links)
    {
        return $links->latest();
    }
}
