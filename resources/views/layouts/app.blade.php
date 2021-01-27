<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $page }} - {{ config('app.name') }}</title>
    @include('includes.css')
</head>
<body id="kt_body" style="background-image: url({{asset('assets/media/bg/bg-10.jpg')}})"
      class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
@include('includes.mobile-header')
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            @include('includes.header')
            @yield('content')
            @include('includes.footer')
        </div>
    </div>
</div>
@include('includes.panel')
@include('includes.scroll-top')
@include('includes.sticky-toolbar')
@include('includes.demo-panel')
@include('includes.js')
</body>
</html>
