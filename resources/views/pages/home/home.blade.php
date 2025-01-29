@extends('layouts.main')

@section('title')
    home
@endsection

@section('style')
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite('resources/css/home/swiper.css')
    @vite('resources/css/home/preview_img.css')
@endsection

@section('contents')
    @include('pages.home.swiper')
    <div class="text-2xl font-kanit">
        <section class="max-w-[1536px] m-auto py-8 p-4 overflow-hidden">
            <div class="flex flex-col sm:gap-y-16 gap-y-8">
                <div class="flex flex-col justify-center items-center sm:gap-y-6 gap-y-2" data-aos="zoom-in"
                    data-aos-duration="3000">
                    <div class="w-44">
                        <img src="/images/logo/Mask group.png" alt="" class="w-full h-auto">
                    </div>

                    <p class="font-[500] tracking-widest lg:text-4xl sm:text-3xl text-lg uppercase"  style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                        OUR ROOM
                    </p>

                    <div class="border-t border-2 border-[#CDB59D] max-w-[50%] my-2 w-full rounded-full" data-aos="zoom-in"
                        data-aos-duration="3000"></div>

                    <p class="font-light xl:text-xl sm:text-lg text-sm text-center max-w-[80%] w-full">
                        Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id feugiat eget
                        bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis vitae sem. Quam iaculis velit
                        commodo aliquam vitae dignissim sit. Sed id adipiscing.
                    </p>
                </div>

                {{-- img --}}
                <div class="grid place-items-center sm:grid-cols-4 grid-cols-2 sm:gap-3 gap-4">

                    <div class="group relative xl:w-[320px] xl:h-[450px] w-full lg:h-[350px] h-[300px] cursor-pointer overflow-hidden rounded-md shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-500"
                            src="/images/img/image 3.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45 group-hover:transition-all group-hover:duration-500">

                            <!-- Title -->
                            <p class="text-left xl:text-3xl sm:text-lg text-base w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out group-hover:top-12 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center  "
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Double Twin Room
                            </p>

                            <!-- Description -->
                            <p
                                class="absolute break-words text-white xl:text-lg sm:text-base text-sm font-extralight left-4 bottom-12 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu faucibus cras
                                sit.
                                Enim vel nisl erat eget amet risus. Eu viverra feugiat est vitae.
                            </p>
                        </div>
                    </div>

                    <div class="group relative xl:w-[320px] xl:h-[450px] w-full lg:h-[350px] h-[300px] cursor-pointer overflow-hidden rounded-md shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-500"
                            src="/images/img/image 4.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45 group-hover:transition-all group-hover:duration-500">

                            <!-- Title -->
                            <p class="text-left xl:text-3xl sm:text-lg text-base w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out group-hover:top-12 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center  "
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Delux Room
                            </p>

                            <!-- Description -->
                            <p
                                class="absolute break-words text-white xl:text-lg sm:text-base text-sm font-extralight left-4 bottom-12 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu faucibus cras
                                sit.
                                Enim vel nisl erat eget amet risus. Eu viverra feugiat est vitae.
                            </p>
                        </div>
                    </div>

                    <div class="group relative xl:w-[320px] xl:h-[450px] w-full lg:h-[350px] h-[300px] cursor-pointer overflow-hidden rounded-md shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-500"
                            src="/images/img/image 7.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45 group-hover:transition-all group-hover:duration-500">

                            <!-- Title -->
                            <p class="text-left xl:text-3xl sm:text-lg text-base w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out group-hover:top-12 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center  "
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Family Room
                            </p>

                            <!-- Description -->
                            <p
                                class="absolute break-words text-white xl:text-lg sm:text-base text-sm font-extralight left-4 bottom-12 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu faucibus cras
                                sit.
                                Enim vel nisl erat eget amet risus. Eu viverra feugiat est vitae.
                            </p>
                        </div>
                    </div>

                    <div class="group relative xl:w-[320px] xl:h-[450px] w-full lg:h-[350px] h-[300px] cursor-pointer overflow-hidden rounded-md shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-500"
                            src="/images/img/image 8.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45 group-hover:transition-all group-hover:duration-500">

                            <!-- Title -->
                            <p class="text-left xl:text-3xl sm:text-lg text-base w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out group-hover:top-12 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center  "
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Sweet Room
                            </p>

                            <!-- Description -->
                            <p
                                class="absolute break-words text-white xl:text-lg sm:text-base text-sm font-extralight left-4 bottom-12 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu faucibus cras
                                sit.
                                Enim vel nisl erat eget amet risus. Eu viverra feugiat est vitae.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative z-50  overflow-hidden">
            <div class="absolute w-full h-full">
                <img src="/images/img/image 9.png" alt="" class="w-full h-full object-cover">
            </div>

            <div class="max-w-[1536px] m-auto flex flex-col sm:gap-y-16 gap-y-8 py-8 px-4">
                <div class="flex flex-col justify-center items-center sm:gap-y-6 gap-y-2" data-aos="zoom-in"
                    data-aos-duration="2000">
                    <div class="w-44">
                        <img src="/images/logo/Mask group.png" alt="" class="w-full h-auto">
                    </div>

                    <p class="font-[300] tracking-widest sm:text-2xl text-sm text-[#CDB59D] uppercase"  style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                        OUR SPECIAL
                    </p>

                    <p class="font-[300] tracking-widest lg:text-4xl sm:text-3xl text-lg uppercase"  style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                        SERVICE
                    </p>

                    <div class="border-t border-2 border-[#CDB59D] max-w-[30%] my-2 w-[80%] rounded-full" data-aos="zoom-in"
                        data-aos-duration="3000"></div>

                </div>

                {{-- img --}}
                <div class="grid place-items-center sm:grid-cols-4 grid-cols-2 sm:gap-3 gap-4">

                    <a href="/service" class="flex flex-col justify-center items-center gap-4" data-aos="zoom-in-up"
                        data-aos-duration="3000">
                        <div class="w-[70px] sm:w-[85px] m-auto h-full">
                            <img src="/images/icon/Group 291.png" alt="" class="w-full h-full">
                        </div>
                        <p class="xl:text-2xl sm:text-base text-base font-medium uppercase">
                            RESTAURANT
                        </p>
                        <p class="line-clamp-4 text-center xl:text-xl sm:text-base text-sm font-extralight h-[90px]">
                            Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu faucibus cras sit.
                        </p>
                    </a>

                    <a href="/service" class="flex flex-col justify-center items-center gap-4" data-aos="zoom-in-up"
                        data-aos-duration="3000">
                        <div class="w-[70px] sm:w-[85px] m-auto h-full">
                            <img src="/images/icon/Group 292.png" alt="" class="w-full h-full">
                        </div>
                        <p class="xl:text-2xl sm:text-base text-base font-medium uppercase">
                            COFFE CAFE
                        </p>
                        <p class="line-clamp-4 text-center xl:text-xl sm:text-base text-sm font-extralight h-[90px]">
                            Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu faucibus cras sit.
                        </p>
                    </a>

                    <a href="/service" class="flex flex-col justify-center items-center gap-4" data-aos="zoom-in-up"
                        data-aos-duration="3000">
                        <div class="w-[70px] sm:w-[85px] m-auto h-full">
                            <img src="/images/icon/Group 294.png" alt="" class="w-full h-full">
                        </div>
                        <p class="xl:text-2xl sm:text-base text-base font-medium uppercase">
                            SWIMMING POOL
                        </p>
                        <p class="line-clamp-4 text-center xl:text-xl sm:text-base text-sm font-extralight h-[90px]">
                            Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu faucibus cras sit.
                        </p>
                    </a>

                    <a href="/service" class="flex flex-col justify-center items-center gap-4" data-aos="zoom-in-up"
                        data-aos-duration="3000">
                        <div class="w-[70px] sm:w-[85px] m-auto h-full">
                            <img src="/images/icon/Group 295.png" alt="" class="w-full h-full">
                        </div>
                        <p class="xl:text-2xl sm:text-base text-base font-medium uppercase">
                            FREE WIFI
                        </p>
                        <p class="line-clamp-4 text-center xl:text-xl sm:text-base text-sm font-extralight h-[90px]">
                            Lorem ipsum dolor sit amet
                        </p>
                    </a>

                </div>
            </div>
        </section>

        <section class="relative z-50 pb-12  overflow-hidden">
            <div class="absolute w-full h-full">
                <img src="/images/img/Group 115.png" alt="" class="w-full h-full object-cover">
            </div>


            <div class="max-w-[1536px] m-auto py-8 p-4">
                {{-- ABOUT US --}}
                <div class="flex justify-between items-center max-lg:flex-col gap-4">
                    <div class="w-full z-50 flex justify-start max-lg:order-2">
                        <div class="max-w-[650px] m-auto h-auto relative" data-aos="fade-right" data-aos-duration="3000">
                            <img src="/images/img/image 91.png" alt="" class="w-full h-full rounded-lg ">

                            <div
                                class="absolute inset-0 flex justify-center items-center hover:scale-105 transition-all ease-in-out duration-300 cursor-pointer z-50">
                                <div class="w-12 h-12">
                                    <img src="/images/icon/Group 104.png" alt="" class="w-full h-full shadow-md">
                                </div>
                            </div>
                            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-25"></div>
                        </div>

                    </div>

                    <div class="flex flex-col justify-center items-center sm:gap-y-6 gap-y-2 w-full max-lg:order-1"
                        data-aos="fade-left" data-aos-duration="3000">
                        <div class="max-w-10">
                            <img src="/images/icon/45.png" alt="" class="w-full h-auto">
                        </div>

                        <p class="font-[300] tracking-widest sm:text-2xl text-sm text-[#CDB59D]"  style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                            OUR STORY
                        </p>

                        <p class="font-[300] tracking-widest lg:text-4xl sm:text-3xl text-lg"  style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                            ABOUT US
                        </p>

                        <div class="border-t border-2 border-[#CDB59D] max-w-[80%] my-2 w-full  rounded-full"
                            data-aos="zoom-in" data-aos-duration="3000"></div>

                        <p
                            class="font-light xl:text-xl sm:text-lg text-sm text-center max-w-[90%] w-full line-clamp-4 max-lg:line-clamp-3">
                            Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id feugiat
                            eget
                            bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis vitae sem. Quam
                            iaculis
                            velit
                            commodo aliquam vitae dignissim sit. Sed id adipiscing.
                        </p>

                        <a href="/about-us" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                            class="my-2 uppercase bg-transparent border-2 border-[#CDB59D] p-2 w-40 font-afacadFlux items-center flex justify-center sm:text-xl text-sm text-center hover:text-white hover:bg-[#CDB59D] transition-all ease-in-out duration-500">
                            Read more
                        </a>
                    </div>
                </div>

                {{-- GALLERY --}}
                <div class="sm:mt-16 mt-8">

                    <div class="flex flex-col justify-center items-center sm:gap-y-6 gap-y-2 w-full" data-aos="zoom-in"
                        data-aos-duration="3000">
                        <div class="max-w-44">
                            <img src="/images/logo/Mask group.png" alt="" class="w-full h-auto">
                        </div>

                        <p class="font-[300] tracking-widest sm:text-2xl text-sm text-[#CDB59D]" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                            GALLERY
                        </p>

                        <p class="font-[500] tracking-widest lg:text-4xl sm:text-3xl text-lg uppercase"  style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                            Some of our photo galleries
                        </p>

                        <div class="border-t border-2 border-[#CDB59D] max-w-[50%] my-2 w-full  rounded-full"
                            data-aos="zoom-in" data-aos-duration="3000">
                        </div>
                    </div>

                    {{-- img --}}
                    <div class="max-w-[1536px] m-auto grid sm:grid-cols-4 grid-cols-2 sm:gap-4 gap-2 my-6 image-gallery">

                        @for ($i = 0; $i < 2; $i++)
                            <div class="max-w-full z-50 relative cursor-pointer image-container" data-aos="zoom-in"
                                data-aos-duration="3000">
                                <img src="/images/img/786867867.jpg" alt="Image"
                                    class="w-full h-auto rounded-md hover:opacity-70 gallery-image">
                                <div
                                    class="absolute inset-0 rounded-md bg-gradient-to-b from-[#224e4e] to-[#012020] opacity-0 hover:opacity-70 flex justify-center items-center transition-opacity duration-300">
                                    <img src="/images/icon/eye.png" alt="View Icon"
                                        class="w-auto h-auto max-w-12 max-h-12 opacity-100 view-icon">
                                    VIEW
                                </div>
                            </div>

                            <div class="max-w-full z-50 relative cursor-pointer image-container" data-aos="zoom-in"
                                data-aos-duration="3000">
                                <img src="/images/img/123122.jpg" alt="Image"
                                    class="w-full h-auto rounded-md hover:opacity-70 gallery-image">
                                <div
                                    class="absolute inset-0 rounded-md bg-gradient-to-b from-[#224e4e] to-[#012020] opacity-0 hover:opacity-70 flex justify-center items-center transition-opacity duration-300">
                                    <img src="/images/icon/eye.png" alt="View Icon"
                                        class="w-auto h-auto max-w-12 max-h-12 opacity-100 view-icon">
                                    VIEW
                                </div>
                            </div>

                            <div class="max-w-full z-50 relative cursor-pointer image-container" data-aos="zoom-in"
                                data-aos-duration="3000">
                                <img src="/images/img/546675.jpg" alt="Image"
                                    class="w-full h-auto rounded-md hover:opacity-70 gallery-image">
                                <div
                                    class="absolute inset-0 rounded-md bg-gradient-to-b from-[#224e4e] to-[#012020] opacity-0 hover:opacity-70 flex justify-center items-center transition-opacity duration-300">
                                    <img src="/images/icon/eye.png" alt="View Icon"
                                        class="w-auto h-auto max-w-12 max-h-12 opacity-100 view-icon">
                                    VIEW
                                </div>
                            </div>

                            <div class="max-w-full z-50 relative cursor-pointer image-container" data-aos="zoom-in"
                                data-aos-duration="3000">
                                <img src="/images/img/12124534.jpg" alt="Image"
                                    class="w-full h-auto rounded-md hover:opacity-70 gallery-image">
                                <div
                                    class="absolute inset-0 rounded-md bg-gradient-to-b from-[#224e4e] to-[#012020] opacity-0 hover:opacity-70 flex justify-center items-center transition-opacity duration-300">
                                    <img src="/images/icon/eye.png" alt="View Icon"
                                        class="w-auto h-auto max-w-12 max-h-12 opacity-100 view-icon">
                                    VIEW
                                </div>
                            </div>
                        @endfor
                    </div>

                    {{-- btn --}}
                    <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                        data-aos-duration="2000">
                        <a href="/gallery" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                            class="uppercase relative my-2 bg-transparent border-2 border-[#CDB59D] p-2 w-40 m-auto font-afacadFlux items-center flex justify-center sm:text-xl text-sm text-center hover:text-white hover:bg-[#CDB59D] transition-all ease-in-out duration-500">
                            View all
                        </a>
                    </div>

                </div>
            </div>

            <section class="relative ">
                <div class="absolute w-full h-full">
                    <img src="/images/img/Group 105.png" alt="" class="w-full h-full object-cover">
                </div>

                <div class="max-w-[1536px] m-auto py-8 px-4 flex flex-col justify-center relative">
                    <div class="border-t border-4 border-[#CDB59D] my-2 w-full rounded-full z-50" data-aos="zoom-in"
                        data-aos-duration="3000">
                    </div>

                    <div class="flex justify-between pt-6 max-md:flex-col">
                        <div class="w-full" data-aos="fade-right" data-aos-duration="3000">
                            <p class="text-[#CDB59D] font-[400] tracking-widest sm:text-3xl text-2xl text-left max-w-1/2"  style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Frequently asked
                                questions
                            </p>
                        </div>

                        <div class="w-full max-md:pt-4" data-aos="fade-left" data-aos-duration="3000">

                            <div class="flex flex-col items-center py-4">
                                <div class="flex justify-between w-full items-center open_q_detail cursor-pointer">
                                    <p class="text-[#CDB59D] font-[400] tracking-widest sm:text-2xl text-lg text-left">
                                        What time is check-in?
                                    </p>

                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Vector.png" alt="" class="w-full arrow-icon">
                                    </div>
                                </div>

                                <div
                                    class="transition-all duration-500 ease-in-out max-h-0 opacity-0 overflow-hidden q_detail">
                                    <p class="font-[300] sm:text-lg text-sm text-left w-full pt-4">
                                        Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id
                                        feugiat eget bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis
                                        vitae sem.
                                        Quam iaculis velit commodo aliquam vitae dignissim sit. Sed id adipiscing.
                                    </p>
                                </div>

                            </div>
                            <div class="border-t border-1 border-[#CDB59D] w-full my-2 rounded-full z-50">
                            </div>

                            <div class="flex flex-col items-center py-4">
                                <div class="flex justify-between w-full items-center open_q_detail cursor-pointer">
                                    <p class="text-[#CDB59D] font-[400] tracking-widest sm:text-2xl text-lg text-left">
                                        What time is check-out?
                                    </p>

                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Vector.png" alt="" class="w-full arrow-icon">
                                    </div>
                                </div>

                                <div
                                    class="transition-all duration-500 ease-in-out max-h-0 opacity-0 overflow-hidden q_detail">
                                    <p class="font-[300] sm:text-lg text-sm text-left w-full pt-4">
                                        Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id
                                        feugiat eget bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis
                                        vitae sem.
                                        Quam iaculis velit commodo aliquam vitae dignissim sit. Sed id adipiscing.
                                    </p>
                                </div>

                            </div>
                            <div class="border-t border-1 border-[#CDB59D] w-full my-2 rounded-full z-50">
                            </div>

                            <div class="flex flex-col items-center py-4">
                                <div class="flex justify-between w-full items-center open_q_detail cursor-pointer">
                                    <p class="text-[#CDB59D] font-[400] tracking-widest sm:text-2xl text-lg text-left">
                                        Can i leave my bags?
                                    </p>

                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Vector.png" alt="" class="w-full arrow-icon">
                                    </div>
                                </div>

                                <div
                                    class="transition-all duration-500 ease-in-out max-h-0 opacity-0 overflow-hidden q_detail">
                                    <p class="font-[300] sm:text-lg text-sm text-left w-full pt-4">
                                        Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id
                                        feugiat eget bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis
                                        vitae sem.
                                        Quam iaculis velit commodo aliquam vitae dignissim sit. Sed id adipiscing.
                                    </p>
                                </div>

                            </div>
                            <div class="border-t border-1 border-[#CDB59D] w-full my-2 rounded-full z-50">
                            </div>

                            <div class="flex flex-col items-center py-4">
                                <div class="flex justify-between w-full items-center open_q_detail cursor-pointer">
                                    <p class="text-[#CDB59D] font-[400] tracking-widest sm:text-2xl text-lg text-left">
                                        Can i bring the kids?
                                    </p>

                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Vector.png" alt="" class="w-full arrow-icon">
                                    </div>
                                </div>

                                <div
                                    class="transition-all duration-500 ease-in-out max-h-0 opacity-0 overflow-hidden q_detail">
                                    <p class="font-[300] sm:text-lg text-sm text-left w-full pt-4">
                                        Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id
                                        feugiat eget bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis
                                        vitae sem.
                                        Quam iaculis velit commodo aliquam vitae dignissim sit. Sed id adipiscing.
                                    </p>
                                </div>

                            </div>
                            <div class="border-t border-1 border-[#CDB59D] w-full my-2 rounded-full z-50">
                            </div>

                            <div class="flex flex-col items-center py-4">
                                <div class="flex justify-between w-full items-center open_q_detail cursor-pointer">
                                    <p class="text-[#CDB59D] font-[400] tracking-widest sm:text-2xl text-lg text-left">
                                        Can i birng my pets?
                                    </p>

                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Vector.png" alt="" class="w-full arrow-icon">
                                    </div>
                                </div>

                                <div
                                    class="transition-all duration-500 ease-in-out max-h-0 opacity-0 overflow-hidden q_detail">
                                    <p class="font-[300] sm:text-lg text-sm text-left w-full pt-4">
                                        Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id
                                        feugiat eget bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis
                                        vitae sem.
                                        Quam iaculis velit commodo aliquam vitae dignissim sit. Sed id adipiscing.
                                    </p>
                                </div>

                            </div>
                            <div class="border-t border-1 border-[#CDB59D] w-full my-2 rounded-full z-50">
                            </div>

                            <div class="flex flex-col items-center py-4">
                                <div class="flex justify-between w-full items-center open_q_detail cursor-pointer">
                                    <p class="text-[#CDB59D] font-[400] tracking-widest sm:text-2xl text-lg text-left">
                                        Do you have parking?
                                    </p>

                                    <div class="w-[30px] h-auto">
                                        <img src="/images/icon/Vector.png" alt="" class="w-full arrow-icon">
                                    </div>
                                </div>

                                <div
                                    class="transition-all duration-500 ease-in-out max-h-0 opacity-0 overflow-hidden q_detail ">
                                    <p class="font-[300] sm:text-lg text-sm text-left w-full pt-4">
                                        Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id
                                        feugiat eget bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis
                                        vitae sem.
                                        Quam iaculis velit commodo aliquam vitae dignissim sit. Sed id adipiscing.
                                    </p>
                                </div>

                            </div>
                            <div class="border-t border-1 border-[#CDB59D] w-full my-2 rounded-full z-50">
                            </div>

                        </div>
                    </div>

                </div>
            </section>

        </section>
    </div>

    <!-- Popup GALLERY -->
    <div id="image-popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-[100] ">
        <div
            class="relative bg-transparent xl:max-w-[800px] sm:max-w-[700px] ss:max-w-[500px] max-w-[380px] max-h-[80%] px-4">
            <div class="swiper mySwiper_img text-black ">
                <div class="swiper-wrapper  ">
                    <!-- ใส่รูปในแต่ละ slide -->
                    @for ($i = 0; $i < 2; $i++)
                        <div class="swiper-slide ">
                            <img src="/images/img/786867867.jpg" alt="Image" class="w-full h-full ">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/img/123122.jpg" alt="Image" class="w-full h-auto">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/img/546675.jpg" alt="Image" class="w-full h-auto">
                        </div>
                        <div class="swiper-slide">
                            <img src="/images/img/12124534.jpg" alt="Image" class="w-full h-auto">
                        </div>
                    @endfor
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <div class="flex justify-center items-center cursor-pointer group mt-2" id="popup-close">
                <p
                    class="border-2 flex justify-center items-center sm:w-10 sm:h-10 w-8 h-8 bg-white rounded-full text-black group-hover:text-red-500 group-hover:border-red-500 transition-all duration-300 ease-in-out">
                    X</p>
            </div>
        </div>
    </div>
@endsection

@section('script')
    @vite('resources/js/home/swiper.js')
    @vite('resources/js/home/dropdown.js')
@endsection
