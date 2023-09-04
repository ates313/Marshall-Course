<?php $this->load->view('admin/includes/headerStyle'); ?>
<?php $this->load->view('admin/includes/header'); ?>


<p class="text-center bg-gradient-dark text-dark py-2 rounded" style="font-size: 25px;">Welcome Slider List!</p>
<div class="form-group container-fluid">
    <div class="bg-white shadow rounded-sm my-2.5">
        <table class=" w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <!-- <th class="py-3 px-6 text-left">Project</th> -->
                    <th class="py-3 px-6 text-left">Title</th>
                    <th class="py-3 px-6 text-center">Description</th>
                    <th class="py-3 px-6 text-center">Status</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm">
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left">
                        MarshallEDU education College
                    </td>
                    <td class="py-3 px-6 text-left">
                        <div class="items-center">
                            <span>With Landigoo responsive landing page template,
                                you can promote Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Ipsam similique cum harum consectetur placeat odit molestias beatae.
                                Asperiores nisi, officiis fugit esse error possimus animi ut sequi doloremque placeat culpa.
                                your all hosting, domain and email services.</span>
                        </div>
                    </td>
                    <!-- <td class="py-3 px-6 text-center">
                        fvv
                    </td> -->
                    <td class="py-3 px-6 text-center">
                        <span class="bg-purple-200 text-purple-600 py-1 px-3 rounded-full text-xs">Active</span>
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
                        <a target="_blank" href="#">
                            <button>
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>