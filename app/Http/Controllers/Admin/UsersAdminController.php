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

        $users = User::withCount('links');

        $params['order_appends'] = request()->only(['hash', 'host', 'path']);
        $params['order'] = request()->get('order', 'added');
        $params['sort'] = request()->get('sort', 'desc');

        $users = $this->searchUsers($users);
        $users = $this->sortUsers($users, $params);

        return view('admin.users.index', ['users' => $users->paginate(100), 'params' => $params]);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        if ($user->id < 3 || in_array($user->username, ['admin', 'anonymous'])) {
            return response()->json(['message' => 'You cannot delete system users'], 403);
        }

        if ($user->links()->count()) {
            $user->links()->update(['created_by' => 1]);
        }

        if ($user->reports()->count()) {
            $user->reports()->update(['created_by' => 1]);
        }

        $user->delete();

        return response()->json(['message' => 'User deleted successfully']);
    }

    private function searchUsers($users)
    {
        if ($username = request()->get('username')) {
            $users = $users->where('username', 'LIKE', '%' . $username . '%');
        }

        if ($email = request()->get('email')) {
            $users = $users->where('email', 'LIKE', '%' . $email . '%');
        }

        return $users;
    }

    private function sortUsers($users, $params)
    {
        switch ($params['order']) {
            case 'added':
                $users = $users->orderBy('created_at', $params['sort']);
                break;

            case 'links':
                $users = $users->orderBy('links_count', $params['sort']);
                break;

            default:
                $users = $users->orderBy('created_at', 'desc');
                break;
        }

        return $users;
    }
}
