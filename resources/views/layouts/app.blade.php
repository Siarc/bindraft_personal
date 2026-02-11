<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="lenis" style="scroll-behavior: smooth;">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>@yield('title', 'Accelerating Your Digital Transformation')</title>
    <meta name="description" content="@yield('meta_description', 'BindRaft is a global leader in IT services, customer experience design, business consulting, and innovative technology solutions. We help businesses make an impact.')">
    <meta name="author" content="BindRaft">
    <meta name="theme-color" content="#000000">

    <!-- OG Tags -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="bindraft">
    <meta property="og:title" content="Accelerating Your Digital Transformation">
    <meta property="og:description" content="BindRaft is a global leader in IT services, customer experience design, business consulting, and innovative technology solutions. We help businesses make an impact.">

    <!-- Lenis CSS -->
    <link rel="stylesheet" href="https://unpkg.com/lenis@1.3.11/dist/lenis.css">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @yield('head')
</head>

<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">

    <div class="clearfix"></div>
    <div class="main-wrapper home">
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
    </div>

    <!-- Core JS libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/lenis@1.3.11/dist/lenis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/split-type"></script>

    <script>
        // Initialize Lenis
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
            orientation: 'vertical',
            gestureOrientation: 'vertical',
            smoothWheel: true,
            wheelMultiplier: 1,
            smoothTouch: false,
            touchMultiplier: 2,
            infinite: false,
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }
        requestAnimationFrame(raf);

        // Initialize AOS
        AOS.init({
            easing: 'ease-in-out',
            duration: 1000,
            delay: 0,
            once: true,
        });
    </script>

    @yield('scripts')
</body>
</html>
