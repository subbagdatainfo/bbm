<?php

class Konten extends MY_Model{
	const DB_TABLE = 'konten';
    const DB_TABLE_PK = 'id_konten';
	
	protected static $table_name='konten';
	
	public $id_konten;
	public $id_siswa;
	public $date_upload;
	public $jenis;
	public $url;

	public function get_konten($id_siswa=NULL, $jenis=NULL){
		$this->db->select('*');
		$this->db->from('konten');
		$this->db->where('id_siswa',$id_siswa);
		$this->db->where('jenis', $jenis);
		$query = $this->db->get();
		return $query->result();
	}
}

?>