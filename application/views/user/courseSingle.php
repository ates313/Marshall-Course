<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header') ?>

<div class="m-5">
    <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-12 col-sm-12 ml-5">
            <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <?php if ($course_single['c_img']) { ?>
                    <img style="object-fit: cover;" height="420" src="<?php echo base_url('upload/' . $course_single['c_img']); ?>" alt="">
                <?php } else { ?>
                    <img style="object-fit: cover;" height="420" src="<?php echo base_url('public/user/assets/images/UserPhoto123.jpeg') ?>" alt="User">
                <?php } ?>
            </div><!-- end media -->
        </div><!-- end col -->

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 ml-5">
            <div class="message-box">
                <h1><?php echo $course_single['c_title']; ?></h1>
                <h3><?php echo $course_single['c_desc'] ?></h3>
            </div><!-- end messagebox -->
            <div class="footer-right">
                <ul class="footer-links-soi">
                    <li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $course_single['c_date'] ?></li>
                    <li class="mx-3"><i class="fa fa-clock" aria-hidden="true"></i> <?php echo $course_single['c_month'] ?> Month</li>
                    <li><i class="fa fa-money" aria-hidden="true"></i> <?php echo $course_single['c_price'] ?> AZN</li>
                </ul>
            </div>
        </div><!-- end col -->
    </div>
</div>


<?php $this->load->view('user/includes/footer') ?>
<?php $this->load->view('user/includes/footerStyle') ?>