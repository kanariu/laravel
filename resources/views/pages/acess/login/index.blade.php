@extends('layouts.base')

@section('body-content')
    <div class="container-fluid vh-100 p-0">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
            <a class="navbar-brand text-white" href="{{ route('index') }}"><i class="fas fa-chevron-left p-4"></i></a>
        </nav>
        <div class="container">
            <form class="form-login text-center" action="{{ route('auth') }}" method="GET">
                <img class="img-fluid mb-4" src="{{ asset('images/logo.png') }}" alt="" width="300" height="300">
                <label for="i_username" class="sr-only">@lang('words.username')</label>
                <input type="text" id="i_username" name="i_username" class="form-control" placeholder="@lang('words.username')" required="" autofocus="">
                <label for="i_password" class="sr-only">@lang('words.password')</label>
                <input type="password" id="i_password" name="i_password" class="form-control" placeholder="@lang('words.password')" required="">
                <button class="btn btn-lg btn-primary btn-block" type="submit">@lang('words.signin')</button>
                <p class="mt-5 mb-3">© 2019-2020</p>
            </form>
        </div>
    </div>
@endsection