<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Remont</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" />
</head>
<body style="background-color: white">

<div id="app" class="container py-5">
    @yield('content')
</div>

<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</body>
</html>
