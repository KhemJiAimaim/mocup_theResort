@extends('layouts.main')

@section('title')
    gallery
@endsection

@section('style')
    @vite('resources/css/gallery/preview_img.css')
@endsection


@section('contents')
    <section class=" w-full h-auto relative z-50">
        <div
            class="absolute inset-0 z-50  flex flex-col justify-center items-center gap-y-4  max-sm:gap-y-1 max-w-[1536px] m-auto">
            <p class="text-white text-6xl max-xl:text-3xl  font-bold text-center" data-aos="zoom-in" data-aos-duration="3000">
            <div class="flex flex-col sm:gap-y-8">
                <p class="font-kanit xl:text-8xl ss:text-6xl text-4xl uppercase" data-aos="zoom-in" data-aos-duration="3000"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    gallery
                </p>
            </div>
            </p>
        </div>

        <div class="relative w-full xl:h-[600px] ss:h-[350px] h-[250px] ">
            <img src="/images/banner/asabfgnhg.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        </div>
    </section>

    <section class="relative z-50 pb-12">
        <div class="absolute w-full h-full">
            <img src="/images/img/Group 115.png" alt="" class="w-full h-full object-cover">
        </div>


        <div class="max-w-[1536px] m-auto py-8 p-4">
            {{-- GALLERY --}}
            <div class="sm:mt-16 mt-8">

                <div class="flex flex-col justify-center items-center sm:gap-y-6 gap-y-2 w-full" data-aos="zoom-in"
                    data-aos-duration="3000">
                    <div class="max-w-44">
                        <img src="/images/logo/Mask group.png" alt="" class="w-full h-auto">
                    </div>

                    <p class="font-[300] tracking-widest sm:text-2xl text-sm text-[#CDB59D]">
                        GALLERY
                    </p>

                    <p class="font-[500] tracking-widest lg:text-4xl sm:text-3xl text-lg uppercase">
                        Some of our photo galleries
                    </p>

                    <div class="border-t border-2 border-[#CDB59D] max-w-[50%] my-2 w-full  rounded-full" data-aos="zoom-in"
                        data-aos-duration="3000">
                    </div>
                </div>

                <div class="max-w-[1536px] m-auto grid sm:grid-cols-4 grid-cols-2 sm:gap-4 gap-2 my-6 image-gallery">

                    @for ($i = 0; $i < 6; $i++)
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
                <div class="text-center hidden" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="2000">
                    <button id="toggle-button" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);"
                        class="uppercase relative my-2 bg-transparent border-2 border-[#CDB59D] p-2 w-40 m-auto font-afacadFlux items-center flex justify-center sm:text-2xl text-sm text-center hover:text-white hover:bg-[#CDB59D] transition-all ease-in-out duration-500">
                        See more
                    </button>
                </div>


            </div>
        </div>


    </section>


    <!-- Popup GALLERY -->
    <div id="image-popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-[100] ">
        <div
            class="relative bg-transparent xl:max-w-[800px] sm:max-w-[700px] ss:max-w-[500px] max-w-[380px] max-h-[80%] px-4">
            <div class="swiper mySwiper_img text-black ">
                <div class="swiper-wrapper  ">
                    <!-- ใส่รูปในแต่ละ slide -->
                    @for ($i = 0; $i < 6; $i++)
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
    @vite('resources/js/gallery/swiper.js')
@endsection
