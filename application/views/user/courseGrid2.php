<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header') ?>

<div class="all-title-box">
    <div class="container text-center text text-danger">
        <h1 style="color: #ffffff;">All Courses</h1>
    </div>
</div>

<div id="overviews" class="section wb">
    <div class="container" style="background-image: url('public/user/assets/images/world-map.png');">

        <div class="row">
            <?php foreach ($course_get_list as $course_get_list_item) { ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="course-card">
                        <div style="background: #feb548;" class="course-card-img">
                            <img src="<?php echo base_url('upload/' . $course_get_list_item['c_img']) ?>" class="main" alt="">
                        </div>
                        <div class="course-card-content">
                            <a href="<?php echo base_url('courseSingle/'  . $course_get_list_item['c_id']); ?>">
                                <h1><?php echo $course_get_list_item['c_title'] ?></h1>
                            </a>
                            <div class="text-muted">
                                <div class="course-meta-bot">
                                    <ul>
                                        <li><i class="fa fa-clock" aria-hidden="true"></i> <?php echo $course_get_list_item['c_month'] ?> Month</li>
                                        <li><i class="fa fa-money" aria-hidden="true"></i> <?php echo $course_get_list_item['c_price'] ?> AZN</li>
                                        <br>
                                        <li><button class="btn btn-primary mt-3"><a href="<?php echo base_url('courseSingle/'  . $course_get_list_item['c_id']); ?>" class=" text-light">Read More</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->

<?php $this->load->view('user/includes/footer') ?>
<?php $this->load->view('user/includes/footerStyle') ?>