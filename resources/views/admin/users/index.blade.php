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
                            <input type="text" name="username" id="search_username" value="{{ request('username') }}" class="form-control mr-1" placeholder="Username">
                            <input type="text" name="email" id="search_email" value="{{ request('email') }}" class="form-control mr-1" placeholder="Email">
                            <button type="submit" class="btn btn-primary mr-1"><i class="fa fa-search"></i> Search</button>
                            <a href="{{ url()->current() }}" class="btn btn-warning"><i class="fa fa-sync"></i> Reset</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="float-right">{{ $users->withQueryString()->links() }}</div>
            <div class="table-responsive">
                <table class="table table-sm table-striped">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                        <th>{!! sort_row(url()->current(), $params, 'links') !!}</th>
                        <th>Verified</th>
                        <th style="width: 120px;">Joined</th>
                        <th style="width: 120px;">Login</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr class="{{ $user->email_verified_at ? '' : 'table-danger' }}">
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                {{ $user->links_count }}
                                @if($user->links_count)
                                    <a href="{{ url('admin/links?user='.$user->username) }}" title="search links added by {{ $user->username }}"><i class="fa fa-search"></i></a>
                                @endif
                            </td>
                            <td>{{ $user->email_verified_at ? 'Yes' : 'No' }}</td>
                            <td>{{ carbon($user->created_at)->longRelativeDiffForHumans() }}</td>
                            <td>{{ $user->login_at ? carbon($user->login_at)->longRelativeDiffForHumans() : '-' }}</td>
                            <td class="text-right">
                                <button type="button" class="btn btn-sm btn-warning"
                                        data-action="delete"
                                        data-title="You want to delete this user?"
                                        data-url="{{ url('admin/user/delete/'.$user->id) }}">Delete
                                </button>
                                <button type="button" class="btn btn-sm btn-danger"
                                        data-action="delete"
                                        data-title="You want to ban this user?"
                                        data-url="{{ url('admin/user/ban/'.$user->id) }}">Ban
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-inline"><strong>Total:</strong> {{ $users->total() }}</div>
            <div class="d-inline float-right">{{ $users->withQueryString()->links() }}</div>
        </div>
    </div>
@endsection
