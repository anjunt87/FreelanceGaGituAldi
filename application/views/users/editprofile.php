<main class="h-full overflow-y-auto"> 
    <div class="container mx-auto">
        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
            <div class="col-span-12">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    Edit My Profile
                </h2>
                <p class="text-sm text-gray-400">
                    Enter your data Correctly & Properly
                </p>
            </div>
        </div>
    </div>

    <section class="container px-6 mx-auto mt-5">
        <div class="grid gap-5 md:grid-cols-12">
            <main class="col-span-12 p-4 md:pt-0">
                <div class="px-2 py-2 mt-2 bg-white rounded-xl">
                    <!-- <form action="#" method="POST"> -->
                        <form action="<?php echo base_url(). 'admin/profile/edit'; ?>" method="post" enctype="multipart/form-data">
                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6">
                                            <div class="flex items-center mt-1">
                                                <span class="inline-block w-16 h-16 overflow-hidden bg-gray-100 rounded-full">
                                                    <svg class="w-full h-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                                    </svg>
                                            </span><!-- 
                                            <button type="button" class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                                Choose File
                                            </button>
                                            <button type="button" class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-red-700 bg-transparent rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                                Delete
                                            </button> -->

                                            <label class=" px-3 py-2 ml-5" for="foto">Ubah Foto</label>
                                            <div class="custom-file">
                                              <input type="file" class=" px-3 py-2 ml-5 custom-file-input" id="foto" name="foto" value="<?php echo $user['foto'] ?>" required>
                                              <label class="custom-file-label" for="foto"><?php echo $user['foto'] ?></label>
                                          </div>


                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                              <div class="-mx-3 md:flex mb-6">
                                <div class="w-full px-3 mb-6 md:mb-0">
                                  <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Nama Lengkap</label>
                                  <input placeholder="" type="text" name="nama_lengkap" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= $record['nama_lengkap'];?>">
                              </div>
                              <div class="w-full px-3 mb-6 md:mb-0">
                                  <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Email</label>
                                  <input placeholder="" type="text" name="email" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= $record['email'];?>">
                              </div>
                          </div>
                          <div class="-mx-3 md:flex mb-6">

                              <div class="w-full px-3">
                                  <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Bagian</label>
                                  <input placeholder="" type="text" name="bagian" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= $record['bagian'];?>">
                              </div>
                              <div class="w-full px-3">
                                  <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Nomer Kontak</label>
                                  <input placeholder="" type="text" name="kontak" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= $record['kontak'];?>">
                              </div>
                          </div>

                          <div class="col-span-6">
                            <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Biografi</label>
                            <textarea  type="text" name="bio" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" rows="4" value="<?= $record['bio'];?>"><?= $record['bio'];?></textarea>
                        </div>

                    <!-- <div class="col-span-6">
                        <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">My Experience</label>
                        <input placeholder="More than 9 years of experience" type="text" name="service-name" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        <input placeholder="Knowledge in the fields of interface design, marketing and etc" type="text" name="service-name" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        <input placeholder="Lead Developer at Sony Music for 8 Years" type="text" name="service-name" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div> -->
                </div>
            </div>

            <div class="px-4 py-3 text-right sm:px-6">
                <a href="<?= base_url('admin/profile')?>" class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
                    Cancel
                </a>
                <button type="submit" name="submit" value="Submit" id="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    Save Changes
                </button>
            </div>
        </div>
    </form>
</div>
</main>
</div>
</section>
</main>