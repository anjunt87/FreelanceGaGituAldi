<aside class="z-20 flex-shrink-0 hidden w-64 overflow-y-auto bg-white md:block" aria-label="aside">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <div class="" href="#">
            <img src="<?php echo base_url()?>assets/img/logo.svg" alt="" class="object-center mx-auto my-8 ">
        </div>
        <div class="flex items-center pt-8 pl-5 space-x-2 border-t border-gray-100">
            <!--Author's profile photo-->
            <?php if($user['foto'] == ''){ ?>
                <img class="object-cover object-center mr-1 rounded-full w-14 h-14" src="<?= base_url('assets/img/avatars/face.png') ?>" alt="random user" >
            <?php } else { ?>
                <img src="<?php echo base_url().'/assets/img//avatars/'.$user['foto']  ?>" class="object-cover object-center mr-1 rounded-full w-14 h-14" alt="random user" >
            <?php } ?>
            <div>
                <!--Author name-->
                <p class="font-semibold text-gray-900 text-md"><?= $user['nama_lengkap'];?> </p>
                <p class="text-sm font-light text-serv-text">
                    <?= $user['bagian'];?>
                </p>
            </div>
        </div>
         <ul class="mt-6">
            <li class="relative px-6 py-3">
                <!-- <span class="absolute inset-y-0 left-0 w-1 rounded-tr-lg rounded-br-lg bg-serv-bg" aria-hidden="true"></span> -->
                <a class="inline-flex items-center w-full text-sm font-medium text-gray-800 transition-colors duration-150 hover:text-gray-800 " href="<?= base_url().'admin/dashboard'?>">
                    <i class="fas fa-fw fa-home text-xl"></i>
                    <span class="ml-4">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul class="">
         <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800" href="<?php echo base_url().'admin/services'?>">
                <!-- My Service -->
                <i class="fas fa-fw fa-clipboard-list text-xl" ></i>
                <span class="ml-4">My Services</span>
                <?php 
                    $where2 = array ('user_id' => $this->session->userdata('username'));
                    $data = $this->db->select('*')->from('services')->like($where2)->count_all_results();
                    if($data == null){
                        echo'<span></span>';
                    }else{
                     echo '<span class="inline-flex items-center justify-center px-3 py-2 ml-auto text-xs font-bold leading-none text-green-500 rounded-full bg-serv-green-badge">';
                     echo $data;
                }?>
             </a>
         </li>
         <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800" href="<?php echo base_url().'admin/request'?>">
                <i class="fas fa-fw fa-plus-square text-xl"></i>
                    <span class="ml-4">My Request</span>
                    <?php 
                    $where2 = array ('user_id' => $this->session->userdata('username'));
                    $data = $this->db->select('*')->from('request')->like($where2)->count_all_results();
                    if($data == null){
                        echo'<span></span>';
                    }else{
                     echo '<span class="inline-flex items-center justify-center px-3 py-2 ml-auto text-xs font-bold leading-none text-green-500 rounded-full bg-serv-green-badge">';
                     echo $data;
                }?>
            </a>
         </li>
         <li class="relative px-6 py-3">
            <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800" href="<?php echo base_url().'admin/orders'?>">
                <i class="fas fa-fw fa-stream text-xl"></i>
                    <span class="ml-4">My Orders</span>
                    <?php 
                    $where2 = array ('freelance_id' => $this->session->userdata('username'));
                    $data = $this->db->select('*')->from('order')->like($where2)->count_all_results();
                    if($data == null){
                        echo'<span></span>';
                    }else{
                     echo '<span class="inline-flex items-center justify-center px-3 py-2 ml-auto text-xs font-bold leading-none text-green-500 rounded-full bg-serv-green-badge">';
                     echo $data;
                }?>
             </a>
         </li>
                    <!-- <dropdown-menu title="Admin">
                        <li class="relative px-6 py-3">a</li>
                        <li class="relative px-6 py-3">a</li>
                        <li class="relative px-6 py-3">a</li>
                        <li class="relative px-6 py-3">a</li>
                    </dropdown-menu> -->
      
         <?php

         $role_id = $this->session->userdata('role_id');
         $queryMenu = "SELECT `user_menu`.`id`, `menu`
         FROM `user_menu` JOIN `user_acces_menu`
         ON `user_menu`.`id` = `user_acces_menu`.`menu_id`
         WHERE `user_acces_menu`.`role_id` = $role_id
         ORDER BY `user_acces_menu`.`menu_id` ASC
         ";
         $menu = $this->db->query($queryMenu)->result_array();
         ?>
         <!-- looping menu -->
         <?php foreach ($menu as $m) : ?>
                    <!-- <li class="relative px-6 py-3">
                        <?= $m['menu']; ?>
                    </li> -->
                    <?php
                    $menuId = $m['id'];
                    $querySubMenu = "SELECT *
                    FROM `user_sub_menu` JOIN `user_menu` 
                    ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                    WHERE `user_sub_menu`.`menu_id` = $menuId
                    AND `user_sub_menu`.`is_active` = 1
                    ";
                    $subMenu = $this->db->query($querySubMenu)->result_array();
                    ?>



                    <?php foreach ($subMenu as $sm) : ?>
                        <?php// if ($title == $sm['title']) : ?>
                        <?php //else : ?>
                        <?php //endif; ?>
                        <li class="relative px-6 py-3">
                            <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800" href="<?= base_url($sm['url']); ?>">
                                <i class="<?= $sm['icon']; ?> text-xl"></i>
                                <span class="ml-4"><?= $sm['title']; ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>

                <?php endforeach; ?>

                <li class="relative px-6 py-3">
                    <a class="inline-flex items-center w-full text-sm font-light transition-colors duration-150 hover:text-gray-800" href="<?php echo base_url().'auth/Logout';?>">
                        <i class="fas fa-fw fa-sign-out-alt text-xl"></i>
                        <span class="ml-4">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>