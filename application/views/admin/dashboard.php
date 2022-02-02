
<main class="h-full overflow-y-auto">
    <div class="container mx-auto">
        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">

            <div class="col-span-8">
                <?php echo $this->session->flashdata('msg')?>
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    Overviews
                </h2>
                <p class="text-sm text-gray-400">
                    Monthly Reports
                </p>
            </div>
            <div class="col-span-4 text-right">
                <div @click.away="open = false" class="relative z-10 hidden mt-5 lg:block" x-data="{ open: false }">
                    <button class="flex flex-row items-center w-full px-4 py-2 mt-2 text-left bg-white rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4">
                        <!-- <img class="inline w-12 h-12 mr-3 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg" alt=""> -->
                        <?php if($user['foto'] == ''){ ?>
                            <img class="inline w-12 h-12 mr-3 rounded-full" src="<?= base_url('assets/img/assets/avatars/face.png') ?>" >
                        <?php } else { ?>
                            <img src="<?php echo base_url().'assets/img/avatars/'.$user['foto']  ?>" class="inline w-12 h-12 mr-3 rounded-full">
                        <?php } ?>
                        Halo, <?= $user['nama_lengkap'];?> 
                    </button>
                </div>
            </div>
        </div>
    </div>
    <section class="container px-6 mx-auto mt-5">
        <div class="grid gap-5 md:grid-cols-12">
            <main class="p-4 lg:col-span-7 md:col-span-12 md:pt-0">
                <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
                    <div class="flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                        <div>
                            <div>
                                <img src="<?= base_url()?>/assets/img/services-progress-icon.svg" alt="" class="w-8 h-8">
                            </div>
                            <p class="mt-2 text-2xl font-semibold text-left text-gray-800">3</p>
                            <p class="text-sm text-left text-gray-500">
                                Services <br class="hidden lg:block">
                                On Progress
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                        <div>
                            <div>
                                <img src="<?= base_url()?>/assets/img/services-completed-icon.svg" alt="" class="w-8 h-8">
                            </div>
                            <p class="mt-2 text-2xl font-semibold text-left text-gray-800">144</p>
                            <p class="text-sm text-left text-gray-500">
                                Services <br class="hidden lg:block">
                                Completed
                            </p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                        <div>
                            <div>
                                <img src="<?= base_url()?>/assets/img/new-freelancer-icon.svg" alt="" class="w-8 h-8">
                            </div>
                            <p class="mt-2 text-2xl font-semibold text-left text-gray-800">
                                <?php
                                $data = $this->db->select('*')->from('user')->count_all_results();
                                echo $data;
                                ?>
                            </p>
                            <p class="text-sm text-left text-gray-500">
                                Total <br class="hidden lg:block">
                                Pengguna
                            </p>
                        </div>
                    </div>
                </div>
                
                <?php include '/../admin/pesanan.php' ?>
            </main>
            <aside class="p-6 lg:col-span-5 md:col-span-12 md:pt-0">

                <?php include '/../admin/visa.php' ?>
                <div class="p-6 mt-8 bg-white rounded-xl">
                    <div>
                        <h2 class="mb-1 text-xl font-semibold">
                            <!-- Top Reviews -->
                            <!-- Last Reviews -->
                        </h2>
                        <p class="text-sm text-gray-400">
                            <?php 
                            $where2 = array ('freelance_id' => $this->session->userdata('username'));
                            $data = $this->db->select('*')->from('reviews')->like($where2)->count_all_results();
                            echo $data;
                        ?> Total Reviews
                    </p>
                </div>
                <table class="w-full" aria-label="Table">
                    <thead>
                        <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                            <th class="py-4" scope=""></th>
                            <th class="py-4" scope=""></th>
                        </tr>
                    </thead>
                    <?php foreach ($record as $r) { ?>
                        <tbody class="bg-white">
                            <tr class="text-gray-700">
                                <td class="w-1/2 px-1 py-2">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full" src="<?php echo base_url().'assets/img/avatars/'.$r['foto']  ?>" alt="lazy">
                                            <!-- <img class="object-cover w-full h-full rounded-full" src="https://randomuser.me/api/portraits/men/2.jpg" alt="" loading="lazy" /> -->
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-black"><?php echo $r['nama_lengkap'];?></p>
                                            <p class="text-sm text-gray-400">
                                                <?php
                                                date_default_timezone_set('Asia/Jakarta');  
                                                echo facebook_time_ago($r['time_review']); ?>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <?php include '/../admin/rating.php' ?>
                            </tr>
                        </tbody>
                    <?php  } ?>
                </table>
            </div>
        </aside>
    </div>
</section>
</main>