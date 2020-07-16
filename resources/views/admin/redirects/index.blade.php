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
                            <input type="text" name="url" id="search_url" value="{{ request('url') }}" class="form-control mr-1" placeholder="URL">
                            <button type="submit" class="btn btn-primary mr-1"><i class="fa fa-search"></i> Search</button>
                            <a href="{{ url()->current() }}" class="btn btn-warning"><i class="fa fa-sync"></i> Reset</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="float-right">{{ $redirects->withQueryString()->links() }}</div>
            <div class="table-responsive">
                <table class="table table-sm table-striped">
                    <thead>
                    <tr>
                        <th>{!! sort_row(url()->current(), $params, 'url', 'URL', 'URL', 'asc') !!}</th>
                        <th>
                            {!! sort_row(url()->current(), $params, 'visits') !!}
                            {!! sort_row(url()->current(), $params, 'visited', 'visited at', 'At') !!}
                        </th>
                        <th style="width: 120px;">{!! sort_row(url()->current(), $params, 'added') !!}</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($redirects as $redirect)
                        <tr>
                            <td class="text-break"><a href="{{ $redirect->url }}" title="{{ urldecode($redirect->url) }}" target="_blank">{{ \Illuminate\Support\Str::limit($redirect->url, 64) }}</a>
                            </td>
                            <td>
                                <div class="tag tag-bordered tag-border-success">{{ $redirect->visits }}</div>
                                <div class="tag tag-bordered tag-border-info" data-toggle="tooltip" title="{{ $redirect->visited_at ? carbon($redirect->visited_at)->toDateTimeString() : '-' }}">{{ $redirect->visited_at ? carbon($redirect->visited_at)->shortAbsoluteDiffForHumans() : '-' }}</div>
                            </td>
                            <td><span data-toggle="tooltip" title="{{ carbon($redirect->created_at)->toDateTimeString() }}">{{ carbon($redirect->created_at)->shortAbsoluteDiffForHumans(2) }}</span>
                            </td>

                            <td class="text-right">
                                <button type="button" class="btn btn-sm btn-danger"
                                        data-action="delete"
                                        data-title="You want to delete and ban this link?"
                                        title="Delete and Ban"
                                        data-url="{{ url('admin/redirect/ban/'.$redirect->id) }}"><i class="fa fa-ban text-light"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-inline"><strong>Total:</strong> {{ $redirects->total() }}</div>
            <div class="d-inline float-right">{{ $redirects->withQueryString()->links() }}</div>
        </div>
    </div>
@endsection
