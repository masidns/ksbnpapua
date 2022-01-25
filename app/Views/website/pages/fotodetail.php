<?= $this->extend('website/layout/template'); ?>
<?= $this->section('content'); ?>

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    <?= $order->judulgallery; ?>
                </h1>
                <p class="text-white link-nav"><a href="<?= base_url('/'); ?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('/ksbn/foto'); ?>"> Foto</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start cat-top Area -->
<section class="cat-top-area section-gap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 cat-top-left">
                <h1>
                    <?= $order->judulgallery; ?>
                </h1>

            </div>
            <div class="col-lg-6 cat-top-right">
                <img class="img-fluid" src="<?= base_url('img/sampul/' . $order->sampul); ?>" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End cat-top Area -->

<!-- Start recent-worl Area -->
<section class="recent-work-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Gallery Foto</h1>
                    <p><?= $order->judulgallery; ?></p>
                </div>
            </div>
        </div>

        <div class="tz-gallery">

            <div class="row">
                <?php foreach ($foto as $key => $value) : ?>
                    <?php if ($value->idordergallery == $order->idordergallery) : ?>
                        <div class="col-sm-6 col-md-4">
                            <a class="lightbox" href="<?= base_url('img/gallery/' . $value->gallerygambar); ?>">
                                <img src="<?= base_url('img/gallery/' . $value->gallerygambar); ?>" alt="Park">
                            </a>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>

        </div>
    </div>
</section>
<!-- End recent-worl Area -->

<?= $this->endsection(); ?>