<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>PROFIL KSBN</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/profil'); ?>">Profil KSBN</a></li>
                        <li class="breadcrumb-item active">Tambah data profil</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <form action="<?= base_url('/profil/save'); ?>" method="post">
                <?= csrf_field(); ?>
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Profil KSBN</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <!-- <label for="exampleFormControlTextarea1">Profil</label> -->
                                            <textarea id="summernote" class="form-control <?= ($validation->hasError('profil')) ? 'is-invalid' : '' ?>" name="profil" rows="3"><?= old('profil'); ?></textarea>
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <?= $validation->getError('profil'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Visi KSBN</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <!-- <label for="exampleFormControlTextarea1">Profil</label> -->
                                            <textarea id="summernote" class=" form-control <?= ($validation->hasError('visi')) ? 'is-invalid' : ''; ?>" name="visi" rows="3"><?= old('visi'); ?><?= old('visi'); ?></textarea>
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <?= $validation->getError('visi'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-6">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Misi KSBN</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <!-- <label for="exampleFormControlTextarea1">Profil</label> -->
                                            <textarea id="summernote" class=" form-control <?= ($validation->hasError('misi')) ? 'is-invalid' : ''; ?>" name="misi" rows="3"><?= old('misi'); ?></textarea>
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <?= $validation->getError('misi'); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card-footer">
                            <div class="row">
                                <div class="col">
                                    <button type="submit" class="btn btn-success float-right">SIMPAN</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </section>
    <!-- /.content -->
</div>
<?= $this->endsection(); ?>