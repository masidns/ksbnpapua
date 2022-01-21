<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Komite Seni Budaya Nusantara Papua</title>

    <link href="<?= base_url('/img'); ?>/favicon.ico" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
		CSS
		============================================= -->
    <link rel="stylesheet" href="<?= base_url('assetsweb'); ?>/css/linearicons.css">
    <link rel="stylesheet" href="<?= base_url('assetsweb'); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assetsweb'); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url('assetsweb'); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url('assetsweb'); ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url('assetsweb'); ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('assetsweb'); ?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url('assetsweb'); ?>/css/main.css">
</head>

<body>
    <?= $this->include('website/layout/header'); ?>
    <?= $this->renderSection('content');; ?>
    <!-- End upcoming-event Area -->

    <!-- Start blog Area -->
    <!-- <section class="blog-area section-gap" id="blog">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Latest From Our Blog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b1.jpg" alt="">
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <a href="#">
                        <h4>Addiction When Gambling
                            Becomes A Problem</h4>
                    </a>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b2.jpg" alt="">
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <a href="#">
                        <h4>Addiction When Gambling
                            Becomes A Problem</h4>
                    </a>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b3.jpg" alt="">
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <a href="#">
                        <h4>Addiction When Gambling
                            Becomes A Problem</h4>
                    </a>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <img class="img-fluid" src="img/b4.jpg" alt="">
                    </div>
                    <p class="date">10 Jan 2018</p>
                    <a href="#">
                        <h4>Addiction When Gambling
                            Becomes A Problem</h4>
                    </a>
                    <p>
                        inappropriate behavior ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="meta-bottom d-flex justify-content-between">
                        <p><span class="lnr lnr-heart"></span> 15 Likes</p>
                        <p><span class="lnr lnr-bubble"></span> 02 Comments</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End blog Area -->

    <!-- Start gallery Area -->
    <!-- <section class="gallery-area section-gap" id="gallery">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10 text-white">Our Exhibition Gallery</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div id="grid-container" class="row">
                <a class="single-gallery" href="img/g1.jpg"><img class="grid-item" src="img/g1.jpg"></a>
                <a class="single-gallery" href="img/g2.jpg"><img class="grid-item" src="img/g2.jpg"></a>
                <a class="single-gallery" href="img/g3.jpg"><img class="grid-item" src="img/g3.jpg"></a>
                <a class="single-gallery" href="img/g4.jpg"><img class="grid-item" src="img/g4.jpg"></a>
                <a class="single-gallery" href="img/g5.jpg"><img class="grid-item" src="img/g5.jpg"></a>
                <a class="single-gallery" href="img/g6.jpg"><img class="grid-item" src="img/g6.jpg"></a>
                <a class="single-gallery" href="img/g7.jpg"><img class="grid-item" src="img/g7.jpg"></a>
                <a class="single-gallery" href="img/g8.jpg"><img class="grid-item" src="img/g8.jpg"></a>
                <a class="single-gallery" href="img/g9.jpg"><img class="grid-item" src="img/g9.jpg"></a>
                <a class="single-gallery" href="img/g10.jpg"><img class="grid-item" src="img/g10.jpg"></a>
                <a class="single-gallery" href="img/g11.jpg"><img class="grid-item" src="img/g11.jpg"></a>
                <a class="single-gallery" href="img/g12.jpg"><img class="grid-item" src="img/g12.jpg"></a>
                <a class="single-gallery" href="img/g4.jpg"><img class="grid-item" src="img/g4.jpg"></a>
                <a class="single-gallery" href="img/g5.jpg"><img class="grid-item" src="img/g5.jpg"></a>
            </div>
        </div>
    </section> -->
    <!-- End gallery Area -->


    <?= $this->include('website/layout/footer'); ?>

    <script src="<?= base_url('assetsweb'); ?>/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="<?= base_url('assetsweb'); ?>/js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="<?= base_url('assetsweb'); ?>/js/easing.min.js"></script>
    <script src="<?= base_url('assetsweb'); ?>/js/hoverIntent.js"></script>
    <script src="<?= base_url('assetsweb'); ?>/js/superfish.min.js"></script>
    <script src="<?= base_url('assetsweb'); ?>/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url('assetsweb'); ?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url('assetsweb'); ?>/js/owl.carousel.min.js"></script>
    <script src="<?= base_url('assetsweb'); ?>/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url('assetsweb'); ?>/js/justified.min.js"></script>
    <script src="<?= base_url('assetsweb'); ?>/js/jquery.sticky.js"></script>
    <script src="<?= base_url('assetsweb'); ?>/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url('assetsweb'); ?>/js/parallax.min.js"></script>
    <script src="<?= base_url('assetsweb'); ?>/js/mail-script.js"></script>
    <script src="<?= base_url('assetsweb'); ?>/js/main.js"></script>
</body>

</html>