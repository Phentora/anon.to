@extends('admin.layouts.app')

@section('content')

    <div class="card">
        <div class="card-header bg-dark text-light">
            <h1 class="h3 m-0">{{ meta()->pageTitle() }}</h1>
        </div>
        <div class="card-body pb-4">
            <div class="card mb-4">
                <div class="card-body p-1">
                    <form method="GET" action="{{ url()->current() }}" id="form_search_links">
                        <div class="form-group form-inline my-1">
                            <input type="text" name="hash" id="search_hash" value="{{ request('hash') }}" class="form-control mr-1" placeholder="Hash">
                            <input type="text" name="host" id="search_host" value="{{ request('host') }}" class="form-control mr-1" placeholder="Host">
                            <input type="text" name="path" id="search_path" value="{{ request('path') }}" class="form-control mr-1" placeholder="Path">
                            <button type="submit" class="btn btn-primary mr-1"><i class="fa fa-search"></i> Search</button>
                            <a href="{{ url()->current() }}" class="btn btn-warning"><i class="fa fa-sync"></i> Reset</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="float-right">{{ $links->withQueryString()->links() }}</div>
            <div class="table-responsive">
                <table class="table table-sm table-striped">
                    <thead>
                    <tr>
                        <th>Hash</th>
                        <th>URL</th>
                        <th>Visits</th>
                        <th style="width: 120px;">Added</th>
                        <th>User</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($links as $link)
                        <tr>
                            <td><a href="{{ url($link->hash) }}" target="_blank">{{ $link->hash }}</a></td>
                            <td class="text-break"><a href="{{ $link->url }}" title="{{ urldecode($link->url) }}" target="_blank">{{ \Illuminate\Support\Str::limit($link->url, 64) }}</a></td>
                            <td>
                                <div class="tag tag-bordered tag-border-success">{{ $link->visits }}</div>
                                <div class="tag tag-bordered tag-border-info" data-toggle="tooltip" title="{{ $link->visited_at ? carbon($link->visited_at)->toDateTimeString() : '-' }}">{{ $link->visited_at ? carbon($link->visited_at)->shortAbsoluteDiffForHumans() : '-' }}</div>
                            </td>
                            <td><span data-toggle="tooltip" title="{{ carbon($link->created_at)->toDateTimeString() }}">{{ carbon($link->created_at)->shortAbsoluteDiffForHumans(2) }}</span></td>
                            <td>{{ $link->user->username }}</td>

                            <td class="text-right">
                                <button type="button" class="btn btn-sm btn-warning"
                                        data-action="delete"
                                        data-title="You want to delete this link?"
                                        title="Delete"
                                        data-url="{{ url('admin/link/delete/'.$link->id) }}"><i class="fa fa-trash text-light"></i>
                                </button>

                                <button type="button" class="btn btn-sm btn-danger"
                                        data-action="delete"
                                        data-title="You want to delete and ban this link?"
                                        title="Delete and Ban"
                                        data-url="{{ url('admin/link/ban/'.$link->id) }}"><i class="fa fa-ban text-light"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-inline"><strong>Total:</strong> {{ $links->total() }}</div>
            <div class="d-inline float-right">{{ $links->withQueryString()->links() }}</div>
        </div>
    </div>
@endsection
