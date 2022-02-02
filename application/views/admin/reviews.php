<main class="h-full overflow-y-auto">
    <div class="container mx-auto">
        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
            <div class="col-span-8">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    Reviews <?= $record2['judul_services'];?>
                </h2>
                <p class="text-sm text-gray-400">
                </p>
            </div>
        </div>
    </div>
    <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
        <ol class="inline-flex p-0 list-none">
            <li class="flex items-center">
                <a href="<?php echo base_url().'admin/services'?>" class="text-gray-400">My Services</a>
                <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                </svg>
            </li>
            <li class="flex items-center">
                <a href="<?php echo base_url().'admin/services/details/'.$record2['id'];?>" class="text-gray-400">Details Service</a>
                <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                </svg>
            </li>
            <li class="flex items-center">
                <a href="#" class="text-font-medium">Reviews <?= $record2['judul_services'];?></a>
            </li>
        </ol>
    </nav>
    <section class="container px-6 mx-auto mt-5">
        <div class="grid gap-5 md:grid-cols-12">
            <main class="col-span-12 p-4 md:pt-0">

                <?php $no=1; foreach ($record->result() as $r) { ?>
                    <div class="px-4 py-4 mt-2 bg-white rounded-xl">
                        <div class="flex border border-serv-testimonial-border rounded-lg mb-1"><!--horizantil margin is just for display-->
                            <div class="flex items-start px-4 py-6">
                                <img class="w-16 h-16 rounded-full object-cover mr-4" src="<?php echo base_url().'assets/img/avatars/'.$r->foto  ?>" alt="avatar">
                                <div class="w-full">
                                    <div class="flex items-center justify-between">
                                        <h2 class="text-xl font-medium text-serv-bg my-1"><?php echo $r->nama_lengkap?></h2>
                                    </div>
                                    <p class="text-md">
                                        <?php if($r->rating == 0 ){ 
                                            echo '
                                            <label for="rating-5"><i class="fas fa-fw fa-star "></i></label>
                                            <label for="rating-4"><i class="fas fa-fw fa-star "></i></label>
                                            <label for="rating-3"><i class="fas fa-fw fa-star "></i></label>
                                            <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>
                                            <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>';
                                        }elseif ($r->rating == 1 ){ 
                                            echo '
                                            <label for="rating-5"><i class="fas fa-fw fa-star rating"></i></label>
                                            <label for="rating-4"><i class="fas fa-fw fa-star "></i></label>
                                            <label for="rating-3"><i class="fas fa-fw fa-star "></i></label>
                                            <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>
                                            <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>';
                                        }elseif ($r->rating == 2 ){ 
                                            echo '
                                            <label for="rating-5"><i class="fas fa-fw fa-star rating"></i></label>
                                            <label for="rating-4"><i class="fas fa-fw fa-star rating"></i></label>
                                            <label for="rating-3"><i class="fas fa-fw fa-star "></i></label>
                                            <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>
                                            <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>';
                                        }elseif ($r->rating == 3 ){ 
                                            echo '
                                            <label for="rating-5"><i class="fas fa-fw fa-star rating"></i></label>
                                            <label for="rating-4"><i class="fas fa-fw fa-star rating"></i></label>
                                            <label for="rating-3"><i class="fas fa-fw fa-star rating"></i></label>
                                            <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>
                                            <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>';
                                        }elseif ($r->rating == 4 ){ 
                                            echo '
                                            <label for="rating-5"><i class="fas fa-fw fa-star rating"></i></label>
                                            <label for="rating-4"><i class="fas fa-fw fa-star rating"></i></label>
                                            <label for="rating-3"><i class="fas fa-fw fa-star rating"></i></label>
                                            <label for="rating-2"><i class="fas fa-fw fa-star rating"></i></label>
                                            <label for="rating-2"><i class="fas fa-fw fa-star "></i></label>';
                                        }elseif ($r->rating == 5 ){ 
                                            echo '
                                            <label for="rating-5"><i class="fas fa-fw fa-star rating"></i></label>
                                            <label for="rating-4"><i class="fas fa-fw fa-star rating"></i></label>
                                            <label for="rating-3"><i class="fas fa-fw fa-star rating"></i></label>
                                            <label for="rating-2"><i class="fas fa-fw fa-star rating"></i></label>
                                            <label for="rating-2"><i class="fas fa-fw fa-star rating"></i></label>
                                            ';
                                        }
                                        ?>
                                        <span class="text-serv-black font-medium"><?= $r->rating?> / 5</span>
                                    </p>
                                    <p class="mt-3 text-gray-700 text-md leading-8">
                                        <?php echo $r->review ?>
                                    </p>
                                    <div class="mt-4 flex items-center">
                                        <div class="flex mr-2 text-serv-text text-md">
                                          <?php
                                          date_default_timezone_set('Asia/Jakarta');  
                                          echo facebook_time_ago($r->time_review); ?>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <br/>
                  <?php $no++; } ?>
              </main>
          </div>
      </section>
  </main>