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
                <!--begin::Login forgot password form-->
                <div class="login-signin">
                    <div class="mb-20">
                        <h3 class="opacity-40 font-weight-normal">Forgotten Password ?</h3>
                        <p class="opacity-40">Enter your email to reset your password</p>
                    </div>
                    <form class="form" method="post" action="{{route('password_recovery')}}">
                        @csrf
                        <div class="form-group mb-10{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8"
                                   type="text" placeholder="Email" name="email"/>
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">Request
                            </button>
                            <a href="{{route('login')}}"
                                    class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Cancel
                            </a>
                        </div>
                    </form>
                </div>
                <!--end::Login forgot password form-->
            </div>
        </div>
    </div>
    <!--end::Login-->
@endsection
