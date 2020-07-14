@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="h3 m-0">Report a link</h1>
            </div>
            <div class="card-body pb-4">
                <p class="lead">Report a Link!</p>
                <form method="POST" action="{{ url('report') }}" id="form_report_url">
                    @csrf
                    <div class="form-group row">
                        <label for="url" class="col-sm-2 col-form-label text-sm-right">Link</label>
                        <div class="col-sm-8">
                            <input type="text" name="url" id="url" class="form-control" placeholder="Paste a Link">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label text-sm-right">Your Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Your Email Address">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="comment" class="col-sm-2 col-form-label text-sm-right">Comment</label>
                        <div class="col-sm-8">
                            <textarea name="comment" id="comment" rows="5" class="form-control" placeholder="Reason for reporting this link"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-2">
                            @if(env('RECAPTCHA_SITE_KEY'))
                                <button type="submit" class="btn btn-primary g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}" data-callback='onSubmit' data-action='submit'>Report</button>
                            @else
                                <button type="submit" class="btn btn-primary">Report</button>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection

@section('footer_js')
    <script>
        function onSubmit(token) {
            document.getElementById("form_report_url").submit();
        }
    </script>
@endsection
