
<main class="h-full overflow-y-auto">
    <div class="container mx-auto">
        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
            <div class="col-span-12">
                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                    Add Your Service
                </h2>
                <p class="text-sm text-gray-400">
                    Upload the services you provide
                </p>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
    <nav class="mx-10 mt-8 text-sm" aria-label="Breadcrumb">
        <ol class="inline-flex p-0 list-none">
            <li class="flex items-center">
                <a href="<?php echo base_url().'admin/services'?>" class="text-gray-400">My Services</a>
                <svg class="w-3 h-3 mx-3 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                    <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" />
                </svg>
            </li>
            <li class="flex items-center">
                <a href="#" class="font-medium">Add Your Service</a>
            </li>
        </ol>
    </nav>
    <section class="container px-6 mx-auto mt-5">
        <div class="grid gap-5 md:grid-cols-12">
            <main class="col-span-12 p-4 md:pt-0">
                <div class="px-2 py-2 mt-2 bg-white rounded-xl">
                    <!-- <form action="#" method="POST"> -->
                        <?php echo form_open('admin/services/add'); ?>
                        <!-- <form action="<?php // echo base_url(). 'admin/services/add'; ?>" method="post" enctype="multipart/form-data"> -->
                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6">
                                            <label for="" class="block mb-3 font-medium text-gray-700 text-md"   <?= form_error('judul_services') ? 'has-error' : null?>>Judul Service</label>
                                            <input placeholder="Service apa yang ingin kamu tawarkan?" type="text" name="judul_services" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= set_value('judul_services')?>">
                                            <span class="px-1 py-5 text-xs text-red-500"><?= form_error('judul_services')?></span>
                                        </div>
                                        <div class="col-span-6">
                                            <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md"  <?= form_error('deskripsi') ? 'has-error' : null?>>Deskripsi Layanan</label>
                                            <textarea placeholder="Jelaskan Service apa yang kamu tawarkan?" type="text" name="deskripsi" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= set_value('deskripsi')?>"></textarea>
                                            <span class="px-1 py-5 text-xs text-red-500"><?= form_error('deskripsi')?></span>
                                        </div>
                                        <div class="col-span-6">
                                            <label for="service-name" class="block mb-2 font-medium text-gray-700 text-md" <?= form_error('keunggulan1') ? 'has-error' : null?> <?= form_error('keunggulan2') ? 'has-error' : null?> <?= form_error('keunggulan3') ? 'has-error' : null?>>Keunggulan Service kamu</label>
                                            <p class="block mb-3 text-sm text-gray-700">
                                                Hal apa aja yang didapakan dari service kamu?
                                            </p>
                                            <input placeholder="Keunggulan 1" type="text" name="keunggulan1" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= set_value('keunggulan1')?>">
                                            <input placeholder="Keunggulan 2" type="text" name="keunggulan2" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= set_value('keunggulan2')?>">
                                            <input placeholder="Keunggulan 3" type="text" name="keunggulan3" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= set_value('keunggulan3')?>">
                                            <span class="px-1 py-5 text-xs text-red-500"><?= form_error('keunggulan1')?> <?= form_error('keunggulan2')?> <?= form_error('keunggulan3')?></span>
                                            <div id="newServicesRow"></div>
                                            <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addServicesRow">
                                                Tambahkan Keunggulan +
                                            </button>
                                        </div>
                                        <div class="col-span-6 -mb-6" <?= form_error('estimasi') ? 'has-error' : null?>>
                                            <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Estimasi Service & Jumlah Revisi</label>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3">
                                            <select id="estimation" name="estimasi" autocomplete="estimation" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                                <option value="<?= set_value('estimasi')?>"><?= set_value('estimasi')?></option>
                                                <option value="0">Butuh Berapa hari service kamu selesai?</option>
                                                <option value="1 Hari">1 Hari</option>
                                                <option value="2 Hari">2 Hari</option>
                                                <option value="3 Hari">3 Hari</option>
                                                <option value="4 Hari">4 Hari</option>
                                                <option value="5 Hari">5 Hari</option>
                                                <option value="6 Hari">6 Hari</option>
                                                <option value="7 Hari">7 Hari</option>
                                            </select>
                                            <span class="px-1 py-5 text-xs text-red-500"><?= form_error('estimasi')?> <?= form_error('revisi')?></span>
                                        </div>
                                        <div class="col-span-6 sm:col-span-3" <?= form_error('revisi') ? 'has-error' : null?>>
                                            <select id="estimation" name="revisi" autocomplete="estimation" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" <?= form_error('revisi') ? 'has-error' : null?>>
                                                <option value="<?= set_value('revisi')?>"><?= set_value('revisi')?></option>
                                                <option value="0">Maksimal Revisi service kamu</option>
                                                <option value="1 Kali">1 Kali</option>
                                                <option value="2 Kali">2 Kali</option>
                                                <option value="3 Kali">3 Kali</option>
                                            </select>
                                        </div>
                                        <div class="col-span-6">
                                            <label for="" class="block mb-3 font-medium text-gray-700 text-md" <?= form_error('role') ? 'has-error' : null?>>Berperan Sebagai</label>
                                            <input placeholder="Berperan Sebagai?" type="text" name="role" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= set_value('role')?>">
                                            <span class="px-1 py-5 text-xs text-red-500"><?= form_error('role')?></span>
                                        </div>
                                        <div class="col-span-6">
                                            <label for="service-name" class="block mb-3 mt-5 font-medium text-gray-700 text-md"  <?= form_error('price') ? 'has-error' : null?>>Harga Service Kamu</label>
                                            <input class="ml-6" type="radio" name="primarycard" id="Passport" onclick="ShowHideMe(this)" value="Passport" /> Harga Normal
                                            <input class="ml-6" type="radio" name="primarycard" id="Other" onclick="ShowHideMe(this)" value="Other" /> Diskon %

                                            <div class="col-span-6" id="DivToShowHide" style="display: none">
                                                <div class="col-span-6" id="DivToShowHideOther" style="display: none">
                                                    <br />Diskon :
                                                    <input type="text" name="diskon" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"/>
                                                </div>
                                                <br />Harga Normal :
                                                <input type="text" name="price" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= set_value('price')?>" />
                                                <span class="px-1 py-5 text-xs text-red-500"><?= form_error('price')?></span>
                                            </div>
                                        </div>

                                                <!-- <div class="col-span-6">
                                                    <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md"  <?= form_error('price') ? 'has-error' : null?>>Harga Service Kamu</label>
                                                    <input placeholder="Total Harga Service Kamu" type="number" name="price" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= set_value('price')?>">
                                                    <span class="px-1 py-5 text-xs text-red-500"><?= form_error('price')?></span>
                                                </div> -->
                                                <div class="col-span-6">
                                                   <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Thumbnail Service Feeds</label>
                                                   <input placeholder="Keunggulan 1" type="file" name="thumbnails[]" id="service-name" autocomplete="service-name" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                                   <input placeholder="Keunggulan 2" type="file" name="thumbnails[]" id="service-name" autocomplete="service-name" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                                   <input placeholder="Keunggulan 3" type="file" name="thumbnails[]" id="service-name" autocomplete="service-name" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                                   <div id="newThumbnailRow"></div>
                                                   <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addThumbnailRow">
                                                    Tambahkan Gambar +
                                                </button>
                                            </div> 
                                            <div class="col-span-6">
                                                <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md" <?= form_error('k_kamu1') ? 'has-error' : null?> <?= form_error('k_kamu2') ? 'has-error' : null?> <?= form_error('k_kamu3') ? 'has-error' : null?>>Keunggulan kamu</label>
                                                <input placeholder="Keunggulan 1" type="text" name="k_kamu1" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= set_value('k_kamu1')?>">
                                                <input placeholder="Keunggulan 2" type="text" name="k_kamu2" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= set_value('k_kamu2')?>">
                                                <input placeholder="Keunggulan 3" type="text" name="k_kamu3" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= set_value('k_kamu3')?>">
                                                <span class="px-1 py-5 text-xs text-red-500"><?= form_error('k_kamu1')?> <?= form_error('k_kamu2')?> <?= form_error('k_kamu3')?></span>
                                                   <!-- <div id="newAdvantagesRow"></div>
                                                     <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addAdvantagesRow">
                                                        Tambahkan Keunggulan +
                                                    </button> -->
                                                </div>
                                                <div class="col-span-6">
                                                    <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md"  <?= form_error('note') ? 'has-error' : null?>>Note <span class="text-gray-400">(Optional)</span></label>
                                                    <input placeholder="Hal yang ingin disampaikan oleh kamu?" type="text" name="note" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= set_value('note')?>">
                                                    <span class="px-1 py-5 text-xs text-red-500"><?= form_error('note')?></span>
                                                </div>
                                                <!-- <div class="col-span-6">
                                                    <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md"  <?= form_error('tagline') ? 'has-error' : null?>>Tagline<span class="text-gray-400">(Optional)</span></label>
                                                    <input placeholder="Hal yang ingin disampaikan oleh kamu?" type="text" name="tagline" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?= set_value('tagline')?>">
                                                    <span class="px-1 py-5 text-xs text-red-500"><?= form_error('tagline')?></span> -->
                                                     <!-- <div id="newTaglineRow"></div>
                                                    <button type="button" class="inline-flex justify-center px-3 py-2 mt-3 text-xs font-medium text-gray-700 bg-gray-100 border border-transparent rounded-lg hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500" id="addTaglineRow">
                                                        Tambahkan Tagline +
                                                    </button> 
                                                </div>-->
                                                <div class="col-span-6">

                                                 <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md"  <?= form_error('tagline') ? 'has-error' : null?>>Tagline<span class="text-gray-400">(Optional)</span></label>
                                                 <textarea class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" name="tagline" value="<?= set_value('tagline')?>">The Matrix, Pulp Fiction, Mad Max</textarea>

                                             </div>

                                             <div class="col-span-6 -mb-6" <?= form_error('status') ? 'has-error' : null?>>
                                                <label for="service-name" class="block mb-3 font-medium text-gray-700 text-md">Status</label>
                                            </div>
                                            <div class="col-span-3">
                                                <select id="service-name" name="status" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" <?= form_error('status') ? 'has-error' : null?>>
                                                    <option value="<?= set_value('status')?>">
                                                        <?php 
                                                        $data = set_value('status');
                                                        if($data == 1){
                                                            echo'Aktif';
                                                        }else{
                                                           echo 'Non Aktif';
                                                       }
                                                       ?>
                                                   </option>
                                                   <option value="">Status</option>
                                                   <option value="1">Aktif</option>
                                                   <option value="0">Non Aktif</option>
                                               </select>
                                               <span class="px-1 py-5 text-xs text-red-500"><?= form_error('status')?></span>
                                           </div>
                                       </div>
                                   </div> 
                                   <div class="px-4 py-3 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
                                        Cancel
                                    </button>
                                    <button type="submit" name="submit" value="Submit" id="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                        Create Service
                                    </button>
                                </div>
                            </div>
                        </form>
                        <? //= form_close();?>
                    </div>
                </main>
            </div>
        </section>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript">
        // add row
        $("#addAdvantagesRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan" type="text" name="advantages[]" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newAdvantagesRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeAdvantagesRow', function() {
            $(this).closest('#inputFormAdvantagesRow').remove();
        });
    </script>
    <script type="text/javascript">
        // add row
        $("#addServicesRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan" type="text" name="services[]" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newServicesRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeServicesRow', function() {
            $(this).closest('#inputFormServicesRow').remove();
        });
    </script>
    <script type="text/javascript">
        // add row
        $("#addTaglineRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan" type="text" name="tagline[]" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newTaglineRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeTaglineRow', function() {
            $(this).closest('#inputFormTaglineRow').remove();
        });
    </script>
    <script type="text/javascript">
        // add row
        $("#addThumbnailRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan 3" type="file" name="thumbnails[]" id="service-name" autocomplete="service-name" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newThumbnailRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeThumbnailRow', function() {
            $(this).closest('#inputFormThumbnailRow').remove();
        });
    </script>
    <script type="text/javascript">
        function ShowHideMe(RadioChecked) {
            var DivToShowHide = document.getElementById("DivToShowHide");

            if(document.getElementById("Passport").checked) {
                DivToShowHideOther.style.display = "none";
                DivToShowHide.style.display = "block";
                document.getElementById("primarycardnow").innerHTML = RadioChecked.value;
            }
            else if(document.getElementById("Other").checked) {
                DivToShowHideOther.style.display = "block";
                DivToShowHide.style.display = "block2";
                DivToShowHide.style.display = "block";
                document.getElementById("primarycardnow").innerHTML = RadioChecked.value;
            }
        }
    </script>
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@yaireo/tagify/dist/tagify.css">
    <script type="text/javascript" src="https://unpkg.com/@yaireo/tagify"></script>
    <script type="text/javascript">
      var 
      input = document.querySelector('textarea[name=tagline]'),

      tagify = new Tagify(input, {
        enforeWhitelist : true,
        whitelist       : ["A# .NET", "A# (Axiom)", "A-0 System", "A+", "A++", "ABAP", "ABC", "ABC ALGOL", "ABSET", "ABSYS", "ACC", "Accent", "Ace DASL", "ACL2", "Avicsoft", "ACT-III", "Action!", "ActionScript", "Ada", "Adenine", "Agda", "Agilent VEE", "Agora", "AIMMS", "Alef", "ALF", "ALGOL 58", "ALGOL 60", "ALGOL 68", "ALGOL W", "Alice", "Alma-0", "AmbientTalk", "Amiga E", "AMOS", "AMPL", "Apex (Salesforce.com)", "APL", "AppleScript", "Arc", "ARexx", "Argus", "AspectJ", "Assembly language", "ATS", "Ateji PX", "AutoHotkey", "Autocoder", "AutoIt", "AutoLISP / Visual LISP", "Averest", "AWK", "Axum", "Active Server Pages", "ASP.NET", "B", "Babbage", "Bash", "BASIC", "bc", "BCPL", "BeanShell", "Batch (Windows/Dos)", "Bertrand", "BETA", "Bigwig", "Bistro", "BitC", "BLISS", "Blockly", "BlooP", "Blue", "Boo", "Boomerang", "Bourne shell (including bash and ksh)", "BREW", "BPEL", "B", "C--", "C++ – ISO/IEC 14882", "C# – ISO/IEC 23270", "C/AL", "Caché ObjectScript", "C Shell", "Caml", "Cayenne", "CDuce", "Cecil", "Cesil", "Céu", "Ceylon", "CFEngine", "CFML", "Cg", "Ch", "Chapel", "Charity", "Charm", "Chef", "CHILL", "CHIP-8", "chomski", "ChucK", "CICS", "Cilk", "Citrine (programming language)", "CL (IBM)", "Claire", "Clarion", "Clean", "Clipper", "CLIPS", "CLIST", "Clojure", "CLU", "CMS-2", "COBOL – ISO/IEC 1989", "CobolScript – COBOL Scripting language", "Cobra", "CODE", "CoffeeScript", "ColdFusion", "COMAL", "Combined Programming Language (CPL)", "COMIT", "Common Intermediate Language (CIL)", "Common Lisp (also known as CL)", "COMPASS", "Component Pascal", "Constraint Handling Rules (CHR)", "COMTRAN", "Converge", "Cool", "Coq", "Coral 66", "Corn", "CorVision", "COWSEL", "CPL", "CPL", "Cryptol", "csh", "Csound", "CSP", "CUDA", "Curl", "Curry", "Cybil", "Cyclone", "Cython", "M2001", "M4", "M#", "Machine code", "MAD (Michigan Algorithm Decoder)", "MAD/I", "Magik", "Magma", "make", "Maple", "MAPPER now part of BIS", "MARK-IV now VISION:BUILDER", "Mary", "MASM Microsoft Assembly x86", "MATH-MATIC", "Mathematica", "MATLAB", "Maxima (see also Macsyma)", "Max (Max Msp – Graphical Programming Environment)", "MaxScript internal language 3D Studio Max", "Maya (MEL)", "MDL", "Mercury", "Mesa", "Metafont", "Microcode", "MicroScript", "MIIS", "Milk (programming language)", "MIMIC", "Mirah", "Miranda", "MIVA Script", "ML", "Model 204", "Modelica", "Modula", "Modula-2", "Modula-3", "Mohol", "MOO", "Mortran", "Mouse", "MPD", "Mathcad", "MSIL – deprecated name for CIL", "MSL", "MUMPS", "Mystic Programming L"],
        blacklist : ["fuck", "shit"]
    });

// toggle Tagify on/off
document.querySelector('input[type=checkbox]').addEventListener('change', function(){
    document.body.classList[this.checked ? 'add' : 'remove']('disabled');
})
</script>