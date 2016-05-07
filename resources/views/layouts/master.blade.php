<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    @yield('custom-head')
</head>
<body>

@include('includes.header')

@yield('content')

@include('includes.footer')

@include('includes.scripts')
@yield('custom-scripts')
</body>
</html>