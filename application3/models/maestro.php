<?php

	class Maestro extends Model {
		
		function get_maestro_name()
		{
			$this->db->select("maestro_nama");
			$this->db->from('maestro');
			$query = $this->db->get();
			return $query->result();
		}
		
	}

?>