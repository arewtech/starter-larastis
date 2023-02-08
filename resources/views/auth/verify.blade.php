@extends('template.guest')
@section('title', 'Verify Email')
@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img src="{{ asset('template/assets/img/stisla-fill.svg') }}" alt="logo" width="100"
                            class="shadow-light rounded-circle">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header text-center">
                            <h4>Please Check Your Email For Verification</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('verification.send') }}" class="needs-validation"
                                novalidate="">
                                @csrf
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Send Email Verification
                                    </button>
                                    @if (session('status') == 'verification-link-sent')
                                        <div class="my-2 font-medium text-sm text-center text-success">
                                            A new email verification link has been emailed to you!
                                        </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mt-5 text-muted text-center">
                        Don't have an account? <a href="{{ route('register') }}">Create One</a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Stisla 2018
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
