var isLogined = false;
var hide=false;
function hideHeader(){
    hide=!hide;
    if(hide){
        document.getElementById("header").style.display="none";
    }else document.getElementById("header").style.display="block";
}
const button = ` <button type="button"
            class="text-white rounded-[4px] text-[14px]  text-center border border-white py-[10px] px-[24px] hover:bg-white hover:text-[#033A54]     "data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            style="font-family:Open_Sans_Bold; ">Login</button>`;
const menuButton = ` <button type="button"
            class="text-white rounded-[4px] text-[14px]  text-center border border-white py-[10px] w-full hover:bg-white hover:text-[#033A54] "data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
            style="font-family:Open_Sans_Bold; ">Login</button>`;
const profile = `<button id="dropdownNavbarLink3" data-dropdown-toggle="dropdownNavbar3"
            class="flex items-center justify-between     text-white text-[14px]">
             <div class="flex flex-row items-center justify-center">
                <div class="rounded-[50%] bg-[#02283B] mr-[8px]">
                    <p class="text-white text-[24px] px-[16px] py-[6px]">E</p>
                </div>
                <p class="text-white text-[14px]" style="font-family: Open_Sans_Bold; ">Ezzeldeen</p>
            </div><svg
                class="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                    stroke-width="2" d="m1 1 4 4 4-4" />
            </svg></button>
        <!-- Dropdown menu -->
        <div id="dropdownNavbar3" class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
<div class="px-4 py-3">
<span class="text-[#4F5B66] text-[16px] block text-sm text-gray-900 dark:text-white" style="font-family: Open_Sans; font-weight: 400;">Ezzeldeen</span>
<span class="text-[#4F5B66] text-[16px] block text-sm   truncate dark:text-white" style="font-family: Open_Sans; font-weight: 400;">name@gmail.com</span>
</div>
<ul class="py-2" aria-labelledby="user-menu-button">
<li>
<a href="#" class=" text-[#4F5B66] text-[16px] block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" style="font-family: Open_Sans; font-weight: 400;">Dashboard</a>
</li>
<li>
<a href="#" class=" text-[#4F5B66] text-[16px] block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" style="font-family: Open_Sans; font-weight: 400;">Settings</a>
</li>
<li>
<a href="#" class=" text-[#4F5B66] text-[16px] block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" style="font-family: Open_Sans; font-weight: 400;">Earnings</a>
</li>
<li>
<a href="#" class=" text-[#4F5B66] text-[16px] block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" style="font-family: Open_Sans; font-weight: 400;">Sign out</a>
</li>
</ul>
</div>
        </div>`;
const menuProfile = ` <div class="relative lg:hidden">
                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="btn flex items-center justify-between text-white  w-full"
                            style="font-family: Open_Sans_Bold; ">
                            <div class="flex items-center justify-between">
                              <div class="rounded-[50%] bg-[#02283B] mr-[8px]">
                    <p class="text-white text-[24px] px-[16px] py-[6px]">E</p>
                </div>
                <p class="text-white text-[14px]" style="font-family: Open_Sans_Bold; ">Ezzeldeen</p>
                </div>
             <svg class="w-2.5 h-2.5 ml-2.5" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                            <div x-show="open" @click.away="open = false" class="dropdown-menu">
                                <div class="px-4 py-3">
<span class="text-white text-[16px] block text-sm text-gray-900 dark:text-white" style="font-family: Open_Sans; font-weight: 400;">Ezzeldeen</span>
<span class="text-white text-[16px] block text-sm   truncate dark:text-white" style="font-family: Open_Sans; font-weight: 400;">name@gmail.com</span>
</div>
                                <ul >
                            <li>
<a href="#" class=" text-white text-[16px] block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" style="font-family: Open_Sans; font-weight: 400;">Dashboard</a>
</li>
<li>
<a href="#" class=" text-white text-[16px] block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" style="font-family: Open_Sans; font-weight: 400;">Settings</a>
</li>
<li>
<a href="#" class=" text-white text-[16px] block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" style="font-family: Open_Sans; font-weight: 400;">Earnings</a>
</li>
<li>
<a href="#" class=" text-white text-[16px] block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" style="font-family: Open_Sans; font-weight: 400;">Sign out</a>
</li>

                        </ul>
                        </div>
                    </div>
                </div>`
if (!isLogined) {
    document.getElementById("login").innerHTML = button;
    document.getElementById("menu-login").innerHTML = menuButton;
} else {
    document.getElementById("login").innerHTML = profile;
    document.getElementById("menu-login").innerHTML = menuProfile;
}
const signUpModal = document.getElementById('register-modal');
const loginModal = document.getElementById('authentication-modal');
const forgetPasswordModal = document.getElementById('forgetPassword-modal');
function openSignUpModal(){
loginModal.classList.add('hidden');
signUpModal.classList.remove('hidden');
}
const searchInputNavBar = document.getElementById('search-navbar');
const autocompleteList = document.getElementById('autocomplete-list');



searchInputNavBar.addEventListener('input', function () {
  // Clear previous results
  autocompleteList.innerHTML = '';

  const searchTerm = this.value.trim();

  if (searchTerm.length >= 2) {
    // Simulate fetching autocomplete results (replace this with actual data fetching)
    const autocompleteResults = [
        { imageSrc: 'assets/images/star-icon.svg', text: 'Agile health assessment' },
              { imageSrc: 'assets/images/book-icon.svg', text: 'Fundamentals of Agile Software Development (ICP)' },
              { imageSrc: 'assets/images/book-icon.svg', text: 'Agile Team Facilitation (ICP-ATF)' },
              { imageSrc: 'assets/images/Search-icon.svg', text: 'Courses calendar' },
      // Add more results as needed
    ];

    const filteredResults = autocompleteResults.filter((result) =>
      result.text.toLowerCase().includes(searchTerm.toLowerCase())
    );

    if (filteredResults.length === 0) {
      // No results found, display a message and image
      const noResultLi = document.createElement('li');
      noResultLi.classList.add('justify-center', 'py-2', 'px-4');

      const noResultImg = document.createElement('img');
      noResultImg.src = 'assets/images/card2.png';
      noResultImg.alt = 'No Result Image';
      noResultImg.classList.add('w-[96px]', 'h-[96px]', 'mx-auto',);

      const noResultText = document.createElement('p');
      noResultText.textContent = `There were no results found for "${searchTerm}".`;
      noResultText.classList.add('text-center','text-[18px]','text-[#0F1F26]');
      noResultText.style.fontFamily="Open_Sans";

      noResultLi.appendChild(noResultImg);
      noResultLi.appendChild(noResultText);

      autocompleteList.appendChild(noResultLi);
    } else {
      // Results found, display them
      filteredResults.forEach((result) => {
        const li = document.createElement('li');
      li.classList.add('flex', 'py-[10px]', 'px-4','text-[#0F1F26]','text-[16px]','hover:bg-[#F2FBFF]','cursor-pointer');

        const img = document.createElement('img');
        img.src = result.imageSrc;
        img.alt = result.text;
        img.classList.add('w-[24px]', 'h-[24px]','mr-[12px]');

        const textElement = document.createElement('span');
        textElement.textContent = result.text;

        li.appendChild(img);
        li.appendChild(textElement);

        autocompleteList.appendChild(li);
      });
    }

    autocompleteList.classList.remove('hidden');
  } else {
    autocompleteList.classList.add('hidden');
  }
});

// Hide the autocomplete list when clicking outside of it
document.addEventListener('click', function (event) {
  if (!autocompleteList.contains(event.target) && event.target !== searchInputNavBar) {
    autocompleteList.classList.add('hidden');
  }
});


