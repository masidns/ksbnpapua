<?= $this->extend('admin/layout/template') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Gallery Video KSBN</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/videogallery'); ?>">Gallery Video KSBN</a></li>
                        <!-- <li class="breadcrumb-item active">Fixed Layout</li> -->
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
                            <h3 class="card-title">Gallery KSBN</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <a id="modal-494244" href="#modal-container-494244" role="button" class="btn btn-success" data-toggle="modal">Tambah
                                            data</a>
                                    </div>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No.</th>
                                                <th>Judul</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $key = 1 ?>
                                            <?php foreach ($video as $key => $value) : ?>
                                                <?php $nomor = $value->gstatus ?>
                                                <?php if ($nomor == 2) : ?>
                                                    <tr>
                                                        <td><?= $key + 1 ?></td>
                                                        <td><?= $value->judulgallery ?></td>
                                                        <td align="center">
                                                            <button type="button" class="btn btn-primary btn-sm fa fa-eye" data-toggle="modal" data-target="#modal-lg-<?= $value->idordergallery; ?>">
                                                            </button>
                                                            <button type="button" class="btn btn-warning btn-sm fa fa-edit" data-toggle="modal" data-target="#modal-default-edit-<?= $value->idordergallery; ?>">
                                                            </button>
                                                            <a href="<?= base_url('/videogallery/delete/' . $value->idordergallery); ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endif ?>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
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

    <!-- modal -->
    <div class="modal fade" id="modal-container-494244" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">
                        Tambah Gallery Video
                    </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('/videogallery/save'); ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="validationServer04">Judul</label>
                            <input type="text" name="judulgallery" class="form-control <?= ($validation->hasError('judulgallery')) ? 'is-invalid' : ''; ?>" id="formGroupExampleInput" placeholder="Judul" value="<?= (old('judulgallery')); ?>" autofocus>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('judulgallery'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="validationServer04">Video link Youtube</label>
                            <input type="text" name="video" class="form-control <?= ($validation->hasError('video')) ? 'is-invalid' : ''; ?>" id="formGroupExampleInput" placeholder="Masukan Link Youtube" value="<?= (old('video')); ?>" autofocus>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('video'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-primary">
                            Save changes
                        </button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <!-- modal -->

    <!-- modal views -->
    <?php foreach ($order as $key => $value) : ?>
        <div class="modal fade" id="modal-lg-<?= $value->idordergallery; ?>">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"><?= $value->judulgallery; ?></h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php foreach ($video as $key => $vvalue) : ?>
                            <?php if ($value->idordergallery == $vvalue->idordergallery) : ?>
                                <div class="video-container">
                                    <iframe width="560" height="315" src="<?= $vvalue->video; ?>" frameborder="0" allowfullscreen></iframe>
                                </div>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>
                    <!-- <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> -->
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    <?php endforeach ?>

    <?php foreach ($order as $key => $value) : ?>
        <div class="modal fade" id="modal-default-edit-<?= $value->idordergallery; ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Perbaharui data</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?= base_url('/videogallery/update/' . $value->idordergallery); ?>" method="post">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="sluggallery" value="<?= $value->sluggallery; ?>">
                        <div class="modal-body">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="validationServer04">Judul</label>
                                    <input type="text" name="judulgallery" class="form-control <?= ($validation->hasError('judulgallery')) ? 'is-invalid' : ''; ?>" id="formGroupExampleInput" placeholder="Judul" value="<?= (old('judulgallery')) ? old('judulgallery') : $value->judulgallery; ?>" autofocus>
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('judulgallery'); ?>
                                    </div>
                                </div>
                                <?php foreach ($video as $key => $vvalue) : ?>
                                    <?php if ($value->idordergallery == $vvalue->idordergallery) : ?>
                                        <input type="hidden" name="videolama" value="<?= $vvalue->video; ?>">
                                        <div class="form-group">
                                            <label for="validationServer04">Video link Youtube</label>
                                            <input type="text" name="video" class="form-control <?= ($validation->hasError('video')) ? 'is-invalid' : ''; ?>" id="formGroupExampleInput" placeholder="Masukan Link Youtube" value="<?= (old('video')) ? old('video') : $vvalue->video; ?>" autofocus>
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <?= $validation->getError('video'); ?>
                                            </div>
                                        </div>
                                    <?php endif ?>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    <?php endforeach ?>
    <!-- /.modal -->
    <!-- modal -->


</div>
<?= $this->endsection() ?>