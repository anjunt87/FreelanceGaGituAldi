<main class="h-full overflow-y-auto">
    <div class="container mx-auto">
        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
            <div class="col-span-8">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    My Services
                </h2>
                <p class="text-sm text-gray-400">
                    <?php 
                    $where2 = array ('user_id' => $this->session->userdata('username'));
                    $data = $this->db->select('*')->from('services')->like($where2)->count_all_results();
                    if($data == null){
                        echo'<span></span>';
                    }else{
                     echo $data;
                 }
                 ?> 
                 Total Services
             </p>
         </div>
         <div class="col-span-4 lg:text-right">
            <div class="relative mt-0 md:mt-6">
                <a href="<?php echo  base_url().'admin/services/add'?>" class="inline-block px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button">
                    + Tambah Layanan
                </a>
            </div>
        </div>
    </div>
</div>
<?php echo $this->session->flashdata('success')?>
<section class="container px-6 mx-auto mt-5">
    <div class="mx-auto grid gap-5 md:grid-cols-12">
        <main class="col-span-12 p-4 md:pt-0">
            <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                <table class="w-full" aria-label="Table">
                    <thead>
                        <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                            <th class="py-4" scope="">Service Details</th>
                            <th class="py-4" scope="">Role</th>
                            <!-- <th class="py-4" scope="">email</th> -->
                            <th class="py-4" scope="">Price</th>
                            <th class="py-4" scope="">Status</th>
                            <th class="py-4" scope="">Action</th>
                        </tr>
                    </thead>
                    <?php $no=1; foreach ($record as $r) { ?>
                        <tbody class="bg-white">
                            <tr class="text-gray-700 border-b">
                                <td class="w-2/6 px-1 py-5">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                            <!-- <img class="object-cover w-full h-full rounded" src="https://randomuser.me/api/portraits/men/3.jpg" alt="" loading="lazy" /> -->
                                            <img class="object-cover mx-auto flex flex-wrap rounded" src="<?= base_url('assets/img/avatars/face.png') ?>" alt="" loading="lazy" >
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <a href="<?php echo  base_url().'admin/services/details/'.$r->id?>" class="font-medium text-black">
                                                <?php echo $r->judul_services ?>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-1 py-5 text-sm">
                                    <?php echo $r->role ?>
                                </td>
                                <!-- join sudah sesuai -->
                                                <!-- <td class="px-1 py-5 text-sm">
                                                    <?php echo $r->email ?>
                                                </td> -->
                                                <td class="px-1 py-5 text-sm">
                                                    <?php echo $r->price ?>
                                                </td>
                                                <td class="">
                                                    <?php if($r->status == 0 ){ 
                                                        echo '<div class="px-1 py-5 text-sm text-red-500 text-md">No Active</div>';
                                                    }elseif ($r->status == 1 ){ 
                                                        echo '<div class="px-1 py-5 text-sm text-green-500 text-md">Active</div>';}?>
                                                    </td>
                                                    <td class="px-1 py-5 text-sm mx-auto flex flex-wrap">
                                                     <a href=" <?php echo base_url('admin/services/edit/'.$r->id) ?>" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-email">
                                                        Edit Service
                                                    </a>
                                               <!--  <a href="<?php echo  base_url().'admin/services/details/'.$r->id?>" class="px-4 py-2 mt-2 ml-2 text-left text-white rounded-xl bg-serv-email">
                                                    Details Service
                                                </a> -->
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php $no++; } ?>
                                </table>
                            </div>
                        </main>
                    </div>
                </section>
            </main>