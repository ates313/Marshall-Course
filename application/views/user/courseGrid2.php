<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header') ?>

<div class="all-title-box">
	<div class="container text-center">
		<h1>Course Grid 2<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
	</div>
</div>

<div id="overviews" class="section wb">
	<div class="container" style="background-image: url('public/user/assets/images/world-map.png);">

		<div class="row">
			<?php foreach ($course_get_list as $course_get_list_item) { ?>

				<div class="col-lg-4 col-md-6 col-12 mb-2 mt-1">
					<div class="card text-center  col-sm-12">
						<div class="card-header">
							<img src="<?php echo base_url('upload/' . $course_get_list_item['c_img']) ?>" alt="" class="img-fluid">
						</div>
						<div class="card-body">
							<h3 class="card-title"><a href="#" title=""><?php echo $course_get_list_item['c_title'] ?></a></h3>
							<p class="card-text"><?php echo $course_get_list_item['c_desc'] ?></p>
						</div>
						<div class="card-footer text-muted">
							<div class="course-meta-bot">
								<ul>
									<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $course_get_list_item['c_date'] ?></li>
									<li><i class="fa fa-clock" aria-hidden="true"></i> <?php echo $course_get_list_item['c_month'] ?></li>
									<li><i class="fa fa-money" aria-hidden="true"></i> <?php echo $course_get_list_item['c_price'] ?> AZN</li>
								</ul>
							</div>
						</div>
					</div>
				</div><!-- end col -->
			<?php  } ?>
		</div><!-- end row -->
	</div><!-- end container -->
</div><!-- end section -->

<?php $this->load->view('user/includes/footer') ?>
<?php $this->load->view('user/includes/footerStyle') ?>

