<?= $this->extend('website/layout/template'); ?>
<?= $this->section('content'); ?>

<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Profile
                </h1>
                <p class="text-white link-nav"><a href="<?= base_url('/'); ?>">Home </a> <span class="lnr lnr-arrow-right"></span> <a href="<?= base_url('/ksbn/profile'); ?>"> Profile</a></p>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start about info Area -->
<section class="section-gap info-area" id="about">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Profile Komite Seni Budaya Nusantara</h1>
                    <!-- <p>Who are in extremely love with eco friendly system.</p> -->
                </div>
            </div>
        </div>
        <div class="single-info row mt-40">
            <div class="col-lg-6 col-md-12 mt-120 text-center no-padding info-left">
                <div class="info-thumb">
                    <?php if (!empty($profil->fotoprofils)) : ?>
                        <img src="<?= base_url('img/profils/' . $profil->fotoprofils); ?>" class="img-fluid" alt="">
                    <?php endif ?>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 no-padding info-rigth">
                <div class="info-content">
                    <h2 class="pb-30">Profile</h2>
                    <?php if (!empty($profil->profile)) : ?>
                        <?= $profil->profile; ?>
                    <?php else : ?>
                        <h1>Data profil belum ada</h1>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-gap info-area" id="about">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">VISI DAN MISI</h1>
                    <!-- <p>Who are in extremely love with eco friendly system.</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5">
                <div class="info-content">
                    <h1 class="text-center">VISI</h1>
                    <?php if (!empty($profil->visi)) : ?>
                        <?= $profil->visi; ?>
                    <?php else : ?>
                        <h1>Visi KSBN Belum ada</h1>
                    <?php endif ?>
                </div>
            </div>
            <div class="col-sm-2">
            </div>
            <div class="col-sm-5">
                <div class="info-content">
                    <h1 class="text-center">MISI</h1>
                    <?php if (!empty($profil->misi)) : ?>
                        <?= $profil->misi; ?>

                    <?php else : ?>
                        <h1>Misi KSBN Belum ada</h1>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about info Area -->

<?= $this->endsection(); ?>