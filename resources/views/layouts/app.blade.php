<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ meta()->metaTitle() }}</title>
    <script src="{{ asset(mix('js/app.js')) }}" defer></script>
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">
</head>
<body class="c-app">
<div class="c-wrapper">

    <header class="c-header c-header-dark c-header-fixed">
        @include('layouts.nav')
    </header>
    <div class="c-body">
        <main class="c-main">
            @if($flash_message = session()->get('flash_message'))
                <div class="container">
                    <div class="alert alert-{{ $flash_message['type'] }}" role="alert">
                        {{ $flash_message['message'] }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif

            @yield('content')
        </main>
    </div>

    <footer class="c-footer c-footer-dark">
        @include('layouts.footer')
    </footer>

</div>

@if(env('RECAPTCHA_SITE_KEY'))
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
    <script>
        var RECAPTCHA_SITE_KEY = '{{ env('RECAPTCHA_SITE_KEY') }}';
    </script>
@endif
@yield('footer_js')

</body>
</html>
