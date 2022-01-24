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
                        <li class="breadcrumb-item active">Create Gallery Event</li>
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
                    <form action="<?= base_url('gallery/save') ?>" method="post" enctype="multipart/form-data" id="form">
                        <?= csrf_field() ?>
                        <div class="card">

                            <div class="card-header">
                                <h3 class="card-title">Tambah Gallery Event KSBN</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col">
                                        <div class="form-group row">
                                            <div class="col-sm-11">
                                                <!-- <br><br><br> -->
                                                <label>Sampul</label>
                                                <img src="<?= base_url('/img/sampul/default.jpg'); ?> " class="img-thumbnail img-preview">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <div class="col-sm-11">
                                                <input type="file" name="sampul" id="gambar" class="custom-file-input <?= ($validation->hasError('sampul')) ? 'is-invalid' : ''; ?>" onchange="previewImg()" value="<?= old('sampul'); ?>">
                                                <label class="custom-file-label" for="sampul"></label>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('sampul'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="validationServer04">Judul</label>
                                            <input type="text" name="judulgallery" class="form-control <?= ($validation->hasError('judulgallery')) ? 'is-invalid' : ''; ?>" id="formGroupExampleInput" placeholder="Judul" value="<?= (old('judulgallery')); ?>" autofocus>
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <?= $validation->getError('judulgallery'); ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Upload gallery</label>
                                            <input type="file" class="form-control-file <?= ($validation->hasError('gallerygambar')) ? 'is-invalid' : ''; ?>" d="exampleFormControlFile1" name="gallerygambar[]" multiple>
                                            <div id="validationServer03Feedback" class="invalid-feedback">
                                                <?= $validation->getError('gallerygambar'); ?>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right">SIMPAN</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->

</div>
<script>

</script>
<?= $this->endsection() ?>