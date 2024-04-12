  <div class="page-wrapper">
			<div class="page-content">

  
  <div class="container">

    <h3 style="margin-top: 50px; margin-bottom: 20px" align='center'>Tambah Kompetensi Keahlian</h3>

   
    <table class="table table-bordered">
      <?= form_open('C_admin/kompetensi_keahlian_tambah_up'); ?>

      <tr>
        <td>Nama Kompetensi Keahlian</td>
        <td >
          <input class="form-control" type="text" name="nama_kompetensi_keahlian" required>
        </td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td >
          <select name="jurusan" id="" class="form-control" required>
            <option value="">Pilihan</option>
            <option value="teknologi">teknologi</option>
            <option value="bismen">bismen</option>
          </select>
        </td>
      </tr>
      
    </table>

    <center>
    <input style="margin-bottom: 50px" type="submit" name="submit" value="simpan" class="btn btn-info btn-sm">
    <a style="margin-bottom: 50px" class="btn btn-warning btn-sm" href="<?= site_url('C_admin/kompetensi_keahlian/') ?>" >Kembali</a>

    <?= form_close(); ?>

    </div>
</div>
</div>

