<?php

// Template Name: Home Page

get_header();
?>


<header id="header" class=" bg-cover  bg-[#033A54] lg:h-[658px] flex flex-col  w-[100%]">
    <div class="  flex lg:flex-row flex-col w-full items-center justify-center px-[40px] xl:px-[0px]">
        <div class="  py-[123px] flex flex-col">
            <p class="lg:w-[550px] w-full md:text-[56px] text-[32px] text-white pb-[24px]" style="font-family:Merriweather_Black;">Enabling Agility in the
                Middle East & Africa</p>
            <p class=" lg:w-[550px] w-full text-[18px] text-white pb-[32px] opacity-80" style="font-family: Open_Sans; ">Through inspiring & transforming individuals,
                teams & organizations towards a higher purpose that enables them to create bigger impact on their
                customers.</p>
            <div class="flex flex-row">
                <a href="<?php echo get_home_url() ?>/Contact Us"> <button type="button" class="text-white rounded-[4px] mr-[16px] text-[18px]  bg-[#C34849] hover:bg-[#923031]  text-center  py-[10px] md:px-[32px] px-[24px]" style="font-family:Open_Sans_Bold; ">Contact us</button></a>
                <a href="<?php echo get_home_url() ?>/About Us"><button type="button" class="text-white rounded-[4px] text-[18px]  bg-[#033A54] hover:bg-white hover:text-[#033A54] border border-white  text-center  py-[10px] md:px-[32px] px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button> </a>
            </div>
        </div>
        <div class="flex flex-row items-center justify-center  w-[620px]">
            <img class="  md:w-[620px] w-[343px] " src="<?php echo get_template_directory_uri() ?>/assets/images/Hero image wrapper.png">
        </div>
        <div></div>
    </div>

</header>
<section class="xl:py-[120px] lg:py-[80px] py-[40px] px-[80px]">
    <p class="text-center text-[24px] " style="font-family:Merriweather_Bold;">Trusted by Our Clients</p>
    <div class=" lg:pt-[80px] md:pt-[64px] pt-[48px] grid xl:grid-cols-6 lg:grid-cols-4 grid-cols-1 lg:gap-[64px] gap-[40px] place-items-center ">
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/grid1.svg"></div>
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/grid2.svg"></div>
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/grid3.svg"></div>
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/grid4.svg"></div>
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/grid5.svg"></div>
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/grid6.svg"></div>
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/grid7.svg"></div>
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/grid8.svg"></div>
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/grid9.svg"></div>
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/grid10.svg"></div>
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/grid11.svg"></div>
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/images/grid12.svg"></div>

    </div>
