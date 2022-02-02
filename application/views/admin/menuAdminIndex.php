<section
class="h-full w-full border-box transition-all duration-500 linear lg:px-16 md:px-20 px-8 py-8 bg-white"> 
<div class="navbar-1-1" style="font-family: 'Poppins', sans-serif">
    <div class=" mx-auto flex flex-wrap flex-row items-center justify-between">
        <a href="index.php" class="flex text-3xl font-bold items-center">
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
<div class="hidden lg:flex lg:items-center lg:w-auto w-full lg:ml-auto lg:mr-auto flex-wrap items-center text-base justify-center"
id="menu">
<nav
class="lg:space-x-12 space-x-0 lg:flex items-center justify-between text-base pt-8 lg:pt-0 lg:space-y-0 space-y-6">
<a href="index.php" class="block nav-link active font-medium">Home</a>
<a href="<?php echo base_url().'explore'?>" class="block nav-link text-serv-text">Explore</a>
                    <!-- <a href="#" class="block nav-link text-serv-text">How It Works</a>
                    <a href="#" class="block nav-link text-serv-text">Stories</a>
                    <a href="#" class="block nav-link text-serv-text">Tips</a> -->
                    <hr class="block lg:hidden">
                    <a href="<?php echo base_url().'admin/c_admin'?>" class="block lg:hidden nav-link text-serv-text">Dashboard</a>
                    <a href="index.php" class="block lg:hidden nav-link text-serv-text">Logout</a>
                </nav>
            </div>

            <!-- <div @click.away="open = false" class="hidden lg:block relative" x-data="{ open: false }"> -->
            <!-- <div class="hidden lg:block relative" >
                <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"> -->
                   <!--  <img class="inline ml-3 h-12 w-12 rounded-full" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80" alt=""> -->
                    <!-- <?php if($akun['foto'] == ''){ ?>
                        <img class="inline ml-3 h-12 w-12 rounded-full" src="<?= base_url('assets/avatars/face.png') ?>" >
                    <?php } else { ?>
                        <img class="inline ml-3 h-12 w-12 rounded-full" src="<?php echo base_url().'assets/avatars/'.$akun['foto']  ?>">
                    <?php } ?>
                    <?= $user['nama_lengkap'];?> 
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button> -->
                <!-- <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                    <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800">
                    <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="<?php echo base_url().'admin/dashboard'?>">
                            Dashboard
                        </a>
                        <a class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="index.php">
                            Logout
                        </a>
                    </div>
                </div> -->
                    <script src="<?= base_url()?>assets/dist/js/init-alpine.js"></script>


                <div x-data="{ dropdownOpen: false}" class="relative">
                    <button @click="dropdownOpen = !dropdownOpen" class="relative z-10 block rounded-md bg-white p-2 focus:outline-none">

                      <?php if($akun['foto'] == ''){ ?>
                        <img class="inline ml-3 h-12 w-12 rounded-full" src="<?= base_url('assets/img/avatars/face.png') ?>" >
                    <?php } else { ?>
                        <img class="inline ml-3 h-12 w-12 rounded-full" src="<?php echo base_url().'assets/img/avatars/'.$akun['foto']  ?>">
                    <?php } ?>
                    <?= $this->session->userdata("nama_lengkap") ?>
                    <svg class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
              </button>

              <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>

              <div x-show="dropdownOpen" class="absolute right-0 mt-2 py-2 w-48 bg-gray rounded-md shadow-xl z-20">
                <a href="<?php echo base_url().'admin/dashboard'?>" class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                  Dashboard
              <!-- <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                  Your projects
              </a>
              <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                  Help
              </a>
              <a href="#" class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white">
                  Settings
              </a> -->
              <a href="<?php echo base_url().'auth/logout'?>" class="block px-4 py-2 mt-2 text-sm bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                  Sign Out
              </a>
          </div>
      </div>
  </div>
</div>
</div>
</section>