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

<!-- Start quote Area -->
<section class="quote-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 quote-left">
                <h1>
                    <span>Music</span> gives soul to the universe, <br>
                    wings to the <span>mind</span>, flight <br>
                    to the <span>imagination</span>.
                </h1>
            </div>
            <div class="col-lg-6 quote-right">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End quote Area -->


<!-- berita terbaru -->
<!-- Start upcoming-event Area -->
<section class="upcoming-event-area section-gap" id="events">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Berita terbaru</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
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

                            <a href="#">
                                <h4><?= $value->judul; ?></h4>
                            </a>
                            <h6><span>21st February</span> at Central government museum</h6>
                            <p>
                                inappropriate behavior is often laughed off as “boys will be boys,” women face higher
                                conduct standards especially.
                            </p>
                            <a href="#" class="primary-btn text-uppercase">View Details</a>
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
                    <h1 class="mb-10">Video Terbaru</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="active-exibition-carusel">
                <?php foreach ($video as $key => $value) : ?>
                    <div class="single-exibition item">
                        <!-- <img src="<?= base_url('assetsweb'); ?>/img/e1.jpg" alt=""> -->
                        <iframe width="350" height="300" src="<?= $value->video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <ul class="tags">
                            <!-- <li><a href="#">Travel</a></li>
                            <li><a href="#">Life style</a></li> -->
                        </ul>
                        <a href="#">
                            <h4><?= $value->judulgallery; ?></h4>
                        </a>
                        <!-- <p>
                            Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
                        </p> -->
                        <h6 class="date">31st January, 2018</h6>
                    </div>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 single-blog">
                <div class="thumb">
                    <img class="img-fluid" src="<?= base_url('assetsweb'); ?>/img/b1.jpg" alt="">
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
                    <img class="img-fluid" src="<?= base_url('assetsweb'); ?>/img/b2.jpg" alt="">
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
                    <img class="img-fluid" src="<?= base_url('assetsweb'); ?>/img/b3.jpg" alt="">
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
                    <img class="img-fluid" src="<?= base_url('assetsweb'); ?>/img/b4.jpg" alt="">
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
</section>
<?= $this->endsection(); ?>