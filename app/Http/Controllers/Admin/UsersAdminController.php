<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UsersAdminController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        meta()->setMeta('Users');

        $users = User::latest()->withCount('links');

        return view('admin.users.index', ['users' => $users->paginate(100)]);
    }
}
