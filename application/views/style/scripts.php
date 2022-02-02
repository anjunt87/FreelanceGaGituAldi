<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js"
    integrity="sha512-UU0D/t+4/SgJpOeBYkY+lG16MaNF8aqmermRIz8dlmQhOlBnw6iQrnt4Ijty513WB3w+q4JO75IX03lDj6qQNA=="
    crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dragscroll/0.0.8/dragscroll.min.js"
    integrity="sha512-/ncZdOhQm5pgj5KHy720Ck7XF5RzYK6rtUsLNnGcitXrKT3wUYzTrPlOSG7SdL2kDzkuLEOFvrQRyllcZkeAlg=="
    crossorigin="anonymous"></script> -->
    <script src="<?= base_url()?>assets/dist/js/ajax-jquery-3.6.0.min.js"></script>
    <script src="<?= base_url()?>assets/dist/js/lity.min.js" ></script>
    <script src="<?= base_url()?>assets/dist/js/dragscroll.min.js"></script>

    <script src="<?= base_url()?>assets/dist/js/toggleModal.js"></script>
    <script src="<?= base_url()?>assets/dist/js/init-alpine.js"></script>
    <script src="<?= base_url()?>assets/dist/js/alpine.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/fonts/fontawesome/js/all.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- <script src="<?= base_url()?>assets/dist/js/ajax-jquery-1.11.0.min,js"></script> -->

    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="<?= base_url()?>assets/dist/bootstrap-3.0.0.min.js"></script> -->
    
    <!-- <script src="<?= base_url()?>assets/dist/js/zoom.min.js"></script> -->
    <!-- <script src="<?= base_url()?>assets/dist/js/zoom.js"></script> -->
    <script src="<?= base_url()?>assets/dist/js/focus-trap.js"></script>

    <script src="<?= base_url()?>assets/dist/js/sweetalert2.all.min.js"></script>
    <script src="<?= base_url()?>assets/dist/js/sweetalert2.min.js"></script>
    <script src="<?= base_url()?>assets/dist/js/toggleModal.js"></script>

    
    <script>
        $(document).ready(function() {
            $(".modal").on('click', ':not(.relative)', function (e) {
                e.stopPropagation();
            });
            $("#loginModal").on('click', function (e) {
                toggleModal('loginModal');
            });
            $("#registerModal").on('click', function (e) {
                toggleModal('registerModal');
            });
            $("#TambahMenu").on('click', function (e) {
                toggleModal('TambahMenu');
            });
        });
    </script>

    