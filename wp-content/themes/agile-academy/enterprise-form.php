<?php

/* Template Name: Enterprise Form */

get_header();
?>

<body class="box-border">
    <div class="flex lg:flex-row flex-col  justify-between  w-full h-full">
        <div x-data="{ open: false }" class="lg:w-[50%]  xl:mx-[80px]  lg:mx-[40px] lg:mt-[220px] mt-[150px] lg:mb-[120px] mb-[40px] mx-[16px]">
            <a href="#" class=" ">
                <div class="flex lg:pb-[64px] pb-[40px]">
                    <img class="mr-[4px]" src="<?php echo get_template_directory_uri()?>/assets/images/Chevron-left-icon.svg">
                    <p class="text-[#C34849] text-[14px] underline cursor-pointer" onclick="history.back()" style="font-family: Open_Sans_Bold;">
                        Go back
                    </p>
                </div>
            </a>
            <p class="text-[#0F1F26] md:text-[32px] text-[24px] pb-[8px]" style="font-family: Merriweather_Black;">
                Course Request Form</p>
            <p class="text-[#4F5B66] md:text-[18px] text-[16px] mb-[40px]" style="font-family: Open_Sans;">
                Send us an email with your request, and we'll reply back soon!
            </p>
            <form class="flex flex-col" x-show="!open">
                <input class="border border-[#CAD6E0] p-[16px] xl:w-[620px] lg:w-[452px] rounded-[4px] mb-[24px] focus:border-[#033A54]" placeholder="Name">
                <input class="border border-[#CAD6E0] p-[16px] xl:w-[620px] lg:w-[452px] rounded-[4px] mb-[24px]" placeholder="Email">

                <input class="border border-[#CAD6E0] p-[16px] xl:w-[620px] lg:w-[452px] rounded-[4px] mb-[24px]" placeholder="Company">

                <input class="border border-[#CAD6E0] p-[16px] xl:w-[620px] lg:w-[452px] rounded-[4px] mb-[24px]" placeholder="Requested courses">
                <input class="border border-[#CAD6E0] p-[16px] xl:w-[620px] lg:w-[452px] rounded-[4px] mb-[24px]" placeholder="Number of Attendees">

                <button type="button" @click="open = true" class="text-white rounded-[4px] text-[16px]  bg-[#C34849] hover:bg-[#923031] border border-white  lg:w-[108px] w-full text-center  py-[10px] md:px-[32px] px-[24px]" style="font-family:Open_Sans_Bold; ">Send</button>


            </form>
            <div x-show="open" class="card border boeder-[#CAD6E0] py-[80px]">
                <img src="<?php echo get_template_directory_uri()?>/assets/images/card2.png" class="w-[156px] h-[156px] mx-auto pb-[24px]">
                <p class="text-[#0F1F26] text-[18px] text-center" style="font-family: Open_Sans;">Thank you for your message. It has been sent.</p>
            </div>
        </div>
        <div class="bg-[#F2FBFF] lg:w-[50%] lg:block hidden ">
            <img class="xl:w-[490px] xl:h-[490px] lg:w-[322px] lg:h-[322px] mx-auto xl:my-[25%] lg:my-[50%]" src="<?php echo get_template_directory_uri()?>/assets/images/card1.png">
        </div>
    </div>

    <script src="<?php get_template_directory_uri() ?>/navBar.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>

</html>