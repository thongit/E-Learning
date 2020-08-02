<title>@yield('title')</title>
@extends('layout')
@section('content')
@include('header')
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Edocom - Education & LMS Template">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .code {
            border-right: 2px solid;
            font-size: 26px;
            padding: 0 15px 0 15px;
            text-align: center;
        }

        .message {
            font-size: 18px;
            text-align: center;
        }

        .bg-transparent {
            background-color: transparent;
        }

        .text-grey-darkest {
            color: #3d4852;
        }

        .font-bold {
            font-weight: 700;
        }

        .uppercase {
            text-transform: uppercase;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .border-2 {
            border-width: 2px;
        }

        .border-grey-light {
            border-color: #dae1e7;
        }

        .hover\:border-grey:hover {
            border-color: #b8c2cc;
        }

        .rounded-lg {
            border-radius: .5rem;
        }
    </style>
<!-- ========== Page Title ========== -->
    <div class="full-height" style="padding: 20%;">
        <div class="flex-center">
            <div class="code">
                @yield('code')
            </div>

            <div class="message" style="padding: 10px;">
                @yield('message')
            </div>
        </div>
        <div class="flex-center">
            <a href="{{ app('router')->has('home') ? route('home') : url('/') }}">
                <button class="bg-transparent text-grey-darkest font-bold uppercase tracking-wide py-3 px-6 border-2 border-grey-light hover:border-grey rounded-lg">
                    {{ __('Về trang chủ') }}
                </button>
            </a>
        </div>
    </div>
    @endsection