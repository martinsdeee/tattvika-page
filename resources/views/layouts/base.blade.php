<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', Config::get('template.product'))</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="/css/app.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

    @yield('base')
    
    @include('partials.scripts')
</body>

</html>