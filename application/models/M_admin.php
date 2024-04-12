<?php

class M_admin extends CI_Model{

  function dashboard($ses_id){
    $this->db->where('id_siswa', $ses_id);
    $hasil = $this->db->get('tb_siswa')->result();
    return $hasil;
  }


//tekno awal
  function siswa_tekno(){
    // Lakukan join antara tb_siswa_tekno dan tb_kelas berdasarkan id_kelas
    $this->db->select('tb_siswa_tekno.*, tb_kelas.nama_kelas');
    $this->db->from('tb_siswa_tekno');
    $this->db->join('tb_kelas', 'tb_siswa_tekno.id_kelas = tb_kelas.id_kelas');
    
    // Jalankan query
    $query = $this->db->get();
    
    // Ambil hasil query
    $tampil = $query->result();
    
    return $tampil;
  }


  public function siswa_tekno_tambah_up($data_tambah)
  {
    $this->db->insert('tb_siswa_tekno', $data_tambah);
  }

  public function siswa_hapus_tekno($id_siswa)
  {
    $this->db->where($id_siswa);
    $this->db->delete('tb_siswa_tekno');
  }

  function siswa_detail_tekno($id_siswa){
    $this->db->where('id_siswa', $id_siswa);
    $this->db->select('*, (mulok + pai + pkn + b_ind + mtk + sejindo + b_ing + senbud + pjok + simdig + fisika + kimia + pkwu) / 13 AS nilai_rata');
    $this->db->join('tb_kelas', 'tb_siswa_tekno.id_kelas = tb_kelas.id_kelas');
    $hasil = $this->db->get('tb_siswa_tekno')->result();
    return $hasil;
  }

  public function siswa_edit_tekno($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $this->db->join('tb_kelas', 'tb_siswa_tekno.id_kelas = tb_kelas.id_kelas');
    $hasil = $this->db->get('tb_siswa_tekno')->result();
    return $hasil;
  }

  function siswa_edit_up_tekno($data_edit, $kode_siswa){
    $this->db->where($kode_siswa);
    $this->db->update('tb_siswa_tekno',$data_edit);
  }

  public function siswa_print_tekno($id_siswa)
  {
      $this->db->select('*, (mulok + pai + pkn + b_ind + mtk + sejindo + b_ing + senbud + pjok + simdig + fisika + kimia + pkwu) / 13 AS nilai_rata');
      $this->db->where('id_siswa', $id_siswa);
      $hasil = $this->db->get('tb_siswa_tekno')->result();
      return $hasil;
  }

  public function siswa_pass_tekno($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_tekno')->result();
    return $hasil;
  }

  function siswa_pass_up_tekno($data_edit, $kode_siswa){
    $this->db->where($kode_siswa);
    $this->db->update('tb_siswa_tekno',$data_edit);
  }
// tekno akhir


//bismen awal
  function siswa_bismen(){
    $this->db->join('tb_kelas', 'tb_siswa_bismen.id_kelas = tb_kelas.id_kelas');
    $tampil = $this->db->get('tb_siswa_bismen')->result();
    
    return $tampil;
  }

  public function siswa_bismen_tambah_up($data_tambah)
  {
    $this->db->insert('tb_siswa_bismen', $data_tambah);
  }

  public function siswa_hapus_bismen($id_siswa)
  {
    $this->db->where($id_siswa);
    $this->db->delete('tb_siswa_bismen');
  }

  function siswa_detail_bismen($id_siswa){
    $this->db->where('id_siswa', $id_siswa);
    $this->db->join('tb_kelas', 'tb_siswa_bismen.id_kelas = tb_kelas.id_kelas');
    $hasil = $this->db->get('tb_siswa_bismen')->result();
    return $hasil;
  }

  public function siswa_edit_bismen($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $this->db->join('tb_kelas', 'tb_siswa_bismen.id_kelas = tb_kelas.id_kelas');
    $hasil = $this->db->get('tb_siswa_bismen')->result();
    return $hasil;
  }

  function siswa_edit_up_bismen($data_edit, $kode_siswa){
    $this->db->where($kode_siswa);
    $this->db->update('tb_siswa_bismen',$data_edit);
  }

  public function print_bismen($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_bismen')->result();
    return $hasil;
  }

  public function siswa_pass_bismen($id_siswa)
  {
    $this->db->where('id_siswa', $id_siswa);
    $hasil = $this->db->get('tb_siswa_bismen')->result();
    return $hasil;
  }

