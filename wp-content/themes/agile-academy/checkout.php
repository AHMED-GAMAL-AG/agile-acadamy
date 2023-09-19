<?php

// Template Name: Checkout

get_header();
?>

<body class="box-border">

    <section class="flex flex-col w-full h-full place-items-center lg:py-[160px] lg:px-[40px] py-[120px] px-[16px]" x-data="{ checkout: false }">
        <div class=" " x-show="!checkout">
            <a href="#" class="">
                <div class="flex  lg:pb-[16px] pb-[24px]">
                    <img class="mr-[4px]" src="<?php echo get_template_directory_uri() ?>/assets/images/Chevron-left-icon.svg">
                    <p class="text-[#C34849] text-[14px] underline cursor-pointer" onclick="history.back()" style="font-family: Open_Sans_Bold;">
                        Go back
                    </p>
                </div>
            </a>
            <p class="text-[#0F1F26] md:text-[32px] text-[24px] lg:pb-[64px] pb-[40px]" style="font-family: Merriweather_Black;">Checkout</p>
            <p class="text-[#0F1F26] md:text-[24px] text-[18px] lg:pb-[40px]  pb-[24px]" style="font-family: Merriweather_Bold;">Order details
            </p>
            <div class="flex">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/course.png" class="w-[96px] h-[96px] mr-[16px]">

                <p class="text-[#0F1F26] md:text-[24px] md:text-[18px] text-[14px] w-[226px] lg:w-[388px] " style="font-family: Merriweather_Bold;">Fundamentals of Agile Software Development (ICP)
                </p>

            </div>
            <hr class=" my-[40px] border-[#CAD6E0]" />
            <p class="text-[#0F1F26] md:text-[24px] text-[18px] lg:pb-[40px]  pb-[24px]" style="font-family: Merriweather_Bold;">Payment method
            </p>
            <div class="card border border-[#406986] rounded-[4px] bg-[#E5F7FF] p-[16px] flex justify-between items-center">
                <div class="flex">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/Credit-card-icon.svg" class="pr-[16px]" alt="">
                    <p class="text-[#0F1F26] md:text-[24px] text-[18px] " style="font-family: Merriweather_Bold;">Credit/Debit card
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/bx-check-circle 1.svg">
            </div>
            <hr class=" my-[40px] border-[#CAD6E0]" />
            <p class="text-[#0F1F26] md:text-[24px] text-[18px] lg:pb-[40px]  pb-[24px]" style="font-family: Merriweather_Bold;">Summary
            </p>
            <div class="flex justify-between">
                <p class="text-[#0F1F26]  text-[16px]" style="font-family: Open_Sans;">Subtotal:</p>
                <p class="text-[#0F1F26]  text-[16px]" style="font-family: Open_Sans;">199.99 EGP</p>
            </div>
            <hr class=" my-[24px] border-[#CAD6E0]" />
            <div class="flex justify-between lg:pb-[40px]  pb-[24px]">
                <p class="text-[#0F1F26]  text-[16px]" style="font-family: Open_Sans_Bold;">Total:</p>
                <p class="text-[#0F1F26]   text-[16px]" style="font-family: Open_Sans_Bold;">199.99 EGP</p>
            </div>
            <button type="button" @click="checkout = true" class="text-white rounded-[4px] text-[16px]  bg-[#C34849] hover:bg-[#923031] border border-white  md:w-[191px] w-full text-center  py-[10px] md:px-[32px] px-[24px]" style="font-family:Open_Sans_Bold; ">Checkout</button>
        </div>
        <div x-show="checkout" class="card border border-[#CAD6E0] rounded-[4px] place-items-center w-full py-[80px]">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/card2.png" class="w-[156px] h-[156px] pb-[24px] mx-auto">
            <p class="text-[#0F1F26] md:text-[24px] text-[18px]   pb-[16px] text-center" style="font-family: Merriweather_Bold;">Payment successful
            </p>
            <a href="#" class="">
                <div class="flex justify-center lg:pb-[16px] pb-[24px]">
                    <img class="mr-[4px]" src="<?php echo get_template_directory_uri() ?>/assets/images/Chevron-left-icon.svg">
                    <a href="<?php echo get_home_url() ?>/Home Page" class="card owl-item group">
                        <p class="text-[#C34849] text-[14px] underline text-center" style="font-family: Open_Sans_Bold;">
                            Go home
                        </p>
                    </a>
                </div>
            </a>
        </div>
    </section>

    <?php get_footer(); ?>
</body>

</html>