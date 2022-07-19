<!doctype html>
<html lang="en">

@include('front.layout.style')

@include('front.layout.header')

<body>
@yield('content')

@include('front.layout.script')

@include('front.layout.footer')
</body>

</html>
