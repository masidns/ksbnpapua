<?= $this->extend('website/layout/template'); ?>
<?= $this->section('content'); ?>


<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    News
                </h1>
                <p class="text-white link-nav"><a href="<?= base_url('/'); ?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('/ksbn/news'); ?>"> News</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<section class="blog-posts-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 post-list blog-post-list">
                <div class="single-post">
                    <img class="img-fluid" src="<?= base_url('img/news/' . $news->gambar); ?>" alt="">
                    <ul class="tags">
                        <li><a href="#"><?= $news->kategori == 1 ? 'Berita' : ($news->kategori == 2 ? 'Pengumuman' : ''); ?></a></li>
                    </ul>
                    <a href="blog-single.html">
                        <h1>
                            <?= $news->judul; ?>
                        </h1>
                    </a>
                    <p>
                        <?= $news->keterangan; ?>
                    </p>
                    <div class="bottom-meta">
                        <div class="user-details row align-items-center">
                            <div class="comment-wrap col-lg-6">
                                <!-- <ul>
                                        <li><a href="#"><span class="lnr lnr-heart"></span> 4 likes</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
                                    </ul> -->
                            </div>
                            <div class="social-wrap col-lg-6">
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 sidebar">
                <div class="single-widget search-widget">
                    <form class="example" action="#" style="margin:auto;max-width:300px">
                        <input type="text" placeholder="Search Posts" name="search2">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>

                <div class="single-widget category-widget">
                    <h4 class="title">Kategori</h4>
                    <ul>
                        <li>
                            <a href="<?= base_url('/berita'); ?>" class="justify-content-between align-items-center d-flex">
                                <h6>Berita</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('/pengumuman'); ?>" class="justify-content-between align-items-center d-flex">
                                <h6>Pengumuman</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="single-widget recent-posts-widget">
                    <h4 class="title">Recent Posts</h4>
                    <?php foreach ($tags as $key => $value) : ?>
                        <div class="blog-list mt-2">
                            <div class="single-recent-post d-flex flex-row">
                                <div class="recent-thumb">
                                    <img class="img-fluid" src="<?= base_url('img/news/' . $value->gambar); ?>" alt="">
                                </div>
                                <div class="recent-details">
                                    <a href="<?= base_url('/ksbn/newsdetail/' . $value->slug); ?>">
                                        <h4>
                                            <?= $value->judul; ?>
                                        </h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End blog-posts Area -->
<!-- End about info Area -->

<?= $this->endsection(); ?>