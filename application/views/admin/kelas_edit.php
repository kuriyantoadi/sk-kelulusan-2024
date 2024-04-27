		<div class="page-wrapper">
			<div class="page-content">
				
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">

            <!-- konten awal -->
            <h5 class="mb-3 ">Data Kelas</h5>
				    <!-- <hr/> -->

            <table class="table table-bordered">
                <?= form_open('C_admin/kelas_edit_up'); ?>
                  <?php
                  foreach ($tampil as $row) {
                  ?>
                <tr>
                  <td>Nama Kelas</td>
                  <td >
                      <input class="form-control" type="hidden" value="<?= $row->id_kelas ?>" name="id_kelas" required>
                        <input class="form-control" type="text" value="<?= $row->nama_kelas ?>" name="nama_kelas" required>
                  </td>
                </tr>
                </tr>

                <tr>
                  <td>Paket Keahlian</td>
                  <td >
                    <select name="id_kompetensi_keahlian" class="form-control" id="" required>
                      <option value="<?= $row->id_kompetensi_keahlian ?>">Pilihan Awal = <?= $row->paket_keahlian ?></option>
                      
                      <?php foreach ($tampil_kompetensi_keahlian as $row_kompetensi) {  ?>
                      <option value="<?= $row_kompetensi->id_kompetensi_keahlian ?>"><?= $row_kompetensi->paket_keahlian ?></option>
                      <?php } ?>
                    </select>

                  </td>
                </tr>
                <?php } ?>
              </table>

              <center>
              <a style="margin-bottom: 50px" class="btn btn-secondary btn-sm" href="<?= site_url('C_admin/kelas/') ?>" >Kembali</a>
              <input style="margin-bottom: 50px" type="submit" name="submit" value="simpan" class="btn btn-primary btn-sm">
              <?= form_close(); ?>
						
            <!-- konten akhir -->


						</div>
					</div>
				</div>
			</div>
		</div>
		