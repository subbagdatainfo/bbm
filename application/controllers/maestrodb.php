<?php
session_start();
class Maestrodb extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		if ( ! ($this->session->userdata('is_login') && $this->session->userdata('user_id')) )
		{ 
			redirect('login');
		}
	}
	
	function index() {
		
		$data = array();
		$data['maestro'] = $this->Maestro->get_maestro();
		$this->load->view('v_maestro_dashboard',$data);
	}

}
	
?>