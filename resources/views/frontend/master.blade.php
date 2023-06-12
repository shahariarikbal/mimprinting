<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mim Enterprise</title>
    <!-- Pavicon ICon -->
    @include('frontend.includes.style')
</head>
<body>
<!-- Header -->
@include('frontend.includes.header')
<!-- /Header -->

<main>
    <!-- Home Slider -->
    @yield('content')
    <!-- /Testimonial Reviews -->
</main>

<!-- footer -->
@include('frontend.includes.footer')
<!-- /footer -->



<!-- Jquery CDN -->
@include('frontend.includes.script')
</body>
</html>
