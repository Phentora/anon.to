@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class="h3 m-0">Report a link</h1>
            </div>
            <div class="card-body pb-4">
                <form method="POST" action="{{ url('report') }}" id="form_report_url">
                    @csrf
                    <div class="form-group row">
                        <label for="url" class="col-sm-2 col-form-label text-sm-right">Link</label>
                        <div class="col-sm-8">
                            <input type="text" name="url" value="{{ old('url') }}" id="url" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" placeholder="Paste a Link" autofocus>
                            @error('url')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label text-sm-right">Your Email</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Your Email Address">
                            @error('email')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="comment" class="col-sm-2 col-form-label text-sm-right">Comment</label>
                        <div class="col-sm-8">
                            <textarea name="comment" id="comment" rows="5" class="form-control{{ $errors->has('comment') ? ' is-invalid' : '' }}" placeholder="Reason for reporting this link">{{ old('comment') }}</textarea>
                            @error('comment')
                            <div class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-8 offset-sm-2">
                            @if(env('RECAPTCHA_SITE_KEY'))
                                <button type="submit" class="btn btn-primary g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}" data-callback='onSubmit' data-action='submit'>Report</button>
                                @error('g-recaptcha-response')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
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
    @if(env('RECAPTCHA_SITE_KEY'))
        <script>
            function onSubmit(token) {
                document.getElementById("form_report_url").submit();
            }
        </script>
    @endif
@endsection
