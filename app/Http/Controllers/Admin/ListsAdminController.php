<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AllowList;
use App\Rules\Hostname;
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

        return view('admin.lists.index', ['lists' => $lists->paginate(100)]);
    }

    public function post()
    {
        $this->validate(request(), [
            'url_host' => ['required', 'unique:allow_lists', new Hostname()],
        ]);
        $host = request()->get('url_host');
        $allow = request()->get('allow');

        AllowList::create([
            'url_host' => $host,
            'allow' => (bool)$allow,
            'reason' => request()->get('reason'),
        ]);

        flash($host . ($allow ? ' allowed ' : ' blocked ') . 'successfully!', 'success');
        $this->cacheList();
        return redirect('admin/lists');
    }

    public function delete($id)
    {
        $list = AllowList::findOrFail($id);

        $list->delete();

        $this->cacheList();

        return response()->json(['message' => 'Host deleted successfully']);
    }

    public function cacheList()
    {
        Cache::put('allowlist', AllowList::where('allow', 1)->pluck('url_host')->toArray());
        Cache::put('denylist', AllowList::where('allow', 0)->pluck('url_host')->toArray());
    }
}
