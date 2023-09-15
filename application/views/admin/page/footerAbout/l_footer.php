<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>

<p class="text-center text-dark py-2 rounded" style="font-size: 25px;">Welcome Footer About List!</p>

<div class="form-group container-fluid">
    <a href="<?php echo base_url('c_footer') ?>">
        <button class="col-sm-1 form-control bg-dark text-light">Creat</button>
    </a>
    <div class="bg-white shadow rounded-sm my-2.5">
        <table class=" w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-center">ID</th>
                    <th class="py-3 px-6 text-center">Description</th>
                    <th class="py-3 px-6 text-center">Status</th>
                    <th class="py-3 px-6 text-center">Instagram</th>
                    <th class="py-3 px-6 text-center">Faceboook</th>
                    <th class="py-3 px-6 text-center">Tweeter</th>
                    <th class="py-3 px-6 text-center">Date of creation</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm">
                <?php $say = 0;
                foreach ($footer_get_list as $footer_get_list_item) {


                    $say++; ?>
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="py-3 px-6 text-center">
                            <?php echo $say; ?>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <?php echo $footer_get_list_item['f_desc'] ?>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <?php //echo $footer_get_list_item['f_satatus'] 
                            ?>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <?php echo $footer_get_list_item['f_instagram'] ?>
                        </td>
                        <td class="py-3 px-6 text-center">
                            <?php echo $footer_get_list_item['f_facebook'] ?>

                        </td>
                        <td class="py-3 px-6 text-center">
                            <?php echo $footer_get_list_item['f_tweet'] ?>

                        </td>
                        <td class="py-3 px-6 text-center">
                            <?php echo $footer_get_list_item['f_date'] ?>

                        </td>
                        <td class="py-3 px-6 text-center">
                            <a href="">
                                <button>
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </button>
                            </a>
                            <a href="">
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