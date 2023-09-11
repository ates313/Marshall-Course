<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header') ?>

<div class="all-title-box">
	<div class="container text-center">
		<h1>Course Grid 2<span class="m_1">Lorem Ipsum dolroin gravida nibh vel velit.</span></h1>
	</div>
</div>

<div id="overviews" class="section wb">
	<div class="container">
		<div class="section-title row text-center">
			<div class="col-md-8 offset-md-2">
				<p class="lead">Lorem Ipsum dolroin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem!</p>
			</div>
		</div><!-- end title -->

		<hr class="invis">

		<div class="row">

			<?php foreach ($course_get_list as $course_get_list_item) { ?>

				<div class="col-lg-4 col-md-6 col-12 mb-2 mt-1" style="float: left;">
					<div class="course-item">
						<div class="image-blog">
							<img src="<?php echo base_url('upload/' . $course_get_list_item['c_img']) ?>" alt="" class="img-fluid">
						</div>
						<div class="course-br">
							<div class="course-title">
								<h2><a href="#" title=""><?php echo $course_get_list_item['c_title'] ?></a></h2>
							</div>
							<div class="course-desc">
								<p><?php echo $course_get_list_item['c_desc'] ?></p>
							</div>
						</div>
						<div class="course-meta-bot d-flex flex-row justify-content-center align-items-center">
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $course_get_list_item['c_date'] ?></li>
							</ul>
							<ul>
								<li><i class="fa fa-clock" aria-hidden="true"></i> <?php echo $course_get_list_item['c_month'] ?></li>
								<li><i class="fa fa-money" aria-hidden="true"></i> <?php echo $course_get_list_item['c_price'] ?>AZN</li>
							</ul>
						</div>
					</div>
				</div><!-- end col -->

			<?php  } ?>
		</div><!-- end row -->



			<!-- HR -->
		<!-- <hr class="hr3"> -->


	</div><!-- end container -->
</div><!-- end section -->

<?php $this->load->view('user/includes/footer') ?>
<?php $this->load->view('user/includes/footerStyle') ?>


</body>

</html>