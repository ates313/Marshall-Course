<!-- LOADER -->
<!-- <div id="preloader">
    <div class="loader-container">
        <div class="progress-br float shadow">
            <div class="progress__item"></div>
        </div>
    </div>
</div> -->
<!-- END LOADER -->
<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img style="width: 35px;" src="<?php echo base_url('public/user/assets/') ?>images/favicon.ico" alt="">
                <span class="a_logo">Marshall <span class="a_logo_yellow">Education</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-host">
                <ul class="navbar-nav ml-auto">
                    <?php $segment = $this->uri->segment(1); ?>
                    <li class="nav-item <?php if ($segment == 'home') : echo 'active';
                                        endif; ?>"><a class="nav-link" href="<?php echo base_url('home') ?>">Home</a></li>

                    <li class="nav-item dropdown <?php if ($segment == 'about') : echo 'active';
                                        endif; ?>">
                                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-b" data-toggle="dropdown">About Us</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-b">
                            <a class="dropdown-item" href="<?php echo base_url('about') ?>">About Us</a>
                            <a class="dropdown-item" href="<?php echo base_url('partners') ?>">Partners</a>
                            <a class="dropdown-item" href="<?php echo base_url('directoria') ?>">Directorate</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown  <?php if ($segment == 'course2' || $segment == 'course3' || $segment == 'course4') : echo 'active';
                                                    endif; ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Course
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="<?php echo base_url('course2') ?>">All Course</a>
                            <a class="dropdown-item" href="course-grid-3.html">Course Grid 3 </a>
                            <a class="dropdown-item" href="course-grid-4.html">Course Grid 4 </a>
                        </div>
                    </li>
                    <li class="nav-item <?php if ($segment == 'teachers') : echo 'active';
                                        endif; ?>"><a class="nav-link" href="<?php echo base_url('teachers'); ?>">Teachers</a></li>
                    <li class="nav-item <?php if ($segment == 'contact') : echo 'active';
                                        endif; ?>"><a class="nav-link" href="<?php echo base_url('contact'); ?>">Contact</a></li>
                </ul>
                <!-- <ul class="nav navbar-nav navbar-right">
                    <li><a class="hover-btn-new log orange" href="#" data-toggle="modal" data-target="#login"><span>Book Now</span></a></li>
                </ul> -->
            </div>
        </div>
    </nav>
</header>
<!-- End header -->