@extends('layouts.main')

@section('title')
    home
@endsection

@section('style')
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite('resources/css/home/swiper.css')
@endsection

{{-- 
@section('textbanner')
    fffdfsdsdf
@endsection --}}

@section('banner')
    {{-- <img src="/images/banner/Group 1.png" alt="Banner Image" class="w-full h-full absolute object-cover z-40"> --}}
@endsection


@section('contents')
    @include('pages.home.swiper')
    <div class="xl:w-4/5 mx-auto text-2xl p-4 font-kanit">

        <section class="py-8">
            <div class="flex flex-col gap-y-16">
                <div class="flex flex-col justify-center items-center gap-y-6">
                    <div class=" w-44">
                        <img src="/images/logo/Mask group.png" alt="">
                    </div>

                    <p class="font-[500] tracking-widest sm:text-3xl text-base">
                        OUR ROOM
                    </p>

                    <div class="border-t border-2 border-[#CDB59D] max-w-[50%] my-2 w-full rounded-full"></div>

                    <p class="font-light sm:text-2xl text-base text-center max-w-[70%] w-full">
                        Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id feugiat eget
                        bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis vitae sem. Quam iaculis velit
                        commodo aliquam vitae dignissim sit. Sed id adipiscing.
                    </p>
                </div>

                {{-- img --}}
                <div class="grid place-items-center lg:grid-cols-4">
                    <div class="group relative w-[320px] h-[450px] cursor-pointer overflow-hidden rounded-sm shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-500"
                            src="/images/img/image 3.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-gradient-to-t group-hover:from-black/60 group-hover:transition-all group-hover:duration-500">

                            <!-- Title -->
                            <p class="w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out group-hover:top-12 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center text-left sm:text-3xl text-base"
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Double Twin Room
                            </p>

                            <!-- Description -->
                            <p
                                class="absolute break-words text-white font-light sm:text-base text-sm left-4 bottom-12 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu faucibus cras sit.
                                Enim vel nisl erat eget amet risus. Eu viverra feugiat est vitae.
                            </p>
                        </div>
                    </div>

                    <div class="group relative w-[320px] h-[450px] cursor-pointer overflow-hidden rounded-sm shadow-md  hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-500"
                            src="/images/img/image 4.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-gradient-to-t group-hover:from-black/60 group-hover:transition-all group-hover:duration-500">

                            <!-- Title -->
                            <p class="w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out group-hover:top-12 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center text-left sm:text-3xl text-base"
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Delux Room
                            </p>

                            <!-- Description -->
                            <p
                                class="absolute break-words text-white font-light sm:text-base text-sm left-4 bottom-12 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu faucibus cras sit.
                                Enim vel nisl erat eget amet risus. Eu viverra feugiat est vitae.
                            </p>
                        </div>
                    </div>

                    <div class="group relative w-[320px] h-[450px] cursor-pointer overflow-hidden rounded-sm shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-500"
                            src="/images/img/image 7.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-gradient-to-t group-hover:from-black/60 group-hover:transition-all group-hover:duration-500">

                            <!-- Title -->
                            <p class="w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out group-hover:top-12 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center text-left sm:text-3xl text-base"
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Family Room
                            </p>

                            <!-- Description -->
                            <p
                                class="absolute break-words text-white font-light sm:text-base text-sm left-4 bottom-12 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu faucibus cras sit.
                                Enim vel nisl erat eget amet risus. Eu viverra feugiat est vitae.
                            </p>
                        </div>
                    </div>

                    <div class="group relative w-[320px] h-[450px] cursor-pointer overflow-hidden rounded-sm shadow-md hover:shadow-2xl"
                        data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                        <img class="absolute inset-0 h-full w-full object-cover opacity-90 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:transition-opacity group-hover:duration-500"
                            src="/images/img/image 8.png" alt="" />

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/0 to-transparent to-90% text-white transition-all duration-300 group-hover:bg-gradient-to-t group-hover:from-black/60 group-hover:transition-all group-hover:duration-500">

                            <!-- Title -->
                            <p class="w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 uppercase transition-all delay-300 duration-300 ease-out group-hover:top-12 group-hover:translate-y-0 group-hover:duration-300 flex justify-center items-center text-left sm:text-3xl text-base"
                                style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                                Sweet Room
                            </p>

                            <!-- Description -->
                            <p
                                class="absolute break-words text-white font-light sm:text-base text-sm left-4 bottom-12 line-clamp-4 max-w-[90%] pt-4 opacity-0 transition-opacity duration-300 ease-out group-hover:opacity-100 group-hover:delay-500 group-hover:duration-300">
                                Lorem ipsum dolor sit amet consectetur. Fermentum mauris in ut eget arcu faucibus cras sit.
                                Enim vel nisl erat eget amet risus. Eu viverra feugiat est vitae.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section>
            
        </section>

    </div>
@endsection

@section('script')
    @vite('resources/js/home/swiper.js')
@endsection
