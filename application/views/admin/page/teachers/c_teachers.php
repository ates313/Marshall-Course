<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<?php if ($this->session->flashdata("err")) { ?>
    <div class="alert alert-danger alert-dismissible">
        <?php echo $this->session->flashdata("err"); ?>
    </div>
<?php } ?>

<form action="<?php echo base_url('c_teachers_act'); ?>" method="POST" enctype="multipart/form-data">

    <p class="text-center bg-gradient-dark text-dark py-2 rounded" style="font-size: 25px;">Welcome Teachers Creat Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_name">Name</label>
            <input type="text" name="teachers_name" class="form-control" id="teachers_name" placeholder="Name">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_surname">Surname</label>
            <input type="text" name="teachers_surname" class="form-control" id="teachers_surname" placeholder="Surname">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_work">Work</label>
            <input type="text" name="teachers_work" class="form-control" id="teachers_work" placeholder="Work">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_img">Select Images</label>
            <input type="file" name="teachers_img" class="form-control" id="teachers_img">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <br>
            <label for="teachers_desc">Creat description</label>
            <textarea name="teachers_desc" id="teachers_desc" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_instagram">Instagram</label>
            <input type="text" name="teachers_instagram" class="form-control" id="teachers_instagram" placeholder="Instagram Link">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_facebook">Facebook</label>
            <input type="text" name="teachers_facebook" class="form-control" id="teachers_facebook" placeholder="Facebook Link">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_phoneNumber">Phone Number</label>
            <input type="text" name="teachers_phoneNumber" class="form-control" id="teachers_phoneNumber" placeholder="Phone Number">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_gmail">Gmail</label>
            <input type="text" name="teachers_gmail" class="form-control" id="teachers_gmail" placeholder="Gmail">
        </div>
        <div class="col-sm-2 mb-6 mb-sm-0">
            <label for="teachers_status">Status:</label>
            <select class="form-control" name="teachers_status" id="teachers_status">
                <option class="form-control" value="Active">Active</option>
                <option class="form-control" value="Deactive">Deactive</option>
            </select>
        </div>


        <button class="form-control bg-primary text-light mt-5" type="submit">Submit</button>

    </div>
</form>