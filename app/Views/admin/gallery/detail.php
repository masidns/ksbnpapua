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
                            <h3 class="card-title"><?= $order->judulgallery; ?></h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                                        <i class="fa fa-plus"></i> Tambah data
                                    </button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="tz-gallery">
                                    <div class="row">
                                        <?php foreach ($gallery as $key => $value) : ?>
                                            <?php if ($order->idordergallery == $value->idordergallery) : ?>
                                                <div class="col-sm-6 col-md-4">
                                                    <div class="thumbnail">
                                                        <a class="lightbox" href="<?= base_url('img/gallery/' . $value->gallerygambar); ?>">
                                                            <img src="<?= base_url('img/gallery/' . $value->gallerygambar); ?>" alt="Park">
                                                        </a>
                                                        <div class="caption">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <!-- <a href="" class="btn btn-warning btn-block"><i class="fa fa-edit"></i></a> -->
                                                                    <button type="button" class="btn btn-warning btn-block" data-toggle="modal" data-target="#modal-default-<?= $value->id; ?>">
                                                                        <i class="fa fa-edit"></i>
                                                                    </button>
                                                                </div>
                                                                <div class="col">
                                                                    <a href="<?= base_url('gallery/deletefoto/' . $value->id); ?>" class="btn btn-danger btn-block"><i class="fa fa-trash"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    </div>
                                </div>
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

<!-- modal -->
<?php foreach ($gallery as $key => $value) : ?>
    <div class="modal fade" id="modal-default-<?= $value->id; ?>">
        <div class="modal-dialog">
            <form action="<?= base_url('/gallery/updatefoto/' . $value->id); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="gambarlama" value="<?= $value->gallerygambar; ?>">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Perbaharui gambar</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <!-- <br><br><br> -->
                                        <img src="<?= base_url('/img/gallery/' . $value->gallerygambar); ?> " class="img-thumbnail img-preview">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-sm-12">
                                        <input type="file" name="gallerygambar" id="gambar" class="custom-file-input <?= ($validation->hasError('gallerygambar')) ? 'is-invalid' : ''; ?>" onchange="previewImg()">
                                        <label class="custom-file-label" for="gallerygambar"><?= $value->gallerygambar; ?></label>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= $validation->getError('gallerygambar'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </form>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach ?>
<!-- /.modal -->

<!-- /.modal tambah-->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <form action="<?= base_url('/gallery/insertfoto/' . $value->idordergallery) ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Perbaharui gambar</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group row ">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <!-- <label for="exampleFormControlFile1">Example file input</label> -->
                                        <input type="file" name="gallerygambar[]" class="form-control-file" id="exampleFormControlFile1" multiple>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<?= $this->endsection() ?>