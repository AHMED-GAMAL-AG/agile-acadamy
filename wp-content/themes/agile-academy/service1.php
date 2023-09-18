<?php
/*
Template Name: Service1
*/
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Agile Academy</title>
</head>

<body class="box-border">

    <?php echo get_header() ?>

    <header id="header" class=" bg-cover  bg-[#033A54] lg:h-[340px] h-[260px] flex flex-col  w-[100%]">
        <div class="xl:p-[80px] lg:px-[48px] lg:py-[80px] py-[40px] px-[16px]">
            <div class="flex flex-row pb-[16px] lg:pt-[0px] pt-[50px]">
                <p class="text-[#C34849] hover:text-[#923031] text-[14px] pr-[4px]" style="font-family: Open_Sans_Bold;">Home</p>
                <p class="text-white text-[14px]" style="font-family: Open_Sans_Bold;"> > Service page</p>
            </div>
            <p class="text-white lg:text-[56px] text-[32px] " style="font-family: Merriweather_Black;">
                Enterprise Business Agility Transformation</p>
        </div>

    </header>
    <section class="px-[16px] py-[48px] lg:py-[80px] lg:px-[40px] xl:p-[80px]">
        <div class=" flex flex-col lg:flex-row justify-between items-center">
            <div class="xl:mr-[150px] lg:mb-[0px] mb-[48px]">
                <p class="text-[#0F1F26] md:text-[32px] text-[24px] pb-[16px]" style="font-family: Merriweather_Black;">About</p>
                <p class="text-[#4F5B66] md:text-[18px] text-[16px]" style="font-family: Open_Sans;">The journey to
                    transform an organization is not a quick or easy one. More than 80% of enterprise agile
                    transformations fail because sustainable & successful Agile transformations require a true shift in
                    not only the processes but the entire culture of the organization. Moreover, a transformation should
                    be guided by a strong purpose around creating more impact on customers rather than driving
                    efficiency or more profits. 
                    At Agile Academy, we help your organization by first identifying the purpose (the WHY) behind the
                    transformation, the goals and outcomes that drive your transformation journey as well as
                    architecting the overall transformation roadmap and approach while highlighting key ROI milestones
                    along the way.
                    Agile Academy consultants co-create an agile transformation roadmap with the organization’s leaders
                    and internal agile transformation team to identify which agile practices the organization will focus
                    on first to realize the key values of agile. The multi-staged, multi-dimensional roadmap looks at
                    values like collaboration, innovation, efficiency, effectiveness, flexibility, frequent delivery,
                    integration, and sustainability. The roadmap also involves multiple dimensions of each stage such as
                    preparation work done by the transformation team, practices that are on a team level (both technical
                    and non-technical), portfolio practices, leadership, and executive practices, as well as cultural
                    practices. We believe our roadmaps are the most detailed and precise enterprise agile transformation
                    roadmaps in the industry. They are highly customizable, since they are co-designed by the
                    organization, and tailored to your organization’s unique needs.</p>

            </div>
            <img class="xl:w-[510px] xl:h-[510px] w-[452px] h-[452px]" src="assets/images/card1.png">
        </div>
    </section>
    <section class="p-[40px] lg:px-[40px] lg:py-[80px] xl:p-[80px]">
        <div class="flex lg:flex-row flex-col justify-between ">
            <p class="text-[#0F1F26] lg:text-[32px]  text-[24px]" style="font-family: Merriweather_Black;">Service Elements</p>
            <div class="lg:w-[452px]">
                <p class="text-[#0F1F26] md:text-[24px] text-[18px] pb-[16px]" style="font-family: Merriweather_Bold;">Outcomes</p>
                <p class="text-[#4F5B66] md:text-[16px] text-[14px]" style="font-family: Open_Sans;">Work with one of our trainers to create a release plan. You’ll learn techniques for prioritizing your product backlog, estimating velocity, and creating a release plan that delivers value to stakeholders—a plan the team can really achieve.</p>
                <hr class="my-[40px]">
                <p class="text-[#0F1F26] md:text-[24px] text-[18px] pb-[16px]" style="font-family: Merriweather_Bold;">Sprint Planning</p>
                <p class="text-[#4F5B66] md:text-[16px] text-[14px]" style="font-family: Open_Sans;">Many teams waste time in sprint planning trying to pin down (and argue over) the perfect plan. We can walk you through how to design an effective sprint planning meeting, in the right amount of time.</p>
                <hr class="my-[40px]">
                <p class="text-[#0F1F26] md:text-[24px] text-[18px] pb-[16px]" style="font-family: Merriweather_Bold;">Retrospectives and Reviews</p>
                <p class="text-[#4F5B66] md:text-[16px] text-[14px]" style="font-family: Open_Sans;">
                    Retrospectives are an essential part of continuous improvement, but you’ll face problems if team members aren’t forthcoming, or criticism isn’t constructive. We can facilitate a retrospective for your team, so that they can see how to run one successfully. As a result, they’ll know how to run retrospectives that help identify and choose new ways to improve. </p>
                <hr class="my-[40px]">
                <p class="text-[#0F1F26] md:text-[24px] text-[18px] pb-[16px]" style="font-family: Merriweather_Bold;">Executive Coaching</p>
                <p class="text-[#4F5B66] md:text-[16px] text-[14px]" style="font-family: Open_Sans;">
                    To reap the benefits of agile, you need to do more than train the development team. Leaders also need to understand and buy into these frameworks. Designed for busy schedules, our coaching shows executives how to support their teams, including the seven things they need to do to get the best from their agile teams. </p>

            </div>
        </div>
    </section>
    <section class="xl:pt-[120px] xl:pb-[56px] xl:px-[80px] lg:py-[80px] lg:px-[40px] py-[40px] px-[16px] bg-[#F2FBFF]">
        <p class="text-center text-[32px] md:pb-[80px] pb-[48px]" style="font-family:Merriweather_Black;">Outcomes</p>
        <div class="grid xl:grid-cols-3 lg:grid-cols-2 grid-cols-1  divide-[#CAD6E0] lg:gap-[80px] gap-[40px]">
            <div>
                <img class="w-[156px] h-[156px] pb-[24px] mx-auto" src="assets/images/card3.png">
                <p class=" text-center text-[#0F1F26] md:text-[24px] text-[18px]" style="font-family:Merriweather_Bold;">
                    Certified scrum master</p>
                <p class=" text-center text-[#4F5B66]  md:text-[16px] text-[14px]" style="font-family:Open_Sans;">
                    Two-day Certified ScrumMaster course with a day or two of coach-assisted backlog generation and sprint planning.
                </p>

            </div>
            <div>
                <img class="w-[156px] h-[156px] pb-[24px] mx-auto" src="assets/images/card2.png">
                <p class=" text-center text-[#0F1F26] md:text-[24px] text-[18px]" style="font-family:Merriweather_Bold;">
                    Certified Scrum Product Owner</p>
                <p class=" text-center text-[#4F5B66]  md:text-[16px] text-[14px]" style="font-family:Open_Sans;">
                    The Certified Scrum Product Owner course can be combined with coaching that emphasizes user stories or release planning.</p>

            </div>
            <div>
                <img class="w-[156px] h-[156px] pb-[24px] mx-auto" src="assets/images/card4.png">
                <p class=" text-center text-[#0F1F26] md:text-[24px] text-[18px]" style="font-family:Merriweather_Bold;">
                    Better User Stories</p>
                <p class=" text-center text-[#4F5B66]  md:text-[16px] text-[14px]" style="font-family:Open_Sans;">
                    A one-day Better User Stories class followed by a one-day assisted story-writing workshop.</p>
            </div>
        </div>
    </section>
    <section class="md:py-[80px] py-[40px] px-[16px] flex flex-col items-center">
        <div class="lg:w-[620px]  ">
            <p class="text-center text-[#0F1F26] md:text-[32px] text-[24px]" style="font-family:Merriweather_Black;">Request service</p>
            <p class="text-center text-[#4F5B66]  md:text-[16px] text-[14px] md:pb-[64px] pb-[48px]">Use the contact form below to let us know your current agile goals and biggest challenges, and we’ll be in touch to help you determine the best path to improve.</p>
            <form class="flex flex-col">
                <input class="border border-[#CAD6E0] p-[16px] lg:w-[620px] rounded-[4px] mb-[24px] focus:border-[#033A54]" placeholder="Name">
                <input class="border border-[#CAD6E0] p-[16px] lg:w-[620px] rounded-[4px] mb-[24px]" placeholder="Email">

                <input class="border border-[#CAD6E0] p-[16px] lg:w-[620px] rounded-[4px] mb-[24px]" placeholder="Subject">

                <input class="border border-[#CAD6E0] p-[16px] lg:w-[620px] rounded-[4px] mb-[24px]" placeholder="Company">
                <textarea class="border border-[#CAD6E0] p-[16px] lg:w-[620px] h-[120px] rounded-[4px] mb-[40px]" placeholder="Message"></textarea>
                <button type="button" class="text-white rounded-[4px] text-[16px]  bg-[#C34849] hover:bg-[#923031] border border-white  md:w-[191px] w-full text-center  py-[10px] md:px-[32px] px-[24px]" style="font-family:Open_Sans_Bold; ">Send message</button>


            </form>
        </div>
    </section>

    <!-- get the footer -->
    <?php get_footer(); ?>

</body>

</html>