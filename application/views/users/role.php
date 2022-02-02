<main class="h-full overflow-y-auto">
    <div class="container mx-auto">
        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
            <div class="col-span-8">
                <?php echo $this->session->flashdata('msg')?>
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    Menu
                </h2>
                <p class="text-sm text-gray-400">
                    Tambah Edit Menu
                </p>
            </div>
        </div>
        <?= form_error('menu', '<div class="" role="alert">', '</div>'); ?>
        <?= $this->session->flashdata('message'); ?>
        <!--  -->
        <div class="px-6 mx-auto mt-5">
            <div class="col-span-6 p-4 md:pt-0">
               <button type="submit" name=""  class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"> Tambah Role</button>
           </div>                       
       </div>
       <section class="container px-6 mx-auto mt-5">
        <div class="grid gap-5 md:grid-cols-12">
            <main class="col-span-12 p-4 md:pt-0">
                <div class="px-2 py-2 mt-2 bg-white rounded-xl">
                 <table class="w-full h-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                          <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                           Role 
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-lg font-medium text-gray-500 uppercase tracking-wider">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                   <?php $no=1; foreach ($role as $r) { ?>
                       <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?= $no;?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?= $r['role']; ?></div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                                <a href="<?= base_url('admin/c_admin/roleAccess/'. $r['id']) ; ?>" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-blue-700 border border-transparent rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-">Akses</a>

                                <!-- <a href="#" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-red-400 border border-transparent rounded-lg focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Hapus</a> -->
                            </td>
                        </tr>
                        <?php $no++; }?>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</section>