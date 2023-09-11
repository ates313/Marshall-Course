<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<form action="<?php echo base_url('e_news_act/' . $news_get_list_rw['n_id']); ?>" method="POST" enctype="multipart/form-data">

    <p class="text-center bg-gradient-dark text-dark py-2 rounded" style="font-size: 25px;">Welcome News Creat Page!</p>
    <div class="form-group container-fluid row ">
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="news_status">Status:</label>
            <select class="form-control" name="news_status" id="news_status">
                <option <?php if ($news_get_list_rw['n_status'] == "Active"){echo "SELECTED";} ?> class="form-control" value="Active">Active</option>
                <option <?php if ($news_get_list_rw['n_status'] == "Deactive"){echo "SELECTED";} ?> class="form-control" value="Deactive">Deactive</option>
            </select>
        </div>
        <div class="col-sm-6 mb-6 mb-sm-0">
            <label for="news_img">Img</label>
            <input type="file" name="news_img" id="news_img" class="form-control" placeholder="Enter img">
        </div>news_status
        <div class="col-sm-12 mb-6 mb-sm-0">
            <label for="news_desc">Text</label>
            <textarea class="form-control" name="news_desc" id="news_desc" cols="30" rows="10"><?php echo $news_get_list_rw['n_desc'] ?></textarea>
        </div>

        <button class="form-control bg-primary text-light mt-5" type="submit">Submit</button>

    </div>
</form>