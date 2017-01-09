<?php
class Siswa extends MY_Model{
	const DB_TABLE = 'siswa';
    const DB_TABLE_PK = 'id_siswa';
	
	protected static $table_name='siswa';
	
	public $id_siswa;
	public $nama_sekolah;
	public $nama_siswa;
	public $nisn;
	public $npsn;
	public $tanggal_lahir;
	public $tempat_lahir;
	public $Alamat_jalan;
	public $Desa_kelurahan;
	public $Kabupaten;
	public $Kecamatan;
	public $Provinsi;
	public $maestro;
	public $email;
	public $password;
	
	public function login()	{
		$this->db->where( 'password', sha1($this->input->post( 'password' ) ) );
		$this->db->where( 'email', $this->input->post( 'email' ) );
		//$this->db->where( 'active', 1 );
		$query = $this->db->get( static::$table_name );
		return $query->row( 0, get_class( $this ) );
	}
	
	public function get_siswa() {
		$this->db->select('*');
		$this->db->from('siswa');
		
		$query = $this->db->get();
		return $query->result();
	}
	
	public function cek_nisn($Nisn=NULL) {
		$this->db->select('*');
		$this->db->from('siswa');
		$this->db->where('nisn =', $Nisn);
		$query = $this->db->count_all_results();
		return $query;
	}
	
	public function get_siswa_detail($id_siswa=NULL) {
		
		$this->db->select('*');
		$this->db->from('siswa');
		//$this->db->join('konten', 'konten.id_siswa = siswa.id_siswa','left');
		$this->db->where('siswa.id_siswa =', $id_siswa);
		
		$query = $this->db->get();
		return $query->result();
	}

	public function edit_telp($id_siswa=NULL, $no_telp=NULL) {
		$data = array('no_telp' => $no_telp);
		$this->db->where('id_siswa =', $id_siswa);
		$query = $this->db->update('siswa', $data);
		return $query;
	}	

}
?>