<div class="page-wrapper">
	<div class="page-content">
<div class="container">

  <h3 style="margin-top: 50px; margin-bottom: 20px" align='center'>Edit Data Siswa</h3>

  <?php foreach ($tampil as $row) { ?>

  <div class="mb-2">
      <a type="button" class="btn btn-secondary btn-sm" href="<?= site_url('C_admin/siswa_bismen') ?>" ><i class='bx bx-arrow-back me-0'></i></a>
      <a href="<?= site_url('C_admin/siswa_hapus_bismen/'.$row->id_siswa); ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data <?= $row->nama_siswa ?> ?')"><i class='bx bx-trash me-0'></i></a>
			<a href="<?= site_url('C_admin/siswa_edit_bismen/'.$row->id_siswa); ?>" type="button" class="btn btn-primary btn-sm"><i class='bx bx-pencil me-0'></i></a>
      <a href="<?= site_url('C_admin/siswa_detail_bismen/'.$row->id_siswa); ?>" type="button" class="btn btn-info btn-sm" title="detail"><i class='bx bx-file me-0'></i></a>

      <?php if ($row->status_kelulusan == "LULUS") { ?>
        <a type="button" class="btn btn-success btn-sm" href="<?= site_url('C_admin/siswa_print_bismen/'.$row->id_siswa); ?>" ><i class='bx bx-printer me-0'></i></a>
      <?php }else { ?>
        <p>Mohon untuk menghubungi Ketua Prodi, untuk info lebih lanjut tentang kelulusan</p>
      <?php } ?>
      
  </div>


  <?= form_open('C_admin/siswa_pass_up_bismen'); ?>

  <table class="table table-bordered">
    <tr>
      <td>Nama Peserta Didik</td>
      <td >
        <input type="hidden" name="id_siswa" value="<?= $row->id_siswa ?>">
        <input class="form-control" type="text" name="nama_siswa" value="<?= $row->nama_siswa ?>" disabled>
      </td>
    </tr>
    <tr>
      <td>Nomor Induk Siswa Nasional</td>
      <td>
        <input class="form-control" type="text" name="nisn_siswa" value="<?= $row->nisn_siswa ?>" disabled>
      </td>
    </tr>
    <tr>
      <td>Kelas</td>
      <td>
        <input class="form-control" type="text" name="kelas" value="<?= $row->nama_kelas ?>" disabled>
      </td>
    </tr>
    <tr>
      <td>Password Baru</td>
      <td>
        <input class="form-control" type="text" name="password" value="">
      </td>
    </tr>
  </table>
  <center>
  <input type="submit" name="submit" value="simpan" class="btn btn-primary mt-2 btn-sm">

<?php } ?>
<?= form_close(''); ?>

  </div>
</div>
</div>
