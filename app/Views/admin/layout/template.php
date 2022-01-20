<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <!-- icons -->
    <link href="<?= base_url('/img'); ?>/favicon.ico" rel="icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/dist/css/adminlte.min.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/summernote/summernote-bs4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="<?= base_url('assets'); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- new gallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/gallery-grid.css'); ?> ">
    <!-- new gallery -->
    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">


        <?= $this->include('admin/layout/navbar'); ?>
        <?= $this->include('admin/layout/sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <?= $this->renderSection('content'); ?>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.2.0-rc
            </div>
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('assets'); ?>/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets'); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url('assets'); ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets'); ?>/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('assets'); ?>/dist/js/demo.js"></script>
    <!-- Summernote -->
    <script src="<?= base_url('assets'); ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- sweetalert2 -->
    <script src="<?= base_url('assets'); ?>/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('assets'); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets'); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets'); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('assets'); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url('assets'); ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- new gallery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <!-- new gallery -->
    <script type="text/javascript">
    // swall allert
    var pesan = "<?= session()->getFlashdata('pesan') ?>";
    const swal = pesan.split(',');
    if (swal.length > 1) {
        if (swal[0] == 'Success') {
            Swal.fire({
                title: 'Success!',
                text: swal[1],
                icon: 'success'
            })
        } else {
            Swal.fire({
                title: 'Error!',
                text: swal[1],
                icon: 'error'
            })
        }
    }

    //swall hapus
    $(document).on('click', '.btn-hapus', function(e) {
        e.preventDefault();
        const href = $(this).attr('href')

        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Data Akan dihapus!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.value) {
                document.location.href = href;
            }
        });
    })


    // textarea
    $('.summernote').summernote({
        // placeholder: null,
        tabsize: 2,
        height: 120,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

    // table
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

    // image priview
    function previewImg() {
        const gambar = document.querySelector('#gambar');
        const gambarLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        gambarLabel.textContent = gambar.files[0].name;

        const filegambar = new FileReader();
        filegambar.readAsDataURL(gambar.files[0]);

        filegambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }

    function previewImg2() {
        const gambar = document.querySelector('#gambar');
        const gambarLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');

        gambarLabel.textContent = gambar.files[0].name;

        const filegambar = new FileReader();
        filegambar.readAsDataURL(gambar.files[0]);

        filegambar.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }

    // image priview
    // var gallerygambar = [];

    // function image_select() {
    //     var image = document.getElementById('image').files;
    //     for (i = 0; i < image.length; i++) {
    //         if (check_duplicate(image)) {
    //             gallerygambar.push({
    //                 "name": image[i].name,
    //                 "url": URL.createObjectURL(image[i]),
    //                 "file": image[i],
    //             })
    //         } else {
    //             alert(image[i].name + "Gambar sudah ada!");
    //         }
    //         document.getElementById('form').reset();
    //         document.getElementById('container-image').innerHTML = image_show();
    //     }
    // }

    // function image_show() {
    //     var image = "";
    //     gallerygambar.forEach((i) => {
    //         image +=
    //             '   <div class="image-container d-flex justify-align-content-center position-relative"><img src="' +
    //             i.URL + '" alt=""><span class="position-absolute" onclick="delete_image(' + image.indexOf(i) +
    //             ')"> &times;</span></div>';
    //     })
    //     return image;
    // }

    // function delete_image(e) {
    //     image.splice(e, 1);
    //     document.getElementById('container-image').innerHTML = image_show();
    // }

    // // cek duplicate
    // function check_duplicate(name) {
    //     var image = true;
    //     if (image.length > 0) {
    //         for (i = 0; i < image.length; i++) {
    //             if (image[i].name == name) {
    //                 image = false;
    //                 break;
    //             }
    //         }
    //     }
    //     return image;
    // }
    // upload multiple file
    baguetteBox.run('.tz-gallery');
    </script>
    <!-- <script src="<?= base_url('assets/style.js') ?>"></script> -->
</body>

</html>