<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')

    <title>@yield('title')</title>
    @yield('style')

</head>

<body class="bg-[#0F1D20] h-screen flex flex-col py-6">


    @include('layouts.navbar')

    <div class="text-white">
        <section class=" w-full h-auto relative z-50">
            <div class="absolute inset-0 z-50 flex flex-col justify-center items-center gap-y-4 max-sm:gap-y-2 px-4">
                <p class="text-white text-6xl max-xl:text-3xl  font-bold text-center" data-aos="zoom-in"
                    data-aos-duration="3000">
                    @yield('textbanner')
                </p>
            </div>

            @yield('banner')
        </section>
        <div class="">
            @yield('contents')
        </div>
    </div>



    @yield('script')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>
