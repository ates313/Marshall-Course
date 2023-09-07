<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>


<p class="text-center bg-gradient-dark text-dark py-2 rounded" style="font-size: 25px;">Welcome Slider List!</p>
<div class="form-group container-fluid">
    <div class="bg-white shadow rounded-sm my-2.5">
        <table class=" w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">Project</th>
                    <th class="py-3 px-6 text-left">Title</th>
                    <th class="py-3 px-6 text-center">Description</th>
                    <th class="py-3 px-6 text-center">Links</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm">
                <?php $sID = 0;

                foreach ($slider_get_list as $slider_get_list_item) {

                    $sID++; ?>

                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-left">


                            <?php if ($slider_get_list_item['s_img']) { ?>
                                <img width="60" src="<?php echo base_url('upload/'.$slider_get_list_item['s_img']) ?>" alt="">
                            <?php } else { ?>
                                <img width="60px" src="https://t4.ftcdn.net/jpg/04/99/93/31/360_F_499933117_ZAUBfv3P1HEOsZDrnkbNCt4jc3AodArl.jpg" alt="No Image">
                            <?php } ?>


                        </td>
                        <td class="py-3 px-6 text-left">
                            <?php echo $slider_get_list_item['s_title'] ?>
                        </td>
                        <td class="py-3 px-6 text-left">
                            <div class="items-center">
                                <span><?php echo $slider_get_list_item['s_desc'] ?></span>
                            </div>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <a target="_blank" href="<?php echo $slider_get_list_item['s_link'] ?>">
                                <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs"><?php echo $slider_get_list_item['s_link'] ?></span>
                            </a>
                            <!-- <span class="bg-red-200 text-red-600 py-1 px-3 rounded-full text-xs">Deactive</span> -->
                        </td>
                        <td class="py-3 px-6 text-center">
                            <a target="_blank" href="#">
                                <button>
                                    <i class="fa-regular fa-eye"></i>
                                </button>
                            </a>
                            <a target="_blank" href="#">
                                <button>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </a>
                            <a href="<?php echo base_url('d_slider/') . $slider_get_list_item["s_id"]; ?>">
                                <button>
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </a>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</div>