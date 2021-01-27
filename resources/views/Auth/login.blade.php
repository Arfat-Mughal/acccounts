@extends('layouts.login', ['pageSlug' => 'login', 'page' => 'login', 'section' => 'login'])

@section('content')
<!--begin::Login-->
<div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
    <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url({{asset('assets/media/bg/bg-2.jpg')}});">
        <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
            <!--begin::Login Header-->
            <div class="d-flex flex-center mb-15">
                <a href="#">
                    <img src="{{asset('assets/media/logos/logo-letter-13.png')}}" class="max-h-75px" alt="" />
                </a>
            </div>
            <!--end::Login Header-->
            <!--begin::Login Sign in form-->
            <div class="login-signin">
                <div class="mb-20">
                    <h3 class="opacity-40 font-weight-normal">Sign In To Admin</h3>
                    <p class="opacity-40">Enter your details to login to your account:</p>
                    @if(Session::has('message'))
                        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                </div>
                <form method="post" action="{{ route('login_process') }}" class="form" id="kt_login_signin_form">
                    @csrf
                    <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text" placeholder="Email" name="email"/>
                        @include('alerts.feedback', ['field' => 'email'])
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('password') ? ' has-danger' : '' }} h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password" placeholder="Password" name="password" />
                        @include('alerts.feedback', ['field' => 'password'])
                    </div>
                    <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8 opacity-60">
                        <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                            <input type="checkbox" name="remember" />Remember me
                            <span></span></label>
                        <a href="{{route('password_forget')}}" id="kt_login_forgot" class="text-white font-weight-bold">Forget Password ?</a>
                    </div>
                    <div class="form-group text-center mt-10">
                        <button type="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Sign In</button>
                    </div>
                </form>
                <div class="mt-10">
                    <span class="opacity-40 mr-4">Don't have an account yet?</span>
                    <a href="{{route('register')}}" id="kt_login_signup" class="text-white opacity-30 font-weight-normal">Sign Up</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Login-->
@endsection
