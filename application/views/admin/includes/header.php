<div class="flex relative" x-data="{navOpen: false}">
  <!-- NAV -->
  <nav class="absolute md:relative w-64 transform -translate-x-full md:translate-x-0 h-screen bg-black transition-all duration-300" :class="{'-translate-x-full': !navOpen}">
    <div class="flex flex-col justify-between h-full">
      <div class="p-4">
        <!-- LOGO -->
        <a class="flex items-center text-white space-x-4" href="">
          <img class="img" src="<?php echo base_url('public/user/assets/') ?>images/favicon.ico" alt="">
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
          <div class="container">
            <div class="menu">
              <button class="toggle">Slider</button>
              <ul class="list">
                <a class="list-item" href="<?php echo base_url('c_slider') ?>">Creat Slider</a>
                <a class="list-item" href="<?php echo base_url('l_slider') ?>">List Slider</a>
              </ul>
            </div>
          </div>
          <!-- AND -->
        </div>

      </div>

      <!-- PROFILE -->
      <div class="text-gray-200 border-gray-800 rounded flex items-center justify-between p-2">
        <div class="flex items-center space-x-2">
          <!-- AVATAR IMAGE BY FIRST LETTER OF NAME -->
          <img src="https://ui-avatars.com/api/?name=Habib+Mhamadi&size=128&background=ff4433&color=fff" class="w-7 w-7 rounded-full" alt="Profile">
          <h1>Null Null</h1>
        </div>
        <a onclick="event.preventDefault(); document.getElementById('logoutForm').submit()" href="#" class="hover:bg-gray-800 hover:text-white p-2 rounded">
          <form id="logoutForm" action="" method="POST"></form>
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
          </svg>
          </form>
        </a>
      </div>

    </div>
  </nav>
  <main class="flex-1 h-screen overflow-y-scroll overflow-x-hidden">
    <!-- END OF NAV -->