<?php

/* Template Name: Courses Catalog */

get_header();
?>


<body class="box-border">
    <header id="header" class=" bg-cover  bg-[#033A54] lg:h-[340px] h-[260px] flex flex-col  w-[100%]">
        <div class="xl:p-[80px] lg:px-[48px] lg:py-[80px] py-[40px] px-[16px]">
            <div class="flex flex-row pb-[16px] lg:pt-[0px] pt-[50px]">
                <p class="text-[#C34849] hover:text-[#923031] text-[14px] pr-[4px]" style="font-family: Open_Sans_Bold;">Home</p>
                <p class="text-white text-[14px]" style="font-family: Open_Sans_Bold;"> > Courses catalog</p>
            </div>
            <p class="text-white lg:text-[56px] text-[32px] " style="font-family: Merriweather_Black;">
                Courses catalog</p>
        </div>

    </header>
    <section>

        <div class="lg:pt-[40px] pt-[24px]  border-b border-[#CAD6E0] ">
            <ul class=" xl:px-[80px] lg:px-[40px] px-[16px] flex flex-wrap md:text-[18px] text-[14px]  text-center" style="font-family: Merriweather_Bold;" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li class="mr-[40px] " role="presentation">
                    <button class=" aria-selected:text-[#033A54] aria-selected:border-[#033A54] text-[#8195A6] inline-block aria-selected:border-b-[4px] aria-selected:lg:pb-[40px] aria-selected:pb-[24px]  hover:text-[#033A54] hover:border-[#033A54]" id="Trainingcourses-tab" data-tabs-target="#Trainingcourses" type="button" role="tab" aria-controls="Trainingcourses" aria-selected="false">Training courses</button>
                </li>
                <li role="presentation">
                    <button class=" aria-selected:text-[#033A54] aria-selected:border-[#033A54] text-[#8195A6] inline-block aria-selected:border-b-[4px] aria-selected:lg:pb-[40px] aria-selected:pb-[24px] hover:text-[#033A54] hover:border-[#033A54] " id="Customizedworkshops-tab" data-tabs-target="#Customizedworkshops" type="button" role="tab" aria-controls="Customizedworkshops" aria-selected="false">Customized workshops</button>
                </li>

            </ul>
        </div>
        <div id="myTabContent">
            <div class="hidden " id="Trainingcourses" role="tabpanel" aria-labelledby="profile-tab">
                <div class="flex xl:flex-row flex-col xl:py-[120px] xl:px-[80px] lg:py-[80px] lg:px-[40px] py-[40px] px-[16px] justify-between items-center">
                    <div class="xl:w-[620px] w-full pb-[48px] xl:pb-[0px]">
                        <p class="text-[#0F1F26] md:text-[24px] text-[18px] pb-[16px]" style="font-family: Merriweather_Bold;">ICAgile learning roadmap</p>
                        <p class="text-[#4F5B66] md:text-[16px] text-[14px] " style="font-family: Open_Sans;">
                            Agile Academy was the 1st accredited member training organization to be accredited by
                            the<span class="text-[#C34849]"> International Consortium for Agile (ICAgile)</span> in the
                            Middle East and Africa. We offer various internationally accredited classes and
                            certifications, which cover a wide range of disciplines and specializations such as Agile
                            Fundamentals, Agile Coaching, Agile Project Management, Agile Value Management and Business
                            Analysis, Agile Programming, Agile Testing, Business Agility, and Agile Talent (HR).  We
                            also provide advanced workshops in specialized areas where attendees will have an
                            opportunity to dive deep into a specific topic of interest and learn in-depth about it
                            through practical games, exercises, and simulations.
                        </p>


                    </div>
                    <img class="lg:w-[565px] lg:h-[345px] w-[343px] h-[209px]" src="<?php echo get_template_directory_uri() ?>/assets/images/icagile-roadmap 1.png">
                </div>
                <div class="xl:py-[120px] xl:px-[80px] lg:py-[80px] lg:px-[40px] py-[40px] px-[16px]">
                    <p class="text-[#0F1F26] md:text-[32px] text-[24px] lg:pb-[64px] pb-[48px] text-center" style="font-family: Merriweather_Black;">
                        ICAgile Accredited Training Courses</p>
                    <div class="grid xl:grid-cols-2 grid-cols-1 gap-[40px] xl:mb-[64px] mb-[48px]">
                        <div class="card p-[40px] border border-[#CAD6E0]">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/course.png" class="w-[200px] h-[200px] pb-[40px] mx-auto">
                            <p class="text-[#0F1F26] md:text-[24px] text-[18px] pb-[16px]" style="font-family: Merriweather_Bold;">Fundamentals of Agile Software Development (ICP)
                            </p>
                            <p class="text-[#4F5B66] md:text-[16px] text-[14px] pb-[24px] " style="font-family: Open_Sans;">
                                This course is an efficient and effective way to introduce you to the fundamentals of
                                the Agile mindset, values, principles as well as a broad overview of popular methods and
                                practices. Upon attending this course, you’ll earn the<span class="text-[#C34849]">
                                    ICAgile Certified Professional (ICP)</span> certificate. </p>
                            <a href="<?php echo get_home_url() ?>/course"> <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button></a>
                        </div>
                        <div class="card p-[40px] border border-[#CAD6E0]">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/course.png" class="w-[200px] h-[200px] pb-[40px] mx-auto">
                            <p class="text-[#0F1F26] md:text-[24px] text-[18px] pb-[16px]" style="font-family: Merriweather_Bold;">Agile Team Facilitation (ICP-ATF)</p>
                            <p class="text-[#4F5B66] md:text-[16px] text-[14px] pb-[24px] " style="font-family: Open_Sans;">
                                Agile teams are self-organizing and highly collaborative. Team leaders or scrum masters
                                should understand the group dynamics and possess facilitation skills to effectively
                                facilitate group activities. This course provides an in-depth understanding of how
                                collaborative activities can be planned, organised and run. Upon attending this course,
                                you’ll earn the <span class="text-[#C34849]"> ICAgile Certified Professional for Agile
                                    Team Facilitation (ICP-ATF)</span> certificate. </p>
                            <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button>
                        </div>
                        <div class="card p-[40px] border border-[#CAD6E0]">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/course.png" class="w-[200px] h-[200px] pb-[40px] mx-auto">
                            <p class="text-[#0F1F26] md:text-[24px] text-[18px] pb-[16px]" style="font-family: Merriweather_Bold;">Agile Professional Programming (ICP-PRG)</p>
                            <p class="text-[#4F5B66] md:text-[16px] text-[14px] pb-[24px] " style="font-family: Open_Sans;">
                                This course covers the engineering skills and tools required to become a professional
                                programmer. It empowers agile programmers to develop clean code and produce quality
                                products taking into consideration product changes and technical innovation. Upon
                                attending this course, you’ll earn the <span class="text-[#C34849]"> ICAgile Certified
                                    Professional in Agile Programming (ICP-PRG)</span> certificate. </p>
                            <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button>
                        </div>
                        <div class="card p-[40px] border border-[#CAD6E0]">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/course.png" class="w-[200px] h-[200px] pb-[40px] mx-auto">
                            <p class="text-[#0F1F26] md:text-[24px] text-[18px] pb-[16px]" style="font-family: Merriweather_Bold;">Agile Professional Testing (ICP-TST)</p>
                            <p class="text-[#4F5B66] md:text-[16px] text-[14px] pb-[24px] " style="font-family: Open_Sans;">
                                This course focuses primarily on agile testing techniques and processes in addition to
                                the mindset and role of an agile tester. Upon attending this course, you’ll earn the
                                <span class="text-[#C34849]"> ICAgile Certified Professional in Agile Testing
                                    (ICP-TST)</span> certificate.
                            </p>
                            <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button>
                        </div>
                        <div class="card p-[40px] border border-[#CAD6E0]">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/course.png" class="w-[200px] h-[200px] pb-[40px] mx-auto">
                            <p class="text-[#0F1F26] md:text-[24px] text-[18px] pb-[16px]" style="font-family: Merriweather_Bold;">Agile Product Ownership (ICP-APO)</p>
                            <p class="text-[#4F5B66] md:text-[16px] text-[14px] pb-[24px] " style="font-family: Open_Sans;">
                                Agile projects are all about business value. Attend this course to gain the tools and
                                techniques of a successful Product Owner and gain in-depth understanding of business
                                value management. Upon attending this course, you’ll earn the <span class="text-[#C34849]"> ICAgile Certified Professional in Agile Product Ownership
                                    (ICP-APO)</span> certificate. </p>
                            <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button>
                        </div>
                        <div class="card p-[40px] border border-[#CAD6E0]">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/course.png" class="w-[200px] h-[200px] pb-[40px] mx-auto">
                            <p class="text-[#0F1F26] md:text-[24px] text-[18px] pb-[16px]" style="font-family: Merriweather_Bold;">Agile Coaching (ICP-ACC)</p>
                            <p class="text-[#4F5B66] md:text-[16px] text-[14px] pb-[24px] " style="font-family: Open_Sans;">
                                The class focuses primarily on the mindset, roles, and responsibilities of an Agile
                                Coach. You’ll gain the skills needed to create a safe environment for meaningful
                                collaboration and healthy conflict resolution within an agile team. Upon attending this
                                course, you’ll earn the <span class="text-[#C34849]"> Agile Coaching (ICP-ACC)</span>
                                certificate. </p>
                            <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button>
                        </div>
                        <div class="card p-[40px] border border-[#CAD6E0]">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/course.png" class="w-[200px] h-[200px] pb-[40px] mx-auto">
                            <p class="text-[#0F1F26] md:text-[24px] text-[18px] pb-[16px]" style="font-family: Merriweather_Bold;">Agile Project Management (ICP-APM)</p>
                            <p class="text-[#4F5B66] md:text-[16px] text-[14px] pb-[24px] " style="font-family: Open_Sans;">
                                The agile project manager role is distinct from the traditional project manager, and
                                focuses on successful Lean and Agile project implementation. In this course,
                                participants will take an in-depth look at the fundamental agile concepts of adaptive
                                planning, customer collaboration, and value-driven delivery in dynamic and sometimes
                                highly constrained environments. </p>
                            <p class="text-[#4F5B66] md:text-[16px] text-[14px] pb-[24px] " style="font-family: Open_Sans;">
                                Upon attending this course, you’ll earn the ICAgile Certified Professional in <span class="text-[#C34849]"> Agile Project Management (ICP-APM)</span> certificate. </p>

                            <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button>
                        </div>
                    </div>
                    <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]   w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">See more</button>
                </div>
            </div>
            <div class="hidden " id="Customizedworkshops" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="bg-[#F2FBFF] xl:py-[120px] xl:px-[80px] lg:py-[80px] lg:px-[40px] py-[40px] px-[16px] justify-between items-center">
                    <p class="text-[#0F1F26] md:text-[32px] text-[24px] lg:pb-[64px] pb-[48px] text-center" style="font-family: Merriweather_Black;">
                        Customized workshops</p>
                    <div class="grid xl:grid-cols-2 grid-cols-1 gap-[40px] xl:mb-[64px] mb-[48px]">
                        <div class="card round-[8px] bg-white">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/class.png" class=" pb-[40px] mx-auto h-[282px] w-full">
                            <p class="text-[#0F1F26] md:text-[24px] text-[18px]  px-[40px] pb-[16px]" style="font-family: Merriweather_Bold;">Advanced User Stories
                            </p>
                            <p class="text-[#4F5B66] md:text-[16px] text-[14px]  px-[40px] pb-[24px] " style="font-family: Open_Sans;">
                                User Stories are simple in concept, but many Agile teams would find some challenges in
                                writing good user stories. In this workshop, attendees will learn by practice how to
                                write great user stories, and how to create, partition, prioritize and groom their
                                backlogs. Attendees (in teams) will get the opportunity to fully practice both core and
                                advanced techniques for writing user stories and creating backlogs in a full-day case
                                study. </p>
                            <div class="mb-[40px] mx-[40px]">
                                <a href="workshop.html"> <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px] " style="font-family:Open_Sans_Bold; ">Learn more</button></a>
                            </div>
                        </div>
                        <div class="card round-[8px] bg-white">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/class2.png" class=" pb-[40px] mx-auto h-[282px] w-full">
                            <p class="text-[#0F1F26] md:text-[24px] text-[18px]  px-[40px] pb-[16px]" style="font-family: Merriweather_Bold;">Agile Contracting and Budgeting
                            </p>
                            <p class="text-[#4F5B66] md:text-[16px] text-[14px]  px-[40px] pb-[24px] " style="font-family: Open_Sans;">
                                In this workshop, attendees will learn everything they need to know about agile
                                contracts, how they differ from traditional contracts, what activities are done during
                                the contracting phase of an agile project and much more. In addition, attendees will get
                                the opportunity to practice and write contracts on their own through simulated case
                                studies. </p>
                            <div class="mb-[40px] mx-[40px]">
                                <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px] " style="font-family:Open_Sans_Bold; ">Learn more</button>
                            </div>
                        </div>
                        <div class="card round-[8px] bg-white">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/class3.png" class=" pb-[40px] mx-auto h-[282px] w-full">
                            <p class="text-[#0F1F26] md:text-[24px] text-[18px]  px-[40px] pb-[16px]" style="font-family: Merriweather_Bold;">Refactoring to Clean Code Workshop
                            </p>
                            <p class="text-[#4F5B66] md:text-[16px] text-[14px]  px-[40px] pb-[24px] " style="font-family: Open_Sans;">
                                One of the most painful activities in software development is maintaining extremely poor
                                legacy code! In this workshop, participants will go through a sustainable roadmap which
                                progressively introduces structure and reduces complexity of product code in a simple
                                and stepwise approach. </p>
                            <div class="mb-[40px] mx-[40px]">
                                <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px] " style="font-family:Open_Sans_Bold; ">Learn more</button>
                            </div>
                        </div>
                        <div class="card round-[8px] bg-white">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/class4.png" class=" pb-[40px] mx-auto h-[282px]w-full ">
                            <p class="text-[#0F1F26] md:text-[24px] text-[18px]  px-[40px] pb-[16px]" style="font-family: Merriweather_Bold;">Kanban for Agile Teams Workshop
                            </p>
                            <p class="text-[#4F5B66] md:text-[16px] text-[14px]  px-[40px] pb-[24px] " style="font-family: Open_Sans;">
                                Kanban is a simple and efficient method for managing and continuously improving the flow of software projects and processes. Kanban enables visual tracking of the workflow, limits work-in-process, and provides continuous feedback to drive continuous improvement. Attend this workshop to know the basic concepts of Kanban and experience managing a project using this powerful technique. </p>
                            <div class="mb-[40px] mx-[40px]">
                                <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px] " style="font-family:Open_Sans_Bold; ">Learn more</button>
                            </div>
                        </div>
                        <div class="card round-[8px] bg-white">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/class5.png" class=" pb-[40px] mx-auto h-[282px] w-full">
                            <p class="text-[#0F1F26] md:text-[24px] text-[18px]  px-[40px] pb-[16px]" style="font-family: Merriweather_Bold;">The Lean Startup
                            </p>
                            <p class="text-[#4F5B66] md:text-[16px] text-[14px]  px-[40px] pb-[24px] " style="font-family: Open_Sans;">
                                Entrepreneurship is management, not good or bad luck. In order to succeed, startups must to be managed in a lean and value-driven way. If not, opportunities of success will not exceed 5% as per the global statistics of startups! In this workshop, you will be introduced and trained on modern Lean Startups management concepts and techniques through many exercises and simulation games. </p>
                            <div class="mb-[40px] mx-[40px]">
                                <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px] " style="font-family:Open_Sans_Bold; ">Learn more</button>
                            </div>
                        </div>
                        <div class="card round-[8px] bg-white">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/class6.png" class=" pb-[40px] mx-auto h-[282px] w-full">
                            <p class="text-[#0F1F26] md:text-[24px] text-[18px]  px-[40px] pb-[16px]" style="font-family: Merriweather_Bold;">Performance Evaluation for Software People
                            </p>
                            <p class="text-[#4F5B66] md:text-[16px] text-[14px]  px-[40px] pb-[24px] " style="font-family: Open_Sans;">
                                Software teams suffer from traditional appraisal methods and routine performance evaluation activities which take place in almost all organizations. In this workshop, we will redefine the objectives of performance evaluation, and will understand how these objectives differ dramatically in of team evaluation versus individual evaluation. </p>
                            <div class="mb-[40px] mx-[40px]">
                                <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px] " style="font-family:Open_Sans_Bold; ">Learn more</button>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-[#F2FBFF]  border border-[#033A54]   w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">See more</button>
                </div>
            </div>

        </div>

    </section>

    <section class=" relative bg-cover bg-[#C34849]   h-[208px] px-[16px] py-[40px] flex flex-col justify-center items-center">
        <img class="lg:block hidden absolute top-0 right-0" src="<?php echo get_template_directory_uri() ?>/assets/images/Icon.svg">
        <p class="text-white text-[32px] text-center pb-[24px]" style="font-family:Merriweather_Black;">Reach out to us
            for more information</p>
        <a href="contact-us.html"><button class="bg-white md:w-[160px] w-full px-[32px] py-[10px] rounded-[4px]" style="font-family:Open_Sans_Bold;">Contact us</button></a>

    </section>
    <footer class=" bg-cover  bg-[#02283B]  flex flex-col  w-[100%]">
        <div class="lg:m-[80px] md:mx-[40px] my-[80px] mx-[16px]">
            <a href="" class=" pb-[40px]">
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/Logo.png" class=" w-[227px] sm:w-[176px] h-8 " alt="Logo" />
            </a>
            <div class="flex lg:flex-row justify-between items-center flex-col">
                <div class="md:order-2 lg:order-1 order-2 lg:w-[40%] w-full lg:pr-[50px]">
                    <p class="text-[18px] text-white pb-[32px] lg:pt[40px] md:pt-[80px] pt-[48px]" style="font-family:Merriweather_Bold;">Join our community</p>
                    <div class="lg:flex-col md:flex-row flex flex-col">
                        <div class="flex md:flex-row flex-col lg:mb-[88px] md:mr-[220px] lg:mr-[0px]">
                            <input type="text" class="block lg:w-[285px] h-[56px] p-2 md:mr-[16px] mb-[10px] border border-white rounded-[4px] text-white bg-[#02283B] text-[16px] focus:border-white dark:focus:border-white dark:border-white" style="font-family: Open_Sans;" placeholder="Enter your email">
                            <button type="button" class="text-white rounded-[4px] text-[18px] bg-[#C34849] hover:bg-[#923031] h-[56px] text-center  py-[10px] px-[32px] " style="font-family:Open_Sans_Bold; ">Join</button>
                        </div>
                        <div class="flex hidden md:block md:mt-[25px] lg:mt-0">
                            <button class="mr-[16px]"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Linkedin-icon.svg"></button>
                            <button class="mr-[16px]"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Twitter-icon.svg"></button>
                            <button class="mr-[16px]"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Youtube-icon.svg"></button>
                            <button><img src="<?php echo get_template_directory_uri() ?>/assets/images/Facebook-icon.svg"></button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-between md:order-1 lg:order-2 order-1 pt-[40px] lg:w-[60%]">
                    <div class="flex-col lg:w-[20%] w-[50%]">
                        <p class="text-white text-[18px] pb-[32px]" style="font-family:Merriweather_Bold;">Quick links
                        </p>
                        <div class="text-white text-[16px] pb-[24px]" style="font-family:Open_Sans;"><a href="">Services</a></div>
                        <div class="text-white text-[16px] pb-[24px]" style="font-family:Open_Sans;"><a href="">Training</a></div>
                        <div class="text-white text-[16px] pb-[24px]" style="font-family:Open_Sans;"><a href="">About
                                us</a></div>
                        <div class="text-white text-[16px]" style="font-family:Open_Sans;"><a href="contact-us.html">Contact us</a>
                        </div>
                    </div>
                    <div class="flex-col lg:w-[40%] w-[50%]">
                        <p class="text-white text-[18px] pb-[32px]" style="font-family:Merriweather_Bold;">Contact</p>
                        <p class="text-white text-[16px] pb-[24px]" style="font-family:Open_Sans;">Agile Academy, DMCC
                            Business Center Level No 1, Jewellery & Complex 3 JLT, Dubai, United Arab Emirates</p>
                        <p class="text-white text-[16px] " style="font-family:Open_Sans;">Email: info@agileacademy.co
                        </p>
                    </div>
                </div>

            </div>
            <hr class=" mt-[40px] border-[#406986]" />
            <p class="text-white md:pt-[40px]  pt-[24px]  text-[16px] text-center" style="font-family: Open_Sans;">©
                2023 Agile Academy. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="navBar.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</body>

</html>