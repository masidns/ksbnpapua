<?= $this->extend('website/layout/template'); ?>
<?= $this->section('content'); ?>
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-8">
                <h6 class="text-white">Selamat Datang Di</h6>
                <h1 class="text-white">
                    KOMITE SENI BUDAYA NUSANTARA PAPUA
                </h1>
                <!-- <a href="#" class="primary-btn text-uppercase">Get Started</a> -->
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- berita terbaru -->
<!-- Start upcoming-event Area -->
<section class="upcoming-event-area section-gap" id="events">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Berita terbaru</h1>
                </div>
            </div>
        </div>
        <?php foreach ($news as $key => $value) : ?>
            <?php if ($value->newsevents_id % 2 == 0) : ?>
                <div class="row">
                    <div class="col-lg-6 event-left">
                        <div class="single-events">
                            <img class="img-fluid" src="<?= base_url('img/news/' . $value->gambar); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 event-right">
                        <div class="single-events">

                            <a href="<?= base_url('/ksbn/newsdetail/' . $value->slug); ?>">
                                <h4><?= $value->judul; ?></h4>
                            </a>
                            <?= word_limiter($value->keterangan, 100); ?>
                            <a href="<?= base_url('/ksbn/newsdetail/' . $value->slug); ?>" class="primary-btn text-uppercase">View Details</a>
                        </div>
                    </div>
                </div>
            <?php elseif ($value->newsevents_id % 2 == 1) : ?>
                <div class="row">
                    <div class="col-lg-6 event-left">
                        <div class="single-events">
                            <a href="#">
                                <h4><?= $value->judul; ?></h4>
                            </a>
                            <h6><span>21st February</span> at Central government museum</h6>
                            <p>
                                inappropriate behavior is often laughed off as “boys will be boys,” women face higher
                                conduct standards especially. 111
                            </p>
                            <a href="#" class="primary-btn text-uppercase">View Details</a>
                        </div>
                    </div>
                    <div class="col-lg-6 event-right">
                        <div class="single-events">
                            <img class="img-fluid" src="<?= base_url('img/news/' . $value->gambar); ?>" alt="">
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach ?>
    </div>
</section>
<!-- berita terbaru -->

<!-- video terbaru -->
<!-- Start exibition Area -->
<section class="exibition-area section-gap" id="exhibitions">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Gallery Terbaru</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-exibition-carusel">
                <?php foreach ($order as $key => $value) : ?>
                    <?php if ($value->gstatus == 1) : ?>
                        <div class="single-exibition item">
                            <img src="<?= base_url('img/sampul/' . $value->sampul); ?>" alt="">
                            <ul class="tags">
                                <li><a href="<?= base_url('/ksbn/foto'); ?>">Gallery Foto</a></li>
                            </ul>
                            <a href="<?= base_url('/ksbn/fotodetail/' . $value->sluggallery); ?>">
                                <h4><?= $value->judulgallery; ?></h4>
                            </a>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<!-- End exibition Area -->


<!-- gallery terbaru -->
<section class="blog-area section-gap" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Gallery Foto</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <?php foreach ($video as $key => $value) : ?>
                <div class="col-lg-3 col-md-6 single-blog">
                    <div class="thumb">
                        <div class="video-container">
                            <iframe width="560" height="315" src="<?= $value->video; ?>" frameborder="0" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <!-- <p class="date">10 Jan 2018</p> -->
                    <a href="<?= base_url('/ksbn/video/'); ?>" class="">
                        <h4 class="mt-2"><?= $value->judulgallery; ?></h4>
                    </a>

                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<?= $this->endsection(); ?>