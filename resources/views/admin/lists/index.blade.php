@extends('admin.layouts.app')

@section('content')

    <div class="card">
        <div class="card-header bg-dark text-light">
            <h1 class="h3 m-0">{{ meta()->pageTitle() }}</h1>
        </div>
        <div class="card card-body m-2 p-1">
            <form method="POST" action="{{ url('admin/lists') }}" id="form_add_host">
                @csrf
                <div class="form-group row">
                    <label for="url_host" class="col-sm-2 col-form-label text-sm-right">Host</label>
                    <div class="col-sm-8">
                        <input type="text" name="url_host" id="url_host" value="{{ old('url_host') }}" class="form-control{{ $errors->has('url_host') ? ' is-invalid' : '' }}" autofocus>
                        @error('url_host')
                        <div class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="reason" class="col-sm-2 col-form-label text-sm-right">Reason</label>
                    <div class="col-sm-8">
                        <input type="text" name="reason" id="reason" value="{{ old('reason') }}" class="form-control">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-8 offset-sm-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="allow" value="1" class="custom-control-input" id="checkbox_allow" checked>
                            <label class="custom-control-label" for="checkbox_allow">Allow</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-8 offset-sm-2">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="card-body pb-4">
            <div class="float-right">{{ $lists->withQueryString()->links() }}</div>
            <div class="table-responsive">
                <table class="table table-sm table-striped">
                    <thead>
                    <tr>
                        <th>Host</th>
                        <th>Allow</th>
                        <th>Reason</th>
                        <th style="width: 120px;">Added</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($lists as $list)
                        <tr class="{{ $list->allow ? '' : 'table-danger' }}">
                            <td>{{ $list->url_host }}</td>
                            <td>{{ $list->allow ? 'Yes' : 'No' }}</td>
                            <td>{{ $list->reason }}</td>
                            <td>{{ carbon($list->created_at)->longRelativeDiffForHumans() }}</td>
                            <td class="text-right">
                                <button type="button" class="btn btn-sm btn-warning"
                                        data-action="delete"
                                        data-title="You want to delete this link?"
                                        data-url="{{ url('admin/lists/delete/'.$list->id) }}">Delete
                                </button>
                            </td>
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
