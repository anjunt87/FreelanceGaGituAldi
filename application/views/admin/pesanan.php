<div class="p-6 mt-8 bg-white rounded-xl">
                    
                    <div>
                        <h2 class="mb-1 text-xl font-semibold">
                            <!-- Latest Orders -->
                            Pemesanan Terakhir
                        </h2>
                        <p class="text-sm text-gray-400">
                            <?php 
                            $where2 = array ('freelance_id' => $this->session->userdata('username'));
                            $data = $this->db->select('*')->from('order')->like($where2)->count_all_results();
                            echo $data;
                        ?> Total Orders Dalam Prosess
                    </p>
                </div>
                <table class="w-full mt-4" aria-label="Table">
                    <thead>
                        <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                            <th class="py-4" scope="">Nama</th>
                            <th class="py-4" scope="">Nama Layanan</th>
                            <th class="py-4" scope="">Tengat Waktu</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <?php $no=1; foreach ($record2 as $r) { ?>
                            <tr class="text-gray-700">
                                <td class="w-1/3 px-1 py-5">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full" src="<?php echo base_url().'assets/img/avatars/'.$r['foto']  ?>" alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-black"><?= $r['nama_lengkap']?></p>
                                            <p class="text-sm text-yellow-400">
                                                <!-- On Progress -->
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="w-2/4 px-1 py-5">
                                    <div class="flex items-center text-sm">
                                        <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded" src="<?php echo base_url().'assets/img/service/'.$r['thumbnail']  ?>" alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-medium text-black">
                                                <?= $r['judul_services']?>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <!-- di if Else -->
                                <td class="px-1 py-5 text-xs text-red-500">
                                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline mb-1">
                                        <path d="M7.0002 12.8332C10.2219 12.8332 12.8335 10.2215 12.8335 6.99984C12.8335 3.77818 10.2219 1.1665 7.0002 1.1665C3.77854 1.1665 1.16687 3.77818 1.16687 6.99984C1.16687 10.2215 3.77854 12.8332 7.0002 12.8332Z" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M7 3.5V7L9.33333 8.16667" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <!-- 1 May 2021 -->
                                    <?= $r['expired']?>
                                </td>
                            </tr>
                        </tbody>
                        <?php $no++; } ?>
                    </table>
                </div>