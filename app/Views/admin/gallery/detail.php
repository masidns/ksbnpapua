<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gallery Event KSBN</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/gallery'); ?>">Gallery Event KSBN</a></li>
                        <li class="breadcrumb-item active">Detail Gallery</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?= $order->judul; ?></h3>
                        </div>
                        <div class="card-body">
                            <div class="tz-gallery">
                                <div class="row">
                                    <?php foreach ($gallery as $key => $value) : ?>
                                        <?php if ($order->idordergallery == $value->idordergallery) : ?>

                                            <div class="col-sm-6 col-md-4">
                                                <a class="lightbox" href="<?= base_url('img/gallery/' . $value->gallerygambar); ?>">
                                                    <img src="<?= base_url('img/gallery/' . $value->gallerygambar); ?>" alt="Park">
                                                </a>
                                            </div>

                                        <?php endif ?>
                                    <?php endforeach ?>
                                </div>
                            </div>
                            <div class="row">
                                <?php foreach ($gallery as $key => $value) : ?>
                                    <?php if ($order->idordergallery == $value->idordergallery) : ?>

                                        <div class="col-sm-6 col-md-4">
                                            <a class="lightbox" href="<?= base_url('img/gallery/' . $value->gallerygambar); ?>">
                                                <img src="<?= base_url('img/gallery/' . $value->gallerygambar); ?>" alt="Park">
                                            </a>
                                        </div>

                                    <?php endif ?>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="card-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->

</div>
<?= $this->endsection() ?>