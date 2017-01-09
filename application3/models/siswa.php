<?php
class Siswa extends MY_Model{
	private static $table_name='siswa';
	
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
		$this->db->where( 'email', $this->input->post( 'email_siswa' ) );
		//$this->db->where( 'active', 1 );
		$query = $this->db->get( static::$table_name );
		return $query->row( 0, get_class( $this ) );
	}

}
?>