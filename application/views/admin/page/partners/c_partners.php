<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<?php if ($this->session->flashdata("err")) { ?>
    <div class="alert alert-danger alert-dismissible">
        <?php echo $this->session->flashdata("err"); ?>
    </div>
<?php } ?>

<form action="<?php echo base_url('c_partners_act'); ?>" method="POST" enctype="multipart/form-data">

    <p class="text-center bg-gradient-dark text-dark py-2 rounded" style="font-size: 25px;">Welcome Partners Creat Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="partners_title">Creat title</label>
            <input type="text" name="partners_title" class="form-control" id="partners_title" placeholder="Partners title (optional)">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="partners_link">Creat link</label>
            <input type="text" name="partners_link" class="form-control" id="partners_link" placeholder="Partners link">
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="partners_img">Select Images</label>
            <input type="file" name="partners_img" class="form-control" id="partners_img" placeholder="Partners Images">
        </div>
        <div class="col-sm-2 mb-6 mb-sm-0">
            <label for="partners_status">Status:</label>
            <select class="form-control" name="partners_status" id="partners_status">
                <option class="form-control" value="Active">Active</option>
                <option class="form-control" value="Deactive">Deactive</option>
            </select>
        </div>


        <button class="form-control bg-primary text-light mt-5" type="submit">Submit</button>

    </div>
</form>