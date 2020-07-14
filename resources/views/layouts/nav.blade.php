<nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand" title="{{ env('APP_NAME') }}">{{ env('APP_NAME') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item{{ request()->is('report') ? ' active' : '' }}"><a href="{{ url('report') }}" class="nav-link" title="Report a link">Report</a></li>
            </ul>
            <ul class="navbar-nav">
                @guest
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbar-dropdown-user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ auth()->user()->username }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbar-dropdown-user">
                            <a href="{{ url('links') }}" class="dropdown-item"><i class="fa fa-fw fa-link"></i>&nbsp;My Links</a>
                            <a href="{{ url('account') }}" class="dropdown-item"><i class="fa fa-fw fa-cog"></i>&nbsp;Account Settings</a>
                            @if(auth()->user()->isAdmin())
                                <a href="{{ url('admin') }}" class="dropdown-item"><i class="fa fa-fw fa-cogs"></i>&nbsp;Admin Panel</a>
                            @endif
                            <div role="separator" class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-sign-out-alt"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
