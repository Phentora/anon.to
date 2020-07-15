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
                        <th style="width: 96px;">Added</th>
                        <th>User</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($links as $link)
                        <tr>
                            <td><a href="{{ url($link->hash) }}" target="_blank">{{ $link->hash }}</a></td>
                            <td class="text-break"><a href="http://anon.to.abit/?{{ $link->url }}" target="_blank">{{ urldecode($link->url) }}</a></td>
                            <td>{{ carbon($link->created_at)->longRelativeDiffForHumans() }}</td>
                            <td>{{ $link->user->username }}</td>
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
