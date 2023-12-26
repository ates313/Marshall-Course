<footer class="footer">
    <div class="container">
        <div class="row" style="justify-content: space-between;">
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>About US</h3>
                    </div>
                    <?php foreach ($footer_get_list as $footer_get_list_item) { ?>
                        <p> <?php echo $footer_get_list_item['f_desc'] ?></p>
                        <div class="footer-right">
                            <ul class="footer-links-soi">
                                <?php if ($footer_get_list_item['f_facebook']) { ?>
                                    <li><a href="<?php echo $footer_get_list_item['f_facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
                                <?php } ?>
                                <?php if ($footer_get_list_item['f_instagram']) { ?>
                                    <li><a href="<?php echo $footer_get_list_item['f_instagram'] ?>"><i class="fa fa-instagram"></i></a></li>
                                <?php } ?>
                                <?php if($footer_get_list_item['f_tweet']){ ?>
                                    <li><a href="<?php echo $footer_get_list_item['f_tweet'] ?>"><i class="fa fa-twitter"></i></a></li>
                                <?php } ?>
                            </ul><!-- end links -->
                        </div>
                    <?php } ?>
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <a href="<?php echo base_url('contact') ?>"><h3>Contact Details</h3></a>
                    </div>

                    <ul class="footer-links">
                        <li><a href="mailto:#">marshall@gmail.com</a></li>
                        <li>+994506667788</li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-center">
                <p class="footer-company-name">&copy; 2023 <a href="<?php echo base_url('index'); ?>">MarshallEDU</a></p>
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->
<script src="https://kit.fontawesome.com/f250293e3c.js" crossorigin="anonymous"></script>