<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header') ?>

<div class="m-5">
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 ml-5">
            <div class="post-media wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <?php if ($drectoria_single['d_img']) { ?>
                    <img style="object-fit: cover;" height="420" src="<?php echo base_url('upload/' . $drectoria_single['d_img']); ?>" alt="">
                <?php } else { ?>
                    <img style="object-fit: cover;" height="420" src="https://www.kindpng.com/picc/m/22-223910_circle-user-png-icon-transparent-png.png" alt="User">
                <?php } ?>
            </div><!-- end media -->
        </div><!-- end col -->

        <div class="col-xl-8 col-lg-6 col-md-12 col-sm-12 ml-5">
            <div class="message-box">
                <h1><?php echo $drectoria_single['d_name']; ?> / <?php echo $drectoria_single['d_surname'] ?></h1>
                <h4><?php echo $drectoria_single['d_position'] ?></h4>
                <h3><?php echo $drectoria_single['d_desc'] ?></h3>
            </div><!-- end messagebox -->
            <div class="footer-right">
                <ul class="footer-links-soi">
                    <?php if ($drectoria_single['d_instagram']) { ?>
                        <li><a target="_blank" href="<?php echo $drectoria_single['d_instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
                    <?php } ?>
                    <?php if ($drectoria_single['d_facebook']) { ?>
                        <li><a target="_blank" href="<?php echo $drectoria_single['d_facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
                    <?php } ?>
                    <?php if ($drectoria_single['d_twitter']) { ?>
                        <li><a target="_blank" href="<?php echo $drectoria_single['d_twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div><!-- end col -->
    </div>
</div>


<?php $this->load->view('user/includes/footer') ?>
<?php $this->load->view('user/includes/footerStyle') ?>