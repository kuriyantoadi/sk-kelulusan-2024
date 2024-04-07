
	<!-- wrapper -->
	<div class="wrapper">
		<nav class="navbar navbar-expand-lg navbar-light bg-white rounded rounded-0 shadow-sm">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">
					SISTEM SKL SMKN 1 CIRUAS
				</a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item"> <a class="btn btn-danger btn-sm" aria-current="page" href="<?= site_url('C_login/logout_bismen/'); ?>"><i class='lni lni-exit me-1'></i>Log Out</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="d-flex align-items-center justify-content-center">
			<div class="container mt-5">
				<h4 class="mb-0 text-uppercase text-center">Tahun Ajaran 2022/2023</h4>
				<h4 class="mb-0 text-uppercase text-center">SMKN 1 Ciruas</h4>
				<h5 class="mb-0 text-center">File Surat Keputusan Kelulusan</h5>
									
				<a href="<?= site_url('C_siswa/cetak_tekno') ?>" class="btn btn-success btn-sm">Unduh Surat Kelulusan</a>		
				<p>Fitur Cetak masih tahap uji coba</p>

				<hr/> 
				<div class="card">
					<div class="card-body">
						<table class="table mb-0">

						    <?php
							foreach ($tampil as $row) {
							?>

							<tbody>
								<tr>
									<th>Nama Peserta Didik</th>
									<th>:</th>
									<th><?= $row->nama_siswa ?></th>
								</tr>
								<tr>
									<th>Tempat, Tanggal Lahir</th>
									<th>:</th>
									<th><?= $row->tempat_tgl_lahir ?></th>
								</tr>
								<tr>
									<th>Nama Orang Tua / Wali</th>
									<th>:</th>
									<th><?= $row->nama_org_tua ?></th>
								</tr>
								<tr>
									<th>Nomor Induk Siswa</th>
									<th>:</th>
									<th><?= $row->nis_siswa ?></th>
								</tr>
								<tr>
									<th>Nomor Induk Siswa Nasional</th>
									<th>:</th>
									<th><?= $row->nisn_siswa ?></th>
								</tr>
								<tr>
									<th>Program Keahlian</th>
									<th>:</th>
									<th><?= $row->program_keahlian ?></th>
								</tr>
								<tr>
									<th>Dinyatakan</th>
									<th>:</th>
									<th><?= $row->status_kelulusan ?></th>
								</tr>
							</tbody>
						</table>
						<h4 class="mt-3 text-uppercase text-center">Nilai Siswa</h4>
						<table class="table table-bordered mb-0">
							<thead>
								<tr>
									<th class="text-uppercase text-center">No.</th>
									<th class="text-uppercase text-center">Mata Pelajaran</th>
									<th class="text-uppercase text-center">Nilai Ujian Sekolah</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th colspan="3">A. Mata Pelajaran Muatan Nasional</th>
								</tr>
								<tr>
									<td class="text-center">1</td>
									<td>Pendidikan Agama dan Budi Pekerti</td>
									<td class="text-center"><?= $row->pai ?></td>
								</tr>
								<tr>
									<td class="text-center">2</td>
									<td>Pendidikan Pancasila dan Kewarganegaraan</td>
									<td class="text-center"><?= $row->pkn ?></td>
								</tr>
								<tr>
									<td class="text-center">3</td>
									<td>Bahasa Indonesia</td>
									<td class="text-center"><?= $row->b_ind ?></td>
								</tr>
								<tr>
									<td class="text-center">4</td>
									<td>Matematika</td>
									<td class="text-center"><?= $row->mtk ?></td>
								</tr>
								<tr>
									<td class="text-center">5</td>
									<td>Sejarah Indonesia</td>
									<td class="text-center"><?= $row->sejindo ?></td>
								</tr>
								<tr>
									<td class="text-center">6</td>
									<td>Bahasa Inggris</td>
									<td class="text-center"><?= $row->b_ing ?></td>
								</tr>
								<tr>
									<th colspan="3">B. Mata Pelajaran Muatan Kewilayahan</th>
								</tr>
								<tr>
									<td class="text-center">1</td>
									<td>Seni Budaya</td>
									<td class="text-center"><?= $row->senbud ?></td>
								</tr>
								<tr>
									<td class="text-center">2</td>
									<td>Pendidikan Jasmani, Olah Raga, dan Kesehatan</td>
									<td class="text-center"><?= $row->pjok ?></td>
								</tr>
								<tr>
									<td class="text-center">3</td>
									<td>Muatan Lokal</td>
									<td class="text-center"></td>
								</tr>
								<tr>
									<td class="text-center"></td>
									<td>A. Membatik</td>
									<td class="text-center"><?= $row->mulok ?></td>
								</tr>
								<tr>
									<th colspan="3">C. Mata Pelajaran Muatan Peminatan Kejuruan</th>
								</tr>
								<tr>
									<td class="text-center">1</td>
									<td>Simulasi dan Komunikasi Digital</td>
									<td class="text-center"><?= $row->simdig ?></td>
								</tr>
								<tr>
									<td class="text-center">2</td>
									<td>Fisika</td>
									<td class="text-center"><?= $row->fisika ?></td>
								</tr>
								<tr>
									<td class="text-center">3</td>
									<td>Kimia</td>
									<td class="text-center"><?= $row->kimia ?></td>
								</tr>
								<tr>
									<td class="text-center">4</td>
									<td>Kompetensi Keahlian</td>
									<td class="text-center"><?= $row->kompetensi_keahlian ?></td>
								</tr>
								
								<tr>
									<td class="text-center">5</td>
									<td>Produktif Kreatif dan Kewirausahan</td>
									<td class="text-center"><?= $row->pkwu ?></td>
								</tr>
								<tr>
									<th colspan="2">RATA-RATA</th>
									<td class="text-center"><?= $row->rata_rata ?></td>
								</tr>
							</tbody>
							<?php } ?>
						</table>
					</div>
					<!--end row-->
		