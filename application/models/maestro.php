<?php

	class Maestro extends MY_Model {
		
		protected static $table_name='maestro';
	
		public $maestro_id;
		public $maestro_nama;
		public $maestro_pop_nama;
		public $maestro_tgl_lahir;
		public $maestro_bid;
		public $maestro_domisili;
		
		public function get_maestro() {
			$this->db->select('*');
			$this->db->from('maestro');
		
			$query = $this->db->get();
			return $query->result();
		}
		
	}

?>