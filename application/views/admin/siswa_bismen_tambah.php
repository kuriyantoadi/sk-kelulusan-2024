<div class="page-wrapper">
  <div class="page-content">

  <h6 class="mb-0 text-uppercase">Tambah Siswa Bismen</h6>
  <hr/>
    
    <div class="card">
      <div class="card-body">
        <div class="table-responsive">

        <div class="mb-2">

          <a type="button" class="btn btn-secondary btn-sm" href="<?= site_url('C_admin/siswa_bismen') ?>" ><i class='bx bx-arrow-back me-0'></i>Kembali</a>
          
        </div>

        <table class="table table-bordered">
          <?= form_open('C_admin/siswa_bismen_tambah_up'); ?>

          <tr>
            <td>Nomor Induk Siswa</td>
            <td>
              <input class="form-control" type="text" name="nis_siswa" value="" required>
            </td>
          </tr>
          <tr>
            <td>Nomor Induk Siswa Nasional</td>
            <td>
              <input class="form-control" type="text" name="nisn_siswa" value="" required>
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td>
              <input class="form-control" type="text" name="password" value="" required>
            </td>
          </tr>
          <tr>
            <td>Nama Peserta Didik</td>
            <td>
              <input class="form-control" type="text" name="nama_siswa" value="" required>
            </td>
          </tr>
          <tr>
            <td>Tempat Lahir</td>
            <td>
              <input class="form-control" type="text" name="tempat_lahir" value="" required>
            </td>
          </tr>

          <tr>
            <td>Tanggal Lahir</td>
            <td>
              <input class="form-control" type="date" name="tgl_lahir" value="" required>
            </td>
          </tr>
          
          <tr>
            <td>Nama Orang Tua / Wali</td>
            <td>
              <input class="form-control" type="text" name="nama_org_tua" value="" required>
            </td>
          </tr>

          <tr>
            <td>Kelas</td>
            <td>
              <select class="form-control" name="id_kelas" required>
                <option value="">Pilihan</option>
                
                <?php
                  foreach ($tampil_kelas as $row_kelas) {
                  ?>

                <option value="<?= $row_kelas->id_kelas ?>"> <?= $row_kelas->nama_kelas ?></option>
              
                <?php } ?>

            </td>
          </tr>
          <tr>
            <td>Dinyatakan</td>
            <td>
              <select class="form-control" name="status_kelulusan" required>
                <option value="">Pilihan</option>
                <option value="LULUS">LULUS</option>
                <option value="DITUNDA">DITUNDA</option>
              </select>
            </td>
          </tr>
        </table>

        <table class="table table-bordered">
          <tr>
            <th width="40px"><center>NO.</th>
            <th width="400px"><center>MATA PELAJARAN</th>
            <th width="200px"><center>NILAI UJIAN SEKOLAH</th>
          </tr>
          <tr>
            <th colspan="3">A. Mata Pelajaran Muatan Nasional</th>
          </tr>
          <tr>
            <td align='center'>1</td>
            <td>Pendidikan Agama dan Budi Pekerti</td>
            <td>
              <input class="form-control" type="number" name="pai" value="" required>
            </td>
          </tr>
          <tr>
            <td align='center'>2</td>
            <td>Pendidikan Pancasila dan Kewarganegaraan</td>
            <td>
              <input class="form-control" type="number" name="pkn" value="" required>
            </td>
          </tr>
          <tr>
            <td align='center'>3</td>
            <td>Bahasa Indonesia</td>
            <td>
              <input class="form-control" type="number" name="b_ind" value="" required>
            </td>
          </tr>
          <tr>
            <td align='center'>4</td>
            <td>Matematika</td>
            <td>
              <input class="form-control" type="number" name="mtk" value="" required>
            </td>
          </tr>
          <tr>
            <td align='center'>5</td>
            <td>Sejarah Indonesia</td>
            <td>
              <input class="form-control" type="number" name="sejindo" value="" required>
            </td>
          </tr>
          <tr>
            <td align='center'>6</td>
            <td>Bahasa Inggris</td>
            <td>
              <input class="form-control" type="number" name="b_ing" value="" required>
            </td>
          </tr>
          <tr>
            <th colspan="3">B. Mata Pelajaran Muatan Kewilayahan</th>
          </tr>
          <tr>
            <td align='center'>1</td>
            <td>Seni Budaya</td>
            <td>
              <input class="form-control" type="number" name="senbud" value="" required>
            </td>
          </tr>
          <tr>
            <td align='center'>2</td>
            <td>Pendidikan Jasmani, Olah Raga, dan Kesehatan</td>
            <td>
              <input class="form-control" type="number" name="pjok" value="" required>
            </td>
          </tr>
          <td align='center'>3</td>
            <td colspan='2'>Muatan Lokal </td>
            
          </tr>
          <tr>
            <td align='center'></td>
            <td>A. Batik</td>
            <td>
              <input class="form-control" type="number" name="mulok" value="" required>
            </td>
          </tr>
          <tr>
          <tr>
            <th colspan="3">C. Mata Pelajaran Muatan Peminatan Kejuruan</th>
          </tr>
          <tr>
            <td align='center'>1</td>
            <td>Simulasi dan Komunikasi Digital</td>
            <td>
              <input class="form-control" type="number" name="simdig" value="" required>
            </td>
          </tr>
          <tr>
            <td align='center'>2</td>
            <td>Ekonomi Bisnis</td>
            <td>
              <input class="form-control" type="number" name="ekonomi_bisnis" value="" required>
            </td>
          </tr>
          <tr>
            <td align='center'>3</td>
            <td>Administrasi Umum</td>
            <td>
              <input class="form-control" type="number" name="administrasi_umum" value="" required>
            </td>
          </tr>
          <tr>
            <td align='center'>4</td>
            <td>IPA</td>
            <td>
              <input class="form-control" type="number" name="ipa" value="" required>
            </td>
          </tr>
          <tr>
            <td align='center'>5</td>
            <td>Dasar Program Keahlian</td>
            <td>
              <input class="form-control" type="number" name="dasar_program_keahlian" value="" required>
            </td>
          </tr>
          <tr>
            <td align='center'>6</td>
            <td>Kompetensi Keahlian</td>
            <td>
              <input class="form-control" type="number" name="kompetensi_keahlian" value="" required>
            </td>
          </tr>

        </table>

        <center>
        <input type="submit" name="submit" value="simpan" class="btn btn-primary">

        <?= form_close(); ?>

        </div>
      </div>
    </div>
  </div>
</div>