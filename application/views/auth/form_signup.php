<!DOCTYPE html>
<html>

<head>
  <title><?= $title; ?></title>
  <?php include '/../style/meta.php' ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url()?>/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>/assets/img/favicon//favicon-16x16.png">
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/tailwindcss.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style2.css">
  <script src="<?= base_url()?>assets/dist/js/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/sweetalert2.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/fonts/fontawesome/css/all.min.cs">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="bg-gray-300" style="font-family: Roboto;">
  <main class="flex-1 lg:mt-20">
    <div class="flex max-w-lg mx-auto my-16 overflow-hidden bg-white rounded-lg lg:space-x-8 dark:bg-gray-900 lg:max-w-5xl">
      <div class="items-center hidden lg:flex lg:w-1/2" >
        <!-- <img src="/svg/queue-animate.svg" alt="queue-animate.svg"> -->
        <img src="<?= base_url() ?>assets/img/queue-animate.svg" alt="queue-animate.svg">

      </div>
      <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
        <?php echo $this->session->flashdata('msg')?>
        <?php echo validation_errors(); ?> 
        <h2 class="text-2xl font-semibold text-center text-gray-700 dark:text-white">Selamat Datang</h2>
        <p class="mt-2 text-xl text-center text-gray-600 dark:text-gray-200">Bergabunglah <span class="text-primary">dengan</span> GAGITUALDI</p>
        <p class="mt-2 text-xl text-center text-gray-600 dark:text-gray-200">Website Freelance
          <div class="flex items-center justify-between mt-4">
            <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>
            <a href="#" class="text-xs text-center text-gray-500 uppercase dark:text-gray-400 hover:underline">Gunakan Email</a>
            <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>
          </div>
          <!-- <form method="POST" action="<?= base_url('auth/signup');?>">   -->
            <?php echo form_open('auth/signup'); ?>
            <div class="mt-4">
              <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200" <?= form_error('nama') ? 'has-error' : null?>>Name</label>
              <input type="text" name="nama" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-teal-500 dark:focus:border-teal-500 focus:outline-none focus:ring focus:ring-primary dark:placeholder-gray-400 focus:ring-opacity-40" value="<?= set_value('nama')?>" required autocomplete="name" autofocus>
              <span class="px-1 py-5 text-xs text-red-500"><?= form_error('nama')?></span>
            </div>
            <div class="mt-4">
              <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200" <?= form_error('email') ? 'has-error' : null?>>E-Mail</label>
              <input type="email" name="email" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-teal-500 dark:focus:border-teal-500 focus:outline-none focus:ring focus:ring-primary dark:placeholder-gray-400 focus:ring-opacity-40" value="<?= set_value('email')?>" required autocomplete="email">
              <span class="px-1 py-5 text-xs text-red-500"><?= form_error('email')?></span>
            </div>
            <div class="mt-4">
              <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200"  <?= form_error('password') ? 'has-error' : null?>>Password</label>
              <input type="password" name="password" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-teal-500 dark:focus:border-teal-500 focus:outline-none focus:ring focus:ring-primary dark:placeholder-gray-400 focus:ring-opacity-40" value="<?= set_value('password')?>" required>
              <span class="px-1 py-5 text-xs text-red-500"><?= form_error('password')?></span>
            </div>
            <div class="mt-4">
              <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200"  <?= form_error('password2') ? 'has-error' : null?>>Konfirmasi Password</label>
              <input type="password" name="password2" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-teal-500 dark:focus:border-teal-500 focus:outline-none focus:ring focus:ring-primary dark:placeholder-gray-400 focus:ring-opacity-40" value="<?= set_value('password2')?>" required>
              <span class="px-1 py-5 text-xs text-red-500"><?= form_error('password2')?></span>
            </div>
            <div class="mt-8">
              <button type="submit" name="Submit" class="w-full py-2 rounded-full bg-blue-600 text-gray-100  focus:outline-none">Daftar</button>

            </div>
            <!-- </form> -->
            <?php echo form_close(); ?>
            <div class="flex items-center justify-between mt-4">
              <span class="w-1/5 border-b dark:border-gray-600 md:w-1/6"></span>

              <p class="text-xs text-gray-500 uppercase dark:text-gray-400">Kamu sudah punya Akun?</p><a href="<?= base_url('auth');?>" class="text-xs text-gray-blue uppercase dark:text-blue-500 hover:underline">Login Disini</a>
              <span class="w-1/5 border-b dark:border-gray-600 md:w-1/6"></span>
            </div>
          </div>
        </div>
      </main>
    </body>
    <?php include '/../style/scripts.php' ?>
    </html>