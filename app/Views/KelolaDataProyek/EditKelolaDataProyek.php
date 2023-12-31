<?php echo view('header') ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="card">
<div class="card-header">Edit Proyek</div>
<div class="card-body">
  <form action="<?php echo base_url('edit-kelola-data-proyek/'.$proyek['id']); ?>" method="POST">
  <?=csrf_field()?>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Proyek</label>
      <input type="text" class="form-control" placeholder="Masukan Nama Proyek" name="nama_proyek" value="<?php echo $proyek['nama_proyek']; ?>" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Document Title</label>
      <input type="text" class="form-control" placeholder="Masukan Document Title" name="document_title" value="<?php echo $proyek['document_title']; ?>" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Kategori Document</label>
      <select name="kategori_document" class="form-control" required>
        <option value="">Pilih Kategori Document</option>
        <option value="On-Going" <?php if($proyek['kategori_document'] == "On-Going") echo "selected"; ?>>On-Going</option>
        <option value="Hold" <?php if($proyek['kategori_document'] == "Hold") echo "selected"; ?>>Hold</option>
        <option value="Finish" <?php if($proyek['kategori_document'] == "Finish") echo "selected"; ?>>Finish</option>
      </select>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Dokumen (format : .xls, .pdf, .docx, dan .doc)</label>
        <div class="input-group">
          <div class="custom-file">
            <a href="<?php echo base_url('edit-dokumen/'.$proyek['id']); ?>" class="btn btn-success">Lihat Dokumen</a>
          </div>
        </div>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Department</label>
      <select name="deparment" class="form-control" required>
        <option value="">Pilih Deparment</option>
        <option value="Building" <?php if($proyek['deparment'] == "Building") echo "selected"; ?>>Building</option>
        <option value="Bim dan Riset" <?php if($proyek['deparment'] == "Bim dan Riset") echo "selected"; ?>>Bim dan Riset</option>
        <option value="Infrastruktur" <?php if($proyek['deparment'] == "Infrastruktur") echo "selected"; ?>>Infrastruktur</option>
        <option value="EPCC" <?php if($proyek['deparment'] == "EPCC") echo "selected"; ?>>EPCC</option>
        <option value="Knowledge Management" <?php if($proyek['deparment'] == "Knowledge Management") echo "selected"; ?>>Knowledge Management</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Tempat Proyek</label>
      <input type="text" class="form-control" placeholder="Masukan Tempat Proyek" name="industri" value="<?php echo $proyek['industri']; ?>" required>
    </div>
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-outline-success">Edit</button>
    <a href="<?php echo base_url(); ?>kelola-data-proyek" class="btn btn-outline-secondary float-right">Kembali</a>
  </div>
</form>
</div>
</div>

</section>

</div>
<?php echo view('footer') ?>