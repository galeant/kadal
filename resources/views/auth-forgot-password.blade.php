@extends('layouts.auth-app')

@section('title', 'Login')

@section('head-card')
    <h1 class="auth-title">Forgot Password</h1>
    <p class="auth-subtitle mb-5">
        Input your email and we will send you reset password link.
    </p>
@endsection

@section('form')
    <form action="index.html">
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" class="form-control form-control-xl" placeholder="Email" />
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
        </div>
        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">
            Send
        </button>
    </form>
@endsection

@section('footer-card')
    <div class="text-center mt-5 text-lg fs-4">
        <p class="text-gray-600">
            Remember your account?
            <a href="auth-login.html" class="font-bold">Log in</a>.
        </p>
    </div>
@endsection
