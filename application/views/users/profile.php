<main class="h-full overflow-y-auto">
    <div class="container mx-auto">
        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">

            <div class="col-span-8">
                <?php echo $this->session->flashdata('msg')?>
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    My Profile
                </h2>
            </div>
            <?php foreach ($record as $r ): ?>
                <div class="col-span-4 lg:text-right">
                    <div class="relative mt-8 mb-1 text-md">
                       <a class="px-4 py-2 mt-2 text-left text-white bg-green-500 rounded-xl" href="<?= base_url('admin/profile/edit')?>">
                        <i class="fas fa-user-edit"></i> Edit Profile
                    </a>
                </div>
            </div>
        </div>
    </div>
    <section class="container px-6 mx-auto mt-5">
        <div class="grid gap-5 md:grid-cols-12">
            <main class="p-4 lg:col-span-4 md:col-span-12 md:pt-0">
                <div class="sm:grid p-6 bg-white rounded-xl border-t-4 border-green-400">
                    <div>
                        <div class="image overflow-hidden">
                        <?php if($r->foto == ''){ ?>
                            <img class="h-auto w-full mx-auto" src="<?= base_url('assets/img/avatars/face.png') ?>" alt="random user" >
                        <?php } else { ?>
                            <img src="<?php echo base_url().'/assets/img//avatars/'.$r->foto  ?>" class="h-auto w-full mx-auto" alt="random user" >
                        <?php } ?>
                    </div>
                    <h1 class="text-gray-900 font-bold text-xl leading-8 my-1"><?= $r->nama_lengkap?></h1>
                    <!-- <h3 class="text-gray-600 font-lg text-semibold leading-6"><?= $r->bio?></h3> -->
                    <p class="text-sm text-gray-500 hover:text-gray-600 leading-6"><?= $r->bio?></p>
                    <ul
                    class="bg-gray-100 text-gray-600 hover:text-gray-700 hover:shadow py-2 px-3 mt-3 divide-y rounded shadow-sm">
                    <li class="flex items-center py-3">
                        <span>Status</span>
                        <span class="ml-auto">
                            <?php if($r->is_active == 0 ){ 
                                echo '<span class="bg-red-500 py-1 px-2 rounded text-white text-sm">Tidak Aktif</span>';
                            }elseif ($r->is_active == 1 ){ 
                                echo '<span class="bg-green-500 py-1 px-2 rounded text-white text-sm">Aktif</span>';}?>

                            </span>
                        </li>
                        <li class="flex items-center py-3">
                            <span>Member Sejak</span>
                            <span class="ml-auto">
                                <?php $sampeledate = ($r->date_created); 
                                $converdate = format_indo(date('Y-m-d', strtotime($sampeledate)));
                                echo $converdate;
                                ?>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </main>

        <aside class="p-4 lg:col-span-8 md:col-span-12 md:pt-0 ">

            <div class="relative w-full h-64 mx-auto text-white transition-transform transform bg-red-100 rounded-xl">
                <div class="sm:grid p-6 bg-white rounded-xl border-t-4 border-green-400">
                  <div class="w-full md:w-9/12 mx-2 h-64">
                   <!-- End of friends card -->
               </div>
               <!-- Right Side -->
               <div class="w-full md:w-9/12 mx-2 h-64">
                <!-- Profile tab -->
                <!-- About Section -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                        <span clas="text-green-500">
                            <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </span>
                    <span class="tracking-wide">About</span>
                </div>
                <div class="text-gray-700">
                    <div class="grid md:grid-cols-2 text-sm">
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Nama Lengkap</div>
                            <div class="px-4 py-2"><?= $r->nama_lengkap?></div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="px-4 py-2 font-semibold">Bagian</div>
                            <div class="px-4 py-2"><?= $r->bagian?></div>
                        </div>
                                <!-- <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Gender</div>
                                    <div class="px-4 py-2">Female</div>
                                </div> -->
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Contact No.</div>
                                    <div class="px-4 py-2"><?= $r->kontak?></div>
                                </div>
                               <!--  <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Current Address</div>
                                    <div class="px-4 py-2"></div>
                                </div> -->
                                <!-- <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Permanant Address</div>
                                    <div class="px-4 py-2"></div>
                                </div> -->
                                <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Email.</div>
                                    <div class="px-4 py-2">
                                        <a class="text-blue-800" href=""><?= $r->email?></a>
                                    </div>
                                </div>
                                <!-- <div class="grid grid-cols-2">
                                    <div class="px-4 py-2 font-semibold">Birthday</div>
                                    <div class="px-4 py-2"></div>
                                </div> -->
                            </div>
                        </div>
                        <!-- <button
                        class="block w-full text-white text-sm font-semibold rounded-lg bg-green-500 focus:outline-none focus:ring-2 focus:ring-offset-2 p-3 my-4">Show
                    Full Information</button> -->
                </div>
                <!-- End of about section -->
            <?php endforeach ?>
        </div>
    </div>
    <div>
    </aside>
</div>
</section>
</main>