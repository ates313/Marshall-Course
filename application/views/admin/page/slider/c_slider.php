<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>


<?php if ($this->session->flashdata("err")) { ?>
    <div class="alert alert-danger alert-dismissible">
        <?php echo $this->session->flashdata("err"); ?>
    </div>
<?php } ?>

<form action="<?php echo base_url('c_slider_act'); ?>" method="POST" enctype="multipart/form-data">

    <p class="text-center bg-gradient-dark text-dark py-2 rounded" style="font-size: 25px;">Welcome Slider Creat Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="slider_title">Creat title</label>
            <input type="text" name="slider_title" class="form-control" id="slider_title" placeholder="Enter slider title">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="slider_link">Creat link</label>
            <input type="text" name="slider_link" class="form-control" id="slider_link" placeholder="Enter slider link">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <br>
            <label for="slider_desc">Creat description</label>
            <textarea name="slider_desc" id="slider_desc" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0 mt-3">
            <label for="slider_status">Status:</label>
            <select class="form-control" name="slider_status" id="slider_status">
                <option class="form-control" value="Active">Active</option>
                <option class="form-control" value="Deactive">Deactive</option>
            </select>
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0 mt-3">
            <label for="slider_img">Creat Images</label>
            <input type="file" name="slider_img" class="form-control" id="slider_img" placeholder="Enter slider link">
        </div>
    </div>
    <hr>

    <button class="form-control bg-primary text-light" type="submit">Submit</button>

</form>