<?= $this->extend('admin/layout/template'); ?>
<?= $this->section('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>News Event KSBN</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('/newsevents'); ?>">News Event KSBN</a></li>
                        <li class="breadcrumb-item active">Create News Event</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">News Event</h3>
                        </div>
                        <form action="" method="" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        gambar
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Judul">
                                        </div>
                                        <div class="form-group">
                                            <label>Isi Berita / Pengumuman</label>
                                            <textarea name="keterangan" id="summernote" class="summernote form-control" cols="" rows="3"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Pilih kategori...</option>
                                                <option>Berita</option>
                                                <option>Pengumuman</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success float-right">SIMPAN</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<?= $this->endsection(); ?>