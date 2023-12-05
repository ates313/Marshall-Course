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