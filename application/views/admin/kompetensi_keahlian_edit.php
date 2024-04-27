  <div class="page-wrapper">
			<div class="page-content">

  
  <div class="container">

    <h3 style="margin-top: 50px; margin-bottom: 20px" align='center'>Edit Kompetensi Keahlian</h3>

   
    <table class="table table-bordered">
      <?= form_open('C_admin/kompetensi_keahlian_edit_up'); ?>
        <?php
        foreach ($tampil as $row) {
        ?>

      <tr>
        <td>Program Keahlian</td>
        <td>
          <input class="form-control" type="hidden" value="<?= $row->id_kompetensi_keahlian ?>" name="id_kompetensi_keahlian" required>
          <input class="form-control" type="text" name="program_keahlian"  value="<?= $row->program_keahlian ?>" required>
        </td>
      </tr>
      <tr>
        <td>Paket Keahlian</td>
        <td>
          <input class="form-control" type="text" name="paket_keahlian" value="<?= $row->paket_keahlian ?>" required>
        </td>
      </tr>
      <tr>
        <td>Jurusan</td>
        <td >
          <select name="jurusan" id="" class="form-control" required>
            <option value="<?= $row->jurusan ?>">Pilihan Awal = <?= $row->jurusan ?></option>
            <option value="teknologi">teknologi</option>
            <option value="bismen">bismen</option>
          </select>
        </td>
      </tr>
      <?php } ?>
    </table>

    <center>
    <input style="margin-bottom: 50px" type="submit" name="submit" value="simpan" class="btn btn-info btn-sm">
    <a style="margin-bottom: 50px" class="btn btn-warning btn-sm" href="<?= site_url('C_admin/kompetensi_keahlian/') ?>" >Kembali</a>

    <?= form_close(); ?>

    </div>
</div>
</div>

