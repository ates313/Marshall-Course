<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header') ?>

<!------ Include the above in your  tag ---------->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>


<div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover" data-interval="false">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleControls" data-slide-to="1"></li>
        <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        <li data-target="#carouselExampleControls" data-slide-to="3"></li>
        <li data-target="#carouselExampleControls" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div id="home" class="first-section" style="background-image:url('public/user/assets/images/slider-01.jpg');">
                <div class="dtab">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="big-tagline">
                                    <h2>Welcome<strong> MarshallEDU!</strong></h2>
                                    <p class="lead">With Landigoo responsive landing page template, you can promote
                                        your all hosting, domain and email services. </p>
                                </div>
                            </div>
                        </div><!-- end row -->
                    </div><!-- end container -->
                </div>
            </div><!-- end section -->
        </div>

        <?php foreach ($slider_get_list as $slider_get_list_item) { ?>
            <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('<?php echo base_url('upload/' . $slider_get_list_item['s_img']) ?>');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="big-tagline">
                                        <h2 data-animation="animated zoomInRight"><?php echo $slider_get_list_item['s_title'] ?></h2>
                                        <p class="lead" data-animation="animated fadeInLeft"><?php echo $slider_get_list_item['s_desc'] ?> </p>
                                        <a target="_blank" href="<?php echo $slider_get_list_item['s_link'] ?>" class="hover-btn-new"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end container -->
                    </div>
                </div><!-- end section -->
            </div>
        <?php } ?>

        <!-- Left Control -->
        <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="fa fa-angle-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <!-- Right Control -->
        <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="fa fa-angle-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<!-- Course start -->
<div id="overviews" class="section wb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <p style="font-size: 35px;" class="lead">Marshall Education Course</p>
            </div>
        </div><!-- end title -->

        <?php foreach ($course_get_list as $course_get_list_item) { ?>

            <div class="col-lg-4 col-md-6 col-12 mb-2 mt-1" style="float: left;">
                <div class="course-item">
                    <div class="image-blog">
                        <img src="<?php echo base_url('upload/' . $course_get_list_item['c_img']) ?>" alt="" class="img-fluid">
                    </div>
                    <div class="course-br">
                        <div class="course-title">
                            <h2><a href="#" title=""><?php echo $course_get_list_item['c_title'] ?></a></h2>
                        </div>
                        <div class="course-desc">
                            <p><?php echo $course_get_list_item['c_desc'] ?></p>
                        </div>
                    </div>
                    <div class="course-meta-bot">
                        <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $course_get_list_item['c_date'] ?></li>
                        </ul>
                        <ul>
                            <li><i class="fa fa-clock" aria-hidden="true"></i> <?php echo $course_get_list_item['c_month'] ?></li>
                            <li><i class="fa fa-money" aria-hidden="true"></i> <?php echo $course_get_list_item['c_price'] ?>AZN</li>
                        </ul>
                    </div>
                </div>
            </div><!-- end col -->

        <?php  } ?>
    </div><!-- end container -->



    <hr class="hr3">

</div><!-- end section -->


<!-- end -->


<section class="section lb page-section">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3>News and events</h3>
                <!-- <p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                    lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!
                </p> -->
            </div>
        </div><!-- end title -->
        <!-- Slider start -->
        <div class="timeline">

            <div class="a_main">
                <div class="relative w-1/3 overflow-hidden rounded bg-gray-100 my-4">
                    <div class="h-60 overflow-hidden rounded-t">
                        <div class="a_imgSize">
                            <img class="a_imgSize" src="https://d1ymz67w5raq8g.cloudfront.net/Pictures/1024x536/P/web/n/z/b/onlinecourses_shutterstock_490891228_2000px_728945.jpg" alt="" class="h-full w-full object-cover">
                        </div>
                    </div>
                    <div class="relative p-8 h-auto">
                        <div class="absolute rounded -top-4 left-8">
                            <div class="a_date">
                                <spam>31/08/2023</span>
                            </div>
                        </div>
                        <div class="a_text">
                            <span>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Slider end -->
    </div>
</section>

<div id="testimonials" class="parallax section db parallax-off" style="background-image:url('public/user/assets/images/parallax_04.jpg');">
    <div class="container">
        <div class="section-title text-center">
            <h3>Testimonials</h3>
            <p>Lorem ipsum dolor sit aet, consectetur adipisicing lit sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. </p>
        </div><!-- end title -->
    </div><!-- end container -->
</div><!-- end section -->
<div class="parallax section dbcolor">
    <div class="container">
        <div class="row logos">
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="<?php echo base_url('public/user/assets/') ?>images/logo_01.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="<?php echo base_url('public/user/assets/') ?>images/logo_03.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="<?php echo base_url('public/user/assets/') ?>images/logo_04.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="<?php echo base_url('public/user/assets/') ?>images/logo_05.png" alt="" class="img-repsonsive"></a>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInUp">
                <a href="#"><img src="<?php echo base_url('public/user/assets/') ?>images/logo_06.png" alt="" class="img-repsonsive"></a>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<?php $this->load->view('user/includes/footer') ?>
<?php $this->load->view('user/includes/footerStyle') ?>