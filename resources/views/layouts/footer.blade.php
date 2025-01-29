<footer class="uppercase font-afacadFlux">
    <div class="relative">
        <div class="absolute w-full h-full">
            <img src="/images/banner/Group 1.png" alt="Background Image" class="w-full h-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-25"></div>
        </div>

        <!-- Content -->
        <div class="relative max-w-[1536px] m-auto z-10 flex justify-center  text-white lg:py-12 py-4">
            <div class="sm:grid place-items-center sm:grid-cols-3 flex flex-col w-full items-start ">

                <div class="p-4 flex flex-col justify-start sm:items-start items-center w-full">
                    <p class="sm:text-2xl text-xl">Logo here</p>
                    <p class="font-[300] sm:text-lg text-sm sm:text-left text-center w-full py-4">
                        Lorem ipsum dolor sit amet consectetur. Facilisis vel pellentesque pretium fringilla venenatis
                        sed. Maecenas id urna curabitur consequat. Dictumst nisl lacus volutpat.
                    </p>

                    <div class="flex justify-start gap-4">

                        <a href="https://www.facebook.com/" title="Facebook" class="w-10 h-auto group cursor-pointer"
                            target="_balnk">
                            <img src="/images/icon/Group 272.png" alt="Icon"
                                class="w-full group-hover:filter group-hover:invert group-hover:saturate-100 group-hover:hue-rotate-[0deg] group-hover:brightness-[1] group-hover:contrast-[1]">
                        </a>

                        <a href="#" title="Line" class="w-10 h-auto group cursor-pointer" target="_balnk">
                            <img src="/images/icon/Group 269.png" alt="Icon"
                                class="w-full group-hover:filter group-hover:invert group-hover:saturate-100 group-hover:hue-rotate-[0deg] group-hover:brightness-[1] group-hover:contrast-[1]">
                        </a>

                        <a href="#" title="Instagram" class="w-10 h-auto group cursor-pointer" target="_balnk">
                            <img src="/images/icon/Group 271.png" alt="Icon"
                                class="w-full group-hover:filter group-hover:invert group-hover:saturate-100 group-hover:hue-rotate-[0deg] group-hover:brightness-[1] group-hover:contrast-[1]">
                        </a>

                        <a href="https://www.youtube.com/" title="Youtube" class="w-10 h-auto group cursor-pointer"
                            target="_balnk">
                            <img src="/images/icon/Group 270.png" alt="Icon"
                                class="w-full group-hover:filter group-hover:invert group-hover:saturate-100 group-hover:hue-rotate-[0deg] group-hover:brightness-[1] group-hover:contrast-[1]">
                        </a>

                    </div>
                </div>

                <div class="p-4 sm:border-r-2  border-[#CDB59D] grid grid-cols-2 place-items-center w-full items-start h-full">
                    <div class="flex flex-col gap-6 ">
                        <a href="/" class="{{ request()->is("/") ? 'border-b-2 border-[#CDB59D]' : '' }} font-[500] tracking-widest lg:text-xl sm:text-lg text-base uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">Home</a>
                        <a href="/room" class="{{ request()->routeIs('room.index') || request()->routeIs('room.detail') ? 'border-b-2 border-[#CDB59D]' : '' }} font-[500] tracking-widest lg:text-xl sm:text-lg text-base uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">ROOM</a>
                        <a href="/service" class="{{ request()->is("service") ? 'border-b-2 border-[#CDB59D]' : '' }} font-[500] tracking-widest lg:text-xl sm:text-lg text-base uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">SERVICE</a>
                    </div>
                    <div class="flex flex-col gap-6 ">
                        <a href="/contact" class="{{ request()->is("contact") ? 'border-b-2 border-[#CDB59D]' : '' }} font-[500] tracking-widest lg:text-xl sm:text-lg text-base uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">contact</a>
                        <a href="/gallery" class="{{ request()->is("gallery") ? 'border-b-2 border-[#CDB59D]' : '' }} font-[500] tracking-widest lg:text-xl sm:text-lg text-base uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">GALLERY</a>
                        <a href="/about-us" class="{{ request()->is("about-us") ? 'border-b-2 border-[#CDB59D]' : '' }} font-[500] tracking-widest lg:text-xl sm:text-lg text-base uppercase relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">ABOUT US</a>

                    </div>
                </div>
                <div class="border-t border border-[#CDB59D] my-2 w-[80%] m-auto rounded-full sm:hidden "></div>


                <div class="p-4 flex flex-col sm:justify-start sm:items-start items-center justify-center gap-4 w-full lg:pl-12">
                    <p class="font-[500] tracking-widest lg:text-2xl sm:text-xl text-lg uppercase">CONTACT INFORMATION
                    </p>
                        <a href="tel:000-000-0000" class="flex justify-start gap-4 sm:w-full w-56 cursor-pointer ">
                            <div class="w-8 h-auto">
                                <img src="/images/icon/lucide_phone-call.png" alt="" class="w-full h-full">
                            </div>
                            <p class="font-[300] sm:text-lg text-base sm:text-left text-lext w-full relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">099-999-xxxx</p>
                        </a>
                        <a href="mailto:THeresort@gmail.com" class="flex justify-start gap-4 sm:w-full w-56 cursor-pointer">
                            <div class="w-8 h-auto">
                                <img src="/images/icon/ic_outline-email.png" alt="" class="w-full h-full">
                            </div>
                            <p class="font-[300] sm:text-lg text-base sm:text-left text-left w-full relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">THeresort@GMAIL.COM</p>
                        </a>
                </div>
            </div>
        </div>
    </div>

    <div class="relative w-full p-1 bg-[#0F1D20] flex justify-center items-center">
        <p class="text-[#CDB59D] sm:text-lg text-base font-afacadFlux font-[300] uppercase">
            COPYRIGHT © 2025 Theresort.com
        </p>
    </div>
</footer>
