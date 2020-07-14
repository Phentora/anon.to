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
@include('admin.layouts.nav')
<div class="c-wrapper c-fixed-components">
    @include('admin.layouts.header')
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">

                @if($flash_message = session()->get('flash_message'))
                    <div class="alert alert-{{ $flash_message['type'] }}" role="alert">
                        {{ $flash_message['message'] }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @yield('content')
            </div>
        </main>
        @include('admin.layouts.footer')
    </div>
</div>

</body>
</html>
