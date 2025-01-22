<nav id="navbar"
    class="fixed w-full z-[99] mx-auto bg-transparent text-white items-center py-2 max-xl:px-2 transition-all duration-100 rounded-b-lg">
    <div class="xl:w-4/5 mx-auto flex justify-between gap-2 items-center">
        <div class="lg:w-1/6 flex justify-start sm:text-xl text-base font-light font-afacadFlux sm:p-2">
            <p>LOGO HERE</p>
        </div>

        <button data-collapse-toggle="navbar-dropdown" type="button"
            class="mobile-menu-button inline-flex items-center py-2 w-12 h-10 justify-center lg:hidden"
            aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="80"
                onclick="this.classList.toggle('active')">
                <path class="line top"
                    d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
                <path class="line middle" d="m 30,50 h 40" />
                <path class="line bottom"
                    d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
            </svg>
        </button>


        {{-- MENU --}}
        <div class="flex min-w-[50%] mx-auto justify-between xl:text-lg text-sm items-center max-lg:hidden font-kanit font-[300] ">
            <a href="" class="flex justify-center min-w-[100px]">
                <div id="text_menu"
                    class="relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                    HOME
                </div>
            </a>
            <a href="" class="flex justify-center min-w-[70px]">
                <div
                    class="relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                    ROOM
                </div>
            </a>
            <a href="" class="flex justify-center min-w-[70px]">
                <div
                    class="relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                    SERVICE
                </div>
            </a>
            <a href="" class="flex justify-center min-w-[70px]">
                <div
                    class="relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                    CONTACT
                </div>
            </a>
            <a href="" class="flex justify-center min-w-[70px]">
                <div
                    class="relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                    GALLERY
                </div>
            </a>
            <a href="" class="flex justify-center min-w-[70px]">
                <div
                    class="relative text-white hover:text-white cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                    ABOUT US
                </div>
            </a>
        </div>

        {{-- EN TH --}}
        <div class="w-1/6 justify-end  max-lg:hidden relative">
            <div id="lang-EN" class="w-[130px] rounded-md bg-[rgba(0,0,0,0.1)] p-4 flex flex-col gap-y-2">
                <div class="flex justify-between items-center">
                    <div class="w-[40px] h-full">
                        <img src="/images/icon/united-states 1.png" alt="" class="w-full h-full">
                    </div>
                    <p class=" text-white font-kanit font-[300] xl:text-lg text-sm">EN</p>
                    <div class="w-[15px] h-full flex justify-center cursor-pointer hover:scale-110" id="open_leng_ENTH">
                        <img src="/images/icon/ep_arrow-up.png" alt=""
                            class="w-full h-full transition-transform duration-300 ease-in-out">
                    </div>
                </div>
            </div>
            <!-- เมนูภาษา -->
            <div class="w-[130px] rounded-md bg-slate-100 p-4 absolute top-full left-0 mt-2 hidden z-10 scale-95"
                id="leng_ENTH">
                <div class="flex flex-col justify-start gap-y-2">
                    <div
                        class="flex justify-start items-center gap-2 cursor-pointer relative transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D] before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:-bottom-2 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:-bottom-2 after:right-[50%]">
                        <div class="w-[40px] h-full">
                            <img src="/images/icon/united-states 1.png" alt="" class="w-full h-full" />
                        </div>
                        <p class=" text-black font-kanit font-[400] xl:text-lg text-sm">EN</p>
                    </div>
                    <hr />
                    <div
                        class="flex justify-start items-center gap-2 cursor-pointer relative transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D] before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:-bottom-2 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:-bottom-2 after:right-[50%]">
                        <div class="w-[40px] h-full">
                            <img src="/images/icon/cif_th.png" alt="" class="w-full h-full" />
                        </div>
                        <p class=" text-black font-kanit font-[400] xl:text-lg text-sm">TH</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</nav>


{{-- mobile --}}
<div class="m-nav inset-0 shadow-md overflow-hidden z-[100] flex justify-end pt-6 fixed bg-[rgba(7,53,70,0.75)] ">
    <div class="w-[50%] max-sm:w-[80%] h-full bg-slate-50 p-2 px-4 flex flex-col ">
        <div class="flex justify-end">
            <div class="w-6 h-6 cursor-pointer hover:scale-110 transition-opacity duration-200" id="close-cate">
                <img src="/images/icon/close-bold-svgrepo-com.png" alt="Close Icon" class="w-full h-full">
            </div>
        </div>
        <div class="flex flex-col gap-y-8 flex-grow">
            {{-- MENU --}}
            <div class="w-full flex justify-start flex-col text-base gap-y-2 font-kanit font-normal">
                <a href="" class="flex justify-start ">
                    <div
                        class="relative text-black  hover:text-black  cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">
                        HOME
                    </div>
                </a>
                <hr>
                <a href="" class="flex justify-start ">
                    <div
                        class="relative text-black  hover:text-black  cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                        ROOM
                    </div>
                </a>
                <hr>
                <a href="" class="flex justify-start ">
                    <div
                        class="relative text-black  hover:text-black  cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                        SERVICE
                    </div>
                </a>
                <hr>
                <a href="" class="flex justify-start ">
                    <div
                        class="relative text-black  hover:text-black  cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                        CONTACT
                    </div>
                </a>
                <hr>
                <a href="" class="flex justify-start ">
                    <div
                        class="relative text-black  hover:text-black  cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                        GALLERY
                    </div>
                </a>
                <hr>
                <a href="" class="flex justify-start ">
                    <div
                        class="relative text-black  hover:text-black  cursor-pointer transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D]  before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:bottom-0 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:bottom-0 after:right-[50%]">

                        ABOUT US
                    </div>
                </a>
                <hr>
            </div>

            {{-- EN TH --}}
            <div id="lang-EN" class="w-full  rounded-md bg-[rgba(0,0,0,0.1)] p-2 flex justify-between gap-2">
                <div class="flex justify-start gap-4 items-center w-full cursor-pointer relative transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D] before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:-bottom-2 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:-bottom-2 after:right-[50%]">
                    <div class="w-[40px] h-full">
                        <img src="/images/icon/united-states 1.png" alt="" class="w-full h-full">
                    </div>
                    <p class="text-base text-black font-kanit font-normal">EN</p>
                    
                </div>
                <div class="border-l border-white h-8 mx-2"></div>
                <div class="flex justify-start gap-4 items-center w-full cursor-pointer relative transition-all ease-in-out before:transition-[width] before:ease-in-out before:duration-700 before:absolute before:bg-[#CDB59D] before:origin-center before:h-[2px] before:w-0 hover:before:w-[50%] before:-bottom-2 before:left-[50%] after:transition-[width] after:ease-in-out after:duration-700 after:absolute after:bg-[#CDB59D] after:origin-center after:h-[2px] after:w-0 hover:after:w-[50%] after:-bottom-2 after:right-[50%]">
                    <div class="w-[40px] h-full">
                        <img src="/images/icon/cif_th.png" alt="" class="w-full h-full">
                    </div>
                    <p class="text-base text-black font-kanit font-normal">TH</p>
                </div>
            </div>

        </div>
    </div>
</div>

@vite('resources/js/navbar/navbarM.js')
@vite('resources/js/navbar/navbar.js')
