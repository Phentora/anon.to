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
                @endif
            </ul>
        </div>
    </div>
</nav>
