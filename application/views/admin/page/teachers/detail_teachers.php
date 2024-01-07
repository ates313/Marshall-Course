<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<div class="container-fluid">

    <!-- Page Heading -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="<?php echo base_url('l_teachers'); ?>"><button style="float:right;" title="Back" type="button" class="btn btn-danger text-white">Back List</button></a>
        </div>
        <div class="card-body">

            <table class="table table-bordered" width="100%" cellspacing="0">
                <tr>
                    <th>Name</th>
                    <td><?php echo $get_data_teachers['t_name'] ?></td>
                </tr>
                <tr>
                    <th>Surname</th>
                    <td><?php echo $get_data_teachers['t_surname'] ?></td>
                </tr>
                <tr>
                    <th>Work</th>
                    <td><?php echo $get_data_teachers['t_work'] ?></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><?php echo $get_data_teachers['t_desc'] ?></td>
                </tr>
                <tr>
                    <th>Instagram</th>
                    <td>
                        <?php if ($get_data_teachers['t_inst']) { ?>
                            <span class="text-purple-600 py-1 px-3 rounded-full text-xs"><?php echo $get_data_teachers['t_inst'] ?></span>
                        <?php } else { ?>
                            <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">None</span>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <th>Facebook</th>
                    <td>
                        <?php if ($get_data_teachers['t_facbk']) { ?>
                            <span class="text-purple-600 py-1 px-3 rounded-full text-xs"><?php echo $get_data_teachers['t_facbk'] ?></span>
                        <?php } else { ?>
                            <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">None</span>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <th>Number</th>
                    <td>
                        <?php if ($get_data_teachers['t_phonNumb']) { ?>
                            <span class="text-purple-600 py-1 px-3 rounded-full text-xs"><?php echo $get_data_teachers['t_phonNumb'] ?></span>
                        <?php } else { ?>
                            <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">None</span>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <th>Gmail</th>
                    <td>
                        <?php if ($get_data_teachers['t_gmail']) { ?>
                            <span class="text-purple-600 py-1 px-3 rounded-full text-xs"><?php echo $get_data_teachers['t_gmail'] ?></span>
                        <?php } else { ?>
                            <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">None</span>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        <?php if ($get_data_teachers['t_status'] == "Active") { ?>
                            <span class="text-purple-600 py-1 px-3 rounded-full text-xs"><?php echo $get_data_teachers['t_status'] ?></span>
                        <?php } ?>
                        <?php if ($get_data_teachers['t_status'] == "Deactive") { ?>
                            <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs"><?php echo $get_data_teachers['t_status'] ?></span>
                        <?php } ?>
                    </td>
                </tr>

                

                <tr>
                    <th>Profile</th>
                    <?php if ($get_data_teachers['t_img']) { ?>
                        <td><img width="400" src="<?php echo base_url('upload/' . $get_data_teachers['t_img']) ?>" alt=""></td>
                    <?php } else { ?>
                        <td><img width="400" src="<?php echo base_url('public/user/assets/images/UserPhoto123.jpeg') ?>" alt=""></td>
                    <?php } ?>
                </tr>
            </table>
        </div>
    </div>
</div>