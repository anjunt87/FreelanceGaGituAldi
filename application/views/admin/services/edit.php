<main class="h-full overflow-y-auto">
    <div class="container mx-auto">
        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
            <div class="col-span-12">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    Edit Your Service
                </h2>
                <p class="text-sm text-gray-400">
                    Edit the services you provide
                </p>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
        <ol class="inline-flex p-0 list-none">
            <li class="flex items-center">
                <a href="<?= base_url('admin/services')?>" class="text-gray-400">My Services</a>
                <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                </svg>
            </li>
            <li class="flex items-center">
                <a href="#" class="font-medium">Edit Your Service</a>
            </li>
        </ol>
    </nav>
    <section class="container px-6 mx-auto mt-5">
        <div class="grid gap-5 md:grid-cols-12">
            <main class="col-span-12 p-4 md:pt-0">
                <div class="px-2 py-2 mt-2 bg-white rounded-xl">
                    <form action="<?php echo base_url(). 'admin/services/edit'; ?>" method="post" enctype="multipart/form-data">
                        <!-- <form action="#" method="POST"> -->
                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6">
                                         <input type="hidden" value="<?php echo $record['id']?>" name="id">
                                         <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Nama Layanan</label>
                                         <input type="text" name="judul_services" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?php echo $record['judul_services']?>" required>
                                     </div>
                                     <div class="col-span-6">
                                        <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Deskripsi Layanan</label>
                                        <textarea placeholder="Jelaskan Service apa yang kamu tawarkan?" type="text" name="deskripsi" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?php echo $record['deskripsi']?>" required></textarea>
                                    </div>
                                    <div class="col-span-6">
                                        <label for="service-name" class="block mb-2 font-medium text-gray-700 text-md">Keunggulan Service kamu</label>
                                        <p class="block mb-3 text-sm text-gray-700">
                                            Hal apa aja yang didapakan dari service kamu?
                                        </p>
                                        <input placeholder="Keunggulan 1" type="text" name="keunggulan1" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?php echo $record['keunggulan1']?>" required>
                                        <input placeholder="Keunggulan 2" type="text" name="keunggulan2" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?php echo $record['keunggulan2']?>" required>
                                        <input placeholder="Keunggulan 3" type="text" name="keunggulan3" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?php echo $record['keunggulan3']?>" required>
                                        <div id="newServicesRow"></div>
                                                       <!--  <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addServicesRow">
                                                            Tambahkan Keunggulan +
                                                        </button> -->
                                                    </div>
                                                    <div class="col-span-6 -mb-6">
                                                        <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Estimasi Service & Jumlah Revisi</label>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <select id="estimation" name="estimation" autocomplete="estimation" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"  required>
                                                            <option value="<?php echo $record['estimasi']?>"><?php echo $record['estimasi']?></option>
                                                            <option value="1 Hari">1 Hari</option>
                                                            <option value="2 Hari">2 Hari</option>
                                                            <option value="3 Hari">3 Hari</option>
                                                            <option value="4 Hari">4 Hari</option>
                                                            <option value="5 Hari">5 Hari</option>
                                                            <option value="6 Hari">6 Hari</option>
                                                            <option value="7 Hari">7 Hari</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <select id="estimation" name="estimation" autocomplete="estimation" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>>
                                                            <option value="<?php echo $record['revisi']?>"><?php echo $record['revisi']?></option>
                                                            <option value="1 Kali">1 Kali</option>
                                                            <option value="2 Kali">2 Kali</option>
                                                            <option value="3 Kali">3 Kali</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Harga Service Kamu</label>
                                                        <input placeholder="Total Harga Service Kamu" type="number" name="price" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?php echo $record['price']?>" required>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Thumbnail Service Feeds</label>
                                                        <!-- belum tampil poto -->
                                                        <input placeholder="Keunggulan 1" type="file" name="service-name" id="service-name" autocomplete="service-name" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                                        <input placeholder="Keunggulan 2" type="file" name="service-name" id="service-name" autocomplete="service-name" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                                        <input placeholder="Keunggulan 3" type="file" name="service-name" id="service-name" autocomplete="service-name" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                                        <div id="newThumbnailRow"></div>
                                                        <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addThumbnailRow">
                                                            Tambahkan Gambar +
                                                        </button>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Keunggulan kamu</label>
                                                        <input placeholder="Keunggulan 1" type="text" name="service-name" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?php echo $record['k_kamu1']?>" required>
                                                        <input placeholder="Keunggulan 2" type="text" name="service-name" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?php echo $record['k_kamu2']?>" required>
                                                        <input placeholder="Keunggulan 3" type="text" name="service-name" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?php echo $record['k_kamu3']?>" required>
                                                        <div id="newAdvantagesRow"></div>
                                                        <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addAdvantagesRow">
                                                            Tambahkan Keunggulan +
                                                        </button>
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Note <span class="text-gray-400">(Optional)</span></label>
                                                        <input placeholder="Hal yang ingin disampaikan oleh kamu?" type="text" name="service-name" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                                    </div>
                                                    <div class="col-span-6">
                                                        <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Tagline <span class="text-gray-400">(Optional)</span></label>
                                                        <input placeholder="Tagline" type="text" name="service-name" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?php echo $record['tagline']?>" required>
                                                        <div id="newTaglineRow"></div>
                                                        <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addTaglineRow">
                                                            Tambahkan Tagline +
                                                        </button>
                                                    </div>
                                                    <div class="col-span-6 -mb-6">
                                                        <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Status</label>
                                                    </div>
                                                    <div class="col-span-3">
                                                        <select id="service-name" name="status" autocomplete="service-name" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required>
                                                            <option value="<?php echo $record['status']?>">
                                                                <?php 
                                                                $data = $record['status'];
                                                                if($data == 1){
                                                                    echo'Aktif';
                                                                }else{
                                                                 echo 'Non Aktif';
                                                             }
                                                             ?>
                                                         </option>
                                                         <option value="1">Aktif</option>
                                                         <option value="0">Non Aktif</option>
                                                     </select>
                                                     <span class="px-1 py-5 text-xs text-red-500"><?= form_error('status')?></span>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="px-4 py-3 text-right sm:px-6">
                                            <button type="submit" class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
                                                Cancel
                                            </button>
                                            <button type="submit" name="submit"  class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
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
            <?php include '/../../style/scripts.php' ?>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script type="text/javascript">
        // add row
        $("#addAdvantagesRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan" type="text" name="advantages[]" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newAdvantagesRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeAdvantagesRow', function() {
            $(this).closest('#inputFormAdvantagesRow').remove();
        });
    </script>
    <script type="text/javascript">
        // add row
        $("#addServicesRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan" type="text" name="services[]" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newServicesRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeServicesRow', function() {
            $(this).closest('#inputFormServicesRow').remove();
        });
    </script>
    <script type="text/javascript">
        // add row
        $("#addTaglineRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan" type="text" name="tagline[]" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newTaglineRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeTaglineRow', function() {
            $(this).closest('#inputFormTaglineRow').remove();
        });
    </script>
    <script type="text/javascript">
        // add row
        $("#addThumbnailRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan 3" type="file" name="thumbnails[]" id="service-name" autocomplete="service-name" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newThumbnailRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeThumbnailRow', function() {
            $(this).closest('#inputFormThumbnailRow').remove();
        });
    </script>