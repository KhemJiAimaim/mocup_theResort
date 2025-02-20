@extends('layouts.main')

@section('title')
    contact
@endsection

@section('style')
    @vite('resources/css/home/preview_img.css')
@endsection


@section('contents')
    <section class=" w-full h-auto relative z-50">
        <div
            class="absolute inset-0 z-50  flex flex-col justify-center items-center gap-y-4  max-sm:gap-y-1 max-w-[1536px] m-auto">
            <p class="text-white text-6xl max-xl:text-3xl  font-bold text-center" data-aos="zoom-in" data-aos-duration="500">
            <div class="flex flex-col sm:gap-y-8">
                <p class="font-kanit xl:text-8xl ss:text-6xl text-4xl uppercase" data-aos="zoom-in" data-aos-duration="500"
                    style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">
                    contact
                </p>
            </div>
            </p>
        </div>

        <div class="relative w-full h-[600px] max-2xl:h-[500px] max-lg:h-[350px] max-md:h-[250px]">
            <img src="/images/banner/dfsfddsgfg.png" alt="Banner Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-50"></div>
        </div>
    </section>

    <section class="max-w-[1320px] m-auto py-12 px-4 overflow-hidden">
        <div class="bg-white rounded-2xl 2xl:p-16 md:p-12 p-4 flex justify-between max-lg:flex-col gap-6">
            {{-- 1 --}}
            <div class="flex flex-col justify-center w-full gap-4 " data-aos="fade-right" data-aos-duration="500">
                <div class="flex flex-col justify-center items-start max-lg:items-center gap-2">
                    <p class="text-[#0F1D20] font-[600] md:text-4xl ss:text-3xl text-2xl ">CONTACT INFORMATION</p>
                    <p class="text-[#0F1D20] font-afacadFlux sm:text-lg text-base">Lorem ipsum dolor sit amet consectetur.
                        Facilisis vel
                        pellentesque pretium fringilla venenatis sed. Maecenas id urna curabitur consequat. Dictumst nisl
                        lacus
                        volutpat.
                    </p>
                </div>

                <div class="flex flex-col justify-center pt-2 gap-4">
                    <div class="flex gap-x-6 items-start">
                        <div class="ss:max-w-16 max-w-12  w-full h-auto">
                            <img src="images/icon/Group 257.png" alt="" class="w-full h-wull">
                        </div>
                        <div class="flex flex-col font-afacadFlux">
                            <p class="text-[#CDB59D] font-[600] md:text-3xl ss:text-2xl text-lg ">Location</p>
                            <p class="text-[#0F1D20] sm:text-lg text-base">Lorem ipsum dolor sit amet consectetur. Molestie
                                eget
                                dignissim etiam quam
                                donec malesuada nec sapien orci. Mattis euismod.</p>
                        </div>
                    </div>

                    <div class="flex gap-x-6 items-start">
                        <div class="ss:max-w-16 max-w-12 w-full h-auto">
                            <img src="images/icon/Group 256.png" alt="" class="w-full h-wull">
                        </div>
                        <div class="flex flex-col font-afacadFlux">
                            <p class="text-[#CDB59D] font-[600] md:text-3xl ss:text-2xl text-lg ">Email us</p>
                            <p class="text-[#0F1D20] sm:text-lg text-base uppercase">THeresort@GMAIL.COM</p>
                        </div>
                    </div>

                    <div class="flex gap-x-6 items-start">
                        <div class="ss:max-w-16 max-w-12 h-auto">
                            <img src="images/icon/Group 255.png" alt="" class="w-full h-wull">
                        </div>
                        <div class="flex flex-col font-afacadFlux">
                            <p class="text-[#CDB59D] font-[600] md:text-3xl ss:text-2xl text-lg ">Phone</p>
                            <p class="text-[#0F1D20] sm:text-lg text-base">000-000-0000 </p>
                        </div>
                    </div>
                </div>

                <div class="border border-[#0F1D20] rounded-full w-full my-2 "></div>

                <div class="flex flex-col justify-center max-lg:items-center gap-2">
                    <p class="text-[#0F1D20] font-[500] md:text-3xl ss:text-2xl text-lg uppercase">Follow our social media
                    </p>

                    <div class="flex justify-start gap-6">

                        <a href="https://www.facebook.com/" title="Facebook"
                            class="max-w-12 h-auto hover:scale-110 cursor-pointer" target="_balnk">
                            <img src="/images/icon/Group 272.png" alt="Icon" class="w-full">
                        </a>

                        <a href="#" title="Line" class="max-w-12 h-auto hover:scale-110 cursor-pointer"
                            target="_balnk">
                            <img src="/images/icon/Group 269.png" alt="Icon" class="w-full">
                        </a>

                        <a href="#" title="Instagram" class="max-w-12 h-auto hover:scale-110 cursor-pointer"
                            target="_balnk">
                            <img src="/images/icon/Group 271.png" alt="Icon" class="w-full">
                        </a>

                        <a href="https://www.youtube.com/" title="Youtube"
                            class="max-w-12 h-auto hover:scale-110 cursor-pointer " target="_balnk">
                            <img src="/images/icon/Group 270.png" alt="Icon" class="w-full">
                        </a>

                    </div>
                </div>
            </div>

            {{-- 2 --}}
            <div class="w-full flex justify-center items-end max-lg:items-center flex-col max-lg:flex-row max-sm:flex-col px-4 gap-4 image-gallery"
                data-aos="fade-left" data-aos-duration="500">

                <div class="max-w-[450px] w-full h-auto rounded-md z-50 relative cursor-pointer image-container"
                    data-aos="zoom-in" data-aos-duration="500">
                    <img src="/images/img/786867867.jpg" alt="Image"
                        class="w-full h-auto rounded-md hover:opacity-70 gallery-image">
                    <div
                        class="absolute inset-0 rounded-md bg-gradient-to-b from-[#224e4e] to-[#012020] opacity-0 hover:opacity-70 flex justify-center items-center transition-opacity duration-300">
                        <img src="/images/icon/eye.png" alt="View Icon"
                            class="w-auto h-auto max-w-12 max-h-12 opacity-100 view-icon">
                        VIEW
                    </div>
                </div>

                <div class="max-w-[450px] w-full h-auto rounded-md z-50 relative cursor-pointer image-container"
                    data-aos="zoom-in" data-aos-duration="500">
                    <img src="/images/img/12124534.jpg" alt="Image"
                        class="w-full h-auto rounded-md hover:opacity-70 gallery-image">
                    <div
                        class="absolute inset-0 rounded-md bg-gradient-to-b from-[#224e4e] to-[#012020] opacity-0 hover:opacity-70 flex justify-center items-center transition-opacity duration-300">
                        <img src="/images/icon/eye.png" alt="View Icon"
                            class="w-auto h-auto max-w-12 max-h-12 opacity-100 view-icon">
                        VIEW
                    </div>
                </div>

            </div>

        </div>
    </section>

    <div class="ss:pb-12 pb-6">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.7658682734395!2d102.83243147514484!3d16.48738888425428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228ae99b598b43%3A0x56b4538d2ace7037!2z4Lij4Lix4Lia4LiX4Liz4LmA4Lin4LmH4Lia4LmE4LiL4LiV4LmMIOC4guC4reC4meC5geC4geC5iOC4mSBXWU5OU09GVCBTT0xVVElPTiBDTy4sTFRELg!5e0!3m2!1sth!2sth!4v1738038360926!5m2!1sth!2sth"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Popup GALLERY -->
    <div id="image-popup" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-[100] ">
        <div
            class="relative bg-transparent xl:max-w-[800px] sm:max-w-[700px] ss:max-w-[500px] max-w-[400px] max-h-[80%] px-4">
            <div class="swiper mySwiper_img text-black ">
                <div class="swiper-wrapper  ">
                    <!-- ใส่รูปในแต่ละ slide -->

                    <div class="swiper-slide ">
                        <img src="/images/img/786867867.jpg" alt="Image" class="w-full h-full ">
                    </div>
                    <div class="swiper-slide ">
                        <img src="/images/img/12124534.jpg" alt="Image" class="w-full h-full ">
                    </div>
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
    @vite('resources/js/contact/swiper.js')
@endsection
