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
                        <li class="breadcrumb-item"><a href="<?= base_url('/gallery'); ?>">Gallery Video KSBN</a></li>
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
                                            <?php foreach ($order as $key => $value) : ?>
                                                <?php if ($value->gstatus == 2) : ?>
                                                    <tr>
                                                        <td><?= $key++ ?></td>
                                                        <td><?= $value->judulgallery ?></td>
                                                        <td>
                                                            <a href="<?= base_url('/gallery/detail/' . $value->sluggallery); ?>" class="btn btn-primary"><i class="fas fa-eye"></i></a>
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
                <div class="modal-body">
                    <form>
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
                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-primary">
                        Save changes
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>

        </div>

    </div>
    <!-- modal -->

</div>
<?= $this->endsection() ?>