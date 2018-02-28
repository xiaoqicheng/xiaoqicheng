@extends('layouts.base')

@section('body')

    <div class="flex-center position-ref full-height">

        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">登陆</a>
                        <a href="{{ route('register') }}">注册</a>
                        @endauth
            </div>
        @endif
            @yield('content')
    </div>

    {{--<div class="container">

        <div class="row">
            <div class="col-xs-12">
                @include('flash::message')
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                @yield('content')
            </div>
        </div>
    </div>--}}

@stop