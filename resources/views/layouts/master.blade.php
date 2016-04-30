<!DOCTYPE html>
<html lang="en">
<head>
    @yield('custom-head')
    @include('includes.head')
</head>
<body>

@include('includes.header')

@yield('content')

@include('includes.footer')

@yield('custom-scripts')
@include('includes.scripts')
</body>
</html>