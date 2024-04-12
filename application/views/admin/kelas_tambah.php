  <div class="page-wrapper">
			<div class="page-content">

  
  <div class="container">

    <h3 style="margin-top: 50px; margin-bottom: 20px" align='center'>Tambah Kelas</h3>

   
    <table class="table table-bordered">
      <?= form_open('C_admin/kelas_tambah_up'); ?>

      <tr>
        <td>Nama Kelas</td>
        <td >
          <input class="form-control" type="text" name="nama_kelas" required>
        </td>
      </tr>
       <tr>
        <td>Kompetensi Keahlian</td>
        <td >
          <select name="id_kompetensi_keahlian" class="form-control" id="" required>
            <?php foreach ($tampil as $row) {  ?>
            <option value="<?= $row->id_kompetensi_keahlian ?>"><?= $row->nama_kompetensi_keahlian ?></option>
            <?php } ?>
          </select>

        </td>
      </tr>
      
    </table>

    <center>
    <input style="margin-bottom: 50px" type="submit" name="submit" value="simpan" class="btn btn-info btn-sm">
    <a style="margin-bottom: 50px" class="btn btn-warning btn-sm" href="<?= site_url('C_admin/kelas/') ?>" >Kembali</a>

    <?= form_close(); ?>

    </div>
</div>
</div>

