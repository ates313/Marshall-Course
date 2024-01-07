<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header') ?>

<div class="m-5">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 ml-5">
            <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <?php if ($teachers_single['t_img']) { ?>
                    <img style="object-fit: cover;" height="420" src="<?php echo base_url('upload/' . $teachers_single['t_img']); ?>" alt="">
                <?php } else { ?>
                    <img style="object-fit: cover;" height="420" src="<?php echo base_url('public/user/assets/images/UserPhoto123.jpeg') ?>" alt="User">
                <?php } ?>
            </div><!-- end media -->
        </div><!-- end col -->

        <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 ml-5">
            <div class="message-box">
                <h1><?php echo $teachers_single['t_name']; ?> / <?php echo $teachers_single['t_surname'] ?></h1>
                <h4><?php echo $teachers_single['t_work'] ?></h4>
                <h3><?php echo $teachers_single['t_desc'] ?></h3>
            </div><!-- end messagebox -->
            <div class="footer-right">
                <ul class="footer-links-soi">
                    <?php if ($teachers_single['t_inst']) { ?>
                        <li><a target="_blank" href="<?php echo $teachers_single['t_inst'] ?>"><i class="fa fa-instagram"></i></a></li>
                    <?php } ?>
                    <?php if ($teachers_single['t_facbk']) { ?>
                        <li><a target="_blank" href="<?php echo $teachers_single['t_facbk'] ?>"><i class="fa fa-facebook"></i></a></li>
                    <?php } ?>
                    <?php if ($teachers_single['t_phonNumb']) { ?>
                        <li><a target="_blank" href="<?php echo $teachers_single['t_phonNumb'] ?>"><i class="fa fa-phone"></i></a></li>
                    <?php } ?>
                    <?php if ($teachers_single['t_gmail']) { ?>
                        <li><a target="_blank" href="<?php echo $teachers_single['t_gmail'] ?>"><i class="fa fa-envelope"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div><!-- end col -->
    </div>
</div>


<?php $this->load->view('user/includes/footer') ?>
<?php $this->load->view('user/includes/footerStyle') ?>