<?php

/* Template Name: Courses Calendar */

?>

<?php get_header(); ?>

<body class="box-border" x-data="{ showCalendar: false }">

    <header id="header" class=" bg-cover  bg-[#033A54] h-[286px]  flex flex-col  w-[100%]">
        <div class="xl:p-[80px] lg:px-[48px] lg:py-[80px] py-[40px] px-[16px]">
            <div class="flex flex-row pb-[16px] lg:pt-[0px] pt-[50px]">
                <p class="text-[#C34849] hover:text-[#923031] text-[14px] pr-[4px]" style="font-family: Open_Sans_Bold;">Home</p>
                <p class="text-white text-[14px]" style="font-family: Open_Sans_Bold;"> > Courses calendar</p>
            </div>
            <p class="text-white lg:text-[56px] text-[32px] " style="font-family: Merriweather_Black;">
                Courses calendar</p>
        </div>

    </header>
    <section class="xl:p-[80px] lg:px-[80px] lg:py-[40px] px-[16px] py-[48px]">



        <div class="flex  lg:flex-row flex-col justify-between  ">


            <!-- <h2 id="currentMonth" class="text-lg font-semibold"></h2> -->
            <div class="flex md:flex-row flex-col justify-between" x-show="showCalendar">
                <div class="md:mr-[40px] mr-[5px]">
                    <button id="currentMonth" data-dropdown-toggle="dropdownNavbar5" class="btn flex items-center  text-[#0F1F26] w-full md:text-[24px] text-[18px] md:mb-[0px] mb-[24px]" style="font-family:Merriweather_Bold"></button>
                    <div id="dropdownNavbar5" class="z-10 hidden font-normal bg-white rounded-[4px] shadow  ">
                        <ul id="monthList" class="py-2 w-[200px] text-sm text-[#4F5B66] overflow-auto h-[150px] " aria-labelledby="dropdownLargeButton">

                        </ul>

                    </div>
                </div>
                <div class="flex items-center ">
                    <button id="prevMonth" class="bg-[url('<?php echo get_template_directory_uri()?>/assets/images/left-arrow.svg')] hover:bg-[url('<?php echo get_template_directory_uri()?>/assets/images/hover-left-arrow.svg')] w-[56px] h-[40px] md:mr-[16px] mr-[5px]">&nbsp</button>
                    <button id="nextMonth" class="bg-[url('<?php echo get_template_directory_uri()?>/assets/images/right-arrow.svg')] hover:bg-[url('<?php echo get_template_directory_uri()?>/assets/images/hover-left-arrow.svg')] hover:rotate-180 w-[56px] h-[40px] ">&nbsp</button>
                </div>

            </div>
            <div class="flex md:flex-row flex-col  justify-between" x-show="!showCalendar">
                <div class="md:mr-[40px] mr-[5px]">
                    <button id="currentRange" data-dropdown-toggle="dropdownNavbar6" class="btn flex items-center justify-between text-[#0F1F26] w-full xl:text-[24px] text-[18px] md:mb-[0px] mb-[24px]" style="font-family:Merriweather_Bold">4 Mar, 2022 - 9 May, 2022 <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg></button>
                    <div id="dropdownNavbar6" class="z-10 hidden font-normal bg-white rounded-[4px] shadow  ">
                        <ul id="rangeList" class="py-2 w-[250px] text-sm text-[#4F5B66] overflow-auto h-[130px] " aria-labelledby="dropdownLargeButton">

                        </ul>

                    </div>
                </div>

                <div class="flex items-center ">
                    <button id="prevRange" class="bg-[url('<?php echo get_template_directory_uri()?>/assets/images/left-arrow.svg')] hover:bg-[url('<?php echo get_template_directory_uri()?>/assets/images/hover-left-arrow.svg')] w-[56px] h-[40px] md:mr-[16px] mr-[5px]">&nbsp</button>
                    <button id="nextRange" class="bg-[url('<?php echo get_template_directory_uri()?>/assets/images/right-arrow.svg')] hover:bg-[url('<?php echo get_template_directory_uri()?>/assets/images/hover-left-arrow.svg')] hover:rotate-180 w-[56px] h-[40px] ">&nbsp</button>
                </div>

            </div>

            <div class="flex lg:flex-row flex-col justify-between">
                <div class="relative  lg:block mr-[16px] lg:my-[0px] my-[16px] ">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none ">
                        <svg class="w-4 h-4 text-[#8195A6] dark:text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>

                        <span class="sr-only">Search icon</span>
                    </div>
                    <input type="text" id="searchInput" x-show="showCalendar" class="block xl:w-[282px] lg:w-[203px] w-full p-2 pl-10 border border-[#CAD6E0] rounded-[4px] text-[#8195A6] bg-white text-[14px] focus:border-[#033A54] dark:focus:border-[#033A54] dark:border-[#033A54]" style="font-family: Open_Sans; font-weight: 400;" placeholder="Search...">
                    <input type="text" id="searchInputlist" x-show="!showCalendar" class="block xl:w-[282px] lg:w-[203px] w-full p-2 pl-10 border border-[#CAD6E0] rounded-[4px] text-[#8195A6] bg-white text-[14px] focus:border-[#033A54] dark:focus:border-[#033A54] dark:border-[#033A54]" style="font-family: Open_Sans; font-weight: 400;" placeholder="Search...">

                </div>
                <div class="flex border border-[#033A54] lg:w-[200px] h-[40px] w-full round-[4px] lg:my-[0px] md:mt-[16px]">
                    <div x-show="showCalendar" class="flex w-[50%] text-[#033A54] items-center justify-center cursor-pointer " @click="showCalendar=false">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/List-icon.svg" class="w-[24px] h-[24px]">

                        <p class="text-[#033A54] text-[14px] pl-[8px] text-center" style="font-family:Open_Sans_Bold;">List</p>
                    </div>
                    <div x-show="!showCalendar" class="flex w-[50%] bg-[#033A54] text-white items-center justify-center cursor-pointer " @click="showCalendar=false">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/List-icon-white.svg" class="w-[24px] h-[24px]">

                        <p class="text-white text-[14px] pl-[8px] text-center" style="font-family:Open_Sans_Bold;">List</p>
                    </div>
                    <div x-show="showCalendar" class="flex w-[50%] bg-[#033A54] text-white items-center justify-center cursor-pointer " @click="showCalendar=true">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Calendar-icon.svg" class="w-[24px] h-[24px]">
                        <p class="text-white text-[14px] pl-[8px] text-center" style="font-family:Open_Sans_Bold;">
                            Month</p>

                    </div>
                    <div x-show="!showCalendar" class="flex w-[50%]  text-[#033A54] items-center justify-center cursor-pointer " @click="showCalendar=true">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/Calendar-icon-blue.svg" class="w-[24px] h-[24px]">
                        <p class="text-[#033A54] text-[14px] pl-[8px] text-center" style="font-family:Open_Sans_Bold;">
                            Month</p>

                    </div>


                </div>
            </div>
        </div>
        <div class="grid grid-cols-7   md:my-[40px] my-[24px]" x-show="showCalendar">
            <div class="text-center text-[#4F5B66] text-[16px]" style="font-family: Open_Sans;">Sun</div>
            <div class="text-center text-[#4F5B66] text-[16px]" style="font-family: Open_Sans;">Mon</div>
            <div class="text-center text-[#4F5B66] text-[16px]" style="font-family: Open_Sans;">Tue</div>
            <div class="text-center text-[#4F5B66] text-[16px]" style="font-family: Open_Sans;">Wed</div>
            <div class="text-center text-[#4F5B66] text-[16px]" style="font-family: Open_Sans;">Thu</div>
            <div class="text-center text-[#4F5B66] text-[16px]" style="font-family: Open_Sans;">Fri</div>
            <div class="text-center text-[#4F5B66] text-[16px]" style="font-family: Open_Sans;">Sat</div>
        </div>
        <div id="calendar" class="grid grid-cols-7   " x-show="showCalendar"></div>
        <div x-show="!showCalendar">
            <div class="flex w-full lg:my-[64px] my-[40px]">
                <hr class="border-[#CAD6E0] my-[28px]  xl:w-[42%] md:w-[38%] w-[30%]">
                <p class="lg:text-[24px] text-[16px] text-[#0F1F26] my-[12px] md:px-[24px] px-[16px]   " style="font-family:Merriweather_Bold ;">March 2022</p>
                <hr class="border-[#CAD6E0] my-[28px] xl:w-[42%] md:w-[38%] w-[30%]">
            </div>
            <div class="grid gap-[40px]">
                <div class="flex xl:flex-row flex-col">
                    <p class=" xl:w-[400px] text-[#0F1F26] text-[16px] xl:mr-[40px] mb-[40px]" style="font-family:Open_Sans;">March 27, 2018 @ 9:00 am - March 29, 2018 @ 5:00 pm</p>
                    <div class="card border border-[#CAD6E0] p-[24px] flex lg:flex-row flex-col">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/course.png" class="w-[150px] h-[150px] lg:mr-[24px] lg:mb-[0px] mb-[24px]">
                        <div class="xl:w-[840px]">
                            <p class="text-[24px] text-[#0F1F26] mb-[16px]" style="font-family:Merriweather_Bold;">
                                Fundamentals of Agile Software Development (ICP)</p>
                            <p class="text-[16px] text-[#4F5B66] pb-[24px]" style="font-family: Open_Sans;">This
                                course is an efficient and effective way to introduce you to the fundamentals of the
                                Agile mindset, values, principles as well as a broad overview of popular methods and
                                practices. Upon attending this course, you’ll earn the<span class="text-[#C34849]">
                                    ICAgile Certified Professional (ICP)</span>> certificate.</p>
                            <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button>
                        </div>
                    </div>
                </div>
                <div class="flex xl:flex-row flex-col">
                    <p class=" xl:w-[400px] text-[#0F1F26] text-[16px] xl:mr-[40px] mb-[40px]" style="font-family:Open_Sans;">March 31, 2018 @ 9:00 am - 5:00 pm</p>
                    <div class="card border border-[#CAD6E0] p-[24px] flex lg:flex-row flex-col">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/course.png" class="w-[150px] h-[150px] lg:mr-[24px] lg:mb-[0px] mb-[24px]">
                        <div class="xl:w-[840px]">
                            <p class="text-[24px] text-[#0F1F26] mb-[16px]" style="font-family:Merriweather_Bold;">
                                Agile Team Facilitation (ICP-ATF)</p>
                            <p class="text-[16px] text-[#4F5B66] pb-[24px]" style="font-family: Open_Sans;">
                                Agile teams are self-organizing and highly collaborative. Team leaders or scrum
                                masters should understand the group dynamics and possess facilitation skills to
                                effectively facilitate group activities. This course provides an in-depth
                                understanding of how collaborative activities can be planned, organised and run.
                                Upon attending this course, you’ll earn the<span class="text-[#C34849]"> ICAgile
                                    Certified Professional for Agile Team Facilitation (ICP-ATF)</span> certificate.
                            </p>
                            <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button>
                        </div>
                    </div>
                </div>
                <div class="flex xl:flex-row flex-col">
                    <p class=" xl:w-[400px] text-[#0F1F26] text-[16px] xl:mr-[40px] mb-[40px]" style="font-family:Open_Sans;">March 27, 2018 @ 9:00 am - March 29, 2018 @ 5:00 pm</p>
                    <div class="card border border-[#CAD6E0] p-[24px] flex lg:flex-row flex-col">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/course.png" class="w-[150px] h-[150px] lg:mr-[24px] lg:mb-[0px] mb-[24px]">
                        <div class="xl:w-[840px]">
                            <p class="text-[24px] text-[#0F1F26] mb-[16px]" style="font-family:Merriweather_Bold;">
                                Agile Professional Programming (ICP-PRG)</p>
                            <p class="text-[16px] text-[#4F5B66] pb-[24px]" style="font-family: Open_Sans;">This
                                course covers the engineering skills and tools required to become a professional
                                programmer. It empowers agile programmers to develop clean code and produce quality
                                products taking into consideration product changes and technical innovation. Upon
                                attending this course, you’ll earn the <span class="text-[#C34849]">ICAgile Certified Professional in Agile
                                    Programming (ICP-PRG)</span> certificate.</p>
                            <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex w-full lg:my-[64px] my-[40px]">
                <hr class="border-[#CAD6E0] my-[28px]  xl:w-[42%] md:w-[38%] w-[30%]">
                <p class="lg:text-[24px] text-[16px] text-[#0F1F26] my-[12px] md:px-[24px] px-[16px]   " style="font-family:Merriweather_Bold ;">April 2022</p>
                <hr class="border-[#CAD6E0] my-[28px] xl:w-[42%] md:w-[38%] w-[30%]">
            </div>
            <div class="grid gap-[40px]">
                <div class="flex xl:flex-row flex-col">
                    <p class=" xl:w-[400px] text-[#0F1F26] text-[16px] xl:mr-[40px] mb-[40px]" style="font-family:Open_Sans;">March 27, 2018 @ 9:00 am - March 29, 2018 @ 5:00 pm</p>
                    <div class="card border border-[#CAD6E0] p-[24px] flex lg:flex-row flex-col">
                        <img src="<?php echo get_template_directory_uri()?>/assets/images/course.png" class="w-[150px] h-[150px] lg:mr-[24px] lg:mb-[0px] mb-[24px]">
                        <div class="xl:w-[840px]">
                            <p class="text-[24px] text-[#0F1F26] mb-[16px]" style="font-family:Merriweather_Bold;">
                                Fundamentals of Agile Software Development (ICP)</p>
                            <p class="text-[16px] text-[#4F5B66] pb-[24px]" style="font-family: Open_Sans;">This
                                course is an efficient and effective way to introduce you to the fundamentals of the
                                Agile mindset, values, principles as well as a broad overview of popular methods and
                                practices. Upon attending this course, you’ll earn the<span class="text-[#C34849]">
                                    ICAgile Certified Professional (ICP)</span>> certificate.</p>
                            <button type="button" class="text-[#033A54] hover:bg-[#033A54] hover:text-white rounded-[4px] text-[14px]  bg-white  border border-[#033A54]  lg:w-[132px] w-full text-center  py-[10px]  px-[24px]" style="font-family:Open_Sans_Bold; ">Learn more</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </section>
    <section class=" relative bg-cover bg-[#C34849]   h-[208px] px-[16px] py-[40px] flex flex-col justify-center items-center">
        <img class="lg:block hidden absolute top-0 right-0" src="<?php echo get_template_directory_uri()?>/assets/images/Icon.svg">
        <p class="text-white text-[32px] text-center pb-[24px]" style="font-family:Merriweather_Black;">Reach out to us
            for more information</p>
        <a href="contact-us.html"><button class="bg-white md:w-[160px] w-full px-[32px] py-[10px] rounded-[4px]" style="font-family:Open_Sans_Bold;">Contact us</button></a>

    </section>


    <?php get_footer(); ?>


    <!-- JavaScript for handling calendar functionality and search -->
    <script>
        const prevMonthBtn = document.getElementById('prevMonth');
        const nextMonthBtn = document.getElementById('nextMonth');
        const currentMonthDisplay = document.getElementById('currentMonth');
        const currentRangeDisplay = document.getElementById('currentRange');
        const monthDropdown = document.getElementById('monthDropdown');
        const calendar = document.getElementById('calendar');
        const searchInput = document.getElementById('searchInput');
        // var selectedRange="10 sep, 2023 - 15 Dec, 2023";
        // Sample events data (you can replace this with your event data)
        const events = [{
                start: '2023-09-10',
                end: '2023-09-12',
                startTime: "9:00 am",
                endTime: "5:00 pm",
                title: 'Fundamentals of Agile Software Development (ICP)',
                details: 'This course is an efficient and effective way to introduce you to the fundamentals of the Agile mindset, values, principles as well as a broad overview of popular methods and practices. Upon attending this course, you’ll earn the ICAgile Certified Professional (ICP) certificate.'
            },
            {
                start: '2023-09-25',
                end: '2023-09-25',
                startTime: "9:00 am",
                endTime: "5:00 pm",
                title: 'Agile Team Facilitation (ICP-ATF)',
                details: 'Agile teams are self-organizing and highly collaborative. Team leaders or scrum masters should understand the group dynamics and possess facilitation skills to effectively facilitate group activities. This course provides an in-depth understanding of how collaborative activities can be planned, organised and run. Upon attending this course, you’ll earn the ICAgile Certified Professional for Agile Team Facilitation (ICP-ATF) certificate.'
            },
            // Add more events here
        ];
        // function selectRange(range){
        //     // console.log(range);

        //     selectedRange=range;
        //     currentRangeDisplay.innerHTML=` ${selectedRange} <svg class="w-2.5 h-2.5 ml-2.5"
        //                             aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
        //                             viewBox="0 0 10 6">
        //                             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
        //                                 stroke-width="2" d="m1 1 4 4 4-4" />
        //                         </svg>`;

        // }

        const today = new Date();
        let currentMonth = today.getMonth();
        let currentYear = today.getFullYear();

        function updateCalendar(searchTerm = '') {
            // Clear previous calendar content
            calendar.innerHTML = '';

            // Set the calendar header to display the current month and year
            // currentMonthDisplay.textContent = `${new Date(currentYear, currentMonth).toLocaleString('default', { month: 'long' })} ${currentYear} `;
            currentMonthDisplay.innerHTML = `${new Date(currentYear, currentMonth).toLocaleString('default', { month: 'long' })} ${currentYear} <svg class="w-2.5 h-2.5 ml-2.5"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>`
            // currentRangeDisplay.innerHTML=` ${selectedRange} <svg class="w-2.5 h-2.5 ml-2.5"
            //     aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            //     viewBox="0 0 10 6">
            //     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
            //         stroke-width="2" d="m1 1 4 4 4-4" />
            // </svg>`
            // Calculate the first day of the month
            const firstDayOfMonth = new Date(currentYear, currentMonth, 1).getDay();

            // Calculate the number of days in the current month
            const lastDay = new Date(currentYear, currentMonth + 1, 0).getDate();

            // Generate calendar days, including leading empty cells
            for (let i = 0; i < firstDayOfMonth; i++) {
                const emptyCell = document.createElement('div');
                emptyCell.className = 'p-[16px] text-start ';
                calendar.appendChild(emptyCell);
            }

            // Generate calendar days
            for (let day = 1; day <= lastDay; day++) {
                const date = new Date(currentYear, currentMonth, day + 1).toISOString().split('T')[0];
                const filteredEvents = events.filter(event => event.start <= date && event.end >= date);

                // Filter events by search term
                const filteredEventsByName = filteredEvents.filter(event => event.title.toLowerCase().includes(searchTerm.toLowerCase()));

                const dayElement = document.createElement('div');
                dayElement.id = `${day}-${currentMonth}-${currentYear}`;
                dayElement.className = ' dayElement p-[16px] text-start border border-[#CAD6E0] h-[183px] text-[#0F1F26]';
                dayElement.style.fontFamily = "Open_Sans";

                // Highlight today's date
                // if (currentMonth === today.getMonth() && currentYear === today.getFullYear() && day === today.getDate()) {
                //     dayElement.classList.add('bg-[#F2FBFF]');
                // }

                // Check if there are events on this day

                if (filteredEventsByName.length > 0) {
                    const eventGroup = document.createElement('div');
                    eventGroup.className = ' eventGroup relative h-[140px] text-sm overflow-hidden  ';
                    eventGroup.style.cursor = 'pointer';


                    filteredEventsByName.forEach(event => {
                        const eventItem = document.createElement('p');
                        eventItem.className = 'eventItem';

                        eventItem.textContent = `${event.title} \n ${event.startTime} - ${event.endTime}`;
                        eventItem.style.textOverflow = 'ellipsis';
                        eventItem.style.overflow = 'hidden';
                        eventGroup.appendChild(eventItem);
                    });



                    dayElement.textContent = day;

                    dayElement.classList.add('cursor-pointer', 'relative', 'h-[183px]', 'bg-[#F2FBFF]', 'border', 'border-[#406986]');




                    dayElement.appendChild(eventGroup);



                } else {
                    dayElement.textContent = day;
                }

                calendar.appendChild(dayElement);

            }


        }

        // Initial calendar update
        updateCalendar();
        // console.log(today.getMonth.currentMonth);
        // console.log(currentMonth);
        // console.log(currentYear);
        // console.log(document.getElementById('10-9-2023'));
        function updateCalendarByMonth(month) {
            const selectedDate = new Date(currentYear, month, 1);
            currentMonth = selectedDate.getMonth();
            currentYear = selectedDate.getFullYear();
            updateCalendar(searchInput.value);
        }

        // Function to populate the month list
        function populateMonthList() {
            const monthList = document.getElementById('monthList');
            monthList.innerHTML = ''; // Clear existing months

            for (let i = 0; i < 12; i++) {
                const year = currentYear;
                const month = new Date(currentYear, i, 1).toLocaleString('default', {
                    month: 'long'
                });
                const listItem = document.createElement('li');
                const anchor = document.createElement('a');
                anchor.textContent = `${month} ${year}`;
                // anchor.href = ''; // Add a href attribute if needed
                anchor.classList.add('block'); // 
                anchor.classList.add('py-2');
                anchor.classList.add('px-2');
                anchor.classList.add('hover:bg-[#F2FBFF]');
                // anchor.classList.add('hover:text-[#033A54]');
                anchor.style.fontFamily = 'Open_Sans';
                anchor.textContent = `${month} ${year}`;
                listItem.appendChild(anchor);
                monthList.appendChild(listItem);

                // Add click event listener to select the month
                listItem.addEventListener('click', () => {
                    updateCalendarByMonth(i); // Update the calendar based on the selected month
                    document.getElementById('monthDropdown').classList.remove('show'); // Close the dropdown
                });
            }
        }

        // Set the default selected month and year in the month list
        populateMonthList();

        // Event listener for navigating to previous month
        prevMonthBtn.addEventListener('click', () => {
            if (currentMonth === 0) {
                currentMonth = 11;
                currentYear--;
            } else {
                currentMonth--;
            }
            populateMonthList(); // Update month list
            updateCalendar(searchInput.value);
        });

        // Event listener for navigating to next month
        nextMonthBtn.addEventListener('click', () => {
            if (currentMonth === 11) {
                currentMonth = 0;
                currentYear++;
            } else {
                currentMonth++;
            }
            populateMonthList(); // Update month list
            updateCalendar(searchInput.value);
        });

        // Event listener for search input change
        searchInput.addEventListener('input', () => {
            updateCalendar(searchInput.value);
        });
    </script>










</body>

</html>