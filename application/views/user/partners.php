<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header') ?>


<div class="all-title-box" style="background-image: url('public/user/assets/images/banner.jpg');">
	<div class="container text-center">
		<h1>Partners Page<span class="m_1"></span></h1>
	</div>
</div>

<div class="container">
    <div class="section-title row text-center">
        <div class="col-md-8 offset-md-2">
            <h3>Partners</h3>
        </div>
    </div>
    <div class="row">
        <?php foreach ($partners_get_list as $partners_get_list_item) { ?>
            <div class="card col-4" style="height: 270px;">
                <a target="_blank" href="<?php echo $partners_get_list_item['p_link'] ?>">
                    <img class="a_imgSize2" src="<?php echo base_url('upload/' . $partners_get_list_item['p_img']) ?>" alt="">
                </a>
                <div class="card-body">
                    <span class="card-title">
                        <?php echo $partners_get_list_item['p_title'] ?>
                    </span>
                </div>
            </div>
        <?php } ?>
    </div>
</div>




<?php $this->load->view('user/includes/footer') ?>
<?php $this->load->view('user/includes/footerStyle') ?>