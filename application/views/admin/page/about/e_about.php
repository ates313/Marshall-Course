<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<form action="<?php echo base_url('e_about_act/' . $about_get_list_rw['a_id']); ?>" method="POST" enctype="multipart/form-data">

    <p class="text-center bg-gradient-dark text-dark py-2 rounded" style="font-size: 25px;">Welcome About Creat Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-4 mb-6 mb-sm-0">
            <label for="about_title">Creat title</label>
            <input value="<?php echo $about_get_list_rw['a_title'] ?>" type="text" name="about_title" class="form-control" id="about_title" placeholder="">
        </div>
        <div class="col-sm-4 mb-6 mb-sm-0">
            <label for="about_img">Creat Images</label>
            <input type="file" name="about_img" class="form-control" id="about_img" placeholder="">
        </div>
        <div class="col-sm-4 mb-6 mb-sm-0">
            <label for="about_status">Status:</label>
            <select class="form-control" name="about_status" id="about_status">
                <option <?php if ($about_get_list_rw['a_status'] == "Active"){echo "SELECTED";} ?> class="form-control" value="Active">Active</option>
                <option <?php if ($about_get_list_rw['a_status'] == "Deactive"){echo "SELECTED";} ?> class="form-control" value="Deactive">Deactive</option>
            </select>
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="about_desc">Creat Description</label>
            <textarea name="about_desc" id="about_desc" cols="30" rows="5" class="form-control"><?php echo $about_get_list_rw['a_desc'] ?></textarea>
        </div>

        <button class="form-control bg-primary text-light mt-5" type="submit">Submit</button>

    </div>
</form>