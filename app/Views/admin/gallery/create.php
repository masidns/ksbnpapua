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
                    <form method="post" enctype="multipart/form-data" id="form">
                        <?= csrf_field() ?>
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tambah Gallery Event KSBN</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">

                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">Upload Gambar</label>
                                            <div class="custom-file">
                                                <input type="file" name="gallerygambar[]" id="image" class="custom-file-input <?= ($validation->hasError('gallerygambar')) ? 'is-invalid' : ''; ?>" onchange="image_select()" multiple>
                                                <label class="custom-file-label" for="">Pilih
                                                    gambar...</label>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('gallerygambar'); ?>
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
                                            <!-- <select name="newsevents_id" class="custom-select <?= ($validation->hasError('newsevents_id')) ? 'is-invalid' : '' ?>" id="validationServer04" aria-describedby="validationServer04Feedback">
                                                <option selected disabled value="">Pilih Judul...</option>
                                                <?php foreach ($news as $key => $value) : ?>
                                                    <option value="<?= $value->newsevents_id ?>" <?= $value->newsevents_id == old('newsevents_id') ? 'selected' : '' ?>>
                                                        <?= $value->judul ?>
                                                    </option>
                                                <?php endforeach ?>
                                            </select>
                                            <div id="validationServer04Feedback" class="invalid-feedback">
                                                <?= $validation->getError('newsevents_id') ?>
                                            </div> -->
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-11">
                                                <!-- <br><br><br> -->
                                                <label>Sampul</label>
                                                <img src="<?= base_url('/img/news/default.jpg'); ?> " class="img-thumbnail img-preview">
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <div class="col-sm-11">
                                                <input type="file" name="gambar" id="gambar" class="custom-file-input <?= ($validation->hasError('gambar')) ? 'is-invalid' : ''; ?>" onchange="previewImg2()">
                                                <label class="custom-file-label" for="gambar"></label>
                                                <div id="validationServer03Feedback" class="invalid-feedback">
                                                    <?= $validation->getError('gambar'); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- coba -->
                                <!-- <div class="row">
                                    <div class="col">
                                        <input type="file" class="form-control d-none" name="gallery" id="image2"
                                            multiple>
                                        <button type="button" class="btn btn-outline-primary"
                                            onclick="document.getElementsById('image2')">pilih
                                            gambar</button>
                                    </div>
                                </div> -->
                                <!-- coba -->
                                <div class="row" id="containerImage">

                                </div>
                                <!-- <div class="image-container d-flex justify-align-content-center position-relative">
                                    <img src="/img/news/default.jpg" alt="">
                                    <span class="position-absolute"> &times;</span>
                                </div> -->
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