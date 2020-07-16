<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    @if(!empty($allow_redirect))
        <meta http-equiv="refresh" content="1; url={{ $url }}" id="meta_url">@endif
    <title>Redirecting to {{ $url }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">
    <style>
        body,html{background-color:#fff;color:#636b6f;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;font-weight:200;height:100vh;margin:0}.full-height{height:100vh}.flex-center{align-items:center;display:flex;justify-content:center}.position-ref{position:relative}.content{text-align:center}.title{font-size:48px}a{color:#39f;font-size:24px;font-weight:600;text-decoration:none}.m-b-md{margin-bottom:30px}.btn{display:inline-block;vertical-align:middle;padding:.375rem .75rem;font-size:24px;line-height:1.5;border-radius:.25rem;color:#fff;border:1px solid #0079f2;background-color:#0080ff}
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">This link redirects to:</div>
        <div class="m-b-md"><a href="{{ $url }}" title="{{ $url }}" rel="noreferrer nofollow" id="redirect_anchor">{{ \Illuminate\Support\Str::limit($url,32) }}</a></div>
        <div><a href="{{ $url }}" title="{{ $url }}" rel="noreferrer nofollow" class="btn" id="redirect_button">continue &#129138;</a></div>
    </div>
</div>

@if(env('RECAPTCHA_SITE_KEY'))
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}"></script>
@endif
<script>
    (function () {
        if (window.location.hash) {
            var meta = document.getElementById('meta_url');
            if (meta) {
                meta.document.getElementById('meta_url').setAttribute('content', '0; url={{ $url }}' + window.location.hash);
            }
            document.getElementById('redirect_anchor').setAttribute('href', '{{ $url }}' + window.location.hash);
            {{--document.getElementById('redirect_anchor').innerHTML = '{{ $url }}' + window.location.hash;--}}
            document.getElementById('redirect_button').setAttribute('href', '{{ $url }}' + window.location.hash);
        }
    })();
</script>

</body>
</html>
