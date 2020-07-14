@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="h3 m-0">Anonymous URL Shortener</h1>
            </div>
            <div class="card-body pb-4">
                <p class="lead">Create a secure anonymous short link from your url which also hides http referer!</p>
                <form method="POST" action="{{ url('shorten') }}" id="form_shorten_url">
                    @csrf
                    <div class="input-group">
                        <label for="url" class="sr-only">URL</label>
                        <input type="text" name="url" id="url" class="form-control form-control-lg" placeholder="Paste a link to shorten it">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary" id="btn_shorten">Shorten</button>
                        </div>
                    </div>
                </form>

                <div class="input-group mt-2 d-none" id="short_url_output">
                    <div class="input-group-prepend">
                        <div class="input-group-text bg-success text-light"><strong>Short URL:</strong></div>
                    </div>
                    <input type="text" name="short_url" id="short_url" class="form-control form-control-lg is-valid" readonly>
                </div>

            </div>
        </div>

        <div class="card mt-2">
            <div class="card-header">
                <h2 class="h4 m-0">Anonymous Redirect</h2>
            </div>
            <div class="card-body">
                <p class="lead">Do you want to link anonymously to other web sites without sending any referrer?</p>
                <p class="lead">Use <strong>{{ parse_url(env('APP_URL'), PHP_URL_HOST) }}</strong> to de-referer or null-referer your links.</p>
                <p class="lead">Just put <strong>{{ env('APP_URL') }}/?</strong> in front of your links. Eg: <strong>{{ env('APP_URL') }}/?http://www.google.com</strong></p>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="h4 m-0">Why use {{ parse_url(env('APP_URL'), PHP_URL_HOST) }}?</h3>
            </div>
            <div class="card-body row">
                <div class="col-sm-4">
                    <div class="p-2 text-center">
                        <i class="fa fa-4x fa-lock"></i>
                        <p class="lead">We are SSL Secured.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="p-2 text-center">
                        <i class="fa fa-4x fa-file"></i>
                        <p class="lead">We don't keep logs.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="p-2 text-center">
                        <i class="fa fa-4x fa-link"></i>
                        <p class="lead">We hide your original referrer.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
