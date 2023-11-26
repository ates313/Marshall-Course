<div class="flex relative" x-data="{navOpen: false}">
  <!-- NAV -->
  <nav class="absolute md:relative w-64 transform -translate-x-full md:translate-x-0 h-screen bg-black transition-all duration-300" :class="{'-translate-x-full': !navOpen}">
    <div class="flex flex-col justify-between h-full">
      <div class="p-4">
        <!-- LOGO -->
        <a class="flex items-center text-white space-x-4" href="">
          <img style="width: 50px;" class="img" src="<?php echo base_url('public/user/assets/') ?>images/favicon.ico" alt="">
          <span class="text-2xl font-bold">Marshall Education</span>
        </a>

        <!-- NAV LINKS -->
        <div class="py-4 text-gray-400 space-y-1">
          <!-- BASIC LINK -->
          <a href="<?php echo base_url('admin') ?>" class="block py-2.5 px-4 flex items-center space-x-2 bg-gray-800 text-white hover:bg-gray-800 hover:text-white rounded">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <span>Dashboard</span>
          </a>
          <!-- DROPDOWN LINK -->
          
          <div class="block" x-data="{open: false}">
            <div @click="open = !open" class="flex items-center justify-between hover:bg-gray-800 hover:text-white cursor-pointer py-2.5 px-4 rounded">
              <div class="flex items-center space-x-2">
                <i class="fa-solid fa-sliders"></i>
                <span>Slider</span>
              </div>
              <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
              </svg>
              <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
            <div x-show="open" class="text-sm border-l-2 border-gray-800 mx-6 my-2.5 px-2.5 flex flex-col gap-y-1">
              <a class="list-item" href="<?php echo base_url('c_slider') ?>"><i class="fa-solid fa-plus p-1"></i>Creat</a>
              <a class="list-item" href="<?php echo base_url('l_slider') ?>"><i class="fa-solid fa-list p-1"></i>List</a>
            </div>
          </div>
          <!-- === -->
          <div class="block" x-data="{open: false}">
            <div @click="open = !open" class="flex items-center justify-between hover:bg-gray-800 hover:text-white cursor-pointer py-2.5 px-4 rounded">
              <div class="flex items-center space-x-2">
                <i class="fa-brands fa-discourse"></i>
                <span>Course</span>
              </div>
              <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
              </svg>
              <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
            <div x-show="open" class="text-sm border-l-2 border-gray-800 mx-6 my-2.5 px-2.5 flex flex-col gap-y-1">
              <a class="list-item" href="<?php echo base_url('c_course') ?>"><i class="fa-solid fa-plus p-1"></i>Creat</a>
              <a class="list-item" href="<?php echo base_url('l_course') ?>"><i class="fa-solid fa-list p-1"></i>List</a>
            </div>
          </div>
          <!-- == -->
          <div class="block" x-data="{open: false}">
            <div @click="open = !open" class="flex items-center justify-between hover:bg-gray-800 hover:text-white cursor-pointer py-2.5 px-4 rounded">
              <div class="flex items-center space-x-2">
                <i class="fa-regular fa-newspaper"></i>
                <span>News</span>
              </div>
              <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
              </svg>
              <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
            <div x-show="open" class="text-sm border-l-2 border-gray-800 mx-6 my-2.5 px-2.5 flex flex-col gap-y-1">
              <a class="list-item" href="<?php echo base_url('c_news') ?>"><i class="fa-solid fa-plus p-1"></i>Creat</a>
              <a class="list-item" href="<?php echo base_url('l_news') ?>"><i class="fa-solid fa-list p-1"></i>List</a>
            </div>
          </div>
          <!-- == -->
          <div class="block" x-data="{open: false}">
            <div @click="open = !open" class="flex items-center justify-between hover:bg-gray-800 hover:text-white cursor-pointer py-2.5 px-4 rounded">
              <div class="flex items-center space-x-2">
                <i class="fa-regular fa-address-card"></i>
                <span>Footer About</span>
              </div>
              <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
              </svg>
              <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
            <div x-show="open" class="text-sm border-l-2 border-gray-800 mx-6 my-2.5 px-2.5 flex flex-col gap-y-1">
              <a class="list-item" href="<?php echo base_url('c_footer') ?>"><i class="fa-solid fa-plus p-1"></i>Creat</a>
              <a class="list-item" href="<?php echo base_url('l_footer') ?>"><i class="fa-solid fa-list p-1"></i>List</a>
            </div>
          </div>
          <!-- == -->
          <div class="block" x-data="{open: false}">
            <div @click="open = !open" class="flex items-center justify-between hover:bg-gray-800 hover:text-white cursor-pointer py-2.5 px-4 rounded">
              <div class="flex items-center space-x-2">
                <i class="fa-solid fa-handshake"></i>
                <span>Partners</span>
              </div>
              <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
              </svg>
              <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
            <div x-show="open" class="text-sm border-l-2 border-gray-800 mx-6 my-2.5 px-2.5 flex flex-col gap-y-1">
              <a class="list-item" href="<?php echo base_url('c_partners') ?>"><i class="fa-solid fa-plus p-1"></i>Creat</a>
              <a class="list-item" href="<?php echo base_url('l_partners') ?>"><i class="fa-solid fa-list p-1"></i>List</a>
            </div>
          </div>
          <!-- == -->
          <div class="block" x-data="{open: false}">
            <div @click="open = !open" class="flex items-center justify-between hover:bg-gray-800 hover:text-white cursor-pointer py-2.5 px-4 rounded">
              <div class="flex items-center space-x-2">
              <i class="fa-solid fa-address-card"></i>
                <span>About Us</span>
              </div>
              <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
              </svg>
              <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
            <div x-show="open" class="text-sm border-l-2 border-gray-800 mx-6 my-2.5 px-2.5 flex flex-col gap-y-1">
              <a class="list-item" href="<?php echo base_url('c_about') ?>"><i class="fa-solid fa-plus p-1"></i>Creat</a>
              <a class="list-item" href="<?php echo base_url('l_about') ?>"><i class="fa-solid fa-list p-1"></i>List</a>
            </div>
          </div>
          <!-- == -->
          <div class="block" x-data="{open: false}">
            <div @click="open = !open" class="flex items-center justify-between hover:bg-gray-800 hover:text-white cursor-pointer py-2.5 px-4 rounded">
              <div class="flex items-center space-x-2">
                <i class="fa-solid fa-address-book"></i>
                <span>Drectoria</span>
              </div>
              <svg x-show="open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
              </svg>
              <svg x-show="!open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
            <div x-show="open" class="text-sm border-l-2 border-gray-800 mx-6 my-2.5 px-2.5 flex flex-col gap-y-1">
              <a class="list-item" href="<?php echo base_url('c_drectoria') ?>"><i class="fa-solid fa-plus p-1"></i>Creat</a>
              <a class="list-item" href="<?php echo base_url('l_drectoria') ?>"><i class="fa-solid fa-list p-1"></i>List</a>
            </div>
          </div>
          <!-- == -->
          <!-- AND -->
        </div>

      </div>

      <!-- PROFILE -->
      <div class="text-gray-200 border-gray-800 rounded flex items-center justify-between p-2">
        <a class="btn btn-primary form-control" href="<?php echo base_url('a_logOut'); ?>">Logout</a>

    </div>
  </nav>
  <main class="flex-1 h-screen overflow-y-scroll overflow-x-hidden">
    <!-- END OF NAV -->