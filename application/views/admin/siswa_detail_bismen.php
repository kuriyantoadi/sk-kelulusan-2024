<div class="page-wrapper">
			<div class="page-content">

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <center>
          <h5 style="margin-top:  25px;"><b>TAHUN PELAJARAN <?= $profil_sekolah->tahun_ajaran_awal ?>/<?= $profil_sekolah->tahun_ajaran_akhir ?></b></h5>
        </center>
        <center>
          <h5><b>SMKN 1 KRAGILAN</b></h5>
        </center>
        <center>
          <h5><b>Download File Surat Keputusan Kelulusan</b></h5>
        </center>
        <br>
        <!-- font ganti jenis -->
      </div>

    </div>
    <?= $this->session->flashdata('msg') ?>


    <?php
    foreach ($tampil as $row) {
    ?>

    <div class="mb-2">

      <a type="button" class="btn btn-secondary btn-sm" href="<?= site_url('C_admin/siswa_bismen') ?>" ><i class='bx bx-arrow-back me-0'></i></a>
      <a href="<?= site_url('C_admin/siswa_hapus_bismen/'.$row->id_siswa); ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin menghapus data <?= $row->nama_siswa ?> ?')"><i class='bx bx-trash me-0'></i></a>
      <a href="<?= site_url('C_admin/siswa_pass_bismen/'.$row->id_siswa); ?>" type="button" class="btn btn-warning btn-sm"><i class='bx bx-key me-0'></i></a>
      <a href="<?= site_url('C_admin/siswa_edit_bismen/'.$row->id_siswa); ?>" type="button" class="btn btn-primary btn-sm"><i class='bx bx-pencil me-0'></i></a>

      <?php if ($row->status_kelulusan == "LULUS") { ?>
        <a type="button" class="btn btn-success btn-sm" href="<?= site_url('C_admin/siswa_print_bismen/'.$row->id_siswa); ?>" ><i class='bx bx-printer me-0'></i></a>
      <?php }else { ?>
        <p>Mohon untuk menghubungi Ketua Prodi, untuk info lebih lanjut tentang kelulusan</p>
      <?php } ?>
      
     </div>

    <table class="table table-bordered">
      <tr>
        <td>Nama Peserta Didik</td>
        <td>: <?= $row->nama_siswa ?></td>
      </tr>
      <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td>: <?= $row->tempat_lahir.', '.$row->tgl_lahir ?></td>
      </tr>
      <tr>
        <td>Nama Orang Tua / Wali</td>
        <td>: <?= $row->nama_org_tua ?></td>
      </tr>
      <tr>
        <td>Nomor Induk Siswa</td>
        <td>: <?= $row->nis_siswa ?></td>
      </tr>
      <tr>
        <td>Nomor Induk Siswa Nasional</td>
        <td>: <?= $row->nisn_siswa ?></td>
      </tr>
      <tr>
        <td>Program Keahlian</td>
        <td>: <?= $row->program_keahlian ?></td>
      </tr>
      <tr>
        <td>Paket Keahlian</td>
        <td>: <?= $row->paket_keahlian ?></td>
      </tr>
      <tr>
        <td>Kelas</td>
        <td>: <?= $row->nama_kelas ?></td>
      </tr>
      <tr>
        <td>Dinyatakan</td>
        <td>
          <b>: <?= $row->status_kelulusan ?></b>
        </td>
      </tr>
    </table>


    <h3 align='center'>Nilai Siswa</h3>

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
        <td><center><?= $row->pai ?></td>
      </tr>
      <tr>
        <td align='center'>2</td>
        <td class="pd_col">Pendidikan Pancasila dan Kewarganegaraan</td>
        <td><center><?= $row->pkn ?></td>
      </tr>
      <tr>
        <td align='center'>3</td>
        <td class="pd_col">Bahasa Indonesia</td>
        <td><center><?= $row->b_ind ?></td>
      </tr>
      <tr>
        <td align='center'>4</td>
        <td class="pd_col">Matematika</td>
        <td><center><?= $row->mtk ?></td>
      </tr>
      <tr>
        <td align='center'>5</td>
        <td class="pd_col">Sejarah Indonesia</td>
        <td><center><?= $row->sejindo ?></td>

      </tr>
      <tr>
        <td align='center'>6</td>
        <td class="pd_col">Bahasa Inggris</td>
        <td><center><?= $row->b_ing ?></td>
      </tr>
      <tr>
        <th class="pd_col" colspan="3">B. Mata Pelajaran Muatan Kewilayahan</th>
      </tr>
      <tr>
        <td align='center'>1</td>
        <td class="pd_col">Seni Budaya</td>
        <td><center><?= $row->senbud ?></td>
      </tr>
      <tr>
        <td align='center'>2</td>
        <td class="pd_col">Pendidikan Jasmani, Olah Raga, dan Kesehatan</td>
        <td><center><?= $row->pjok?></td>
      </tr>
      <tr>
        <td align='center'>3</td>
        <td class="pd_col">Muatan Lokal</td>
      </tr>
      <tr>
        <td align='center'></td>
        <td class="pd_col">A. Batik</td>
        <td><center><?= $row->mulok?></td>
      </tr>
      <tr>
        <th class="pd_col" colspan="3">C. Mata Pelajaran Muatan Peminatan Kejuruan</th>
      </tr>
      <tr>
        <td align='center'>1</td>
        <td class="pd_col">Simulasi dan Komunikasi Digital</td>
        <td><center><?= $row->simdig ?></td>
      </tr>
      <tr>
        <td align='center'>2</td>
        <td class="pd_col">Ekonomi Bisnis</td>
        <td><center><?= $row->ekonomi_bisnis ?></td>
      </tr>
      <tr>
        <td align='center'>3</td>
        <td class="pd_col">Administrasi Umum</td>
        <td><center><?= $row->administrasi_umum ?></td>
      </tr>

      <tr>
        <td align='center'>4</td>
        <td class="pd_col">IPA</td>
        <td><center><?= $row->ipa ?></td>
      </tr>

      <tr>
        <td align='center'>5</td>
        <td class="pd_col">Dasar Program Keahlian</td>
        <td><center><?= $row->dasar_program_keahlian ?></td>
      </tr>
      <tr>
        <td align='center'>6</td>
        <td class="pd_col">Kompetensi Keahlian</td>
        <td><center><?= $row->kompetensi_keahlian ?></td>
      </tr>
     
     <tr>
        <th class="pd_col text-center" colspan="2">Rata-Rata</th>
        <td ><center>
          <?= $row->rata_rata ?>
        <?= number_format($row->nilai_rata, 0) ?>
        </td>
      </tr>

    </table>
  <?php } ?>
  </div>
    </div>

  </div>

