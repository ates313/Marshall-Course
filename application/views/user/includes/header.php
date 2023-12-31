<!-- LOADER -->
<div id="preloader">
    <div class="loader-container">
        <div class="progress-br float shadow">
            <div class="progress__item"></div>
        </div>
    </div>
</div>
<!-- END LOADER -->
<!-- Start header -->
<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('home') ?>">
                <img style="width: 35px;" src="<?php echo base_url('public/user/assets/') ?>images/favicon.ico" alt="">
                <span class="a_logo">Marshall <i class="fa-solid fa-snowman" style="color: #4ec5df;"></i> <span class="a_logo_yellow">Education</span></span>
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
                            <a class="dropdown-item <?php if ($segment == 'about') : echo 'active'; endif; ?> " href="<?php echo base_url('about') ?>">About Us</a>
                            <a class="dropdown-item <?php if ($segment == 'partners') : echo 'active'; endif; ?> " href="<?php echo base_url('partners') ?>">Partners</a>
                            <a class="dropdown-item <?php if ($segment == 'directoria') : echo 'active'; endif; ?> " href="<?php echo base_url('directoria') ?>">Directoria</a>
                        </div>
                    </li>
                    <li class="nav-item <?php if ($segment == 'course2') : echo 'active';
                                        endif; ?>"><a class="nav-link" href="<?php echo base_url('course2') ?>">Courses</a></li>
                    </li>
                    <li class="nav-item <?php if ($segment == 'teachers') : echo 'active';
                                        endif; ?>"><a class="nav-link" href="<?php echo base_url('teachers'); ?>">Teachers</a></li>
                    <li class="nav-item <?php if ($segment == 'contact') : echo 'active';
                                        endif; ?>"><a class="nav-link" href="<?php echo base_url('contact'); ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- End header -->