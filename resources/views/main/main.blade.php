<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Online Recruitment')</title>
    <link rel="stylesheet" href="{{ asset('css/main/main.css') }}">
    @yield('css')

    @if (!Auth::check())
        @include('layout.header-guest')
    @elseif(Auth::user()->role == 0)
        @include('layout.header-admin')
    @elseif(Auth::user()->role == 1)
        @include('layout.header-applicant')
    @endif

</head>

<body>
    @yield('content')
    @include('layout.footer')
</body>

</html>
