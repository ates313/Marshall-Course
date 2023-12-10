<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<p class="text-center text-dark py-2 rounded" style="font-size: 25px;">Welcome Drectoria List!</p>

<div class="form-group container-fluid">
    <a href="<?php echo base_url('c_drectoria') ?>">
        <button class="col-sm-1 form-control bg-dark text-light">Creat</button>
    </a>
    <div class="bg-white shadow rounded-sm my-2.5">
        <table class=" w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-center">ID</th>
                    <th class="py-3 px-6 text-center">Images</th>
                    <th class="py-3 px-6 text-center">Name-Surname</th>
                    <th class="py-3 px-6 text-center">Position</th>
                    <th class="py-3 px-6 text-center">Status</th>
                    <th class="py-3 px-6 text-center">Date Of Creat</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm">


                <?php $say = 0;
                foreach ($drectoria_get_list as $drectoria_get_list_item) {

                    $say++;?>

                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left">
                            <?php echo $say; ?>
                        </td>

                        <td class="py-3 px-6 text-left">
                            <?php if ($drectoria_get_list_item['d_img']) { ?>
                                <img width="60" src="<?php echo base_url('upload/' . $drectoria_get_list_item['d_img']) ?>" alt="">
                            <?php } else { ?>
                                <img width="60px" src="https://t4.ftcdn.net/jpg/04/99/93/31/360_F_499933117_ZAUBfv3P1HEOsZDrnkbNCt4jc3AodArl.jpg" alt="No Image">
                            <?php } ?>
                        </td>

                        <td class="py-3 px-6 text-left">
                            <?php echo $drectoria_get_list_item['d_name'] ?> / <?php echo $drectoria_get_list_item['d_surname'] ?>
                        </td>

                        <td class="py-3 px-6 text-left">
                            <?php echo $drectoria_get_list_item['d_position'] ?>
                        </td>

                        <td class="py-3 px-6 text-center">
                            <?php if ($drectoria_get_list_item['d_status'] == "Active") { ?>
                                <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs"><?php echo $drectoria_get_list_item['d_status'] ?></span>
                            <?php } ?>
                            <?php if ($drectoria_get_list_item['d_status'] == "Deactive") { ?>
                                <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs"><?php echo $drectoria_get_list_item['d_status'] ?></span>
                            <?php } ?>
                        </td>

                        <td class="py-3 px-6 text-left">
                            <?php echo $drectoria_get_list_item['d_date'] ?>
                        </td>

                        <td class="py-3 px-6 text-center">
                            <a target="_blank" href="#">
                                <button>
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                            </a>
                            <a href="<?php echo base_url('e_drectoria/') . $drectoria_get_list_item['d_id'] ?>">
                                <button>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </a>
                            <a href="<?php echo base_url('d_drectoria/') . $drectoria_get_list_item["d_id"]; ?>">
                                <button>
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </a>
                        </td>
                    </tr>


                <?php }; ?>
            </tbody>
        </table>
    </div>
</div>