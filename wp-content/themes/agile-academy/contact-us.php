<?php 

// Template Name: Contact Us

get_header();

?>


<body class="box-border">
    <header id="header" class=" bg-cover  bg-[#033A54] h-[340px]  flex flex-col  w-[100%]">
        <div class="xl:p-[80px] lg:px-[48px] lg:py-[80px] py-[40px] px-[16px]">
            <div class="flex flex-row pb-[16px] lg:pt-[0px] pt-[50px]">
                <p class="text-[#C34849] hover:text-[#923031] text-[14px] pr-[4px]"
                    style="font-family: Open_Sans_Bold;">Home</p>
                <p class="text-white text-[14px]" style="font-family: Open_Sans_Bold;"> > Contact us</p>
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

    <?php get_footer(); ?>

</body>

</html>