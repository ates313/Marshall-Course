<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<form action="<?php echo base_url('e_teachers_act/' . $teachers_get_list_rw['t_id']); ?>" method="POST" enctype="multipart/form-data">

    <p class="text-center bg-gradient-dark text-dark py-2 rounded" style="font-size: 25px;">Welcome Teachers Edit Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_name">Edit Name</label>
            <input value="<?php echo $teachers_get_list_rw['t_name'] ?>" type="text" name="teachers_name" class="form-control" id="teachers_name" placeholder="Partners title (optional)">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_surname">Edit Surname</label>
            <input value="<?php echo $teachers_get_list_rw['t_surname'] ?>" type="text" name="teachers_surname" class="form-control" id="teachers_surname" placeholder="Partners link">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_work">Edit Work</label>
            <input value="<?php echo $teachers_get_list_rw['t_work'] ?>" type="text" name="teachers_work" class="form-control" id="teachers_work" placeholder="Partners Images">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_img">Select Images</label>
            <input type="file" name="teachers_img" class="form-control" id="teachers_img">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <br>
            <label for="teachers_desc">Creat description</label>
            <textarea name="teachers_desc" id="teachers_desc" cols="30" rows="5" class="form-control"><?php echo $teachers_get_list_rw['t_desc'] ?></textarea>
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_instagram">Instagram</label>
            <input value="<?php echo $teachers_get_list_rw['t_inst'] ?>" type="text" name="teachers_instagram" class="form-control" id="teachers_instagram" placeholder="Instagram Link">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_facebook">Facebook</label>
            <input value="<?php echo $teachers_get_list_rw['t_facbk'] ?>" type="text" name="teachers_facebook" class="form-control" id="teachers_facebook" placeholder="Facebook Link">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_phoneNumber">Phone Number</label>
            <input value="<?php echo $teachers_get_list_rw['t_phonNumb'] ?>" type="text" name="teachers_phoneNumber" class="form-control" id="teachers_phoneNumber" placeholder="Phone Number">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="teachers_gmail">Gmail</label>
            <input value="<?php echo $teachers_get_list_rw['t_phonNumb'] ?>" type="text" name="teachers_gmail" class="form-control" id="teachers_gmail" placeholder="Gmail">
        </div>
        <div class="col-sm-2 mb-6 mb-sm-0">
            <label for="teachers_status">Status:</label>
            <select class="form-control" name="teachers_status" id="teachers_status">
                <option <?php if ($teachers_get_list_rw['t_status'] == "Active"){echo "SELECTED";} ?> class="form-control" value="Active">Active</option>
                <option <?php if ($teachers_get_list_rw['t_status'] == "Deactive"){echo "SELECTED";} ?> class="form-control" value="Deactive">Deactive</option>
            </select>
        </div>


        <button class="form-control bg-primary text-light mt-5" type="submit">Submit</button>

    </div>
</form>