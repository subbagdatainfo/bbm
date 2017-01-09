<?php if ( ! defined( 'BASEPATH' ) ) exit( 'No direct script access allowed' );
class User extends MY_Model {
	protected static $table_name = "username";
	
	public $id;
	public $username;
	public $password;
	public $role;
	public $last_login;
	
	public function login()	{
		$this->db->where( 'password', sha1( $this->input->post( 'password' ) ) );
		$this->db->where( 'email', $this->input->post( 'email' ) );
		//$this->db->where( 'active', 1 );
		$query = $this->db->get( static::$table_name );
		return $query->row( 0, get_class( $this ) );
	}
}

?>