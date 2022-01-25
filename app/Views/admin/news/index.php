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
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">News Event</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-2">
                                        <a href="<?= base_url('/newsevent/create'); ?>" class="btn btn-success">Tambah
                                            data</a>
                                    </div>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead class="text-center">
                                            <tr>
                                                <th>No.</th>
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($news as $key => $value) : ?>
                                                <tr>
                                                    <td><?= $key + 1; ?></td>
                                                    <td><?= $value->judul; ?></td>
                                                    <td>
                                                        <?= ($value->kategori == 1)  ? 'Berita' : ''; ?>
                                                        <?= ($value->kategori == 2)  ? 'Pengumuman' : ''; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <a id="modal-125093" href="#modal-container-125093<?= $value->newsevents_id; ?>" role="button" class="btn btn-primary btn-sm" data-toggle="modal" title="Detail Berita"><i class="fas fa-eye"></i></a>
                                                        <a href="<?= base_url('/newsevent/update/' . $value->slug); ?>" class="btn btn-warning btn-sm" title="Perbaharui data"><i class="fas fa-edit"></i></a>
                                                        <a href="<?= base_url('/newsevent/delete/' . $value->newsevents_id); ?>" class="btn btn-danger btn-sm btn-hapus" title="Hapus data"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->

    <!-- modal -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <?php foreach ($news as $key => $value) : ?>
                    <div class="modal fade" id="modal-container-125093<?= $value->newsevents_id; ?>" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myModalLabel">
                                        <?= $value->judul; ?>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card mb-3">
                                        <img src="<?= base_url('/img/news/' . $value->gambar); ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $value->judul; ?></h5>
                                            <p class="card-text"><?= $value->keterangan; ?></p>
                                            <p class="card-text"><small class="text-muted"><?= $value->kategori == 1 ? 'Berita' : ''; ?><?= $value->kategori == 2 ? 'Pengumuman' : ''; ?></small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">

                                    <!-- <button type="button" class="btn btn-primary">
                                        Save changes
                                    </button> -->
                                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                        Close
                                    </button> -->
                                    <a href="" class="btn btn-warning">Perbaharui</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
                                </div>
                            </div>

                        </div>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <!-- modal -->

</div>
<?= $this->endsection(); ?>