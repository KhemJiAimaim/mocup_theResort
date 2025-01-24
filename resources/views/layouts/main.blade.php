<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5/dist/fancybox.css" />

    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    @yield('style')

</head>

<body class="bg-[#0F1D20] h-screen flex flex-col justify-between pt-6">


    @include('layouts.navbar')

    <div class="text-white">
        
        <div class="">
            @yield('contents')
        </div>
    </div>

    @include('layouts.footer')


    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5/dist/fancybox.umd.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>
