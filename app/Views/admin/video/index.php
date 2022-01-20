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
                            <h3 class="card-title">Gallery Video KSBN</h3>
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
                                                <th>Judul</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($order as $key => $value) : ?>
                                                <?php if ($value->gstatus == 2) : ?>
                                                    <tr>
                                                        <td><?= $key + 1; ?></td>
                                                        <td><?= $value->judulgallery; ?></td>
                                                        <td>
                                                            <a href=""></a>
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
<?= $this->endsection() ?>