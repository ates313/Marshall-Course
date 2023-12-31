<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<form action="<?php echo base_url('e_course_act/' . $course_get_list_rw['c_id']); ?>" method="POST" enctype="multipart/form-data">

    <p class="text-center bg-gradient-dark text-dark py-2 rounded" style="font-size: 25px;">Welcome Course Edit Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="course_status">Status:</label>
            <select class="form-control" name="course_status" id="course_status">
                <option <?php if ($course_get_list_rw['c_status'] == "Active"){echo "SELECTED";} ?> class="form-control" value="Active">Active</option>
                <option <?php if ($course_get_list_rw['c_status'] == "Deactive"){echo "SELECTED";} ?> class="form-control" value="Deactive">Deactive</option>
            </select>
        </div>
        <!-- <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="course_category">Category:</label>
            <select class="form-control" name="course_category" id="course_category">
                <option class="form-control" value="Languages">Languages</option>
                <option class="form-control" value="Engineering">Engineering</option>
            </select>
        </div> -->
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="course_month">Course month:</label>
            <input value="<?php echo $course_get_list_rw['c_month'] ?>" type="text" name="course_month" class="form-control" id="course_month" placeholder="Enter slider">
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="course_img">Edit Images</label>
            <input type="file" name="course_img" class="form-control" id="course_img" placeholder="Enter slider link">
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="course_price">Edit price</label>
            <input value="<?php echo $course_get_list_rw['c_price'] ?>" type="text" name="course_price" class="form-control" id="course_price" placeholder="Enter course title">
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="course_title">Edit title</label>
            <input value="<?php echo $course_get_list_rw['c_title'] ?>" type="text" name="course_title" class="form-control" id="course_title" placeholder="Enter course title">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <br>
            <label for="course_desc">Edit description</label>
            <textarea name="course_desc" id="course_desc" cols="30" rows="5" class="form-control"><?php echo $course_get_list_rw['c_desc'] ?></textarea>
        </div>
        <br>

        <button class="form-control bg-primary text-light mt-5" type="submit">Submit</button>

    </div>
</form>