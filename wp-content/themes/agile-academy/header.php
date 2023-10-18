<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agile_academy
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/owlcarousel/dist/assets/owl.theme.default.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Agile Academy</title>

    <?php wp_head(); ?>
</head>

<body class="box-border">

    <nav class="bg-[#033A54] fixed w-full z-50">
        <div class="xl:px-[80px] lg:px-[40px] px-[16px] py-[20px] flex flex-wrap items-center justify-between  ">
            <div class="flex">
                <div class="lg:w-[236px] sm:w-[176px] h-8 md:mr-2">
                    <a href="<?php get_home_url() ?>/Home Page" class="">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/Logo.png" class=" lg:w-[236px] sm:w-[176px] h-8 " alt="Logo" />
                    </a>
                </div>

            </div>
            <div class="flex lg:order-2 ">
                <button type="button" data-collapse-toggle="search-area" aria-controls="search-area" aria-expanded="false" class="lg:hidden text-white dark:text-white hover:bg-white hover: text-[#033A54]  focus:text-[#033A54] focus:bg-white rounded-[4px]  border border-white  mr-[5px] text-sm p-2.5  ">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
                <div class="relative hidden lg:block mr-[16px]">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                        <svg class="w-4 h-4 text-[#8195A6] dark:text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>

                        <span class="sr-only">Search icon</span>
                    </div>
                    <input type="text" id="search-navbar" class="block lg:w-[212px] p-2 pl-10 border border-white rounded-[4px] text-[#8195A6] bg-[#033A54] text-[14px] focus:border-white dark:focus:border-white dark:border-white" style="font-family: Open_Sans; font-weight: 400;" placeholder="Search...">
                    <ul id="autocomplete-list" class="absolute left-0 z-10 mt-2 w-[403px] bg-white  shadow-md hidden">
                        <!-- Autocomplete results will go here -->
                    </ul>

                </div>
                <div class="hidden lg:block" id="login">
                </div>
                <button onclick="hideHeader()" data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white  lg:hidden hover:bg-white hover: text-[#033A54]  focus:text-[#033A54] focus:bg-white rounded-[4px]  border border-white" aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class=" items-center  hidden w-full   lg:flex lg:w-auto lg:order-2" id="search-area">
                <div class="relative mt-3 lg:hidden ">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-[#8195A6] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>

                    <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-[16px] text-white border border-white rounded-[4px] bg-[#033A54]  focus:border-white  dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-blue-500 dark:focus:border-white" placeholder="Typing...">

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
                <ul class="flex flex-col p-4 lg:p-0 mt-4  lg:flex-row lg:space-x-4 lg:mt-0  text-white text-[14px]" style="font-family: Open_Sans;">
                    <li class="lg:px-0 lg:py-0 px-[16px] py-[10px]">
                        <div class="relative lg:hidden">
                            <div x-data="{ open: false }">
                                <button @click="open = !open" class="btn flex items-center justify-between w-full" style="font-family: Open_Sans_Bold; ">Services <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <ul x-show="open" @click.away="open = false" class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo home_url() ?>/service1" class="block  py-2 px-2 hover:bg-white hover:text-[#033A54]" style="font-family: Open_Sans; font-weight: 400;">Enterprise Business
                                            Agility Transformation</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo home_url() ?>/service2" class="block  py-2 px-2 hover:bg-white hover:text-[#033A54]" style="font-family: Open_Sans; font-weight: 400;">Coaching Services</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo home_url() ?>/service4" class="block  py-2 px-2 hover:bg-white hover:text-[#033A54]" style="font-family: Open_Sans; font-weight: 400;">Agile Readiness &
                                            Health Assessment</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo home_url() ?>/service5" class="block  py-2  px-2 hover:bg-white hover:text-[#033A54]" style="font-family: Open_Sans; font-weight: 400;">Capability Building
                                            Programs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden lg:block">
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="btn flex items-center justify-between w-full text-[14px]" style="font-family:Open_Sans_Bold">Services <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-white rounded-[4px] shadow w-[283px] dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-[#4F5B66]" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="<?php echo home_url() ?>/service1" class="block px-4 py-2 hover:bg-[#F2FBFF]" style="font-family: Open_Sans; font-weight: 400;">Enterprise Business
                                            Agility Transformation</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo home_url() ?>/service2" class="block px-4 py-2 hover:bg-[#F2FBFF]" style="font-family: Open_Sans; font-weight: 400;">Coaching Services</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo home_url() ?>/service4" class="block px-4 py-2 hover:bg-[#F2FBFF]" style="font-family: Open_Sans; font-weight: 400;">Agile Readiness &
                                            Health Assessment</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo home_url() ?>/service5" class="block px-4 py-2 hover:bg-[#F2FBFF] " style="font-family: Open_Sans; font-weight: 400;">Capability Building
                                            Programs</a>
                                    </li>
                                </ul>
                            </div>
                        </div>


                    </li>
                    <li class="lg:px-0 lg:py-0 px-[16px] py-[10px]">

                        <div class="relative lg:hidden">
                            <div x-data="{ open: false }">
                                <button @click="open = !open" class="btn flex items-center justify-between w-full" style="font-family: Open_Sans_Bold; ">Training &
                                    Education <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                    </svg></button>
                                <ul x-show="open" @click.away="open = false" class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo home_url() ?>/courses-catalog" class="block  py-2 px-2 hover:bg-white hover:text-[#033A54] hover:round-[4px]">Courses
                                            catalog</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo home_url() ?>/courses-calendar" class="block  py-2 px-2 hover:bg-white hover:text-[#033A54] hover:round-[4px]">Courses
                                            calendar</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="hidden lg:block">
                            <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2" class="flex items-center justify-between w-full text-white text-[14px]" style="font-family: Open_Sans_Bold; ">Training &
                                Education <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar2" class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-[4px] shadow w-[283px] dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-white" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="<?php echo home_url() ?>/courses-catalog" class=" text-[#4F5B66] text-[16px] block px-4 py-2 hover:bg-[#F2FBFF]" style="font-family: Open_Sans; font-weight: 400;">Courses catalog</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo home_url() ?>/courses-calendar" class=" text-[#4F5B66] text-[16px] block px-4 py-2 hover:bg-[#F2FBFF]" style="font-family: Open_Sans; font-weight: 400;">Courses calendar</a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </li>

                    <li class="lg:px-0 lg:py-0 px-[16px] py-[10px]">
                        <a href="<?php echo home_url() ?>/about-us" class="block  text-white text-[14px]" style="font-family: Open_Sans_Bold; ">About
                            us</a>
                    </li>

                </ul>
                <div class="block lg:hidden" id="menu-login">


                </div>
            </div>
        </div>
        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative  max-w-md max-h-full w-[400px] ">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-[24px]">
                        <p class="mb-[8px] text-[24px] text-[#0F1F26]" style="font-family:Merriweather_Bold ;">Log in</p>
                        <div class="flex">
                            <p class="text-[16px] text-[#4F5B66] pr-[4px]" style="font-family: Open_Sans;">Don't have an account?</p>
                            <button data-modal-hide="authentication-modal" data-modal-show="register-modal" data-modal-target="register-modal">
                                <p class="text-[#C34849] text-[14] underline" style="font-family:OpenSans_Bold;">Create account</p>
                            </button>
                        </div>
                        <form class="pt-[24px]" action="#">
                            <div class="pb-[24px]">
                                <input type="email" name="email" id="email" class="border border-[#CAD6E0] rounded-[4px] w-full" style="font-family: Open_Sans;" placeholder="Email" required>
                            </div>


                            <div class="relative" x-data="{ isVisible: false }">
                                <div class="absolute flex right-4 mt-1.5 items-center ml-2 h-full">
                                    <button class="pb-[32px] block focus:outline-none" @click="$dispatch('visibility'); isVisible = !isVisible;">
                                        <div x-show="isVisible">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.9998 9C11.2058 9.00524 10.4457 9.32299 9.88427 9.88447C9.3228 10.4459 9.00504 11.206 8.9998 12C8.9998 13.642 10.3578 15 11.9998 15C13.6408 15 14.9998 13.642 14.9998 12C14.9998 10.359 13.6408 9 11.9998 9Z" fill="#033A54" />
                                                <path d="M11.9998 5C4.3668 5 2.0728 11.617 2.0518 11.684L1.9458 12L2.0508 12.316C2.0728 12.383 4.3668 19 11.9998 19C19.6328 19 21.9268 12.383 21.9478 12.316L22.0538 12L21.9488 11.684C21.9268 11.617 19.6328 5 11.9998 5ZM11.9998 17C6.6488 17 4.5758 13.154 4.0738 12C4.5778 10.842 6.6518 7 11.9998 7C17.3508 7 19.4238 10.846 19.9258 12C19.4218 13.158 17.3478 17 11.9998 17Z" fill="#033A54" />
                                            </svg>
                                        </div>
                                        <div x-show="!isVisible">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M12.0002 19C12.9462 19 13.8102 18.897 14.5982 18.719L12.8412 16.962C12.5682 16.983 12.2912 17 12.0002 17C6.64922 17 4.57622 13.154 4.07422 12C4.45117 11.1588 4.96027 10.3833 5.58222 9.70297L4.18422 8.30497C2.64622 9.97197 2.06322 11.651 2.05222 11.684C1.98324 11.8893 1.98324 12.1116 2.05222 12.317C2.07322 12.383 4.36722 19 12.0002 19ZM12.0002 4.99997C10.1632 4.99997 8.65422 5.39597 7.39622 5.98097L3.70722 2.29297L2.29322 3.70697L20.2932 21.707L21.7072 20.293L18.3882 16.974C21.0022 15.023 21.9352 12.359 21.9492 12.317C22.0182 12.1116 22.0182 11.8893 21.9492 11.684C21.9272 11.617 19.6332 4.99997 12.0002 4.99997ZM16.9722 15.558L14.6922 13.278C14.8822 12.888 15.0002 12.459 15.0002 12C15.0002 10.359 13.6412 8.99997 12.0002 8.99997C11.5412 8.99997 11.1122 9.11797 10.7232 9.30897L8.91522 7.50097C9.90774 7.16038 10.9509 6.99097 12.0002 6.99997C17.3512 6.99997 19.4242 10.846 19.9262 12C19.6242 12.692 18.7602 14.342 16.9722 15.558Z" fill="#033A54" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                                <label for="password1" class="block">
                                    <input type="password" id="password1" placeholder="password" minlength="5" style="font-family: Open_Sans;" class="border border-[#CAD6E0] rounded-[4px] w-full" @visibility.window="$el.type = ($el.type == 'password') ? 'text' : 'password' ">
                                    <p class="text-xs m-1 text-pink-700 invisible peer-invalid:visible" style="font-family: Open_Sans;">less than 5 characters</p>
                                </label>
                            </div>
                            <button data-modal-hide="authentication-modal" data-modal-show="forgetPassword-modal" data-modal-target="forgetPassword-modal">
                                <p class=" pb-[40px] text-[#C34849] text-[14] underline" style="font-family:OpenSans_Bold;">Forgot password?</p><button>

                                    <button type="submit" class="text-white rounded-[4px] text-[18px] bg-[#C34849] hover:bg-[#923031] w-full text-center  py-[10px] px-[32px] " style="font-family:Open_Sans_Bold; ">Log in</button>
                                    <div class="flex flex-row ">
                                        <hr class=" w-[45%] my-[28px] border-[#CAD6E0]">
                                        <p class="text-[#CAD6E0] my-[16px] px-[5px] text-[14px] " style="font-family:Open_Sans;">Or</p>
                                        <hr class=" w-[45%] my-[28px] border-[#CAD6E0]">
                                    </div>
                                    <button class="text-[#0F1F26] rounded-[4px] lg:text-[18px] text-[14px] bg-white hover:bg-[#0F1F26] hover:text-white w-full text-center  py-[10px] px-[16px]  border border-[#CAD6E0] mb-[24px]" style="font-family:Open_Sans_Bold; ">
                                        <div class="flex "><img class="pr-[39px]" src="<?php echo get_template_directory_uri() ?>/assets/images/Google-colored-icon.svg">
                                            <p class="text-center"> Continue with Google</p>
                                        </div>
                                    </button>
                                    <button class="text-[#0F1F26] rounded-[4px] lg:text-[18px] text-[14px] bg-white hover:bg-[#0F1F26] hover:text-white w-full text-center  py-[10px] px-[16px]  border border-[#CAD6E0] mb-[24px]" style="font-family:Open_Sans_Bold; ">
                                        <div class="flex "><img class="pr-[39px]" src="<?php echo get_template_directory_uri() ?>/assets/images/Facebook-Colored-icon.svg">
                                            <p class="text-center"> Continue with Facebook</p>
                                        </div>
                                    </button>
                                    <button class="text-[#0F1F26] rounded-[4px] lg:text-[18px] text-[14px] bg-white hover:bg-[#0F1F26] hover:text-white w-full text-center  py-[10px] px-[16px]  border border-[#CAD6E0] " style="font-family:Open_Sans_Bold; ">
                                        <div class="flex "><img class="pr-[39px]" src="<?php echo get_template_directory_uri() ?>/assets/images/colored-twitter.svg">
                                            <p class="text-center"> Continue with Twitter</p>
                                        </div>
                                    </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="register-modal" x-show="openRegister" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative  max-w-md max-h-full w-[400px] ">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="register-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-[24px]">
                        <p class="mb-[8px] text-[24px] text-[#0F1F26]" style="font-family:Merriweather_Bold ;">Create account</p>
                        <div class="flex">
                            <p class="text-[16px] text-[#4F5B66] pr-[4px]" style="font-family: Open_Sans;">Already have an account?</p>
                            <button data-modal-hide="register-modal" data-modal-show="authentication-modal" data-modal-target="authentication-modal">
                                <p class="text-[#C34849] text-[14] underline" style="font-family:OpenSans_Bold;">Log in</p>
                            </button>
                        </div>
                        <form class="pt-[24px]" action="#">
                            <div class="pb-[24px]">
                                <input type="email" name="text" id="email" class="border border-[#CAD6E0] rounded-[4px] w-full" style="font-family: Open_Sans;" placeholder="Name" required>
                            </div>
                            <div class="pb-[24px]">
                                <input type="email" name="email" id="email" class="border border-[#CAD6E0] rounded-[4px] w-full" style="font-family: Open_Sans;" placeholder="Email" required>
                            </div>


                            <div class="relative" x-data="{ isVisible: false }">
                                <div class="absolute flex right-4 mt-1.5 items-center ml-2 h-full">
                                    <button class="pb-[32px] block focus:outline-none" @click="$dispatch('visibility'); isVisible = !isVisible;">
                                        <div x-show="isVisible">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.9998 9C11.2058 9.00524 10.4457 9.32299 9.88427 9.88447C9.3228 10.4459 9.00504 11.206 8.9998 12C8.9998 13.642 10.3578 15 11.9998 15C13.6408 15 14.9998 13.642 14.9998 12C14.9998 10.359 13.6408 9 11.9998 9Z" fill="#033A54" />
                                                <path d="M11.9998 5C4.3668 5 2.0728 11.617 2.0518 11.684L1.9458 12L2.0508 12.316C2.0728 12.383 4.3668 19 11.9998 19C19.6328 19 21.9268 12.383 21.9478 12.316L22.0538 12L21.9488 11.684C21.9268 11.617 19.6328 5 11.9998 5ZM11.9998 17C6.6488 17 4.5758 13.154 4.0738 12C4.5778 10.842 6.6518 7 11.9998 7C17.3508 7 19.4238 10.846 19.9258 12C19.4218 13.158 17.3478 17 11.9998 17Z" fill="#033A54" />
                                            </svg>
                                        </div>
                                        <div x-show="!isVisible">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M12.0002 19C12.9462 19 13.8102 18.897 14.5982 18.719L12.8412 16.962C12.5682 16.983 12.2912 17 12.0002 17C6.64922 17 4.57622 13.154 4.07422 12C4.45117 11.1588 4.96027 10.3833 5.58222 9.70297L4.18422 8.30497C2.64622 9.97197 2.06322 11.651 2.05222 11.684C1.98324 11.8893 1.98324 12.1116 2.05222 12.317C2.07322 12.383 4.36722 19 12.0002 19ZM12.0002 4.99997C10.1632 4.99997 8.65422 5.39597 7.39622 5.98097L3.70722 2.29297L2.29322 3.70697L20.2932 21.707L21.7072 20.293L18.3882 16.974C21.0022 15.023 21.9352 12.359 21.9492 12.317C22.0182 12.1116 22.0182 11.8893 21.9492 11.684C21.9272 11.617 19.6332 4.99997 12.0002 4.99997ZM16.9722 15.558L14.6922 13.278C14.8822 12.888 15.0002 12.459 15.0002 12C15.0002 10.359 13.6412 8.99997 12.0002 8.99997C11.5412 8.99997 11.1122 9.11797 10.7232 9.30897L8.91522 7.50097C9.90774 7.16038 10.9509 6.99097 12.0002 6.99997C17.3512 6.99997 19.4242 10.846 19.9262 12C19.6242 12.692 18.7602 14.342 16.9722 15.558Z" fill="#033A54" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                                <label for="password1" class="block">
                                    <input type="password" id="password1" placeholder="password" minlength="5" style="font-family: Open_Sans;" class="border border-[#CAD6E0] rounded-[4px] w-full" @visibility.window="$el.type = ($el.type == 'password') ? 'text' : 'password' ">
                                    <p class="text-[14px] m-1 text-[#4F5B66]  " style="font-family: Open_Sans;">Should be minimum 8 characters long</p>
                                </label>
                            </div>
                            <button data-modal-hide="register-modal" data-modal-target="forgetPassword-modal" data-modal-show="forgetPassword-modal">
                                <p class=" pb-[40px] text-[#C34849] text-[14] underline" style="font-family:OpenSans_Bold;">Forgot password?</p>
                            </button>

                            <button type="submit" class="text-white rounded-[4px] text-[18px] bg-[#C34849] hover:bg-[#923031] w-full text-center  py-[10px] px-[32px] " style="font-family:Open_Sans_Bold; ">Create account</button>
                            <div class="flex flex-row ">
                                <hr class=" w-[45%] my-[28px] border-[#CAD6E0]">
                                <p class="text-[#CAD6E0] my-[16px] px-[5px] text-[14px] " style="font-family:Open_Sans;">Or</p>
                                <hr class=" w-[45%] my-[28px] border-[#CAD6E0]">
                            </div>
                            <button class="text-[#0F1F26] rounded-[4px] lg:text-[18px] text-[14px] bg-white hover:bg-[#0F1F26] hover:text-white w-full text-center  py-[10px] px-[16px]  border border-[#CAD6E0] mb-[24px]" style="font-family:Open_Sans_Bold; ">
                                <div class="flex "><img class="pr-[39px]" src="<?php echo get_template_directory_uri() ?>/assets/images/Google-colored-icon.svg">
                                    <p class="text-center"> Continue with Google</p>
                                </div>
                            </button>
                            <button class="text-[#0F1F26] rounded-[4px] lg:text-[18px] text-[14px] bg-white hover:bg-[#0F1F26] hover:text-white w-full text-center  py-[10px] px-[16px]  border border-[#CAD6E0] mb-[24px]" style="font-family:Open_Sans_Bold; ">
                                <div class="flex "><img class="pr-[39px]" src="<?php echo get_template_directory_uri() ?>/assets/images/Facebook-Colored-icon.svg">
                                    <p class="text-center"> Continue with Facebook</p>
                                </div>
                            </button>
                            <button class="text-[#0F1F26] rounded-[4px] lg:text-[18px] text-[14px] bg-white hover:bg-[#0F1F26] hover:text-white w-full text-center  py-[10px] px-[16px]  border border-[#CAD6E0] " style="font-family:Open_Sans_Bold; ">
                                <div class="flex "><img class="pr-[39px]" src="<?php echo get_template_directory_uri() ?>/assets/images/colored-twitter.svg">
                                    <p class="text-center"> Continue with Twitter</p>
                                </div>
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="forgetPassword-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative  max-w-md max-h-full w-[400px] ">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="forgetPassword-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-[24px]">
                        <p class="mb-[8px] text-[24px] text-[#0F1F26]" style="font-family:Merriweather_Bold ;">Forgot password</p>
                        <div class="flex">
                            <p class="text-[16px] text-[#4F5B66] pr-[4px]" style="font-family: Open_Sans;">Enter your email and we’ll send you a link
                                to reset your password</p>
                        </div>
                        <form class="pt-[24px]" action="#">

                            <div class="pb-[24px]">
                                <input type="email" name="email" id="email" class="border border-[#CAD6E0] rounded-[4px] w-full" style="font-family: Open_Sans;" placeholder="Email" required>
                            </div>



                            <button data-modal-target="emailSent-modal" data-modal-show="emailSent-modal" data-modal-hide="forgetPassword-modal" type="submit" class="text-white rounded-[4px] text-[18px] bg-[#C34849] hover:bg-[#923031] w-full text-center  py-[10px] px-[32px] " style="font-family:Open_Sans_Bold; ">Send link</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="emailSent-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative  max-w-md max-h-full w-[400px] ">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="emailSent-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <button data-modal-hide="emailSent-modal" data-modal-target="newPassword-modal" data-modal-show="newPassword-modal">
                        <div class="p-[24px]">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/Check-double-icon.svg" class="w-[80px] h-[80px]">
                            <p class="mb-[8px] text-[24px] text-[#0F1F26] text-start" style="font-family:Merriweather_Bold ;">Forgot password</p>
                            <div class="flex">
                                <p class="text-[16px] text-[#4F5B66] pr-[4px] text-start" style="font-family: Open_Sans;">Check your email and open the link we sent to continue</p>
                            </div>






                        </div>
                    </button>
                </div>
            </div>
        </div>
        <div id="newPassword-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative  max-w-md max-h-full w-[400px] ">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="newPassword-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-[24px]">
                        <p class="mb-[8px] text-[24px] text-[#0F1F26]" style="font-family:Merriweather_Bold ;">Create new password</p>
                        <!-- <div class="flex">
                            <p class="text-[16px] text-[#4F5B66] pr-[4px]" style="font-family: Open_Sans;">Enter your email and we’ll send you a link
                                to reset your password</p>
                        </div> -->
                        <form class="pt-[24px]" action="#">

                            <div class="relative mb-[40px]" x-data="{ isVisible: false }">
                                <div class="absolute flex right-4 mt-1.5 items-center ml-2 h-full">
                                    <button class="pb-[32px] block focus:outline-none" @click="$dispatch('visibility'); isVisible = !isVisible;">
                                        <div x-show="isVisible">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M11.9998 9C11.2058 9.00524 10.4457 9.32299 9.88427 9.88447C9.3228 10.4459 9.00504 11.206 8.9998 12C8.9998 13.642 10.3578 15 11.9998 15C13.6408 15 14.9998 13.642 14.9998 12C14.9998 10.359 13.6408 9 11.9998 9Z" fill="#033A54" />
                                                <path d="M11.9998 5C4.3668 5 2.0728 11.617 2.0518 11.684L1.9458 12L2.0508 12.316C2.0728 12.383 4.3668 19 11.9998 19C19.6328 19 21.9268 12.383 21.9478 12.316L22.0538 12L21.9488 11.684C21.9268 11.617 19.6328 5 11.9998 5ZM11.9998 17C6.6488 17 4.5758 13.154 4.0738 12C4.5778 10.842 6.6518 7 11.9998 7C17.3508 7 19.4238 10.846 19.9258 12C19.4218 13.158 17.3478 17 11.9998 17Z" fill="#033A54" />
                                            </svg>
                                        </div>
                                        <div x-show="!isVisible">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M12.0002 19C12.9462 19 13.8102 18.897 14.5982 18.719L12.8412 16.962C12.5682 16.983 12.2912 17 12.0002 17C6.64922 17 4.57622 13.154 4.07422 12C4.45117 11.1588 4.96027 10.3833 5.58222 9.70297L4.18422 8.30497C2.64622 9.97197 2.06322 11.651 2.05222 11.684C1.98324 11.8893 1.98324 12.1116 2.05222 12.317C2.07322 12.383 4.36722 19 12.0002 19ZM12.0002 4.99997C10.1632 4.99997 8.65422 5.39597 7.39622 5.98097L3.70722 2.29297L2.29322 3.70697L20.2932 21.707L21.7072 20.293L18.3882 16.974C21.0022 15.023 21.9352 12.359 21.9492 12.317C22.0182 12.1116 22.0182 11.8893 21.9492 11.684C21.9272 11.617 19.6332 4.99997 12.0002 4.99997ZM16.9722 15.558L14.6922 13.278C14.8822 12.888 15.0002 12.459 15.0002 12C15.0002 10.359 13.6412 8.99997 12.0002 8.99997C11.5412 8.99997 11.1122 9.11797 10.7232 9.30897L8.91522 7.50097C9.90774 7.16038 10.9509 6.99097 12.0002 6.99997C17.3512 6.99997 19.4242 10.846 19.9262 12C19.6242 12.692 18.7602 14.342 16.9722 15.558Z" fill="#033A54" />
                                            </svg>
                                        </div>
                                    </button>
                                </div>
                                <label for="password1" class="block">
                                    <input type="password" id="password1" placeholder="password" minlength="5" style="font-family: Open_Sans;" class="border border-[#CAD6E0] rounded-[4px] w-full" @visibility.window="$el.type = ($el.type == 'password') ? 'text' : 'password' ">
                                    <p class="text-[14px] m-1 text-[#4F5B66]  " style="font-family: Open_Sans;">Should be minimum 8 characters long</p>
                                </label>
                            </div>



                            <button data-modal-hide="newPassword-modal" data-modal-target="passwordReset-modal" data-modal-show="passwordReset-modal" type="submit" class="text-white rounded-[4px] text-[18px] bg-[#C34849] hover:bg-[#923031] w-full text-center  py-[10px] px-[32px] " style="font-family:Open_Sans_Bold; ">Reset password</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div id="passwordReset-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative  max-w-md max-h-full w-[400px] ">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="passwordReset-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-[24px]">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/Check-double-icon.svg" class="w-[80px] h-[80px]">
                        <p class="mb-[39px] text-[24px] text-[#0F1F26] text-start" style="font-family:Merriweather_Bold ;">Forgot password</p>


                        <button data-modal-hide="passwordReset-modal" data-modal-target="authentication-modal" data-modal-show="authentication-modal" class="text-white rounded-[4px] text-[18px] bg-[#C34849] hover:bg-[#923031] w-full text-center  py-[10px] px-[32px] " style="font-family:Open_Sans_Bold; ">Login</button>


                    </div>
                </div>
            </div>
        </div>
    </nav>