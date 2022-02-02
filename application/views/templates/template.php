<!doctype html>
    <html x-data="data()" lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php include '/../style/styles.php' ?>
    <title><?= $title;?></title>
</head>
<body class="antialiased">
    <div class="relative flex h-screen bg-serv-services-bg" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <?php include'/../templates/menu.php' ?>
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 flex items-end bg-black bg-opacity-50 z-1 sm:items-center sm:justify-center"></div>

        <?php include '/../templates/menu_mobile.php' ?>
        <div class="flex flex-col flex-1 w-full">
            <header class="z-1 p-6 md:hidden">
                <main class="h-full overflow-y-auto">
                    <div class="container flex items-center justify-between h-full mx-auto text-serv-bg dark:text-purple-300">
                        <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="toggleSideMenu" aria-label="Menu">
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                </header>
                <main class="h-full overflow-y-auto">
                    <?php echo $contents; ?>
                </main>
            </main>
        </div>
    </div>
</body>
 <?php include '/../modals/TambahMenu.php' ?>
<?php include '/../style/scripts.php' ?>
</html>