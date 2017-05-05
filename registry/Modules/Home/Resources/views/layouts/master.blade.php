<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}"/>
        <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
        @yield('stylesheet')
    </head>
    <body>
    @yield('content')
    </body>

    @yield('scripts')
</html>
