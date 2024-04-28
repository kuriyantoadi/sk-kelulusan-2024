<div class="page-wrapper">
  <div class="page-content">

      <h6 class="mb-0 text-uppercase">Halaman Siswa</h6>
      <hr/>
        
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">

              <?= $this->session->flashdata('msg') ?>


              <?php foreach ($tampil as $row) { ?>

              <?php if ($row->status_kelulusan == "LULUS") { ?>
                <a style="margin-bottom: 20px;" type="button" class="btn btn-success btn-sm" href="<?= site_url('C_siswa/cetak_bismen/'.$row->id_siswa); ?>" >Download Surat Kelulusan</a>
              <?php }else { ?>
                <p>Mohon untuk menghubungi Ketua Prodi, untuk info lebih lanjut tentang kelulusan</p>
              <?php } ?>

              <table class="table table-bordered">
                
                <tr>
                  <td>Nama Peserta Didik</td>
                  <td>: <?= $row->nama_siswa ?></td>
                </tr>
                <tr>
                  <td>Tempat Lahir</td>
                  <td>: <?= $row->tempat_lahir ?></td>
                </tr>
                <tr>
                  <td>Tanggal Lahir</td>
                  <td>: <?= $row->tgl_lahir ?></td>
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
                  <td>Dinyatakan</td>
                  <td>: <?= $row->status_kelulusan ?></td>
                </tr>
              
              </table>

            <h5>Nilai Siswa</h5>

              <table style="margin-bottom: 100px" class="table table-bordered">
                <tr>
                  <th width="40px"><center>NO.</th>
                  <th width="400px"><center>MATA PELAJARAN</th>
                  <th width="200px"><center>NILAI</th>
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
                  <td class="pd_col" colspan='2'>Muatan Lokal</td>
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
                  <?= number_format($row->nilai_rata, 2) ?>
                  </td>
                </tr>

              </table>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>