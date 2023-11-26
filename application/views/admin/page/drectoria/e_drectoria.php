<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<form action="<?php echo base_url('e_drectoria_act/' . $drectoria_get_list_rw['d_id']); ?>" method="POST" enctype="multipart/form-data">

    <p class="text-center bg-gradient-dark text-dark py-2 rounded" style="font-size: 25px;">Welcome Drectoria Edit Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="drectoria_name">Name</label>
            <input value="<?php echo $drectoria_get_list_rw['d_name'] ?>" type="text" name="drectoria_name" class="form-control" id="drectoria_name" placeholder="Enter name">
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="drectoria_surname">Surname</label>
            <input value="<?php echo $drectoria_get_list_rw['d_surname'] ?>" type="text" name="drectoria_surname" class="form-control" id="drectoria_surname" placeholder="Enter surname">
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="drectoria_position">Position</label>
            <select class="form-control" name="drectoria_position" id="drectoria_position">
                <option <?php if ($drectoria_get_list_rw['d_position'] == "Drector"){echo "SELECTED";} ?>  class="form-control" value="Drector">Drector</option>
                <option <?php if ($drectoria_get_list_rw['d_position'] == "Manager"){echo "SELECTED";} ?>  class="form-control" value="Manager">Manager</option>
                <option <?php if ($drectoria_get_list_rw['d_position'] == "Master"){echo "SELECTED";} ?>  class="form-control" value="Master">Master</option>
                <option <?php if ($drectoria_get_list_rw['d_position'] == "Asistent"){echo "SELECTED";} ?>  class="form-control" value="Asistent">Asistent</option>
            </select>
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="drectoria_status">Status</label>
            <select class="form-control" name="drectoria_status" id="drectoria_status">
                <option <?php if ($drectoria_get_list_rw['d_status'] == "Active"){echo "SELECTED";} ?> class="form-control" value="Active">Active</option>
                <option <?php if ($drectoria_get_list_rw['d_status'] == "Deactive"){echo "SELECTED";} ?> class="form-control" value="Deactive">Deactive</option>
            </select>
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <br>
            <label for="drectoria_desc">Description</label>
            <textarea name="drectoria_desc" id="drectoria_desc" cols="30" rows="5" class="form-control"><?php echo $drectoria_get_list_rw['d_desc'] ?></textarea>
        </div>  
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="drectoria_instagram">Instagram</label>
            <input value="<?php echo $drectoria_get_list_rw['d_instagram'] ?>" type="text" name="drectoria_instagram" class="form-control" id="drectoria_instagram" placeholder="Enter link">
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="drectoria_facebook">Facebook</label>
            <input value="<?php echo $drectoria_get_list_rw['d_facebook'] ?>" type="text" name="drectoria_facebook" class="form-control" id="drectoria_facebook" placeholder="Enter link">
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="drectoria_twitter">Twitter</label>
            <input value="<?php echo $drectoria_get_list_rw['d_twitter'] ?>" type="text" name="drectoria_twitter" class="form-control" id="drectoria_twitter" placeholder="Enter link">
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="drectoria_gmail">Gmail</label>
            <input value="<?php echo $drectoria_get_list_rw['d_gmail'] ?>" type="text" name="drectoria_gmail" class="form-control" id="drectoria_gmail" placeholder="Enter link">
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="drectoria_birthday">Enter birthday</label>
            <input value="<?php echo $drectoria_get_list_rw['d_name'] ?>" type="date" name="drectoria_birthday" class="form-control" id="drectoria_birthday">
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="drectoria_img">Image</label>
            <input type="file" name="drectoria_img" class="form-control" id="drectoria_img">
        </div>
        <button class="form-control bg-primary text-light mt-5" type="submit">Submit</button>

    </div>
</form>