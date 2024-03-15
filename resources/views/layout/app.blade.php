<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- assets compiler -->
    @vite('resources/js/app.js')
</head>
<body>
    <!-- include header -->
    @include('partials')

    <!-- main content -->
    @yield('main-content')

    <!-- include footer -->
    @include('partials')
</body>
</html>