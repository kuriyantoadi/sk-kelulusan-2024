<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png"/>
	<!--plugins-->
	<link href="<?= base_url() ?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="<?= base_url() ?>assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
	<link href="<?= base_url() ?>assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

	<!-- loader-->
	<!-- <link href="<?= base_url() ?>assets/css/pace.min.css" rel="stylesheet"/>
	<script src="<?= base_url() ?>assets/js/pace.min.js"></script> -->
	<!-- Bootstrap CSS -->
	<link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/app.css" rel="stylesheet">
	<link href="<?= base_url() ?>assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<!-- <link rel="stylesheet" href="<?= base_url() ?>assets/css/dark-theme.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/semi-dark.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/header-colors.css"/> -->
	<title>SKL 2024</title>
</head>

<body>

<!-- awal konten -->
<!-- <div class="page-wrapper"> -->
  <div class="page-content">
      <div class="container">

      <h6 class="mb-0">Halaman Cek SKL 2023/2024 SMKN 1 Kragilan </h6>
      <p>Page rendered in <strong>{elapsed_time}</strong> seconds.</p>
      <hr/>
        
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">

              <?= $this->session->flashdata('msg') ?>


              <?php foreach ($tampil as $row) { ?>
              
              <?php if ($row->status_kelulusan == "LULUS") { ?>
                <a style="margin-bottom: 20px;" type="button" class="btn btn-success btn-sm" href="<?= site_url('C_siswa/cetak_bismen/'.$row->id_siswa); ?>" >Surat Kelulusan PDF<i class='bx bx-cloud-download m-0'></i></a>
              <?php }else { ?>
                <p>Mohon untuk menghubungi Ketua Prodi, untuk info lebih lanjut tentang kelulusan.</p>
              <?php } ?>

              <table class="table table-bordered table-hover">
                
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
                    <?php $nis_siswa = str_replace(substr($row->nis_siswa, 0, 5), str_repeat('*', 5), $row->nis_siswa); ?>
                    <td>: <?= $nis_siswa ?></td>
                </tr>
                <tr>
                  <td>Nomor Induk Siswa Nasional</td>
                    <?php $nisn_siswa = str_replace(substr($row->nisn_siswa, 0, 5), str_repeat('*', 5), $row->nisn_siswa); ?>
                    <td>: <?= $nisn_siswa ?></td>
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

            <?php if ($row->status_kelulusan == "LULUS") { ?>

              <h5>Nilai Siswa</h5>

              <table style="margin-bottom: 100px" class="table table-bordered table-hover">
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
                  <td class="pd_col">Fisika</td>
                  <td><center><?= $row->fisika ?></td>
                </tr>
                <tr>
                  <td align='center'>3</td>
                  <td class="pd_col">Kimia</td>
                  <td><center><?= $row->kimia ?></td>
                </tr>
                <tr>
                  <td align='center'>4</td>
                <td class="pd_col">Dasar Program Keahlian</td>
                  <td><center><?= $row->dasar_program_keahlian ?></td>
                </tr>
                <tr>
                  <td align='center'>5</td>
                  <td class="pd_col">Kompetensi Keahlian</td>
                  <td><center><?= $row->kompetensi_keahlian ?></td>
                </tr>
              
              <tr>
                  <th class="pd_col text-center" colspan="2">Rata-Rata</th>
                  <td ><center>
                  <?= number_format($row->nilai_rata, 2) ?>
                  </td>
                </tr>

              </table>

            <?php } ?>

            
          <?php } ?>
        </div>
      </div>
    <!-- </div> -->
  <!-- </div> -->
<!-- </div> -->


</body>

</html>