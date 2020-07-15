<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AllowList;
use App\Models\BlockList;

class ListsAdminController extends Controller
{
    public function __construct()
    {
    }

    public function index($key)
    {
        if ($key == 'allow') {
            return $this->allow();
        }

        if ($key == 'block') {
            return $this->block();
        }
    }

    public function allow()
    {
        meta()->setMeta('Allow List');

        $lists = AllowList::latest();

        return view('admin.lists.index', ['lists' => $lists->paginate(100)]);
    }

    public function block()
    {
        meta()->setMeta('Block List');

        $lists = BlockList::latest();

        return view('admin.lists.index', ['lists' => $lists->paginate(100)]);
    }
}
