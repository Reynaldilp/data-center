<?php echo view('header') ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Kelola Data Proyek</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kelola Data Proyek</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-default" id="filter-card">
                <div class="card-header">Filter Data Proyek
                    <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                    </div>
                </div>

                <div class="card-body">
                <form action="<?php echo base_url(); ?>kelola-data-proyek/search" method="POST" enctype="multipart/form-data">
                <?=csrf_field()?>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Nama Proyek</label>
                    <input type="text" class="form-control" placeholder="Masukan Nama Proyek" name="nama_proyek">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Document Title</label>
                    <input type="text" class="form-control" placeholder="Masukan Document Title" name="document_title">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Kategori Document</label>
                    <select name="kategori_document" class="form-control">
                        <option value="">Pilih Kategori Document</option>
                        <option value="On-Going">On-Going</option>
                        <option value="Hold">Hold</option>
                        <option value="Finish">Finish</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Deparment</label>
                    <select name="deparment" class="form-control" >
                        <option value="">Pilih Deparment</option>
                        <option value="Building">Building</option>
                        <option value="Bim dan Riset">Bim dan Riset</option>
                        <option value="Infrastruktur">Infrastruktur</option>
                        <option value="EPCC">EPCC</option>
                        <option value="Knowledge Management">Knowledge Management</option>
                    </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Tempat Proyek</label>
                    <input type="text" class="form-control" name="industri" placeholder="Tempat Proyek">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Mulai</label>
                    <input type="date" class="form-control" name="startdate" >
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal Akhir</label>
                    <input type="date" class="form-control" name="enddate" >
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                    <a href="<?php echo base_url(); ?>kelola-data-proyek" class="btn btn-outline-secondary float-right">Reset</a>
                </div>
                </form>
                </div>
            </div>
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Kelola Data Proyek</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
                <!-- /.card-header -->
                <div class="card-body">
                <a href="<?php echo base_url(); ?>tambah-data-proyek" class="btn btn-primary mb-3">Tambah</a>
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Proyek</th>
                                <th>Document Title</th>
                                <th>Kategori Document</th>
                                <th>Departmen</th>
                                <th>Tanggal Masuk Proyek</th>
                                <th>Tempat Proyek</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1; foreach ($proyek as $item): ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $item['nama_proyek'] ?></td>
                                <td><?= $item['document_title'] ?></td>
                                <td><?= $item['kategori_document'] ?></td>
                                <td><?= $item['deparment'] ?></td>
                                <td><?= $item['created'] ?></td>
                                <td><?= $item['industri'] ?></td>
                                <td>
                                    <a href="<?= base_url('edit-kelola-data-proyek/'.$item['id']) ?>" class="btn btn-success">Edit</a>
                                    <form class="btn btn-danger" action="<?php echo base_url('kelola-data-proyek/'.$item['id']); ?>" method="post" onsubmit="return confirm('Apakah Anda yakin ingin menghapus proyek ini?')">
                                        <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                                        <button type="submit" >Hapus</button><?=csrf_field()?>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <!-- /.row -->
                    <?php if (session()->get('role') === 'PJ' || session()->get('role') === 'SU')  : ?>
                        <form class="btn btn-success" action="<?php echo base_url(); ?>kelola-data-proyek/export" method="POST">
                            <button type="submit" >Export Excel</button><?=csrf_field()?>
                        </form>
                        <a href="<?php echo base_url(); ?>kelola-data-proyek/export/pdf" target="_blank"  class="btn btn-danger">Export PDF</a>
                    <?php endif; ?>
                </div>
                <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<script>
    function openExportPDF(){
        window.open("<?php echo base_url(); ?>kelola-data-proyek/export/pdf");
    }
</script>
<?php echo view('footer') ?>