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
                                        <a href="<?= base_url('/gallery/create'); ?>" class="btn btn-success">Tambah
                                            data</a>
                                    </div>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No.</th>
                                                <th>sampul</th>
                                                <th>Judul</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1 ?>
                                            <?php foreach ($order as $key => $value) : ?>
                                                <?php if ($value->gstatus == 1) : ?>
                                                    <tr>
                                                        <td><?= $i++  ?></td>
                                                        <td class="text-center">
                                                            <img src="<?= base_url('img/sampul/' . $value->sampul)   ?>" class="getgambar" alt="">
                                                        </td>
                                                        <td><?= $value->judulgallery ?></td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url('/gallery/detail/' . $value->sluggallery); ?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-default-<?= $value->idordergallery; ?>">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <a href="<?= base_url('/gallery/delete/' . $value->idordergallery); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
</div>

<?php foreach ($order as $key => $value) : ?>
    <div class="modal fade" id="modal-default-<?= $value->idordergallery; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="<?= base_url('/gallery/gantijudul/' . $value->idordergallery); ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="sluggallery" value="<?= $value->sluggallery; ?>" id="">
                    <input type="hidden" name="sampullama" value="<?= $value->sampul; ?>" id="">
                    <div class="modal-header">
                        <h4 class="modal-title">Ganti Judul</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <diiv class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="validationServer04">Judul</label>
                                    <input type="text" name="judulgallery" class="form-control <?= ($validation->hasError('judulgallery')) ? 'is-invalid' : ''; ?>" id="formGroupExampleInput" placeholder="Judul" value="<?= (old('judulgallery')) ? old('judulgallery') : $value->judulgallery; ?>">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('judulgallery'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <!-- <br><br><br> -->
                                        <label>Sampul</label>
                                        <img src="<?= base_url('/img/sampul/' . $value->sampul); ?> " class="img-thumbnail img-preview">
                                    </div>
                                </div>
                                <div class="form-group row ">
                                    <div class="col-sm-12">
                                        <input type="file" name="sampul" id="gambar" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" onchange="previewImg()" value="<?= old('sampul'); ?>">
                                        <label class="custom-file-label" for="sampul"><?= $value->sampul; ?></label>
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= $validation->getError('sampul'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </diiv>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<?php endforeach ?>
<!-- /.modal -->
<?= $this->endsection() ?>