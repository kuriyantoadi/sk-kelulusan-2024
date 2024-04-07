  <div class="page-wrapper">
			<div class="page-content">

  
  <div class="container">

    <h3 style="margin-top: 50px; margin-bottom: 20px" align='center'>Profil Sekolah</h3>

   
    <table class="table table-bordered">

      <?= form_open('C_admin/nama_sekolah_up'); ?>
      <tr>
        <td>Nama Sekolah</td>
        <td >
          <input class="form-control" type="text" name="nama_sekolah" value="<?= $profil_sekolah->nama_sekolah ?>" required>
        </td>
       
      </tr>
      <tr>
        <td>Tahun Ajaran Awal</td>
        <td >
         <select class="form-control" name="tahun_ajaran_awal">
            <option value="<?= $profil_sekolah->tahun_ajaran_awal ?>">Pilihan Awal = <?= $profil_sekolah->tahun_ajaran_awal ?></option>
            <?php 
            for ($tahun = 2023; $tahun <= 2030; $tahun++) {
                echo "<option value=\"$tahun\">$tahun</option>";
            }
            ?>
        </select>
            
      </tr>
      <tr>
        <td>Tahun Ajaran Akhir</td>
        <td >
            <select class="form-control" name="tahun_ajaran_akhir">
                <option value="<?= $profil_sekolah->tahun_ajaran_akhir ?>">Pilihan Awal = <?= $profil_sekolah->tahun_ajaran_akhir ?></option>
                <?php 
                for ($tahun = 2023; $tahun <= 2030; $tahun++) {
                    echo "<option value=\"$tahun\">$tahun</option>";
                }
                ?>
            </select>
        </td>
       
      </tr>
      <?= form_close(); ?>

    </table>

    <center>
    <input type="submit" name="submit" value="Simpan" class="btn btn-info btn-sm">
    <a class="btn btn-warning btn-sm" href="<?= site_url('C_admin/kelas/') ?>" >Kembali</a>

    

    </div>
</div>
</div>

