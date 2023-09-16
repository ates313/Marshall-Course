<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<form action="<?php echo base_url('c_footer_act') ?>" method="POST" enctype="multipart/form-data">

    <p class="text-center bg-gradient-dark text-dark py-2 rounded" style="font-size: 25px;">Welcome Footer About Creat Page</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="footer_status">Status:</label>
            <select class="form-control" name="footer_status" id="footer_status">
                <option class="form-control" value="Active">Active</option>
                <option class="form-control" value="Deactive">Deactive</option>
            </select>
        </div>
        <div class="col-sm-4 mb-6 mb-sm-0">
            <label for="footer_instagram">Enter Instagram Link</label>
            <br>
            <input class="form-control" type="text" name="footer_instagram" id="footer_instagram">
        </div>
        <div class="col-sm-4 mb-6 mb-sm-0">
            <label for="footer_facebook">Enter Facebook Link</label>
            <br>
            <input class="form-control" type="text" name="footer_facebook" id="footer_facebook">
        </div>
        <div class="col-sm-4 mb-6 mb-sm-0">
            <label for="footer_tweet">Enter Tweeter Link</label>
            <br>
            <input class="form-control" type="text" name="footer_tweet" id="footer_tweet">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="footer_desc">Description</label>
            <textarea name="footer_desc" id="fa_desc" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <button class="form-control  bg-primary text-light  mt-5" type="submit">Submit</button>
    </div>
</form>