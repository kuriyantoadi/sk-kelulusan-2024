		<div class="page-wrapper">
			<div class="page-content">

      <h6 class="mb-0 text-uppercase">Reset Password Siswa</h6>
			<hr/>
				
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">

          <?php foreach ($tampil as $row) { ?>
          <?= form_open('C_admin/siswa_pass_up_tekno'); ?>

          <div class="mb-2">

            <a type="button" class="btn btn-secondary btn-sm" href="<?= site_url('C_admin/siswa_tekno') ?>" ><i class='bx bx-arrow-back me-0'></i></a>
            <a href="<?= site_url('C_admin/siswa_hapus_tekno/'.$row->id_siswa); ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data <?= $row->nama_siswa ?> ?')"><i class='bx bx-trash me-0'></i></a>
            <a href="<?= site_url('C_admin/siswa_edit_tekno/'.$row->id_siswa); ?>" type="button" class="btn btn-primary btn-sm"><i class='bx bx-pencil me-0'></i></a>
						<a href="<?= site_url('C_admin/siswa_detail_tekno/'.$row->id_siswa); ?>" type="button" class="btn btn-info btn-sm"><i class='bx bx-file me-0'></i></a>
            
            <?php if ($row->status_kelulusan == "LULUS") { ?>
              <a type="button" class="btn btn-success btn-sm" href="<?= site_url('C_admin/siswa_print_tekno/'.$row->id_siswa); ?>" ><i class='bx bx-printer me-0'></i></a>
            <?php }else { ?>
              <p>Mohon untuk menghubungi Ketua Prodi, untuk info lebih lanjut tentang kelulusan</p>
            <?php } ?>
              
          </div>

              <div class="mb-3">
                  <label class="form-label">Nama Peserta Didik :</label>
                  <input type="hidden" name="id_siswa" value="<?= $row->id_siswa ?>">
                  <input class="form-control" type="text" name="nama_siswa" value="<?= $row->nama_siswa ?>" disabled>
              </div>

              <div class="mb-3">
                  <label class="form-label">Nomor Induk Siswa Nasional :</label>
                  <input class="form-control" type="text" name="nisn_siswa" value="<?= $row->nisn_siswa ?>" disabled>
              </div>

              <div class="mb-3">
                  <label class="form-label">Kelas :</label>
                  <input class="form-control" type="text" name="kelas" value="<?= $row->nama_kelas ?>" disabled>
              </div>

              <div class="mb-3">
                  <label class="form-label">Password Baru :</label>
                  <input class="form-control" type="text" name="password" value="" required>
              </div>
            <center>
              <input type="submit" name="submit" value="simpan" class="btn btn-primary btn-sm">
          <?php } ?>
          <?= form_close(''); ?>

      </div>
      </div>
    </div>
  </div>
</div>