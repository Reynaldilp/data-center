<?php echo view('header') ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="card">
<div class="card-header">Tambah Register Proyek</div>
<div class="card-body">
  <form action="<?php echo base_url(); ?>post-register-proyek" method="POST" enctype="multipart/form-data">
  <?=csrf_field()?>
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Proyek</label>
      <input type="text" class="form-control" placeholder="Masukan Nama Proyek" name="nama_proyek" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Document Title</label>
      <input type="text" class="form-control" placeholder="Masukan Document Title" name="document_title" required>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Kategori Document</label>
      <select name="kategori_document" class="form-control" required>
        <option value="">Pilih Kategori Document</option>
        <option value="On-Going">On-Going</option>
        <option value="Hold">Hold</option>
        <option value="Finish">Finish</option>
      </select>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Dokumen 1 (format : .xls, .xlsx, .pdf, .docx, .doc, .jpg, .png, .mp4, .mkv)</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="document1" required>
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
        </div>
        <b>*Diwajibkan</b>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Keterangan Dokumen 1</label>
        <input type="text" class="form-control" name="keterangan1">
        <b>*Diwajibkan</b>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Dokumen 2 (format : .xls, .xlsx, .pdf, .docx, .doc, .jpg, .png, .mp4, .mkv)</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="document2">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
        </div>
        <b>*Opsional</b>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Keterangan Dokumen 2</label>
        <input type="text" class="form-control" name="keterangan2">
        <b>*Opsional</b>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Dokumen 3 (format : .xls, .xlsx, .pdf, .docx, .doc, .jpg, .png, .mp4, .mkv)</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name="document3">
            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
          </div>
        </div>
        <b>*Opsional</b>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Keterangan Dokumen 3</label>
        <input type="text" class="form-control" name="keterangan3">
        <b>*Opsional</b>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Deparment</label>
      <select name="deparment" class="form-control" required>
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
      <input type="text" class="form-control" placeholder="Masukan Tempat Proyek" name="industri" required>
    </div>
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-outline-primary">Simpan</button>
    <a href="<?php echo base_url(); ?>register-proyek" class="btn btn-outline-secondary float-right">Kembali</a>
  </div>
</form>
</div>
</div>

</section>

</div>
<?php echo view('footer') ?>