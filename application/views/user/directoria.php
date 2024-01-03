<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header') ?>

<div class="all-title-box" style="background-image: url('public/user/assets/images/banner.jpg');">
	<div class="container text-center">
		<h1 style="color: #ffffff;">Diroctorate Page</h1>
	</div>
</div>
<div class="container">

	<div class="row">
		<?php foreach ($drectoria_get_list as $drectoria_get_list_item) { ?>

			<div class="col-md-4 col-12 pt-5">

				<div class="our-team">

					<div class="team-img">
						<?php if ($drectoria_get_list_item['d_img']) { ?>
							<img style="object-fit: cover;" src="<?php echo base_url('upload/' . $drectoria_get_list_item['d_img']) ?>" alt="">
						<?php } else { ?>
							<img src="<?php echo base_url('public/user/assets/images/UserPhoto123.jpeg'); ?>" alt="No Image">
						<?php } ?>
						<div class="social">
							<ul>
								<?php if ($drectoria_get_list_item['d_instagram']) { ?>
									<li><a target="_blank" href="<?php echo $drectoria_get_list_item['d_instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
								<?php } ?>
								<?php if ($drectoria_get_list_item['d_facebook']) { ?>
									<li><a target="_blank" href="<?php echo $drectoria_get_list_item['d_facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
								<?php } ?>
								<?php if ($drectoria_get_list_item['d_twitter']) { ?>
									<li><a target="_blank" href="<?php echo $drectoria_get_list_item['d_twitter'] ?>"><i class="fa fa-twitter"></i></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
					<div class="team-content">
						<a href="<?php echo base_url('drectoria_single/' . $drectoria_get_list_item['d_id']); ?>">
							<h3 class="title"> <?php echo $drectoria_get_list_item['d_name'] ?> <?php echo $drectoria_get_list_item['d_surname'] ?></h3>
						</a>
						<span class="post"><?php echo $drectoria_get_list_item['d_position'] ?></span>
					</div>
				</div>

			</div>
		<?php } ?>



	</div>

</div>

<?php $this->load->view('user/includes/footer') ?>
<?php $this->load->view('user/includes/footerStyle') ?>