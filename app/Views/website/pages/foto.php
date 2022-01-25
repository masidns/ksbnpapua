<?= $this->extend('website/layout/template'); ?>
<?= $this->section('content'); ?>

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Gallery Foto
                </h1>
                <p class="text-white link-nav"><a href="<?= base_url('/'); ?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('/ksbn/foto'); ?>"> Foto</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start upcoming-exibition Area -->
<section class="upcoming-exibition-area section-gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Gallery Foto</h1>
                    <p>Komite Seni Budaya Nusantara Papua</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($order as $key => $value) : ?>
                <?php if ($value->gstatus == 1) : ?>
                    <div class="col-lg-4 col-md-6 single-exhibition">
                        <div class="thumb">
                            <img class="img-fluid" src="<?= base_url('img/sampul/' . $value->sampul); ?>" alt="">
                        </div>
                        <!-- <p class="date">10 Jan 2018</p> -->
                        <a href="<?= base_url('ksbn/fotodetail/' . $value->sluggallery); ?>">
                            <h4><?= $value->judulgallery; ?></h4>
                        </a>
                        <!-- <p>
                            Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
                        </p>
                        <div class="meta-bottom d-flex justify-content-start">
                            <p class="price">$45.00</p>
                        </div> -->
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</section>
<!-- End upcoming-exibition Area -->

<?= $this->endsection(); ?>