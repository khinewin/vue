<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App - @yield('title')</title>
    <link rel="stylesheet" href="{{ url('b/css/bootstrap.min.css') }}">
</head>
<body>
    @include("partials.navbar")

    @yield('content')
    
    <script src="{{ url('b/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>