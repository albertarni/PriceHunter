<!DOCTYPE html>
<html lang="en">
<head>
    @yield('custom-head')
    @include('includes.head')
</head>
<body>

@include('includes.header')
@include('includes.slider')

@yield('content')

@include('includes.footer')

@yield('custom-scripts')
@include('includes.scripts')
</body>
</html>