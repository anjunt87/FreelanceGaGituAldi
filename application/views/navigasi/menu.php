<section
class="h-full w-full border-box transition-all duration-500 linear lg:px-16 md:px-20 px-8 py-8 bg-white">
<div class="navbar-1-1" style="font-family: 'Poppins', sans-serif">
    <div class=" mx-auto flex flex-wrap flex-row items-center justify-between">
        <a href="#" class="flex text-3xl font-bold items-center">
        FREELANCE            </a>
        <label for="menu-toggle" class="cursor-pointer lg:hidden block">
            <svg class="w-6 h-6" fill="none" stroke="#092A33" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M4 6h16M4 12h16M4 18h16">
            </path>
            </svg>
        </label>
        <input class="hidden" type="checkbox" id="menu-toggle" />
        <div class="hidden lg:flex lg:items-center lg:w-auto w-full lg:ml-auto lg:mr-auto flex-wrap items-center text-base justify-center" id="menu">
                <nav
                    class="lg:space-x-12 space-x-0 lg:flex items-center justify-between text-base pt-8 lg:pt-0 lg:space-y-0 space-y-6">
                    <a href="index.php" class="block nav-link active font-medium">Beranda</a>
                    <a href="<?php echo base_url().'explore'?>" class="block nav-link text-serv-text">Jelajah Layanan</a>
                    <!-- <a href="#" class="block nav-link text-serv-text">How It Works</a>
                    <a href="#" class="block nav-link text-serv-text">Stories</a>
                    <a href="#" class="block nav-link text-serv-text">Tips</a> 
                    <a href="<?php echo base_url().'admin/c_admin'?>" class="block nav-link text-serv-text">Admin</a>-->
                </nav>
            </div>

            <div class="hidden lg:flex lg:items-center lg:w-auto w-full" id="menu">
                <!-- <button
                    onclick="toggleModal('loginModal')"
                    class="text-serv-login-text items-center border-0 block lg:inline-block lg:py-3 lg:px-10 focus:outline-none rounded-2xl font-medium text-base mt-6 lg:mt-0">
                    Log In
                </button> -->
                <a href="<?= base_url('').'auth'?>" class="text-serv-login-text items-center border-0 block lg:inline-block lg:py-3 lg:px-10 focus:outline-none rounded-2xl font-medium text-base mt-6 lg:mt-0 active">
                Masuk</a>
                <!--  <a href="<?= base_url('').'auth/signup'?>" class="lg:bg-serv-services-bg text-serv-login-text items-center border-0 block lg:inline-block  lg:py-3 lg:px-10 focus:outline-none rounded-2xl font-medium text-base mt-6 lg:mt-0">
                Daftar</a> -->
                <!-- <a class="bg-serv-button text-white text-lg font-semibold py-2 px-12 my-2 rounded-xl" href="<?= base_url('auth')?>">
                        Get Started
                    </a> -->
        </div>
    </div>
</div>
</section>