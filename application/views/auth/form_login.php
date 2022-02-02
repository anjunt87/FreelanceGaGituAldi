<!DOCTYPE html>
<html>
<!doctype html>
  <html lang="en">

    <head>
      <title><?= $title; ?></title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url()?>/assets/img/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url()?>/assets/img/favicon//favicon-16x16.png">
      <!-- <?php //include '/../style/meta.php' ?> -->
      <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/tailwindcss.css">
      <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style2.css">
      <link rel="stylesheet" href="<?= base_url()?>assets/fonts/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="<?= base_url()?>assets/fonts/fontawesome/css/sweetalert2.css">
      <link rel="stylesheet" href="<?= base_url()?>assets/fonts/fontawesome/css/sweetalert2.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    </head> 
    <body class="bg-gray-300" style="font-family: Roboto;">
      <main class="flex-1 lg:mt-20">
        <div class="flex max-w-lg mx-auto my-16 overflow-hidden bg-white rounded-lg lg:space-x-8 dark:bg-gray-900 lg:max-w-5xl">
          <div class="items-center hidden lg:flex lg:w-1/2" >
            <img src="<?= base_url() ?>assets/img/secure-login-animate.svg" alt="secure-login-animate.svg">
          </div>
          <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
            <?php echo $this->session->flashdata('msg')?>
            <h2 class="text-2xl font-semibold text-center text-gray-700 dark:text-white">Selamat Datang Di GAGITUALDI</h2>
            <p class="mt-2 text-xl text-center text-gray-600 dark:text-gray-200">Kami <span class="text-primary">Senang</span> Anda kembali</p>
            <div class="flex items-center justify-between mt-4">
              <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>
              <a href="#" class="text-xs text-center text-gray-500 uppercase dark:text-gray-400 hover:underline">Masuk dengan Email</a>
              <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>
            </div>
            <form method="POST" action="<?= base_url('auth/login');?>">   
              <div class="mt-4">
                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">E-Mail</label>
                <input type="email" name="email" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-teal-500 dark:focus:border-teal-500 focus:outline-none focus:ring focus:ring-primary dark:placeholder-gray-400 focus:ring-opacity-40" value="" required autocomplete="email"> 
              </div>
              <div class="mt-4">
                <label class="block mb-2 text-sm text-gray-600 dark:text-gray-200">Password</label>
                <input type="password" name="password" class="w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-teal-500 dark:focus:border-teal-500 focus:outline-none focus:ring focus:ring-primary dark:placeholder-gray-400 focus:ring-opacity-40" required>              
              </div>
              <div class="flex justify-between mt-4">
                <div class="col-md-6 offset-md-4">
                  <div class="flex items-center">
                <!-- <input class="border-gray-300 rounded shadow-sm dark:bg-gray-900 text-primary focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="checkbox" name="remember" id="remember" >
                <label class="ml-2 text-gray-700 dark:text-gray-300" for="remember">
                  Remember Me
                </label> -->
              </div>
            </div>
            <a class="text-sm text-gray-600 dark:text-gray-400 hover:underline" href="#"> Lupa Password?</a>
          </div>
          <div class="mt-8">
            <button type="submit" name="Submit" class="w-full py-2 rounded-full bg-blue-600 text-gray-100  focus:outline-none">Login</button>
          </div>
        </form>
        <div class="flex items-center justify-between mt-4">
          <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
          <a href="<?= base_url('auth/signup');?>" class="text-xs text-gray-500 uppercase dark:text-gray-400 hover:underline">Buat akun baru</a>
          <span class="w-1/5 border-b dark:border-gray-600 md:w-1/4"></span>
        </div>
        <div class="flex items-center justify-between mt-4">
          <a href="<?= base_url('home');?>" class="text-xs text-red-500 uppercase dark:text-gray-400 hover:underline">Kembali ke Beranda</a>
        </div>
      </div>
    </div>
  </main>
</body>
<?php include '/../style/scripts.php' ?>
</html>