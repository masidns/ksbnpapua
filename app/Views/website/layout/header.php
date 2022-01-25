<header id="header" id="home">
    <div class="container header-top">
        <div class="row">
            <div class="col-6 top-head-left">
                <ul>
                    <li><a href="#">Komite Seni Budaya Nusantara Papua</a></li>
                    <!-- <li><a href="#">Buy Ticket</a></li> -->
                </ul>
            </div>
            <div class="col-6 top-head-right">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                <a href="index.html"><img src="<?= base_url('assetsweb'); ?>/img/android-icon-36x36.png" alt="" title="" /> <b>KSBN PAPUA</b></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="<?= base_url('/ksbn'); ?>">Home</a></li>
                    <li><a href="<?= base_url('/ksbn/profil'); ?>">Profil</a></li>

                    <li><a href="<?= base_url('/ksbn/news'); ?>">News</a></li>
                    <li class="menu-has-children"><a href="">Gallery</a>
                        <ul>
                            <li><a href="<?= base_url('/ksbn/foto'); ?>">Foto</a></li>
                            <li><a href="<?= base_url('/ksbn/video'); ?>">Video</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('/auth'); ?>">LOGIN</a></li>
                </ul>
            </nav><!-- #nav-menu-container -->
        </div>
    </div>
</header><!-- #header -->