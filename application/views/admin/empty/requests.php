<div class="flex h-screen">
    <div class="m-auto text-center">
        <img src="<?php echo base_url()?>/../assets/images/empty-illustration.svg" alt="" class="w-48 mx-auto">
        <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
            Anda tidak memiliki pesanan atau layanan apapun
        </h2>
        <p class="text-sm text-gray-400">
            <!-- It seems that you haven’t ordered any service. -->
            Mari jelajahi layanan yang anda butuhkan dan segera order. <br>
            Layanan pertama anda !
        </p>

        <div class="relative mt-0 md:mt-6">
            <a class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-button" href="<?= base_url('admin/c_admin/explore')?>">
                Cari Layanan
            </a>
        </div>
    </div>
</div>