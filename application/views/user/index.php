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
                <p style="font-size: 35px; color: #000;" class="lead">Marshall Education Course</p>
            </div>
        </div><!-- end title -->

        <?php foreach ($course_get_list as $course_get_list_item) { ?>

            <div class="card text-center  col-sm-4">
                <div class="card-header">
                    <img src="<?php echo base_url('upload/' . $course_get_list_item['c_img']) ?>" alt="" class="img-fluid">
                </div>
                <div class="card-body">
                    <h3 class="card-title"><a href="#" title=""><?php echo $course_get_list_item['c_title'] ?></a></h3>
                    <p class="card-text"><?php echo $course_get_list_item['c_desc'] ?></p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
                <div class="card-footer text-muted">
                    <div class="course-meta-bot">
                        <ul>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $course_get_list_item['c_date'] ?></li>
                            <li><i class="fa fa-clock" aria-hidden="true"></i> <?php echo $course_get_list_item['c_month'] ?></li>
                            <li><i class="fa fa-money" aria-hidden="true"></i> <?php echo $course_get_list_item['c_price'] ?> AZN</li>
                        </ul>
                    </div>
                </div>
            </div>

        <?php  } ?>

        <button style="cursor: pointer;" class="form-control bg-primary">
            <a href="<?php echo base_url('course2'); ?>">Read More</a>
        </button>

    </div><!-- end container -->

</div><!-- end section -->


<!-- end -->


<section class="section lb page-section">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 offset-md-2">
                <h3>News and events</h3>
            </div>
        </div><!-- end title -->
        <!-- Slider start -->

        <?php foreach ($news_get_list as $news_get_list_item) { ?>
            <div class="card col-sm-4" style="height: 270px;">
                <img class="a_imgSize" src="<?php echo base_url('upload/' . $news_get_list_item['n_img']) ?>" alt="">
                <div class="card-body">
                    <div class="absolute rounded -top-4 left-8">
                        <div class="a_date">
                            <span><?php echo $news_get_list_item['n_date'] ?></span>
                        </div>
                    </div>
                    <span class="card-title">
                        <?php echo $news_get_list_item['n_desc'] ?>
                    </span>
                    <!-- <p class="card-text">2034/23/32</p> -->
                </div>
            </div>
        <?php } ?>

        <!-- Slider end -->
    </div>
</section>

<?php $this->load->view('user/includes/footer') ?>
<?php $this->load->view('user/includes/footerStyle') ?>