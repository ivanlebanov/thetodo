<!DOCTYPE html>
<html>
    <head>
        <title>todo</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        {!! HTML::style('css/style.css') !!} 
    </head>
    <body>
        @yield('content')
        @yield('footer')
    </body>
</html>
