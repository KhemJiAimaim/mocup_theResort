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
            <div class="flex flex-col gap-y-8">
                <div class="flex flex-col justify-center items-center gap-y-6">
                    <div class=" w-44">
                        <img src="/images/logo/Mask group.png" alt="">
                    </div>

                    <p class="font-[500] tracking-widest sm:text-3xl text-base">
                        OUR ROOM
                    </p>

                    <div class="border-t border-2 border-[#CDB59D] max-w-[50%] my-2 w-full rounded-full"></div>

                    <p class="font-light sm:text-2xl text-base text-center max-w-[80%] w-full">
                        Lorem ipsum dolor sit amet consectetur. Elementum et pellentesque habitant id. Id feugiat eget
                        bibendum felis eget. Velit aliquam cras non elementum nunc luctus duis vitae sem. Quam iaculis velit
                        commodo aliquam vitae dignissim sit. Sed id adipiscing.
                    </p>
                </div>

                {{-- img --}}
                <div class="grid grid-cols-4">

                </div>
            </div>
        </section>

    </div>
@endsection

@section('script')
    @vite('resources/js/home/swiper.js')
@endsection
