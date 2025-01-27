@extends('layouts.main')

@section('title')
    service
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
                <p class="font-kanit xl:text-8xl ss:text-6xl text-4xl uppercase" data-aos="zoom-in" data-aos-duration="3000"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    SERVICE
                </p>
            </div>
            </p>
        </div>

        <div class="relative w-full xl:h-[600px] ss:h-[350px] h-[250px] ">
            <img src="/images/banner/dddvdsrs.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        </div>
    </section>

    <section class="relative z-50 pb-12 overflow-hidden">
        <div class="absolute w-full h-full">
            <img src="/images/img/Group 115.png" alt="" class="w-full h-full object-cover ">
        </div>

        <div class=" relative max-w-[1536px] m-auto py-8 p-4">
            <div class="flex flex-col justify-center items-center sm:gap-y-8 gap-y-4">

                <p class="font-[700] text-center tracking-widest lg:text-3xl sm:text-2xl text-lg uppercase"
                    data-aos="zoom-in" data-aos-duration="3000">
                    Enjoy Complete & Best <br>
                    Quality Facilities
                </p>

                <div class="border-t border border-white max-w-[1320px] my-1 w-full rounded-full" data-aos="zoom-in"
                    data-aos-duration="3000"></div>

                {{-- 1 --}}
                <div class="flex flex-col max-w-[1320px] items-center justify-between bg-transparent z-50 rounded-xl"
                    data-aos="fade-right" data-aos-duration="3000">
                    <div class="flex max-sm:flex-col lg:gap-12 gap-6 justify-between rounded-xl w-full">
                        <div
                            class="w-full lg:h-[400px] ss:h-[300px] h-[250px] m-auto rounded-md flex justify-center items-center">
                            <img src="/images/img/sdsdfds.png" alt=""
                                class="w-full h-full rounded-xl shadow-md object-cover">
                        </div>

                        <div class="w-full m-auto flex flex-col justify-between gap-y-6 gap-x-4 ">
                            <div class="flex flex-col justify-center gap-y-6 max-sm:gap-y-2">
                                <div class="flex gap-4">
                                    <p class="text-[#CDB59D] font-[700] md:text-3xl ss:text-2xl text-xl">Our</p>
                                    <p class="text-white font-[700] md:text-3xl ss:text-2xl text-xl">Restaurant</p>
                                </div>
                                <p class="text-white ss:text-base text-sm "> Lorem ipsum dolor sit amet consectetur. Id
                                    lobortis
                                    elementum in at arcu a placerat vivamus. Platea ultricies tellus nibh nullam
                                    pellentesque vitae aliquet gravida. Ultricies tellus blandit vitae cursus justo
                                    pellentesque amet elementum lorem. Dignissim.</p>
                                <p class="text-white ss:text-base text-sm"> Lorem ipsum dolor sit amet consectetur. Id
                                    lobortis
                                    elementum in at arcu a placerat vivamus. Platea ultricies tellus nibh nullam
                                    pellentesque vitae aliquet gravida. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t border border-white max-w-[1320px] my-1 w-full rounded-full " data-aos="zoom-in"
                    data-aos-duration="3000"></div>

                {{-- 2 --}}
                <div class="flex flex-col max-w-[1320px] items-center justify-between bg-transparent z-50 rounded-xl"
                    data-aos="fade-left" data-aos-duration="3000">
                    <div class="flex max-sm:flex-col lg:gap-12 gap-6 justify-between rounded-xl w-full">
                        <div class="w-full m-auto flex flex-col justify-between gap-y-6 gap-x-4 max-sm:order-2">
                            <div class="flex flex-col justify-center gap-y-6 max-sm:gap-y-2">
                                <div class="flex gap-4">
                                    <p class="text-[#CDB59D] font-[700] md:text-3xl ss:text-2xl text-xl">Our</p>
                                    <p class="text-white font-[700] md:text-3xl ss:text-2xl text-xl">Coffe Cafe</p>
                                </div>
                                <p class="text-white ss:text-base text-sm "> Lorem ipsum dolor sit amet consectetur. Id
                                    lobortis
                                    elementum in at arcu a placerat vivamus. Platea ultricies tellus nibh nullam
                                    pellentesque vitae aliquet gravida. Ultricies tellus blandit vitae cursus justo
                                    pellentesque amet elementum lorem. Dignissim.</p>
                                <p class="text-white ss:text-base text-sm"> Lorem ipsum dolor sit amet consectetur. Id
                                    lobortis
                                    elementum in at arcu a placerat vivamus. Platea ultricies tellus nibh nullam
                                    pellentesque vitae aliquet gravida. </p>
                            </div>
                        </div>

                        <div
                            class="w-full lg:h-[400px] ss:h-[300px] h-[250px] m-auto rounded-md flex justify-center items-center max-sm:order-1">
                            <img src="/images/img/sdsa.png" alt=""
                                class="w-full h-full rounded-xl shadow-md object-cover">
                        </div>


                    </div>
                </div>

                <div class="border-t border border-white max-w-[1320px] my-1 w-full rounded-full" data-aos="zoom-in"
                    data-aos-duration="3000"></div>

                {{-- 3 --}}
                <div class="flex flex-col max-w-[1320px] items-center justify-between bg-transparent z-50 rounded-xl"
                    data-aos="fade-right" data-aos-duration="3000">
                    <div class="flex max-sm:flex-col lg:gap-12 gap-6 justify-between rounded-xl w-full">
                        <div
                            class="w-full lg:h-[400px] ss:h-[300px] h-[250px] m-auto rounded-md flex justify-center items-center">
                            <img src="/images/img/deefreg.png" alt=""
                                class="w-full h-full rounded-xl shadow-md object-cover">
                        </div>

                        <div class="w-full m-auto flex flex-col justify-between gap-y-6 gap-x-4 ">
                            <div class="flex flex-col justify-center gap-y-6 max-sm:gap-y-2">
                                <div class="flex gap-4">
                                    <p class="text-[#CDB59D] font-[700] md:text-3xl ss:text-2xl text-xl">Our</p>
                                    <p class="text-white font-[700] md:text-3xl ss:text-2xl text-xl">Swimming Pool</p>
                                </div>
                                <p class="text-white ss:text-base text-sm "> Lorem ipsum dolor sit amet consectetur. Id
                                    lobortis
                                    elementum in at arcu a placerat vivamus. Platea ultricies tellus nibh nullam
                                    pellentesque vitae aliquet gravida. Ultricies tellus blandit vitae cursus justo
                                    pellentesque amet elementum lorem. Dignissim.</p>
                                <p class="text-white ss:text-base text-sm"> Lorem ipsum dolor sit amet consectetur. Id
                                    lobortis
                                    elementum in at arcu a placerat vivamus. Platea ultricies tellus nibh nullam
                                    pellentesque vitae aliquet gravida. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t border border-white max-w-[1320px] my-1 w-full rounded-full" data-aos="zoom-in"
                    data-aos-duration="3000"></div>
                {{-- end --}}

            </div>
        </div>

    </section>
@endsection

@section('script')
    {{-- @vite('resources/js/home/swiper.js') --}}
@endsection
