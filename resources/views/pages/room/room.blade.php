@extends('layouts.main')

@section('title')
    room
@endsection

@section('style')
    {{-- @vite('resources/css/home/preview_img.css') --}}
@endsection


@section('contents')
    <section class=" w-full h-auto relative z-50">
        <div
            class="absolute inset-0 z-50  flex flex-col justify-center items-center gap-y-4  max-sm:gap-y-1 max-w-[1536px] m-auto">
            <p class="text-white text-6xl max-xl:text-3xl  font-bold text-center" data-aos="zoom-in" data-aos-duration="3000">
            <div class="flex flex-col sm:gap-y-8">
                <p class="font-kanit xl:text-8xl ss:text-6xl text-4xl uppercase" data-aos="zoom-in" data-aos-duration="3000">
                    room
                </p>
            </div>
            </p>
        </div>

        <div class="relative w-full xl:h-[600px] ss:h-[350px] h-[250px] ">
            <img src="/images/banner/c39.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-25"></div>
        </div>
    </section>

    <section class="relative z-50 pb-12">
        <div class="absolute w-full h-full">
            <img src="/images/img/Group 115.png" alt="" class="w-full h-full object-cover">
        </div>


        <div class="max-w-[1536px] m-auto py-8 p-4">
            {{-- ABOUT US --}}
            <div class="flex flex-col sm:gap-y-16 gap-y-8">
                <div class="flex flex-col justify-center items-center sm:gap-y-6 gap-y-2" data-aos="zoom-in"
                    data-aos-duration="3000">
                    <div class="w-44">
                        <img src="/images/logo/Mask group.png" alt="" class="w-full h-auto">
                    </div>

                    <p class="font-[500] tracking-widest lg:text-3xl sm:text-2xl text-lg uppercase">
                        OUR ROOM
                    </p>

                    <div class="border-t border-2 border-[#CDB59D] max-w-[50%] my-2 w-full rounded-full" data-aos="zoom-in"
                        data-aos-duration="3000"></div>

                    <p class="font-light xl:text-2xl sm:text-lg text-sm text-center max-w-[80%] w-full">
                        Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id feugiat eget
                        bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis vitae sem. Quam iaculis velit
                        commodo aliquam vitae dignissim sit. Sed id adipiscing.
                    </p>
                </div>

                {{-- img --}}
                <div
                    class="max-w-[1320px] mx-auto w-full grid ss:grid-cols-2 grid-cols-1 place-items-center sm:gap-6 ss:gap-6 gap-4">
                    <div class="group relative  w-full xl:h-[400px] lg:h-[350px] h-[250px] cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-500"
                            src="/images/img/image 3.png" alt="" />

                        <div
                            class="absolute w-full inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-gradient-to-t group-hover:from-black/80 group-hover:transition-all group-hover:duration-500">

                            <!-- Title -->
                            <p class="text-left xl:text-3xl sm:text-lg text-base w-full absolute top-1/2  left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out sm:group-hover:top-6 ss:group-hover:top-10 group-hover:top-4 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center  "
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Double Twin Room
                            </p>

                            <!-- Description -->
                            <div class="m-auto w-full break-words flex flex-col justify-center items-center lg:gap-4 gap-2 px-4 xl:pt-28 sm:pt-10 ss:pt-20 pt-10 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                <div class="w-full grid lg:grid-cols-4 grid-cols-4 md:border-b-2 border-b-1 p-4 border-white">
                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="3000">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]">1-2</p>
                                        <div class="max-w-[30px] h-auto">
                                            <img src="/images/icon/ion_person-sharp.png" alt=""
                                                class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="3000">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]">Free wifi</p>
                                        <div class="max-w-[30px] h-auto">
                                            <img src="/images/icon/material-symbols_wifi-sharp.png" alt=""
                                                class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="3000">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400] text-center">Bed Options</p>
                                        <div class="max-w-[60px] h-auto">
                                            <img src="/images/icon/Group 151.png" alt="" class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 max-ss:p-1" data-aos="zoom-in"
                                        data-aos-duration="3000">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]">Size</p>
                                        <p class="ss:text-lg text-sm font-[400]">36 sq.m.</p>
                                    </div>
                                </div>

                                <div class="flex justify-center items-center xl:gap-4 gap-2">
                                    <div class="max-w-[40px] h-auto">
                                        <img src="/images/icon/Group 139.png" alt="" class="w-full h-full">
                                    </div>
                                    <p class="xl:text-xl sm:text-base text-sm font-[500]">1,200 / 1 Nigth</p>
                                </div>

                                <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="2000">
                                    <a href=""
                                        class="relative bg-transparent border-2 border-[#CDB59D] lg:p-2 p-1 w-40 m-auto font-afacadFlux items-center flex justify-center ss:text-xl text-sm text-center hover:text-white hover:bg-[#CDB59D] transition-all ease-in-out duration-500">
                                        Detail
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="group relative w-full xl:h-[400px] lg:h-[350px] h-[250px] cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-500"
                            src="/images/img/image 4.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-gradient-to-t group-hover:from-black/60 group-hover:transition-all group-hover:duration-500">

                            <!-- Title -->
                            <p class="text-left xl:text-3xl sm:text-lg text-base w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out group-hover:top-12 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center  "
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Delux Room
                            </p>

                            <!-- Description -->
                            <p
                                class="absolute break-words text-white xl:text-2xl sm:text-base text-sm font-extralight left-4 bottom-12 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu faucibus cras
                                sit.
                                Enim vel nisl erat eget amet risus. Eu viverra feugiat est vitae.
                            </p>
                        </div>
                    </div>

                    <div class="group relative w-full xl:h-[400px] lg:h-[350px] h-[250px] cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-500"
                            src="/images/img/image 7.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-gradient-to-t group-hover:from-black/60 group-hover:transition-all group-hover:duration-500">

                            <!-- Title -->
                            <p class="text-left xl:text-3xl sm:text-lg text-base w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out group-hover:top-12 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center  "
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Family Room
                            </p>

                            <!-- Description -->
                            <p
                                class="absolute break-words text-white xl:text-2xl sm:text-base text-sm font-extralight left-4 bottom-12 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu faucibus cras
                                sit.
                                Enim vel nisl erat eget amet risus. Eu viverra feugiat est vitae.
                            </p>
                        </div>
                    </div>

                    <div class="group relative w-full xl:h-[400px] lg:h-[350px] h-[250px] cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-500"
                            src="/images/img/image 8.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-gradient-to-t group-hover:from-black/60 group-hover:transition-all group-hover:duration-500">

                            <!-- Title -->
                            <p class="text-left xl:text-3xl sm:text-lg text-base w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out group-hover:top-12 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center  "
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Sweet Room
                            </p>

                            <!-- Description -->
                            <p
                                class="absolute break-words text-white xl:text-2xl sm:text-base text-sm font-extralight left-4 bottom-12 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu faucibus cras
                                sit.
                                Enim vel nisl erat eget amet risus. Eu viverra feugiat est vitae.
                            </p>
                        </div>
                    </div>
                </div>
            </div>



    </section>
@endsection

@section('script')
    {{-- @vite('resources/js/home/swiper.js') --}}
@endsection
