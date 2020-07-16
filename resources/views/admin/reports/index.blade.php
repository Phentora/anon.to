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
            <div class="float-right">{{ $reports->withQueryString()->links() }}</div>
            <div class="table-responsive">
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th>Email</th>
                        <th>IP</th>
                        <th>Report</th>
                        <th>URL</th>
                        <th>Hash</th>
                        <th style="width: 120px;">Added</th>
                        <th>User</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reports as $report)
                        <tr class="{{ empty($report->link->hash) ? 'table-danger' : ($report->dealt_at ? 'table-success' : '') }}">
                            <td>{{ $report->email }}</td>
                            <td>{{ $report->ip_address }}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-info" data-toggle="popover" data-html="true" data-content="{{ nl2br($report->comment) }}">show</button>
                            </td>
                            <td class="text-break"><a href="{{ url($report->url) }}" title="{{ url($report->url) }}" target="_blank">{{ \Illuminate\Support\Str::limit($report->url, 32) }}</a></td>
                            <td>
                                @if(!empty($report->link->hash))
                                    <a href="{{ url($report->link->hash) }}" target="_blank">{{ $report->link->hash }}</a>
                                @else
                                    <span class="text-danger">deleted</span>
                                @endif
                            </td>
                            <td>{{ carbon($report->created_at)->longRelativeDiffForHumans() }}</td>
                            <td>{{ $report->user->username }}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-primary"
                                        data-action="delete"
                                        data-title="You want to ignore this report?"
                                        data-url="{{ url('admin/report/ignore/'.$report->id) }}">Ignore
                                </button>

                                <button type="button" class="btn btn-sm btn-warning"
                                        data-action="delete"
                                        data-title="You want to delete this link?"
                                        data-url="{{ url('admin/report/delete/'.$report->id) }}">Delete
                                </button>

                                <button type="button" class="btn btn-sm btn-danger"
                                        data-action="delete"
                                        data-title="You want to delete and ban this link?"
                                        data-url="{{ url('admin/report/ban/'.$report->id) }}">Ban
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-inline"><strong>Total:</strong> {{ $reports->total() }}</div>
            <div class="d-inline float-right">{{ $reports->withQueryString()->links() }}</div>
        </div>
    </div>
@endsection
