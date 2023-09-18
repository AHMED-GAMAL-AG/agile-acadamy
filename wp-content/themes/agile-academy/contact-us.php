<?php 

// Template Name: Contact Us

get_header();

?>


<body class="box-border">
    <nav class="bg-[#033A54] fixed w-full z-50">
        <div class="xl:px-[80px] lg:px-[40px] px-[16px] py-[20px] flex flex-wrap items-center justify-between  ">
            <div class="flex">
                <div class="lg:w-[236px] sm:w-[176px] h-8 md:mr-2">
                    <a href="index.html" class="">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Logo.png" class=" lg:w-[236px] sm:w-[176px] h-8 " alt="Logo" />
                    </a>
                </div>

            </div>
            <div class="flex lg:order-2 ">
                <button type="button" data-collapse-toggle="search-area" aria-controls="search-area"
                    aria-expanded="false"
                    class="lg:hidden text-white dark:text-white hover:bg-white hover: text-[#033A54]  focus:text-[#033A54] focus:bg-white rounded-[4px]  border border-white  mr-[5px] text-sm p-2.5  ">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
                <div class="relative hidden lg:block mr-[16px]">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                        <svg class="w-4 h-4 text-[#8195A6] dark:text-white " aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>

                        <span class="sr-only">Search icon</span>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block lg:w-[212px] p-2 pl-10 border border-white rounded-[4px] text-[#8195A6] bg-[#033A54] text-[14px] focus:border-white dark:focus:border-white dark:border-white"
                        style="font-family: Open_Sans; font-weight: 400;" placeholder="Search...">

                </div>
                <div class="hidden lg:block" id="login">
                </div>
                <button onclick="hideHeader()" data-collapse-toggle="navbar-search" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white  lg:hidden hover:bg-white hover: text-[#033A54]  focus:text-[#033A54] focus:bg-white rounded-[4px]  border border-white"
                    aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class=" items-center  hidden w-full   lg:flex lg:w-auto lg:order-2" id="search-area">
                <div class="relative mt-3 lg:hidden ">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-[#8195A6] dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>

                    <input type="text" id="search-navbar"
                        class="block w-full p-2 pl-10 text-[16px] text-white border border-white rounded-[4px] bg-[#033A54]  focus:border-white  dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-blue-500 dark:focus:border-white"
                        placeholder="Typing...">

                </div>
            </div>
            <div class=" items-center  hidden w-full   lg:flex lg:w-auto lg:order-1" id="navbar-search">
                <!-- <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>

                    <input type="text" id="search-navbar"
                        class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-white dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search...">

                </div> -->
                <ul class="flex flex-col p-4 lg:p-0 mt-4  lg:flex-row lg:space-x-4 lg:mt-0  text-white text-[14px]"
                    style="font-family: Open_Sans;">
                    <li class="lg:px-0 lg:py-0 px-[16px] py-[10px]">
                        <div class="relative lg:hidden">
                            <div x-data="{ open: false }">
                                <button @click="open = !open" class="btn flex items-center justify-between w-full"
                                    style="font-family: Open_Sans_Bold; ">Services <svg class="w-2.5 h-2.5 ml-2.5"
                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <ul x-show="open" @click.away="open = false" class="dropdown-menu">
                                    <li>
                                        <a href="service1.html"
                                            class="block  py-2 px-2 hover:bg-white hover:text-[#033A54]"
                                            style="font-family: Open_Sans; font-weight: 400;">Enterprise Business
                                            Agility Transformation</a>
                                    </li>
                                    <li>
                                        <a href="service2.html"
                                            class="block  py-2 px-2 hover:bg-white hover:text-[#033A54]"
                                            style="font-family: Open_Sans; font-weight: 400;">Coaching Services</a>
                                    </li>
                                    <li>
                                        <a href="service4.html"
                                            class="block  py-2 px-2 hover:bg-white hover:text-[#033A54]"
                                            style="font-family: Open_Sans; font-weight: 400;">Agile Readiness &
                                            Health Assessment</a>
                                    </li>
                                    <li>
                                        <a href="service5.html"
                                            class="block  py-2  px-2 hover:bg-white hover:text-[#033A54]"
                                            style="font-family: Open_Sans; font-weight: 400;">Capability Building
                                            Programs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden lg:block">
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                                class="btn flex items-center justify-between w-full text-[14px]"
                                style="font-family:Open_Sans_Bold">Services <svg class="w-2.5 h-2.5 ml-2.5"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <div id="dropdownNavbar"
                                class="z-10 hidden font-normal bg-white rounded-[4px] shadow w-[283px] dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-[#4F5B66]" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="service1.html" class="block px-4 py-2 hover:bg-[#F2FBFF]"
                                            style="font-family: Open_Sans; font-weight: 400;">Enterprise Business
                                            Agility Transformation</a>
                                    </li>
                                    <li>
                                        <a href="service2.html" class="block px-4 py-2 hover:bg-[#F2FBFF]"
                                            style="font-family: Open_Sans; font-weight: 400;">Coaching Services</a>
                                    </li>
                                    <li>
                                        <a href="service4.html" class="block px-4 py-2 hover:bg-[#F2FBFF]"
                                            style="font-family: Open_Sans; font-weight: 400;">Agile Readiness &
                                            Health Assessment</a>
                                    </li>
                                    <li>
                                        <a href="service5.html" class="block px-4 py-2 hover:bg-[#F2FBFF] "
                                            style="font-family: Open_Sans; font-weight: 400;">Capability Building
                                            Programs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </li>
                    <li class="lg:px-0 lg:py-0 px-[16px] py-[10px]">

                        <div class="relative lg:hidden">
                            <div x-data="{ open: false }">
                                <button @click="open = !open" class="btn flex items-center justify-between w-full"
                                    style="font-family: Open_Sans_Bold; ">Training &
                                    Education <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <ul x-show="open" @click.away="open = false" class="dropdown-menu">
                                    <li>
                                        <a href="courses-catalog.html"
                                            class="block  py-2 px-2 hover:bg-white hover:text-[#033A54] hover:round-[4px]">Courses
                                            catalog</a>
                                    </li>
                                    <li>
                                        <a href="cources-calender.html"
                                            class="block  py-2 px-2 hover:bg-white hover:text-[#033A54] hover:round-[4px]">Courses
                                            calendar</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="hidden lg:block">
                            <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2"
                                class="flex items-center justify-between w-full text-white text-[14px]"
                                style="font-family: Open_Sans_Bold; ">Training &
                                Education <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar2"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-[4px] shadow w-[283px] dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-white"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="courses-catalog.html"
                                            class=" text-[#4F5B66] text-[16px] block px-4 py-2 hover:bg-[#F2FBFF]"
                                            style="font-family: Open_Sans; font-weight: 400;">Courses catalog</a>
                                    </li>
                                    <li>
                                        <a href="cources-calender.html"
                                            class=" text-[#4F5B66] text-[16px] block px-4 py-2 hover:bg-[#F2FBFF]"
                                            style="font-family: Open_Sans; font-weight: 400;">Courses calendar</a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </li>

                    <li class="lg:px-0 lg:py-0 px-[16px] py-[10px]">
                        <a href="about-us.html" class="block  text-white text-[14px]" style="font-family: Open_Sans_Bold; ">About
                            us</a>
                    </li>

                </ul>
                <div class="block lg:hidden" id="menu-login">


                </div>
            </div>
        </div>
    </nav>
    <header id="header" class=" bg-cover  bg-[#033A54] h-[340px]  flex flex-col  w-[100%]">
        <div class="xl:p-[80px] lg:px-[48px] lg:py-[80px] py-[40px] px-[16px]">
            <div class="flex flex-row pb-[16px] lg:pt-[0px] pt-[50px]">
                <p class="text-[#C34849] hover:text-[#923031] text-[14px] pr-[4px]"
                    style="font-family: Open_Sans_Bold;">Home</p>
                <p class="text-white text-[14px]" style="font-family: Open_Sans_Bold;"> > Link 3</p>
            </div>
            <p class="text-white lg:text-[56px] text-[32px] " style="font-family: Merriweather_Black;">
                Contact us</p>
        </div>

    </header>
    <section class="xl:p-[80px] lg:px-[40px] lg:py-[80px] py-[40px] px-[16px]">
        <div class="flex lg:flex-row flex-col ">
            <div class="lg:order-1 order-2 lg:mr-[40px]">
                <form class="flex flex-col">
                    <input class="border border-[#CAD6E0] p-[16px] lg:w-[620px] rounded-[4px] mb-[24px] focus:border-[#033A54]"placeholder="Name">
                    <input class="border border-[#CAD6E0] p-[16px] lg:w-[620px] rounded-[4px] mb-[24px]"placeholder="Email">
        
                    <input class="border border-[#CAD6E0] p-[16px] lg:w-[620px] rounded-[4px] mb-[24px]"placeholder="Subject">
        
                    <input class="border border-[#CAD6E0] p-[16px] lg:w-[620px] rounded-[4px] mb-[24px]"placeholder="Company">
                    <textarea  class="border border-[#CAD6E0] p-[16px] lg:w-[620px] h-[120px] rounded-[4px] mb-[40px]"placeholder="Message"></textarea>
                    <button type="button"
                    class="text-white rounded-[4px] text-[16px]  bg-[#C34849] hover:bg-[#923031] border border-white  md:w-[191px] w-full text-center  py-[10px] md:px-[32px] px-[24px]"
                    style="font-family:Open_Sans_Bold; ">Send message</button>
        
        
                </form>
            </div>
            <div class="lg:order-2 order-1 mb-[40px]">
                <p class="text-[24px] pb-[16px]" style="font-family:Merriweather_Bold;">Email Us</p>
                <p class="text-start text-[16px] text-[#4F5B66] lg:mb-[56px] mb-[24px] " style="font-family:Open_Sans;">info@agileacademy.co</p>
                <p class="text-[24px] pb-[16px]" style="font-family:Merriweather_Bold;">Office Address</p>
                <p class="text-start text-[16px] text-[#4F5B66]  " style="font-family:Open_Sans;">Agile Academy, DMCC Business Center Level No 1, Jewellery & Complex 3 JLT, Dubai, United Arab Emirates</p>

            </div>
        </div>
    </section>


</body>

</html>