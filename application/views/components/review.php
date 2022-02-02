<!doctype html>
    <html x-data="data()" lang="en">

    <head>
        <?php include '/../style/meta.php' ?>
        <!--  <?php include '../../includes/dashboard/styles.php' ?> -->
        <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/style.css">
        
        <title>Services</title>
    </head>
    <body class="antialiased">
        <div class="flex h-screen bg-serv-services-bg" :class="{ 'overflow-hidden': isSideMenuOpen }">
            <?php include '/../admin/menuAdminDekstop.php' ?>
            <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 flex items-end bg-black bg-opacity-50 z-1 sm:items-center sm:justify-center"></div>

            <?php include '/../admin/menuAdminMobile.php' ?>
            <div class="flex flex-col flex-1 w-full">

                <?php include '/../navigasi/header.php' ?>
                <main class="h-full overflow-y-auto">
                    <div class="container mx-auto">
                        <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                            <div class="col-span-8">
                                <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                                    Review
                                </h2>
                                <p class="text-sm text-gray-400">
                                </p>
                            </div>
                        </div>
                    </div>
                    <section class="container px-6 mx-auto mt-5">
                        <div class="grid gap-5 md:grid-cols-12">
                            <main class="col-span-12 p-4 md:pt-0">
                                <div class="px-6 py-2 mt-2 bg-white rounded-xl">


                                    <?php foreach ($record as $r) { ?>
                                    <div class="flex border border-serv-testimonial-border rounded-lg mb-4"><!--horizantil margin is just for display-->
                                        <div class="flex items-start px-4 py-6">
                                            <img class="w-16 h-16 rounded-full object-cover mr-4" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">
                                            <div class="w-full">
                                                <div class="flex items-center justify-between">
                                                    <h2 class="text-xl font-medium text-serv-bg my-1"><?php echo $r->buyer_id ?></h2>
                                                </div>
                                                <p class="text-md">
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" class="inline align-baseline" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.04894 0.927052C6.3483 0.0057416 7.6517 0.00574088 7.95106 0.927052L8.79611 3.52786C8.92999 3.93989 9.31394 4.21885 9.74717 4.21885H12.4818C13.4505 4.21885 13.8533 5.45846 13.0696 6.02786L10.8572 7.63525C10.5067 7.8899 10.3601 8.34127 10.494 8.75329L11.339 11.3541C11.6384 12.2754 10.5839 13.0415 9.80017 12.4721L7.58779 10.8647C7.2373 10.6101 6.7627 10.6101 6.41222 10.8647L4.19983 12.4721C3.41612 13.0415 2.36164 12.2754 2.66099 11.3541L3.50604 8.75329C3.63992 8.34127 3.49326 7.8899 3.14277 7.63525L0.930391 6.02787C0.146677 5.45846 0.549452 4.21885 1.51818 4.21885H4.25283C4.68606 4.21885 5.07001 3.93989 5.20389 3.52786L6.04894 0.927052Z" fill="#FFBF47"/>
                                                    </svg>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" class="inline align-baseline" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.04894 0.927052C6.3483 0.0057416 7.6517 0.00574088 7.95106 0.927052L8.79611 3.52786C8.92999 3.93989 9.31394 4.21885 9.74717 4.21885H12.4818C13.4505 4.21885 13.8533 5.45846 13.0696 6.02786L10.8572 7.63525C10.5067 7.8899 10.3601 8.34127 10.494 8.75329L11.339 11.3541C11.6384 12.2754 10.5839 13.0415 9.80017 12.4721L7.58779 10.8647C7.2373 10.6101 6.7627 10.6101 6.41222 10.8647L4.19983 12.4721C3.41612 13.0415 2.36164 12.2754 2.66099 11.3541L3.50604 8.75329C3.63992 8.34127 3.49326 7.8899 3.14277 7.63525L0.930391 6.02787C0.146677 5.45846 0.549452 4.21885 1.51818 4.21885H4.25283C4.68606 4.21885 5.07001 3.93989 5.20389 3.52786L6.04894 0.927052Z" fill="#FFBF47"/>
                                                    </svg>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" class="inline align-baseline" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.04894 0.927052C6.3483 0.0057416 7.6517 0.00574088 7.95106 0.927052L8.79611 3.52786C8.92999 3.93989 9.31394 4.21885 9.74717 4.21885H12.4818C13.4505 4.21885 13.8533 5.45846 13.0696 6.02786L10.8572 7.63525C10.5067 7.8899 10.3601 8.34127 10.494 8.75329L11.339 11.3541C11.6384 12.2754 10.5839 13.0415 9.80017 12.4721L7.58779 10.8647C7.2373 10.6101 6.7627 10.6101 6.41222 10.8647L4.19983 12.4721C3.41612 13.0415 2.36164 12.2754 2.66099 11.3541L3.50604 8.75329C3.63992 8.34127 3.49326 7.8899 3.14277 7.63525L0.930391 6.02787C0.146677 5.45846 0.549452 4.21885 1.51818 4.21885H4.25283C4.68606 4.21885 5.07001 3.93989 5.20389 3.52786L6.04894 0.927052Z" fill="#FFBF47"/>
                                                    </svg>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" class="inline align-baseline" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.04894 0.927052C6.3483 0.0057416 7.6517 0.00574088 7.95106 0.927052L8.79611 3.52786C8.92999 3.93989 9.31394 4.21885 9.74717 4.21885H12.4818C13.4505 4.21885 13.8533 5.45846 13.0696 6.02786L10.8572 7.63525C10.5067 7.8899 10.3601 8.34127 10.494 8.75329L11.339 11.3541C11.6384 12.2754 10.5839 13.0415 9.80017 12.4721L7.58779 10.8647C7.2373 10.6101 6.7627 10.6101 6.41222 10.8647L4.19983 12.4721C3.41612 13.0415 2.36164 12.2754 2.66099 11.3541L3.50604 8.75329C3.63992 8.34127 3.49326 7.8899 3.14277 7.63525L0.930391 6.02787C0.146677 5.45846 0.549452 4.21885 1.51818 4.21885H4.25283C4.68606 4.21885 5.07001 3.93989 5.20389 3.52786L6.04894 0.927052Z" fill="#FFBF47"/>
                                                    </svg>
                                                    <svg width="14" height="13" viewBox="0 0 14 13" fill="none" class="inline align-baseline" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.04894 0.927052C6.3483 0.0057416 7.6517 0.00574088 7.95106 0.927052L8.79611 3.52786C8.92999 3.93989 9.31394 4.21885 9.74717 4.21885H12.4818C13.4505 4.21885 13.8533 5.45846 13.0696 6.02786L10.8572 7.63525C10.5067 7.8899 10.3601 8.34127 10.494 8.75329L11.339 11.3541C11.6384 12.2754 10.5839 13.0415 9.80017 12.4721L7.58779 10.8647C7.2373 10.6101 6.7627 10.6101 6.41222 10.8647L4.19983 12.4721C3.41612 13.0415 2.36164 12.2754 2.66099 11.3541L3.50604 8.75329C3.63992 8.34127 3.49326 7.8899 3.14277 7.63525L0.930391 6.02787C0.146677 5.45846 0.549452 4.21885 1.51818 4.21885H4.25283C4.68606 4.21885 5.07001 3.93989 5.20389 3.52786L6.04894 0.927052Z" fill="#FFBF47"/>
                                                    </svg>
                                                    <span class="text-serv-yellow font-medium">5</span>
                                                </p>
                                                <p class="mt-3 text-gray-700 text-md leading-8">
                                                    He is a very competent , communicative and well-experienced, remarkable funnel builder. 
                                                    I just love my funnel and every page of it. He always does what he says he can do and
                                                    I would love to do future projects with him! 👍 
                                                </p>
                                                <div class="mt-4 flex items-center">
                                                    <div class="flex mr-2 text-serv-text text-md">
                                                        Published 9 hours ago
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                                </div>
                            </main>
                        </div>
                    </section>
                </main>
            </div>
        </div>
        <?php include '/../style/scripts.php' ?>
    </body>

    </html>