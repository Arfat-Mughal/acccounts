@extends('layouts.login', ['pageSlug' => 'register', 'page' => 'register', 'section' => 'auth'])

@section('content')
    <!--begin::Login-->
    <div class="login login-5 login-signin-on d-flex flex-row-fluid" id="kt_login">
        <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid"
             style="background-image: url({{asset('assets/media/bg/bg-2.jpg')}});">
            <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                <!--begin::Login Header-->
                <div class="d-flex flex-center mb-15">
                    <a href="#">
                        <img src="{{asset('assets/media/logos/logo-letter-13.png')}}" class="max-h-75px" alt=""/>
                    </a>
                </div>
                <!--end::Login Header-->
                <!--begin::Login Sign up form-->
                <div class="login-signin">
                    <div class="mb-20">
                        <h3 class="opacity-40 font-weight-normal">Sign Up</h3>
                        <p class="opacity-40">Enter your details to create your account</p>
                    </div>
                    <form class="form text-center" method="post" action="{{route('signup_process')}}">
                        @csrf
                        <div class="form-group">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"
                                   type="text" placeholder="Fullname" name="fullname"/>
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <div class="form-group">
                            <input
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"
                                type="email" placeholder="Email" name="email" autocomplete="on"/>
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <input
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"
                                type="password" placeholder="Password" name="password"/>
                            @include('alerts.feedback', ['field' => 'password'])
                        </div>
                        <div class="form-group">
                            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"
                                   type="password" placeholder="Confirm Password" name="password_confirmed"/>
                            @include('alerts.feedback', ['field' => 'password_confirmed'])
                        </div>
                        <div class="form-group text-left px-8">
                            <label class="checkbox checkbox-outline checkbox-white opacity-60 text-white m-0">
                                <input type="checkbox" name="agree"/>I Agree the
                                <a href="#" class="text-white font-weight-bold">terms and conditions</a>.
                                <span></span></label>
                            <div class="form-text text-muted text-center"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">Sign Up
                            </button>
                            <a href="{{route('login')}}"
                               class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Cancel</a>
                        </div>
                    </form>
                </div>
                <!--end::Login Sign up form-->
            </div>
        </div>
    </div>
    <!--end::Login-->
@endsection
