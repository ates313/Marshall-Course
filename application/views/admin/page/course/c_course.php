<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<form action="<?php echo base_url('c_course_act'); ?>" method="POST" enctype="multipart/form-data">

    <p class="text-center bg-gradient-dark text-dark py-2 rounded" style="font-size: 25px;">Welcome Course Creat Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="course_status">Status:</label>
            <select class="form-control" name="course_status" id="course_status">
                <option class="form-control" value="Active">Active</option>
                <option class="form-control" value="Deactive">Deactive</option>
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
            <select class="form-control" name="course_month" id="course_month">
                <option class="form-control" value="9 Month">9 Month</option>
                <option class="form-control" value="6 Month">6 Month</option>
            </select>
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="course_img">Creat Images</label>
            <input type="file" name="course_img" class="form-control" id="course_img" placeholder="Enter slider link">
        </div>
        <div class="col-sm-3 mb-6 mb-sm-0">
            <label for="course_title">Creat title</label>
            <input type="text" name="course_title" class="form-control" id="course_title" placeholder="Enter course title">
        </div>
        <div class="col-sm-12 mb-6 mb-sm-0">
            <br>
            <label for="course_desc">Creat description</label>
            <textarea name="course_desc" id="course_desc" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <br>

        <button class="form-control bg-primary text-light mt-5" type="submit">Submit</button>

    </div>
</form>