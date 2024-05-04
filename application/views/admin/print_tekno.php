<!DOCTYPE html>
<html lang="en">
<head>
  <title>Surat Keterangan Lulus - SMKN 1 Kragilan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= base_url() ?>assets/cetak/css/bootstrap.min.css">
  <script src="<?= base_url() ?>assets/cetak/js/bootstrap.min.js"></script>
  <style>

    .margin_p {
      margin-left: 80px;
      margin-right: 80px;
    }

    .pd_col {
      padding-left: 5px;
    }

    .margin_tb{
      margin-left: 140px;
      margin-right: 100px;
    }

    .tbl_ttd{
      float: right; 
      width: 40%; 
      margin-left: 30px; 
      margin-top: 30px
    }


    @media print {
        /* A4 landscape */
        @page {
            size: F4 portrait;
        }
        
        /* A4 portrait */
        /* @page {
            size: A4 portrait;
        } */
    }
  
  </style>
</head>
<body>

<center>
  <img src="<?= base_url() ?>/assets/images/kop-surat.png" />
</center>

  <div class="container">
    <b style="margin-top: 0; text-align: center; display: block;">
        <u>
            SURAT KETERANGAN LULUS
        </u>
    </b>
    <p align='center'>No. 422 / 836 / SMKN.1 / 2024</p>

    <p class="margin_p">
      Kepala SMK Negeri 1 Kragilan Selaku Ketua Penyelenggara Ujian Sekolah Tahun Pelajaran
      2023/2024 Berdasarkan :

      <br>1. Ketuntasan dari seluruh program pembelajaran pada kurikulum 2013 Revisi.
      <br>2. Kriteria Kelulusan dari Satuan Pendidikan sesuai dengan peraturan perundang-undangan.
      <br>3. Rapat Pleno Dewan Pendidik tentang Kelulusan pada tanggal 03 Mei 2024.
      <br>Menerangkan Bahwa :
    </p>

    <?php
    foreach ($tampil as $row) {
    ?>

    <table class="margin_tb" border="0">
      <tr>
        <td width="300px">Nama Peserta Didik</td>
        <td>: <?= $row->nama_siswa ?></td>
      </tr>
      <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td>: <?= $row->tempat_lahir.', '. $row->tgl_lahir ?></td>
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
        <td>
          <b>: <?= $row->status_kelulusan ?></b>
        </td>
      </tr>
    </table>
    <p class="margin_p">
      Dengan Nilai Sebagai Berikut :
    </p>

    <div style="margin-left: auto; margin-right: auto; width: 90%;">

      <table border="1"  style="width: 90%; border-collapse: collapse;">
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
          <td class="pd_col">Bahasa Inggris dan Bahasa Asing Lainnya</td>
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
          <td align='center' rowspan="4" style="vertical-align:top">3</td>
          <td class="pd_col">Muatan Lokal</td>
        </tr>
        <tr>
          <td><span class="p-4">a. Batik</span></td>
          <td><center><?= $row->mulok?></td>
        </tr>
        <tr>
          <td><span class="p-4">b. ............</span></td>
          <td></td>
        </tr>
        <tr>
          <td><span class="p-4">c. .............</span></td>
          <td></td>
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
    </div>

    <div class="tbl_ttd">
      <table>
        <tr>
          Serang, 6 Mei 2024
          <br>Plt. Kepala SMK Negeri 1 Kragilan
        </tr>
        <tr>
          <td><img src=" <?= $qr_image ?>" alt="QR Code Error"></td>
        </tr>
        <tr>
          <td>
            <b>Dr. Maksudi Zen Muttaqin, M.Pd</b>
            <br><p>NIP. 19730722 199903 1 001</p>
          </td>
          
        </tr>
      </table>
    </div>
    
    
  <?php } ?>

      </div>
    </div>
</div>
</div>

<script>window.print(); </script>


  </body>
</html>
