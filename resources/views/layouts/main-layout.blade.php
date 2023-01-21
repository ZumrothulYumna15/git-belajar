<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.css')

    @stack('css')
</head>
<body>

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
    
</body>
</html>