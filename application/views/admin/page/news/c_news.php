<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<?php if ($this->session->flashdata("err")) { ?>
    <div class="alert alert-danger alert-dismissible">
        <?php echo $this->session->flashdata("err"); ?>
    </div>
<?php } ?>

<form action="<?php echo base_url('c_news_act'); ?>" method="POST" enctype="multipart/form-data">

    <p class="text-center bg-gradient-dark text-dark py-2 rounded" style="font-size: 25px;">Welcome News Creat Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="news_status">Status:</label>
            <select class="form-control" name="news_status" id="news_status">
                <option class="form-control" value="Active">Active</option>
                <option class="form-control" value="Deactive">Deactive</option>
            </select>
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="news_img">Img</label>
            <input type="file" name="news_img" id="news_img" class="form-control" placeholder="Enter img">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="news_desc">Text</label>
            <textarea class="form-control" name="news_desc" id="news_desc" cols="30" rows="10"></textarea>
        </div>

        <button class="form-control bg-primary text-light mt-5" type="submit">Submit</button>

    </div>
</form>