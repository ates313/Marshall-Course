<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<div class="container-fluid">

    <!-- Page Heading -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo base_url('l_drectoria'); ?>"><button style="float:right;" title="Back" type="button" class="btn btn-danger text-white">Back List</button></a>
        </div>
        <div class="card-body">

            <table class="table table-bordered" width="100%" cellspacing="0">
                <tr>
                    <th>Name</th>
                    <td><?php echo $single_data_drectoria['d_name'] ?></td>
                </tr>
                <tr>
                    <th>Surname</th>
                    <td><?php echo $single_data_drectoria['d_surname'] ?></td>
                </tr>
                <tr>
                    <th>Position</th>
                    <td><?php echo $single_data_drectoria['d_position'] ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td><?php echo $single_data_drectoria['d_status'] ?></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><?php echo $single_data_drectoria['d_desc'] ?></td>
                </tr>
                <tr>
                    <th>Instagram</th>
                    <td><?php echo $single_data_drectoria['d_instagram'] ?></td>
                </tr>
                <tr>
                    <th>Facebook</th>
                    <td><?php echo $single_data_drectoria['d_facebook'] ?></td>
                </tr>
                <tr>
                    <th>Twitter</th>
                    <td><?php echo $single_data_drectoria['d_twitter'] ?></td>
                </tr>
                <tr>
                    <th>Gmail</th>
                    <td><?php echo $single_data_drectoria['d_gmail'] ?></td>
                </tr>
                <tr>
                    <th>Birthday</th>
                    <td><?php echo $single_data_drectoria['d_birhtday'] ?></td>
                </tr>
                <tr>
                    <th>Profile</th>
                    <?php if($single_data_drectoria['d_img']){ ?>
                        <td><img width="400" src="<?php echo base_url('upload/'.$single_data_drectoria['d_img']) ?>" alt=""></td>
                   <?php }else{?>
                        <td><img width="400" src="<?php echo base_url('public/user/assets/images/UserPhoto123.jpeg') ?>" alt=""></td>
                  <?php } ?>
                </tr>
            </table>
        </div>
    </div>
</div>