  function siswa_pass_up_bismen($data_edit, $kode_siswa){
    $this->db->where($kode_siswa);
    $this->db->update('tb_siswa_bismen',$data_edit);
  }
// bismen akhir

// kompetensi keahlian awal

  function kompetensi_keahlian(){
    $tampil = $this->db->get('tb_kompetensi_keahlian')->result();
    return $tampil;
  }

  function kompetensi_keahlian_tekno(){
    $this->db->where('jurusan', 'teknologi');
    $tampil = $this->db->get('tb_kompetensi_keahlian')->result();
    return $tampil;
  }

  function kompetensi_keahlian_bismen(){
    $this->db->where('jurusan', 'bismen');
    $tampil = $this->db->get('tb_kompetensi_keahlian')->result();
    return $tampil;
  }


  public function kompetensi_keahlian_tambah_up($data_tambah)
  {
    $this->db->insert('tb_kompetensi_keahlian', $data_tambah);
  }


  public function kompetensi_keahlian_hapus($id_kompetensi_keahlian)
  {
    $this->db->where($id_kompetensi_keahlian);
    $this->db->delete('tb_kompetensi_keahlian');
  }

  public function kompetensi_keahlian_edit($id_kompetensi_keahlian)
  {
    $this->db->where('id_kompetensi_keahlian', $id_kompetensi_keahlian);
    $hasil = $this->db->get('tb_kompetensi_keahlian')->result();
    return $hasil;
  }

  function kompetensi_keahlian_edit_up($data_edit, $id_kompetensi_keahlian){
    $this->db->where($id_kompetensi_keahlian);
    $this->db->update('tb_kompetensi_keahlian',$data_edit);
  }

// kompetensi keahlian akhir

// kelas awal

  function kelas(){
    $this->db->join('tb_kompetensi_keahlian', 'tb_kelas.id_kompetensi_keahlian = tb_kompetensi_keahlian.id_kompetensi_keahlian');
    $tampil = $this->db->get('tb_kelas')->result();
    return $tampil;
  }

  function kelas_tekno() {
    $this->db->select('tb_kelas.id_kelas, tb_kelas.nama_kelas, tb_kelas.id_kompetensi_keahlian');
    $this->db->from('tb_kelas');
    $this->db->join('tb_kompetensi_keahlian', 'tb_kelas.id_kompetensi_keahlian = tb_kompetensi_keahlian.id_kompetensi_keahlian');
    $this->db->where('tb_kompetensi_keahlian.jurusan', 'teknologi');
    $query = $this->db->get();
    return $query->result();
  }

   function kelas_bismen() {
    $this->db->select('tb_kelas.id_kelas, tb_kelas.nama_kelas, tb_kelas.id_kompetensi_keahlian');
    $this->db->from('tb_kelas');
    $this->db->join('tb_kompetensi_keahlian', 'tb_kelas.id_kompetensi_keahlian = tb_kompetensi_keahlian.id_kompetensi_keahlian');
    $this->db->where('tb_kompetensi_keahlian.jurusan', 'bismen');
    $query = $this->db->get();
    return $query->result();
  }


  public function kelas_tambah_up($data_tambah)
  {
    $this->db->insert('tb_kelas', $data_tambah);
  }

  public function kelas_hapus($id_kelas)
  {
    $this->db->where($id_kelas);
    $this->db->delete('tb_kelas');
  }

  public function kelas_edit($id_kelas)
  {
    $this->db->select('tb_kelas.id_kelas, tb_kelas.nama_kelas, tb_kelas.id_kompetensi_keahlian, tb_kompetensi_keahlian.nama_kompetensi_keahlian, tb_kompetensi_keahlian.jurusan');
    $this->db->from('tb_kelas');
    $this->db->join('tb_kompetensi_keahlian', 'tb_kelas.id_kompetensi_keahlian = tb_kompetensi_keahlian.id_kompetensi_keahlian');
    $this->db->where('tb_kelas.id_kelas', $id_kelas);
    $hasil = $this->db->get()->result();

    return $hasil;

  }

  function kelas_edit_up($data_edit, $id_kelas){
    $this->db->where($id_kelas);
    $this->db->update('tb_kelas',$data_edit);
  }

// kelas akhir


// tahun ajaran awal
  function profil_sekolah(){
    $this->db->select('*');
    $this->db->from('tb_profil_sekolah');
    $this->db->limit(1); // Hanya ambil satu baris
    $query = $this->db->get();
    return $query->row(); // Mengembalikan satu baris sebagai objek
}


// tahun ajaran akhir


}

 ?>
