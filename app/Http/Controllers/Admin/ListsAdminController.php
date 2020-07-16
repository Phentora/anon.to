<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AllowList;
use Illuminate\Support\Facades\Cache;

class ListsAdminController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        meta()->setMeta('Allow Lists');

        $lists = AllowList::latest();

        $this->cacheList();

        return view('admin.lists.index', ['lists' => $lists->paginate(100)]);
    }

    public function add()
    {
        $list = new AllowList();

        return view('admin.lists.edit', ['list' => $list]);
    }

    private function cacheList()
    {
        Cache::put('allowlist', AllowList::where('allow', 1)->pluck('url_host')->toArray());
        Cache::put('denylist', AllowList::where('allow', 0)->pluck('url_host')->toArray());
    }
}
