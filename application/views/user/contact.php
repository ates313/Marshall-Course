<?php $this->load->view('user/includes/headerStyle'); ?>
<?php $this->load->view('user/includes/header') ?>


<?php if ($this->session->flashdata("err")) { ?>
    <div class="alert alert-danger alert-dismissible">
        <?php echo $this->session->flashdata("err"); ?>
    </div>
<?php } ?>


<div class="all-title-box">
    <div class="container text-center">
        <h1 style="color: #0088fd;">Contact</h1>
    </div>
</div>

<div id="contact" class="section wb">
    <div class="container">
        <div class="section-title text-center">
            <h3>Need Help? Sure we are Online!</h3>
        </div><!-- end title -->

        <div class="row">
            <div class="col-xl-6 col-md-12 col-sm-12">
                <div class="contact_form">
                    <div id="message"></div>
                    <form action="<?php echo base_url('c_contact_act') ?>" enctype="application/x-www-form-urlencoded" method="post">
                        <div class="row row-fluid">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Surname">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details..(1500)"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary grd1 form-control">SEND</button>
                            </div>
                            <!-- <div class="text-center pd">
                                <button type="submit" value="SEND" id="submit" class="btn btn-light form-control grd1">Send</button>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div><!-- end col -->
            <div class="col-xl-6 col-md-12 col-sm-12">
                <div class="map-box p-4">
                    <div id="custom-places" class="small-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.260785054388!2d49.839236075878!3d40.42522397143828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403087de34c21de1%3A0x283095de8805d6b6!2sAzadl%C4%B1q%20metro%20stansiyas%C4%B1!5e0!3m2!1saz!2saz!4v1703622965357!5m2!1saz!2saz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end section -->
<?php $this->load->view('user/includes/footer') ?>
<?php $this->load->view('user/includes/footerStyle') ?>