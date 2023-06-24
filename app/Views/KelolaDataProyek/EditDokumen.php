<?php echo view('header') ?>

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="card">
<div class="card-header">Edit Dokumen</div>
<div class="card-body">
    <table class="table">
        <tr>
            <th>Dokumen 1</th>
            <td>
                <?php if (substr($fileProyek[0]->nama_file, -3) == 'pdf') : ?>
                    <a class="btn btn-success" onclick="openTab1()" href="#">Lihat</a>
                <?php elseif (substr($fileProyek[0]->nama_file, -3) == 'xls' || substr($fileProyek[0]->nama_file, -4) == 'xlsx'): ?>
                    <a class="btn btn-secondary" href="#">Download</a>
                <?php else: ?>
                    <p>Format file tidak didukung atau file tidak ada</p>
                <?php endif; ?>
            </td>
            <td>
                <label>Ganti File</label>
                <form action="<?php echo base_url('edit-dokumen1/'.$fileProyek[0]->id); ?>" method="post" enctype="multipart/form-data">
                <?=csrf_field()?>
                    <input id="files" type="file" name="document1">
                    <button type="submit" class="btn btn-primary">Ganti</button>
                </form>
            </td>
        </tr>
        <tr>
            <th>Dokumen 2</th>
            <td>
                <?php if (substr($fileProyek[1]->nama_file, -3) == 'pdf') : ?>
                    <a class="btn btn-success" onclick="openTab2()">Lihat</a>
                <?php elseif (substr($fileProyek[1]->nama_file, -3) == 'xls' || substr($fileProyek[1]->nama_file, -4) == 'xlsx'): ?>
                    <a class="btn btn-secondary" href="<?php echo base_url('Uploads/'.$fileProyek[1]->nama_file); ?>">Download</a>
                <?php else: ?>
                    <p>Format file tidak didukung atau file tidak ada</p>
                <?php endif; ?>
            </td>
            <td>
                <label>Ganti File</label>
                <input id="files" type="file">
                <button class="btn btn-primary">Ganti</button>
            </td>
        </tr>
        <tr>
            <th>Dokumen 3</th>
            <td>
                <?php if (substr($fileProyek[2]->nama_file, -3) == 'pdf') : ?>
                    <a href="<?php echo base_url('Uploads/'.$fileProyek[2]->nama_file); ?>">File</a>
                <?php elseif (substr($fileProyek[2]->nama_file, -3) == 'xls' || substr($fileProyek[2]->nama_file, -4) == 'xlsx'): ?>
                    <a class="btn btn-secondary" href="<?php echo base_url('Uploads/'.$fileProyek[2]->nama_file); ?>">Download</a>
                <?php else: ?>
                    <p>Format file tidak didukung atau file tidak ada</p>
                <?php endif; ?>
            </td>
            <td>
                <label>Ganti File</label>
                <input id="files" type="file">
                <button class="btn btn-primary">Ganti</button>
            </td>
        </tr>
    </table>
</div>
<div class="card-footer">
    <a href="<?php echo base_url('edit-kelola-data-proyek/'.$fileProyek[0]->proyek_id); ?>" class="btn btn-outline-secondary float-right">Kembali</a>
</div>
</div>
</section>

</div>
<script>
        function openTab1() {
            window.open('<?php echo base_url('Uploads/'.$fileProyek[0]->nama_file); ?>', '_blank');
        }
        function openTab2() {
            window.open('<?php echo base_url('Uploads/'.$fileProyek[1]->nama_file); ?>', '_blank');
        }
</script>
<?php echo view('footer') ?>