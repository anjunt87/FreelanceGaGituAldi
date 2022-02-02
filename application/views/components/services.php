<?php  $no=1; foreach ($recordServices as $rs) { ?>

    <a href="<?php echo base_url().'details'?>" class="inline-block px-3">
        <div class="w-96 h-auto overflow-hidden md:p-5 p-4 bg-white rounded-2xl inline-block">
            <div class="flex items-center space-x-2 mb-6">
                <!--Author's profile photo-->
                <img class="w-14 h-14 object-cover object-center rounded-full mr-1"
                src="<?php echo base_url().'/assets/img//avatars/'.$rs->foto  ?>" alt="random user" />
                <div>
                    <!--Author name-->
                    <p class="text-gray-900 font-semibold text-lg"><?= $rs->nama_lengkap?></p>
                    <p class="text-serv-text font-light text-md">
                        <?= $rs->bagian?>
                    </p>
                </div>
            </div>

            <!--Banner image-->
             <!--Banner image-->
           <!--  <img class="rounded-2xl w-full"
            src="https://via.placeholder.com/750x500" alt="placeholder" /> -->
            <?php if($rs->thumbnail == ''){ ?>
                <img class="rounded-2xl w-full"  src="https://via.placeholder.com/750x500" alt="placeholder" >
            <?php } else { ?>
                <img class="rounded-2xl w-full" src="<?php echo base_url().'/assets/img/service/'.$rs->thumbnail  ?>"  alt="placeholder" >
            <?php } ?>

            <!--Title-->
            <h1 class="font-semibold text-gray-900 text-lg mt-1 leading-normal py-4">
                <?= $rs->judul_services?>
            </h1>
            <!--Description-->
            <div class="max-w-full">

                <!-- <?php include 'components/rating.php'; ?> -->
                <?php include '/../navigasi/rating_dashboard.php' ?>
            </div>

            <div class="text-center mt-5 flex justify-between w-full">
                <span
                class="text-serv-text mr-3 inline-flex items-center leading-none text-md py-1 ">
                Harga Mulai Dari :
            </span>
            <span
            class="text-serv-button inline-flex items-center leading-none text-md font-semibold">
            <?php $rupiah = ($rs->price); 
            echo 'Rp'.number_format($rupiah, 2 ,',','.');
            ?> 
        </span>
    </div>
</div>
</a>
<?php  $no++; } ?>
