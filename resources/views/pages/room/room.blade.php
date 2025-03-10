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
            <div class="text-white text-6xl max-xl:text-3xl  font-bold text-center animate__animated animate__fadeInUp">
            <div class="flex flex-col sm:gap-y-8">
                <p class="font-kanit xl:text-8xl ss:text-6xl text-4xl uppercase"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    room
                </p>
            </div>
            </div>
        </div>

        <div class="relative w-full h-[600px] max-2xl:h-[500px] max-lg:h-[350px] max-md:h-[250px]">
            <img src="/images/banner/c39.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        </div>
    </section>

    <section class="relative z-50 md:py-16 py-[30px] px-4">
        <div class="absolute w-full h-full">
            <img src="/images/img/Group 115.png" alt="" class="w-full h-full object-cover ">
        </div>

        <div class="max-w-[1536px] m-auto">
            <div class="flex flex-col sm:gap-y-16 gap-y-8">
                <div class="flex flex-col justify-center items-center sm:gap-y-6 gap-y-2 animate__animated animate__zoomIn">
                    <div class="w-44">
                        <img src="/images/logo/Mask group.png" alt="" class="w-full h-auto">
                    </div>

                    <p class="font-[500] tracking-widest lg:text-4xl sm:text-3xl text-lg uppercase" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                        OUR ROOM
                    </p>

                    <div class="border-t border-2 border-[#CDB59D] max-w-[50%] my-2 w-full rounded-full" data-aos="zoom-in"
                        data-aos-duration="500"></div>

                    <p class="font-light xl:text-xl sm:text-lg text-sm text-center max-w-[80%] w-full">
                        Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id feugiat eget
                        bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis vitae sem. Quam iaculis velit
                        commodo aliquam vitae dignissim sit. Sed id adipiscing.
                    </p>
                </div>

                {{-- img --}}
                <div class="max-w-[1320px] mx-auto w-full grid sm:grid-cols-2 grid-cols-1 place-items-center sm:gap-6 ss:gap-6 gap-4">
                    {{-- 1 --}}
                    <div class="group relative  w-full xl:h-[400px] lg:h-[350px] ss:h-[300px] h-[250px] cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500">
                        <img class="absolute inset-0 h-full w-full opacity-90 object-cover transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-300"
                            src="/images/img/123333.png" alt="" />

                        <div
                            class="absolute w-full inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45 group-hover:transition-all group-hover:duration-300">

                            <!-- Title -->
                            <p class="text-left xl:text-3xl sm:text-lg text-base w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out sm:group-hover:top-6 ss:group-hover:top-10 group-hover:top-4 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center  "
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Double Twin Room
                            </p>

                            <!-- Description -->
                            <div class="m-auto w-full break-words flex flex-col justify-center items-center lg:gap-4 gap-2 px-4 xl:pt-28 ss:pt-16 pt-10 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                <div class="w-full grid lg:grid-cols-4 grid-cols-4 lg:border-b-2 border-b p-4 border-white">
                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">1-2</p>
                                        <div class="max-w-[30px] h-auto">
                                            <img src="/images/icon/ion_person-sharp.png" alt=""
                                                class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Free wifi</p>
                                        <div class="max-w-[30px] h-auto">
                                            <img src="/images/icon/material-symbols_wifi-sharp.png" alt=""
                                                class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400] text-center"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Bed Options</p>
                                        <div class="max-w-[60px] h-auto">
                                            <img src="/images/icon/Group 151.png" alt="" class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Size</p>
                                        <p class="ss:text-lg text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">36 sq.m.</p>
                                    </div>
                                </div>

                                <div class="flex justify-center items-center xl:gap-4 gap-2">
                                    <div class="max-w-[40px] h-auto">
                                        <img src="/images/icon/Group 139.png" alt="" class="w-full h-full">
                                    </div>
                                    <p class="xl:text-xl sm:text-base text-sm font-[500]"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">1,200 / 1 Nigth</p>
                                </div>

                                <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="500">
                                    <a href="{{ route('room.detail') }}" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                                        class="relative bg-transparent border-2 border-[#CDB59D] lg:p-2 p-1 w-40 m-auto font-afacadFlux items-center flex justify-center lg:text-xl ss:text-base text-sm text-center hover:text-white hover:bg-[#CDB59D] transition-all ease-in-out duration-300">
                                        Detail
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- 2 --}}
                    <div class="group relative  w-full xl:h-[400px] lg:h-[350px] ss:h-[300px] h-[250px] cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500">
                        <img class="absolute inset-0 h-full w-full opacity-90 object-cover transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-300"
                            src="/images/img/13676.png" alt="" />

                        <div
                            class="absolute w-full inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45 group-hover:transition-all group-hover:duration-300">

                            <!-- Title -->
                            <p class="text-left xl:text-3xl sm:text-lg text-base w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out sm:group-hover:top-6 ss:group-hover:top-10 group-hover:top-4 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center  "
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Delux Room
                            </p>

                            <!-- Description -->
                            <div
                                class="m-auto w-full break-words flex flex-col justify-center items-center lg:gap-4 gap-2 px-4 xl:pt-28 ss:pt-16 pt-10 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                <div
                                    class="w-full grid lg:grid-cols-4 grid-cols-4 lg:border-b-2 border-b p-4 border-white">
                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">1-2</p>
                                        <div class="max-w-[30px] h-auto">
                                            <img src="/images/icon/ion_person-sharp.png" alt=""
                                                class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Free wifi</p>
                                        <div class="max-w-[30px] h-auto">
                                            <img src="/images/icon/material-symbols_wifi-sharp.png" alt=""
                                                class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400] text-center"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Bed Options</p>
                                        <div class="max-w-[60px] h-auto">
                                            <img src="/images/icon/Group 151.png" alt="" class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Size</p>
                                        <p class="ss:text-lg text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">36 sq.m.</p>
                                    </div>
                                </div>

                                <div class="flex justify-center items-center xl:gap-4 gap-2">
                                    <div class="max-w-[40px] h-auto">
                                        <img src="/images/icon/Group 139.png" alt="" class="w-full h-full">
                                    </div>
                                    <p class="xl:text-xl sm:text-base text-sm font-[500]"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">1,200 / 1 Nigth</p>
                                </div>

                                <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="500">
                                    <a href="{{ route('room.detail') }}" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                                        class="relative bg-transparent border-2 border-[#CDB59D] lg:p-2 p-1 w-40 m-auto font-afacadFlux items-center flex justify-center lg:text-xl ss:text-base text-sm text-center hover:text-white hover:bg-[#CDB59D] transition-all ease-in-out duration-300">
                                        Detail
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- 3 --}}
                    <div class="group relative  w-full xl:h-[400px] lg:h-[350px] ss:h-[300px] h-[250px] cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500">
                        <img class="absolute inset-0 h-full w-full opacity-90 object-cover transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-300"
                            src="/images/img/456456.png" alt="" />

                        <div
                            class="absolute w-full inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45 group-hover:transition-all group-hover:duration-300">

                            <!-- Title -->
                            <p class="text-left xl:text-3xl sm:text-lg text-base w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out sm:group-hover:top-6 ss:group-hover:top-10 group-hover:top-4 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center  "
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Family Room
                            </p>

                            <!-- Description -->
                            <div
                                class="m-auto w-full break-words flex flex-col justify-center items-center lg:gap-4 gap-2 px-4 xl:pt-28 ss:pt-16 pt-10 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                <div
                                    class="w-full grid lg:grid-cols-4 grid-cols-4 lg:border-b-2 border-b p-4 border-white">
                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">1-2</p>
                                        <div class="max-w-[30px] h-auto">
                                            <img src="/images/icon/ion_person-sharp.png" alt=""
                                                class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Free wifi</p>
                                        <div class="max-w-[30px] h-auto">
                                            <img src="/images/icon/material-symbols_wifi-sharp.png" alt=""
                                                class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400] text-center"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Bed Options</p>
                                        <div class="max-w-[60px] h-auto">
                                            <img src="/images/icon/Group 151.png" alt="" class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Size</p>
                                        <p class="ss:text-lg text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">36 sq.m.</p>
                                    </div>
                                </div>

                                <div class="flex justify-center items-center xl:gap-4 gap-2">
                                    <div class="max-w-[40px] h-auto">
                                        <img src="/images/icon/Group 139.png" alt="" class="w-full h-full">
                                    </div>
                                    <p class="xl:text-xl sm:text-base text-sm font-[500]"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">1,200 / 1 Nigth</p>
                                </div>

                                <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="500">
                                    <a href="{{ route('room.detail') }}" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                                        class="relative bg-transparent border-2 border-[#CDB59D] lg:p-2 p-1 w-40 m-auto font-afacadFlux items-center flex justify-center lg:text-xl ss:text-base text-sm text-center hover:text-white hover:bg-[#CDB59D] transition-all ease-in-out duration-300">
                                        Detail
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- 4 --}}
                    <div class="group relative  w-full xl:h-[400px] lg:h-[350px] ss:h-[300px] h-[250px] cursor-pointer overflow-hidden rounded-lg shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="500">
                        <img class="absolute inset-0 h-full w-full opacity-90 object-cover transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-300"
                            src="/images/img/566456565.png" alt="" />

                        <div
                            class="absolute w-full inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-black group-hover:bg-opacity-45 group-hover:transition-all group-hover:duration-300">

                            <!-- Title -->
                            <p class="text-left xl:text-3xl sm:text-lg text-base w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out sm:group-hover:top-6 ss:group-hover:top-10 group-hover:top-4 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center  "
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Sweet Room
                            </p>

                            <!-- Description -->
                            <div
                                class="m-auto w-full break-words flex flex-col justify-center items-center lg:gap-4 gap-2 px-4 xl:pt-28 ss:pt-16 pt-10 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                <div
                                    class="w-full grid lg:grid-cols-4 grid-cols-4 lg:border-b-2 border-b p-4 border-white">
                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">1-2</p>
                                        <div class="max-w-[30px] h-auto">
                                            <img src="/images/icon/ion_person-sharp.png" alt=""
                                                class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Free wifi</p>
                                        <div class="max-w-[30px] h-auto">
                                            <img src="/images/icon/material-symbols_wifi-sharp.png" alt=""
                                                class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 lg:border-r-4 border-r-2 border-white max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400] text-center"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Bed Options</p>
                                        <div class="max-w-[60px] h-auto">
                                            <img src="/images/icon/Group 151.png" alt="" class="w-full h-full">
                                        </div>
                                    </div>

                                    <div class="flex flex-col justify-between items-center ss:gap-4 gap-2 max-ss:p-1"
                                        data-aos="zoom-in" data-aos-duration="500">
                                        <p class="xl:text-xl sm:text-base text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Size</p>
                                        <p class="ss:text-lg text-sm font-[400]"
                                            style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">36 sq.m.</p>
                                    </div>
                                </div>

                                <div class="flex justify-center items-center xl:gap-4 gap-2">
                                    <div class="max-w-[40px] h-auto">
                                        <img src="/images/icon/Group 139.png" alt="" class="w-full h-full">
                                    </div>
                                    <p class="xl:text-xl sm:text-base text-sm font-[500]"
                                        style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">1,200 / 1 Nigth</p>
                                </div>

                                <div class="" data-aos="fade-up" data-aos-anchor-placement="top-bottom"
                                    data-aos-duration="500">
                                    <a href="{{ route('room.detail') }}" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                                        class="relative bg-transparent border-2 border-[#CDB59D] lg:p-2 p-1 w-40 m-auto font-afacadFlux items-center flex justify-center lg:text-xl ss:text-base text-sm text-center hover:text-white hover:bg-[#CDB59D] transition-all ease-in-out duration-300">
                                        Detail
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    {{-- @vite('resources/js/home/swiper.js') --}}
@endsection
