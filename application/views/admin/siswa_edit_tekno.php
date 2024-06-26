<div class="page-wrapper">
  <div class="page-content">

  <h6 class="mb-0 text-uppercase">Edit Siswa</h6>
  <hr/>
    
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">

          <?= $this->session->flashdata('msg') ?>
          <?php foreach ($tampil as $row) { ?>
          
          <div class="mb-2">

            <a type="button" class="btn btn-secondary btn-sm" href="<?= site_url('C_admin/siswa_tekno') ?>" ><i class='bx bx-arrow-back me-0'></i></a>
            <a href="<?= site_url('C_admin/siswa_hapus_tekno/'.$row->id_siswa); ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data <?= $row->nama_siswa ?> ?')"><i class='bx bx-trash me-0'></i></a>
            <a href="<?= site_url('C_admin/siswa_pass_tekno/'.$row->id_siswa); ?>" type="button" class="btn btn-warning btn-sm"><i class='bx bx-key me-0'></i></a>
						<a href="<?= site_url('C_admin/siswa_detail_tekno/'.$row->id_siswa); ?>" type="button" class="btn btn-info btn-sm"><i class='bx bx-file me-0'></i></a>

            <?php if ($row->status_kelulusan == "LULUS") { ?>
              <a type="button" class="btn btn-success btn-sm" href="<?= site_url('C_admin/siswa_print_tekno/'.$row->id_siswa); ?>" ><i class='bx bx-printer me-0'></i></a>
            <?php }else { ?>
              <p>Mohon untuk menghubungi Ketua Prodi, untuk info lebih lanjut tentang kelulusan</p>
            <?php } ?>
              
          </div>

         
            <?= form_open('C_admin/siswa_edit_up_tekno'); ?>

            <div class="mb-3">
              <label class="form-label">Nama Peserta Didik :</label>
              <input type="hidden" name="id_siswa" value="<?= $row->id_siswa ?>">
              <input class="form-control" type="text" name="nama_siswa" value="<?= $row->nama_siswa ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tempat Lahir :</label>
                <input class="form-control" type="text" name="tempat_lahir" value="<?= $row->tempat_lahir ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Lahir :</label>
                <input class="form-control" type="text" name="tgl_lahir" value="<?= $row->tgl_lahir ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Orang Tua / Wali :</label>
                <input class="form-control" type="text" name="nama_org_tua" value="<?= $row->nama_org_tua ?>" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Induk Siswa :</label>
                <input class="form-control" type="text" name="nis_siswa" value="<?= $row->nis_siswa ?>" required>
            </div>


            <div class="mb-3">
                <label class="form-label">Nomor Induk Siswa Nasional :</label>
                <input class="form-control" type="text" name="nisn_siswa" value="<?= $row->nisn_siswa ?>"required>
            </div>

            <div class="mb-3">
                <label class="form-label">Kelas :</label>

                <select style="width: 300px;" class="form-control" name="id_kelas" required>
                  <option value="<?= $row->id_kelas ?>">Pilihan Sebelumnya ( <?= $row->nama_kelas ?> )</option>
                  
                  <?php foreach ($tampil_kelas as $row_kelas) { ?>

                  <option value="<?= $row_kelas->id_kelas ?>"> <?= $row_kelas->nama_kelas ?></option>
              
                  <?php } ?>
                  </select>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Dinyatakan :</label>
                
               <select style="width: 300px;" class="form-control" name="status_kelulusan" required>
                  <option value="<?= $row->status_kelulusan ?>">Pilihan Sebelumnya ( <?= $row->status_kelulusan ?>)</option>
                  <option value="LULUS">LULUS</option>
                  <option value="MOHON HUBUNGI KAPRODI">MOHON HUBUNGI KAPRODI</option>
                </select>
            </div>


          <table class="table table-bordered">
            <tr>
              <th width="40px"><center>NO.</th>
              <th width="400px"><center>MATA PELAJARAN</th>
              <th width="200px"><center>NILAI UJIAN SEKOLAH</th>
            </tr>
            <tr>
              <th class="pd_col" colspan="3">A. Mata Pelajaran Muatan Nasional</th>
            </tr>
            <tr>
              <td align='center'>1</td>
              <td class="pd_col">Pendidikan Agama dan Budi Pekerti</td>
              <td>
                <input class="form-control" type="number" name="pai" value="<?= $row->pai ?>" required>
              </td>
            </tr>
            <tr>
              <td align='center'>2</td>
              <td class="pd_col">Pendidikan Pancasila dan Kewarganegaraan</td>
              <td>
                <input class="form-control" type="number" name="pkn" value="<?= $row->pkn ?>" required>
              </td>
            </tr>
            <tr>
              <td align='center'>3</td>
              <td class="pd_col">Bahasa Indonesia</td>
              <td>
                <input class="form-control" type="number" name="b_ind" value="<?= $row->b_ind ?>" required>
              </td>
            </tr>
            <tr>
              <td align='center'>4</td>
              <td class="pd_col">Matematika</td>
              <td>
                <input class="form-control" type="number" name="mtk" value="<?= $row->mtk ?>" required>
              </td>
            </tr>
            <tr>
              <td align='center'>5</td>
              <td class="pd_col">Sejarah Indonesia</td>
              <td>
                <input class="form-control" type="number" name="sejindo" value="<?= $row->sejindo ?>" required>
              </td>
            </tr>
            <tr>
              <td align='center'>6</td>
              <td class="pd_col">Bahasa Inggris</td>
              <td>
                <input class="form-control" type="number" name="b_ing" value="<?= $row->b_ing ?>" required>
              </td>
            </tr>
            <tr>
              <th class="pd_col" colspan="3">B. Mata Pelajaran Muatan Kewilayahan</th>
            </tr>
            <tr>
              <td align='center'>1</td>
              <td class="pd_col">Seni Budaya</td>
              <td>
                <input class="form-control" type="number" name="senbud" value="<?= $row->senbud ?>"required>
              </td>
            </tr>
            <tr>
              <td align='center'>2</td>
              <td class="pd_col">Pendidikan Jasmani, Olah Raga, dan Kesehatan</td>
              <td>
                <input class="form-control" type="number" name="pjok" value="<?= $row->pjok ?>" required>
              </td>
            </tr>
            <tr>
              <td align='center'>3</td>
              <td class="pd_col" colspan='2'>Muatan Lokal </td>
              
            </tr>
            <tr>
              <td align='center'></td>
              <td class="pd_col">A. Batik</td>
              <td>
                <input class="form-control" type="number" name="mulok" value="<?= $row->mulok ?>" required>
              </td>
            </tr>
            <tr>
              <th class="pd_col" colspan="3">C. Mata Pelajaran Muatan Peminatan Kejuruan</th>
            </tr>
            <tr>
              <td align='center'>1</td>
              <td class="pd_col">Simulasi dan Komunikasi Digital</td>
              <td>
                <input class="form-control" type="number" name="simdig" value="<?= $row->simdig ?>" required>
              </td>
            </tr>
            <tr>
              <td align='center'>2</td>
              <td class="pd_col">Fisika</td>
              <td>
                <input class="form-control" type="number" name="fisika" value="<?= $row->fisika ?>" required>
              </td>
            </tr>
            <tr>
              <td align='center'>3</td>
              <td class="pd_col">Kimia</td>
              <td>
                <input class="form-control" type="number" name="kimia" value="<?= $row->kimia ?>" required>
              </td>
            </tr>
            <tr>
              <td align='center'>4</td>
              <td class="pd_col">Dasar Program Keahlian</td>
              <td>
                <input class="form-control" type="number" name="dasar_program_keahlian" value="<?= $row->dasar_program_keahlian ?>" required>
              </td>
            </tr>
            <tr>
              <td align='center'>5</td>
              <td class="pd_col">Kompetensi Keahlian</td>
              <td>
                <input class="form-control" type="number" name="kompetensi_keahlian" value="<?= $row->kompetensi_keahlian ?>" required>
              </td>
            </tr>
            
          </table>

          <?php } ?>
          <center>
        <input type="submit" name="submit" value="simpan" class="btn btn-primary btn-sm">

          <?= form_close(); ?>

        </div>
      </div>
    </div>
  </div>
</div>