<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<?php if ($this->session->flashdata("err")) { ?>
    <div class="alert alert-danger alert-dismissible">
        <?php echo $this->session->flashdata("err"); ?>
    </div>
<?php } ?>

<form action="<?php echo base_url('c_about_act'); ?>" method="POST" enctype="multipart/form-data">

    <p class="text-center bg-gradient-dark text-dark py-2 rounded" style="font-size: 25px;">Welcome About Creat Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-4 mb-6 mb-sm-0">
            <label for="about_title">Creat title</label>
            <input type="text" name="about_title" class="form-control" id="about_title" placeholder="">
        </div>
        <div class="col-sm-4 mb-6 mb-sm-0">
            <label for="about_img">Creat Images</label>
            <input type="file" name="about_img" class="form-control" id="about_img" placeholder="">
        </div>
        <div class="col-sm-4 mb-6 mb-sm-0">
            <label for="about_status">Status:</label>
            <select class="form-control" name="about_status" id="about_status">
                <option class="form-control" value="Active">Active</option>
                <option class="form-control" value="Deactive">Deactive</option>
            </select>
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="about_desc">Creat Description</label>
            <textarea name="about_desc" id="about_desc" cols="30" rows="5" class="form-control"></textarea>
        </div>

        <button class="form-control bg-primary text-light mt-5" type="submit">Submit</button>

    </div>
</form>