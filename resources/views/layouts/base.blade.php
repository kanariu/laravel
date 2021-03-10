<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('images/logo.png')}}" type="image/x-icon">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <title>@lang('words.page-title')</title>
    </head>
    <body class="p-0">
        <script src="{{ asset('js/app.js') }}"></script>
        @yield('body-content')
        @include('sweetalert::alert')
    </body>
</html>