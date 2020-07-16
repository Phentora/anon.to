<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AllowList;

class ListsAdminController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        meta()->setMeta('Allow Lists');

        $lists = AllowList::latest();

        return view('admin.lists.index', ['lists' => $lists->paginate(100)]);
    }

    public function add()
    {
        $list = new AllowList();

        return view('admin.lists.edit', ['list' => $list]);
    }
}
