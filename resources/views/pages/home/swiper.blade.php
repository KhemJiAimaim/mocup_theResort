<div class="swiper mySwiper w-full">
    <div class="swiper-wrapper">
        @for ($i = 0; $i < 3; $i++)
            <div class="swiper-slide relative ">
                <div class="absolute inset-0 z-50 flex flex-col justify-center items-center gap-y-4  max-sm:gap-y-1 max-w-[1536px] m-auto">
                    <p class="text-white text-6xl max-xl:text-3xl  font-bold text-center" data-aos="zoom-in"
                        data-aos-duration="3000">
                    <div class="flex flex-col sm:gap-y-8">
                        <p class="font-light font-afacadFlux sm:text-3xl text-base text-[#CDB59D] tracking-widest"
                            data-aos="zoom-in" data-aos-duration="3000">WELCOME TO
                        </p>
                        <p class="font-robotoSerif xl:text-8xl md:text-6xl text-3xl uppercase" data-aos="zoom-in"
                            data-aos-duration="3000">THE RESORT</p>
                        <p class="font-light font-afacadFlux sm:w-5/6 w-4/5 m-auto sm:text-2xl text-base"
                            data-aos="zoom-in" data-aos-duration="3000">
                            Lorem ipsum dolor sit amet consectetur. In quam maecenas nibh vestibulum blandit tempor
                            adipiscing fermentum consequat.</p>
                    </div>
                    </p>
                </div>

                <div class="relative w-full h-full">
                    <img src="/images/banner/Group 1.png" alt="Banner Image" class="w-full h-full object-cover">
                    <div class="absolute top-0 left-0 w-full h-full bg-black opacity-25"></div>
                </div>

            </div>
        @endfor
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
</div>