</section>
<section class="xl:p-[80px] lg:px-[40px] lg:py-[80px] py-[80px] px-[24px]">
    <p class="text-center text-[32px] " style="font-family:Merriweather_Black;">Services we offer</p>
    <div class="grid xl:grid-cols-2 grid-cols-1 md:gap-[40px] gap-[24px] md:pt-[64px] pt-[48px]">
        <div class="card  border border-[#CAD6E0)] md:p-[40px] p-[24px]">
            <img class="w-[256px] h-[256px] mx-auto" src="<?php echo get_template_directory_uri() ?>/assets/images/card1.png">
            <p class="text-start text-[24px] text-[#0F1F26] py-[40px] " style="font-family:Merriweather_Bold;">
                Enterprise Business Agility Transformation</p>
            <p class="text-start text-[16px] text-[#4F5B66] pb-[24px]" style="font-family:Open_Sans;">At Agile
                Academy we pride ourselves for hav­ing some of the best agile learn­ing ex­per­i­ences for teams and
                in­di­vidu­als in the in­dustry. Agile Academy is an accredited Member Training Organization (MTO)
                by ICAgile and of­fers a wide range of train­ing classes, which cov­er in­tro­duct­ory know­ledge
                areas as well as spe­cial­ised ones. We provide onsite as well as pub­lic train­ing classes.</p>
            <a href="<?php echo get_home_url() ?>/service1"><button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button> </a>

        </div>
        <div class="card  border border-[#CAD6E0)] md:p-[40px] p-[24px]">
            <img class="w-[256px] h-[256px] mx-auto" src="<?php echo get_template_directory_uri() ?>/assets/images/card1.png">
            <p class="text-start text-[24px] text-[#0F1F26] py-[40px]" style="font-family:Merriweather_Bold;">
                Coaching Services</p>
            <p class="text-start text-[16px] text-[#4F5B66] pb-[24px]" style="font-family:Open_Sans;">While
                training and education are crucial to success, it’s only part of the equation. In Agile Academy, we
                offer a unique set of Agile coaching services to guide individuals and teams through their journey
                toward agility. In addition to the fact that our consultants and coaches are Agile thought leaders,
                they are also experienced and internationally accredited professional coaches (CTI, ORSC & ICF) who
                can provide a wide range of pure professional coaching services.</p>
            <a href="<?php echo get_home_url() ?>/service2"><button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button> </a>

        </div>
        <div class="card  border border-[#CAD6E0)] md:p-[40px] p-[24px]">
            <img class="w-[256px] h-[256px] mx-auto" src="<?php echo get_template_directory_uri() ?>/assets/images/card1.png">
            <p class="text-start text-[24px] text-[#0F1F26] py-[40px]" style="font-family:Merriweather_Bold;">Agile
                Readiness & Health Assessment</p>
            <p class="text-start text-[16px] text-[#4F5B66] pb-[24px]" style="font-family:Open_Sans;">Agile
                Academy conducts state-of-the-art Agile Readiness Assessments that pinpoint areas that need to be
                worked on before the transformation begins. Agile Academy is the main partner for AgilityHealth® in
                the Middle East and Africa. AgilityHealth® is the world’s leading agile health measurement,
                assessment, and growth platform. We utilize AgilityHealth® radars and assessment platforms to
                provide powerful, insightful, and strategic health assessments to our clients.</p>
            <a href="<?php echo get_home_url() ?>/service4"><button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button> </a>

        </div>
        <div class="card  border border-[#CAD6E0)] md:p-[40px] p-[24px]">
            <img class="w-[256px] h-[256px] mx-auto" src="<?php echo get_template_directory_uri() ?>/assets/images/card1.png">
            <p class="text-start text-[24px] text-[#0F1F26] py-[40px]" style="font-family:Merriweather_Bold;">
                Capability Building Programs</p>
            <p class="text-start text-[16px] text-[#4F5B66] pb-[24px]" style="font-family:Open_Sans;">We
                believe
                that one of the key aspects of successful and agile transformations is establishing a strong Agile
                internal capability that will enable organizations to excel and move forward in a sustainable manner
                rather than a temporary one.</p>
            <a href="<?php echo get_home_url() ?>/service5"><button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button> </a>

        </div>
    </div>
</section>
<section class="xl:pt-[120px] xl:pb-[56px] xl:px-[80px] lg:py-[80px] lg:px-[40px] py-[40px] px-[16px] bg-[#F2FBFF]">
    <p class="text-center text-[32px] md:pb-[80px] pb-[48px]" style="font-family:Merriweather_Black;">What
        differentiates us</p>
    <div class="grid xl:grid-cols-3 lg:grid-cols-2 grid-cols-1  divide-[#CAD6E0] lg:gap-[80px] gap-[40px]">
        <div>
            <img class="w-[156px] h-[156px] pb-[24px] mx-auto" src="<?php echo get_template_directory_uri() ?>/assets/images/card2.png">
            <p class=" text-center text-[#0F1F26] md:text-[24px] text-[18px]" style="font-family:Merriweather_Bold;">
                Better User Stories</p>
            <p class=" text-center text-[#4F5B66]  md:text-[16px] text-[14px]" style="font-family:Open_Sans;">A
                one-day Better User Stories class followed by a one-day assisted story-writing workshop.</p>

        </div>
        <div>
            <img class="w-[156px] h-[156px] pb-[24px] mx-auto" src="<?php echo get_template_directory_uri() ?>/assets/images/card3.png">
            <p class=" text-center text-[#0F1F26] md:text-[24px] text-[18px]" style="font-family:Merriweather_Bold;">
                Our Unique Philosophy & Approach</p>
            <p class=" text-center text-[#4F5B66]  md:text-[16px] text-[14px]" style="font-family:Open_Sans;">Our
                philosophy & approach in everything that we do is solely guided by our purpose. This enables any
                consultant/coach from Agile Academy to truly inspire and create impact in environments and
                engagements where there’s true potential for agility</p>

        </div>
        <div>
            <img class="w-[156px] h-[156px] pb-[24px] mx-auto" src="<?php echo get_template_directory_uri() ?>/assets/images/card4.png">
            <p class=" text-center text-[#0F1F26] md:text-[24px] text-[18px]" style="font-family:Merriweather_Bold;">
                Our Leadership</p>
            <p class=" text-center text-[#4F5B66]  md:text-[16px] text-[14px]" style="font-family:Open_Sans;">Agile
                Academy was founded by Amr Noaman, Mohamed Amr and Ahmed Sidky, 3 of the top Agile thought leaders
                in the Middle East and Africa. Our consultants are part of a global network of thought leaders who
                collaborate to achieve global impact and inspiration across the world</p>
        </div>
    </div>
