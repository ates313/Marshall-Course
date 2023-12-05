<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header') ?>

<div class="all-title-box" style="background-image: url('public/user/assets/images/banner.jpg');">
	<div class="container text-center">
		<h1 style="color: lightcyan;">Directoria Page</h1>
	</div>
</div>
<div class="container">

	<div class="row">
	<?php foreach ($drectoria_get_list as $drectoria_get_list_item) { ?>

		<div class="col-md-4 col-12">

			<div class="our-team">

					<div class="team-img">
						<?php if ($drectoria_get_list_item['d_img']) { ?>
							<img src="<?php echo base_url('upload/' . $drectoria_get_list_item['d_img']) ?>" alt="">
						<?php } else { ?>
							<img src="<?php echo base_url('public/user/assets/') ?>images/favicon.ico" alt="No Image">
						<?php } ?>
						<div class="social">
							<ul>
								<li><a target="_blank" href="<?php echo $drectoria_get_list_item['d_facebook'] ?>" class="fa fa-facebook"></a></li>
								<li><a target="_blank" href="<?php echo $drectoria_get_list_item['d_twitter'] ?>" class="fa fa-twitter"></a></li>
								<li><a target="_blank" href="<?php echo $drectoria_get_list_item['d_gmail'] ?>" class="fa fa-envelope"></a></li>
								<li><a target="_blank" href="<?php echo $drectoria_get_list_item['d_instagram'] ?>" class="fa fa-instagram"></a></li>
							</ul>
						</div>
					</div>
					<div class="team-content">
						<a href="#">
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