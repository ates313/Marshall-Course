<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header') ?>

<div class="all-title-box">
	<div class="container text-center">
		<h1 style="color: #ffffff;">Teachers</h1>
	</div>
</div>

<div id="teachers" class="">
	<div class="container">
		<div class="row">

			<?php foreach ($teachers_get_list as $teachers_get_list_item) { ?>

				<div class="col-lg-4 col-md-6 col-12">
					<div class="our-team">
						<div class="team-img">
							<img style="object-fit: cover;" src="<?php echo base_url('upload/' . $teachers_get_list_item['t_img']) ?>">
						</div>
						<div class="team-content">
							<h3 class="title"><?php echo $teachers_get_list_item['t_name'] ?> <?php echo $teachers_get_list_item['t_surname'] ?></h3>
							<span class="post"><?php echo $teachers_get_list_item['t_work'] ?></span>
						</div>
					</div>
				</div>

			<?php } ?>

		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end section -->
<?php $this->load->view('user/includes/footer') ?>
<?php $this->load->view('user/includes/footerStyle') ?>