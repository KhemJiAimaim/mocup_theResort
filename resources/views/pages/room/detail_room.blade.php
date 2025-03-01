@extends('layouts.main')

@section('title')
    room
@endsection

@section('style')
    @vite('resources/css/room/room.css')
@endsection


@section('contents')
    <section class=" w-full h-auto relative z-50">
        <div class="relative w-full xl:h-[400px] ss:h-[300px] h-[200px] ">
            <img src="/images/banner/Mask group.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-25"></div>
        </div>
    </section>

    <section class="relative z-50 md:pb-20 pb-10 overflow-hidden animate__animated animate__fadeInUp">
        <div class="absolute w-full h-full">
            <img src="/images/img/Group 115.png" alt="" class="w-full h-full object-cover ">
        </div>

        <div class="max-w-[1320px] m-auto pt-12 pb-8 p-4 relative z-50 flex flex-col gap-y-8">
            <div class="flex sm:flex-row flex-col justify-center gap-4 w-full ">
                <!-- img main -->
                <div class="basis-2/3" data-aos="fade-right" data-aos-duration="500">
                    <div class="relative xl:w-[990px] xl:h-[580px] w-full sm:h-[380px] h-[250px]">
                        <img id="img-main" src="/images/img/123333.png" alt=""
                            class="w-full h-full rounded-lg shadow-md">
                        <!-- Navigation Buttons -->
                        <button id="prev-btn"
                            class="absolute top-1/2 left-4 -translate-y-1/2 bg-white bg-opacity-40 p-1 rounded-sm shadow-md hover:bg-gray-400 max-w-12 w-8 h-auto">
                            <img src="/images/icon/prev.png" alt="" class="w-full h-full shadow-md">
                        </button>
                        <button id="next-btn"
                            class="absolute top-1/2 right-4 -translate-y-1/2  bg-white bg-opacity-40 p-1 rounded-sm shadow-md hover:bg-gray-400 max-w-12 w-8 h-auto">
                            <img src="/images/icon/next.png" alt="" class="w-full h-full shadow-md">
                        </button>
                    </div>
                </div>
                <!-- img more -->
                <div class="lg:basis-sm basis-3xs flex justify-between gap-2 sm:flex-col" data-aos="fade-left"
                    data-aos-duration="500">
                    <div
                        class="max-w-[320px] xl:h-[180px] sm:h-[120px] max-ss:max-h-[80px] h-auto w-full hover:scale-95 cursor-pointer">
                        <img src="/images/img/123333.png" alt=""
                            class="w-full h-full rounded-lg shadow-md img-more">
                    </div>
                    <div
                        class="max-w-[320px] xl:h-[180px] sm:h-[120px] max-ss:max-h-[80px] h-auto  w-full hover:scale-95 cursor-pointer">
                        <img src="/images/img/12124534.jpg" alt=""
                            class="w-full h-full rounded-lg shadow-md img-more">
                    </div>
                    <div
                        class="xmax-w-[320px] xl:h-[180px] sm:h-[120px] max-ss:max-h-[80px] h-auto  w-full hover:scale-95 cursor-pointer">
                        <img src="/images/img/786867867.jpg" alt=""
                            class="w-full h-full rounded-lg shadow-md img-more">
                    </div>
                </div>
            </div>


            <div class="flex justify-between gap-8 lg:flex-row flex-col xl:p-0 ss:px-4 lg:pl-16 font-afacadFlux ">
                <div class="w-full flex flex-col gap-4" data-aos="fade-right" data-aos-duration="500">
                    <div class="flex lg:flex-col ss:flex-row flex-col  justify-between gap-4">
                        <p class="text-[#CDB59D] ss:text-3xl text-2xl font-[500]"
                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Double Twin Room</p>
                        <div class="bg-white rounded-md p-2 w-48">
                            <p class="text-black text-center font-kanit font-[500] ss:text-xl text-lg ">
                                $ 1,200.- / Night
                            </p>
                        </div>
                    </div>

                    <p class="break-words ss:text-xl text-base ">
                        Lorem ipsum dolor sit amet consectetur. Sapien turpis mauris cursus et. Sed elit id dolor facilisis
                        urna pellentesque facilisis. Felis hac enim velit lorem at. Lacus ultricies mollis laoreet sed
                        elementum viverra ante.
                        Et morbi gravida habitant pretium. Leo enim risus maecenas nulla.
                    </p>
                    <p class="break-words ss:text-xl text-base ">
                        Lorem ipsum dolor sit amet consectetur. Sem risus eros purus scelerisque in nullam accumsan. Velit
                        pellentesque etiam nec et. Ac neque diam pretium in sem purus amet. Tincidunt risus pellentesque nec
                        et ornare facilisis nibh non. Ac cursus lorem commodo.
                    </p>
                </div>

                <div class="w-full flex lg:flex-col md:flex-row flex-col  max-lg:justify-between ss:gap-8 gap-4 "
                    data-aos="fade-left" data-aos-duration="500">
                    {{-- 1 --}}
                    <div class="flex gap-4 flex-col lg:items-start md:items-center items-start">
                        <p class="text-[#CDB59D] ss:text-2xl text-xl">Detail Room</p>
                        <div class="flex gap-4 font-afacadFlux">
                            <div class="flex flex-col justify-between items-center gap-2">
                                <div class="w-auto ss:h-[30px] h-[25px] ">
                                    <img src="/images/icon/ion_person-sharp.png" alt="" class="w-full h-full">
                                </div>
                                <p class="ss:text-xl text-base font-[400]">1-2 Min</p>
                            </div>

                            <div class="border-r rounded-full"></div>

                            <div class="flex flex-col justify-between items-center gap-2">
                                <div class="w-auto ss:h-[30px] h-[25px]">
                                    <img src="/images/icon/Group 159.png" alt="" class="w-full h-full">
                                </div>
                                <p class="ss:text-xl text-base font-[400]">2 Bed</p>
                            </div>

                            <div class="border-r rounded-full"></div>

                            <div class="flex flex-col justify-between items-center gap-2">
                                <div class="w-auto ss:h-[30px] h-[25px]">
                                    <img src="/images/icon/Group 357.png" alt="" class="w-full h-full">
                                </div>
                                <p class="ss:text-xl text-base font-[400]">36 sq.m.</p>
                            </div>
                        </div>


                    </div>

                    {{-- 2 --}}
                    <div class="flex gap-4 flex-col lg:items-start md:items-center items-start">
                        <p class="text-[#CDB59D] ss:text-2xl text-xl">Facilities</p>
                        <div class="flex gap-6  font-afacadFlux">
                            <div class="flex flex-col justify-start items-center gap-2">
                                <div class="w-auto ss:h-[30px] h-[25px]">
                                    <img src="/images/icon/material-symbols_wifi-sharp.png" alt=""
                                        class="w-full h-full">
                                </div>
                                <p class="ss:text-xl text-base font-[400]">Free wifi</p>
                            </div>

                            <div class="flex flex-col justify-start items-center gap-2">
                                <div class="w-auto ss:h-[30px] h-[25px]">
                                    <img src="/images/icon/Group 164.png" alt="" class="w-full h-full">
                                </div>
                                <p class="ss:text-xl text-base font-[400]">Restaurant</p>
                            </div>

                            <div class="flex flex-col justify-start items-center gap-2">
                                <div class="max-w-[30px]ss:h-[30px] h-[25px]">
                                    <img src="/images/icon/Group 170.png" alt="" class="w-full h-full">
                                </div>
                                <p class="ss:text-xl text-base font-[400]">Coffe Cafe</p>
                            </div>

                            <div class="flex flex-col justify-start items-center gap-2">
                                <div class="w-auto ss:h-[30px] h-[25px]">
                                    <img src="/images/icon/Group 213.png" alt="" class="w-full h-full">
                                </div>
                                <p class="ss:text-xl text-base font-[400] text-center ">Swimming
                                    <br> Pool
                                </p>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>

        <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="500">
            <a href="{{ route('room.detail') }}" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                class="relative bg-transparent border-2 border-[#CDB59D] lg:p-2 p-1 w-40 m-auto font-afacadFlux items-center flex justify-center lg:text-xl text-base text-center hover:text-white hover:bg-[#CDB59D] transition-all ease-in-out duration-300">
                Book Now
            </a>
        </div>

        <section class="relative z-50 py-6 mt-4">
            <div class="absolute w-full h-full">
                <img src="/images/img/image 9.png" alt="" class="w-full h-full object-cover">
            </div>

            <div class="max-w-[1536px] m-auto flex flex-col sm:gap-y-16 gap-y-8 py-8 px-4 animate__animated animate__zoomIn">
                <div class="flex flex-col justify-center items-center sm:gap-y-6 gap-y-2" >
                    <div class="w-44">
                        <img src="/images/logo/Mask group.png" alt="" class="w-full h-auto">
                    </div>

                    <p class="font-[500] tracking-widest lg:text-4xl sm:text-3xl text-lg uppercase"
                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                        OTHER ROOM
                    </p>

                    <div class="border-t border-2 border-[#CDB59D] my-2 max-w-[30%] w-full rounded-full"></div>

                    <p class="font-[300] xl:text-xl sm:text-lg text-base text-center max-w-[80%] w-full font-afacadFlux">
                        Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id feugiat eget
                        bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis vitae sem. Quam iaculis velit
                        commodo aliquam vitae dignissim sit. Sed id adipiscing.
                    </p>

                </div>


            </div>

            <div class="swiper swiper2 max-w-[1536px] mx-auto mb-6 items-center">
                <div class="swiper-wrapper flex relative mb-2">
                    {{-- 1 --}}
                    <div class="swiper-slide">
                        <div class="flex flex-col rounded-lg md:w-[430px] ss:w-[400px] w-[380px] h-full mx-auto px-4 drop-shadow-lg"
                            data-aos="zoom-in" data-aos-duration="500">
                            <div class="relative w-full h-[255px] ">
                                <img src="/images/img/123333.png" alt="" class="w-full h-full rounded-t-lg">
                                <div class="absolute bg-[#0B1315] rounded-l-full top-6 right-0 p-1 w-[190px]">
                                    <p class="text-white text-center text-lg">$1,500.- / Night</p>
                                </div>
                            </div>

                            <div
                                class="bg-black bg-opacity-30 flex justify-center items-center gap-4 p-2 w-full font-afacadFlux">
                                <div class="flex justify-between gap-2 items-center">
                                    <div class="h-auto ss:w-[30px] w-[25px] ">
                                        <img src="/images/icon/ion_person-sharp.png" alt=""
                                            class="w-full h-full">
                                    </div>
                                    <p class="ss:text-xl text-base font-[400] w-full">4 Guests</p>
                                </div>

                                <div class="flex justify-between gap-2 items-center">
                                    <div class="h-auto ss:w-[30px] w-[25px] ">
                                        <img src="/images/icon/Group 159.png" alt="" class="w-full h-full">
                                    </div>
                                    <p class="ss:text-xl text-base font-[400] w-full">2 Bed</p>
                                </div>

                                <div class="flex justify-between gap-2 items-center">
                                    <div class="h-auto ss:w-[30px] w-[25px] ">
                                        <img src="/images/icon/Group 357.png" alt="" class="w-full h-full">
                                    </div>
                                    <p class="ss:text-xl text-base font-[400] w-full">53 sq.m.</p>
                                </div>
                            </div>

                            <div
                                class="bg-[#0F1D2099] bg-opacity-30 p-6 rounded-b-lg h-[255px] flex flex-col justify-between items-center font-afacadFlux">
                                <div class="flex flex-col gap-4" data-aos="zoom-in" data-aos-duration="500">
                                    <p class="ss:text-2xl text-xl font-[500] text-left">Delux Room</p>
                                    <p class="ss:text-xl text-base line-clamp-4 text-left">
                                        Lorem ipsum dolor sit amet consectetur. Libero
                                        faucibus sed neque ridiculus id ultricies. In
                                        eu
                                        est sodales turpis vestibulum. Metus facilisi in.
                                    </p>
                                </div>

                                {{-- btn --}}
                                <div class="w-full mt-2" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="500">
                                    <a href="{{ route('room.detail') }}"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                                        class="relative bg-transparent border-2 border-[#CDB59D] lg:p-2 p-1 font-afacadFlux items-center flex justify-center ss:text-xl text-base text-center hover:text-white hover:bg-[#CDB59D] transition-all ease-in-out duration-300">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 2 --}}
                    <div class="swiper-slide">
                        <div class="flex flex-col rounded-lg md:w-[430px] ss:w-[400px] w-[380px] h-full mx-auto px-4 drop-shadow-lg"
                            data-aos="zoom-in" data-aos-duration="500">
                            <div class="relative w-full h-[255px] ">
                                <img src="/images/img/566456565.png" alt="" class="w-full h-full rounded-t-lg">
                                <div class="absolute bg-[#0B1315] rounded-l-full top-6 right-0 p-1 w-[190px]">
                                    <p class="text-white text-center text-lg">$2,500.- / Night</p>
                                </div>
                            </div>

                            <div
                                class="bg-black bg-opacity-30 flex justify-center items-center gap-4 p-2 w-full font-afacadFlux">
                                <div class="flex justify-between gap-2 items-center">
                                    <div class="h-auto ss:w-[30px] w-[25px] ">
                                        <img src="/images/icon/ion_person-sharp.png" alt=""
                                            class="w-full h-full">
                                    </div>
                                    <p class="ss:text-xl text-base font-[400] w-full">2 Guests</p>
                                </div>

                                <div class="flex justify-between gap-2 items-center">
                                    <div class="h-auto ss:w-[30px] w-[25px] ">
                                        <img src="/images/icon/Group 159.png" alt="" class="w-full h-full">
                                    </div>
                                    <p class="ss:text-xl text-base font-[400] w-full">1 Bed</p>
                                </div>

                                <div class="flex justify-between gap-2 items-center">
                                    <div class="h-auto ss:w-[30px] w-[25px] ">
                                        <img src="/images/icon/Group 357.png" alt="" class="w-full h-full">
                                    </div>
                                    <p class="ss:text-xl text-base font-[400] w-full">53 sq.m.</p>
                                </div>
                            </div>

                            <div
                                class="bg-[#0F1D2099] bg-opacity-30 p-6 rounded-b-lg h-[255px] flex flex-col justify-between items-center font-afacadFlux">
                                <div class="flex flex-col gap-4" data-aos="zoom-in" data-aos-duration="500">
                                    <p class="ss:text-2xl text-xl font-[500] text-left">Sweet Room</p>
                                    <p class="ss:text-xl text-base line-clamp-4 text-left">
                                        Lorem ipsum dolor sit amet consectetur. Libero
                                        faucibus sed neque ridiculus id ultricies. In
                                        eu
                                        est sodales turpis vestibulum. Metus facilisi in.
                                    </p>
                                </div>

                                {{-- btn --}}
                                <div class="w-full mt-2" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="500">
                                    <a href="{{ route('room.detail') }}"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                                        class="relative bg-transparent border-2 border-[#CDB59D] lg:p-2 p-1 font-afacadFlux items-center flex justify-center ss:text-xl text-base text-center hover:text-white hover:bg-[#CDB59D] transition-all ease-in-out duration-300">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- 3 --}}
                    <div class="swiper-slide">
                        <div class="flex flex-col rounded-lg md:w-[430px] ss:w-[400px] w-[380px] h-full mx-auto px-4 drop-shadow-lg"
                            data-aos="zoom-in" data-aos-duration="500">
                            <div class="relative w-full h-[255px] ">
                                <img src="/images/img/456456.png" alt="" class="w-full h-full rounded-t-lg">
                                <div class="absolute bg-[#0B1315] rounded-l-full top-6 right-0 p-1 w-[190px]">
                                    <p class="text-white text-center text-lg">$6,500.- / Night</p>
                                </div>
                            </div>

                            <div
                                class="bg-black bg-opacity-30 flex justify-center items-center gap-4 p-2 w-full font-afacadFlux">
                                <div class="flex justify-between gap-2 items-center">
                                    <div class="h-auto ss:w-[30px] w-[25px] ">
                                        <img src="/images/icon/ion_person-sharp.png" alt=""
                                            class="w-full h-full">
                                    </div>
                                    <p class="ss:text-xl text-base font-[400] w-full">6 Guests</p>
                                </div>

                                <div class="flex justify-between gap-2 items-center">
                                    <div class="h-auto ss:w-[30px] w-[25px] ">
                                        <img src="/images/icon/Group 159.png" alt="" class="w-full h-full">
                                    </div>
                                    <p class="ss:text-xl text-base font-[400] w-full">2 Bed</p>
                                </div>

                                <div class="flex justify-between gap-2 items-center">
                                    <div class="h-auto ss:w-[30px] w-[25px] ">
                                        <img src="/images/icon/Group 357.png" alt="" class="w-full h-full">
                                    </div>
                                    <p class="ss:text-xl text-base font-[400] w-full">75 sq.m.</p>
                                </div>
                            </div>

                            <div
                                class="bg-[#0F1D2099] bg-opacity-30 p-6 rounded-b-lg h-[255px] flex flex-col justify-between items-center font-afacadFlux">
                                <div class="flex flex-col gap-4" data-aos="zoom-in" data-aos-duration="500">
                                    <p class="ss:text-2xl text-xl font-[500] text-left">Family Room</p>
                                    <p class="ss:text-xl text-base line-clamp-4 text-left">
                                        Lorem ipsum dolor sit amet consectetur. Libero
                                        faucibus sed neque ridiculus id ultricies. In
                                        eu
                                        est sodales turpis vestibulum. Metus facilisi in.
                                    </p>
                                </div>

                                {{-- btn --}}
                                <div class="w-full mt-2" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="500">
                                    <a href="{{ route('room.detail') }}"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                                        class="relative bg-transparent border-2 border-[#CDB59D] lg:p-2 p-1 font-afacadFlux items-center flex justify-center ss:text-xl text-base text-center hover:text-white hover:bg-[#CDB59D] transition-all ease-in-out duration-300">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="swiper-pagination "></div>

        </section>

    </section>
@endsection

@section('script')
    @vite('resources/js/room/swiper.js')
@endsection
