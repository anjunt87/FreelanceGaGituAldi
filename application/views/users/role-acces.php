

<main class="h-full overflow-y-auto">
    <div class="container mx-auto">
        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
            <div class="col-span-8">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    Role Access
                </h2>
                <?= $this->session->flashdata('message'); ?>
            </div>
        </div>
       
        <!--  -->
        <div class="grid w-full gap-5 px-10 mx-auto mt-5 md:grid-cols-12">
            <div class="col-span-8">
                <h5 >Role : <?= $role['role']; ?></h5>
            </div>
        </div><!-- 
        <div class="px-6 mx-auto mt-5">
            <div class="col-span-6 p-4 md:pt-0">
             <button type="submit" name=""  class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500"> Tambah Role</button>
         </div>                       
     </div> -->
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
             <?php $no=1; foreach ($menu as $r) { ?>
                 <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900"><?= $no;?></div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900"><?= $r['menu']; ?></div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="md:w-1/3">
                        <input class=" border-gray-300 rounded shadow-sm dark:bg-gray-900 text-primary focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" <?= check_access($role['id'], $r['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $r['id']; ?>">
                        </div>
                    </td>
                </tr>
                <?php $no++; }?>
            </tbody>
        </table>
    </div>
</main>
</div>
</section>

