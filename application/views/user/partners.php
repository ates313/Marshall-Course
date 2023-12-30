<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header') ?>


<div class="all-title-box" style="background-image: url('public/user/assets/images/banner.jpg');">
    <div class="container text-center">
        <h1 style="color: #ffffff;">Partners Page</h1>
    </div>
</div>

<div class="container pt-5">
    <div class="row">
        <?php foreach ($partners_get_list as $partners_get_list_item) { ?>
            <div class="card col-md-3 col-12" style="height: 270px;">
                <a target="_blank" href="<?php echo $partners_get_list_item['p_link'] ?>">
                    <img style="border-radius:10px;" class="a_imgSize2" src="<?php echo base_url('upload/' . $partners_get_list_item['p_img']) ?>" alt="">
                    <p class="partnerSpanDesing">
                    <?php echo $partners_get_list_item['p_title'] ?>
                </p>
                </a>
                
            </div>
        <?php } ?>
    </div>
</div>

<!-- <?php echo $partners_get_list_item['p_title'] ?> -->




<?php $this->load->view('user/includes/footer') ?>
<?php $this->load->view('user/includes/footerStyle') ?>