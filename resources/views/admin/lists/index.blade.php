@extends('admin.layouts.app')

@section('content')

    <div class="card">
        <div class="card-header bg-dark text-light">
            <div class="float-left">
                <h1 class="h3 m-0">{{ meta()->pageTitle() }}</h1>
            </div>
            <div class="card-header-actions">
                <a class="btn btn-sm btn-info" href="{{ url('admin/lists/new') }}"><i class="fa fa-plus-square text-white"></i> New</a>
            </div>
        </div>
        <div class="card-body pb-4">
            <div class="float-right">{{ $lists->withQueryString()->links() }}</div>
            <div class="table-responsive">
                <table class="table table-sm table-striped">
                    <thead>
                    <tr>
                        <th>Host</th>
                        <th style="width: 96px;">Added</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lists as $list)
                        <tr>
                            <td>{{ $list->url_host }}</td>
                            <td>{{ carbon($list->created_at)->longRelativeDiffForHumans() }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-inline"><strong>Total:</strong> {{ $lists->total() }}</div>
            <div class="d-inline float-right">{{ $lists->withQueryString()->links() }}</div>
        </div>
    </div>
@endsection