</section>
<section class="xl:p-[80px] lg:px-[40px] lg:py-[80px] py-[40px] px-[24px]">
    <div class="grid xl:grid-cols-4 lg:grid-cols-2 grid-cols-1 gap-[40px]">
        <div class="card border border-[#CAD6E0)] px-[24px] py-[40px]">
            <p class="text-center text-[#0F1F26] text-[32px]" style="font-family:Merriweather_Black;">Since 2008</p>
            <p class="text-center text-[#4F5B66] text-[16px]" style="font-family:Open_Sans;">Leading agile
                transformations</p>
        </div>
        <div class="card border border-[#CAD6E0)] px-[24px] py-[40px]">
            <p class="text-center text-[#0F1F26] text-[32px]" style="font-family:Merriweather_Black;">5,000+</p>
            <p class="text-center text-[#4F5B66] text-[16px]" style="font-family:Open_Sans;">Professionals trained
            </p>
        </div>
        <div class="card border border-[#CAD6E0)] px-[24px] py-[40px]">
            <p class="text-center text-[#0F1F26] text-[32px]" style="font-family:Merriweather_Black;">2,500+</p>
            <p class="text-center text-[#4F5B66] text-[16px]" style="font-family:Open_Sans;">Professionals certified
            </p>
        </div>
        <div class="card border border-[#CAD6E0)] px-[24px] py-[40px]">
            <p class="text-center text-[#0F1F26] text-[32px]" style="font-family:Merriweather_Black;">50+</p>
            <p class="text-center text-[#4F5B66] text-[16px]" style="font-family:Open_Sans;">Private & public sector
                clients</p>
        </div>
    </div>
</section>
<section class="xl:py-[120px] xl:px-[80px] lg:py-[80px] lg:px-[40px] px-[16px] py-[40px]">
    <p class="text-center text-[32px] lg:pb-[64px] pb-[48px]" style="font-family:Merriweather_Black;">Meet our team
    </p>
    <div class="owl-carousel team owl-theme owl-loaded  lg:px-[40px] px-[16px] ">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <a href="#" class="card owl-item group">
                    <div class="h-[400px] pb-[24px]">
                        <img class="h-full" src="<?php echo get_template_directory_uri() ?>/assets/images/owl-1.png" alt="">
                    </div>
                    <div class="flex justify-between group">
                        <div class="group">
                            <p class="text-[#0F1F26] group-hover:text-[#C34849] group-hover:underline text-[24px]" style="font-family:Merriweather_Bold;">Amr Noaman
                            </p>
                            <p class='text-[#4F5B66] text-[16px]' style="font-family:Open_Sans;">Co-founder & Agile
                                Consultant</p>
                        </div>
                        <div class="flex">
                            <button class="mr-[16px]"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Linkedin-icon-dark.svg"></button>
                            <button><img src="<?php echo get_template_directory_uri() ?>/assets/images/Twitter-icon-dark.svg"></button>
                        </div>
                    </div>
                </a>
                <a href="#" class="card owl-item group">
                    <div class="h-[400px] pb-[24px]">
                        <img class="h-full" src="<?php echo get_template_directory_uri() ?>/assets/images/owl-2.png" alt="">
                    </div>
                    <div class="flex justify-between">
                        <div>
                            <p class="text-[#0F1F26] text-[24px] group-hover:text-[#C34849] group-hover:underline" style="font-family:Merriweather_Bold;">Mohamed Amr
                            </p>
                            <p class='text-[#4F5B66] text-[16px]' style="font-family:Open_Sans;">Co-Founder and
                                Principal
                                Coach</p>
                        </div>
                        <div class="flex">
                            <button class="mr-[16px]"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Linkedin-icon-dark.svg"></button>
                            <button><img src="<?php echo get_template_directory_uri() ?>/assets/images/Twitter-icon-dark.svg"></button>
                        </div>
                    </div>
                </a>
                <a href="<?php echo get_home_url() ?>/Team Member" class="card owl-item group">
                    <div class="h-[400px] pb-[24px]">
                        <img class="h-full" src="<?php echo get_template_directory_uri() ?>/assets/images/owl-3.png" alt="">
                    </div>
                    <div class="flex justify-between">
                        <div>
                            <p class="text-[#0F1F26] text-[24px] group-hover:text-[#C34849]  group-hover:underline" style="font-family:Merriweather_Bold;">Ahmed Sidky
                            </p>
                            <p class='text-[#4F5B66] text-[16px]' style="font-family:Open_Sans;">Advisor &
                                Co-Founder</p>
                        </div>
                        <div class="flex">
                            <button class="mr-[16px]"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Linkedin-icon-dark.svg"></button>
                            <button><img src="<?php echo get_template_directory_uri() ?>/assets/images/Twitter-icon-dark.svg"></button>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="md:mt-[40px]">
            <div class="hidden md:flex flex flex-row items-center justify-center">
                <button class="bg-[url('<?php echo get_template_directory_uri() ?>/assets/images/left-arrow.svg')] hover:bg-[url('<?php echo get_template_directory_uri() ?>/assets/images/hover-left-arrow.svg')] w-[56px] h-[40px] md:mr-[16px]" onclick="previous()">&nbsp</button>
                <button class="bg-[url('<?php echo get_template_directory_uri() ?>/assets/images/right-arrow.svg')] hover:bg-[url('<?php echo get_template_directory_uri() ?>/assets/images/hover-left-arrow.svg')] hover:rotate-180 w-[56px] h-[40px] " onclick="next()">&nbsp</button>

                <!-- <button> <img class="md:mr-[16px]" src="<?php echo get_template_directory_uri() ?>/assets/images/left-arrow.svg"  onclick="previous()"></button> -->
                <!-- <button> <img src="<?php echo get_template_directory_uri() ?>/assets/images/right-arrow.svg" onclick="next()"></button> -->
            </div>

        </div>
    </div>


