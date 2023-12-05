<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header') ?>

<div style="background-image: url(public/user/assets/images/banner.jpg);" class="all-title-box">
    <div class="container text-center">
        <h1 style="color: lightcyan;">About Us</h1>
    </div>
</div>

<div class="section lb">
    <div class="container">


        <?php foreach ($about_get_list as $about_get_list_item) { ?>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img height="370" src="<?php echo base_url('upload/' . $about_get_list_item['a_img']) ?>" alt="" class="img-rounded">
                    </div><!-- end media -->
                </div><!-- end col -->

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h2><?php echo $about_get_list_item['a_title'] ?></h2>
                        <p><?php echo $about_get_list_item['a_desc'] ?></p>
                    </div><!-- end messagebox -->
                </div><!-- end col -->
            </div><!-- end row -->
        <?php } ?>



    </div><!-- end container -->
</div><!-- end section -->

<div class="hmv-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="inner-hmv">
                    <h3>Mission</h3>
                    <div class="tr-pa">M</div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam eligendi expedita, provident cupiditate in excepturi.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="inner-hmv">
                    <h3>Vision</h3>
                    <div class="tr-pa">V</div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam eligendi expedita, provident cupiditate in excepturi.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="inner-hmv">
                    <h3>History</h3>
                    <div class="tr-pa">H</div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam eligendi expedita, provident cupiditate in excepturi.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<?php $this->load->view('user/includes/footer') ?>
<?php $this->load->view('user/includes/footerStyle') ?>