</section>
<section class="bg-cover  bg-[#033A54] xl:h-[948px] lg:h-[808px] md:h-[602px]  xl:pt-[120px] lg:pt-[80px] py-[56px]  w-[100%]">
    <p class="text-center text-white text-[32px] xl:pt-[120px] lg:pt-[88px] lg:pb-[64px] pt-[40px] pb-[48px]" style="font-family: Merriweather_Black;"> Testimonials</p>
    <div class="owl-carousel owl-theme owl-loaded quote lg:px-[40px] px-[16px] ">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <div class="card border border-[#406986] xl:px-[80px] owl-item ">
                    <div class="xl:px-[220px] xl:pt-[80px] xl:pb-[152px] lg:px-[48px] lg:py-[80px] py-[48px] px-[24px]">
                        <img class="w-[80px] h-[80px] pb-[24px]" src="<?php echo get_template_directory_uri() ?>/assets/images/Quote-icon.svg">
                        <p class=" text-center text-white text-[24x] pb-[16px]" style="font-family: Merriweather_Bold;">After knowing Agile Academy and attending one of
                            their agile courses, I can say based on my 20 years of experience in the software and
                            telecom industries that Agile Academy is the original agile reference in Egypt</p>
                        <p class=" text-center text-[16px] text-white opacity-80" style="font-family: Open_Sans;">
                            Heba Yehia - Project Manager, Zlien</p>
                    </div>
                </div>


            </div>
        </div>
        <div class="md:mt-[40px]  ">
            <div class="hidden md:flex flex flex-row items-center justify-center">
                <button class="bg-[url('<?php echo get_template_directory_uri() ?>/assets/images/white-left-arrow.svg')] hover:bg-[url('<?php echo get_template_directory_uri() ?>/assets/images/hover-fill-white-left-arrow.svg')] w-[56px] h-[40px] md:mr-[16px]" onclick="previousquote()">&nbsp</button>
                <button class="bg-[url('<?php echo get_template_directory_uri() ?>/assets/images/white-right-arrow.svg')] hover:bg-[url('<?php echo get_template_directory_uri() ?>/assets/images/hover-fill-white-left-arrow.svg')] hover:rotate-180 w-[56px] h-[40px] " onclick="nextquote()">&nbsp</button>

                <!-- <button><img class="md:mr-[16px]" src="<?php echo get_template_directory_uri() ?>/assets/images/white-left-arrow.svg"
                            onclick="previousquote()"></button>
                    <button> <img src="<?php echo get_template_directory_uri() ?>/assets/images/white-right-arrow.svg" onclick="nextquote()"></button> -->
            </div>

        </div>
    </div>
</section>
<section class=" relative bg-cover bg-[#C34849]   h-[208px] px-[16px] py-[40px] flex flex-col justify-center items-center">
    <img class="lg:block hidden absolute top-0 right-0" src="<?php echo get_template_directory_uri() ?>/assets/images/Icon.svg">
    <p class="text-white text-[32px] text-center pb-[24px]" style="font-family:Merriweather_Black;">Reach out to us
        for more information</p>
    <a href="<?php echo get_home_url() ?>/Contact Us"><button class="bg-white md:w-[160px] w-full px-[32px] py-[10px] rounded-[4px]" style="font-family:Open_Sans_Bold;">Contact us</button></a>

</section>

<?php get_footer(); ?>

</body>

</html>