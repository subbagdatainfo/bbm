<?php

class Dashboard extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index() {
		$data=array();
		
		$this->render('v_dashboard',$data);
	}
	
	public function render($template,$data){
		if($this->is_login()):
			$this->load->view($template,$data);
		else:
			$this->session->set_flashdata('error_msg','Anda tidak memiliki akses ke Dashboard');
			redirect('login');
		endif;
	}
	
	public function is_login(){
		$login=$this->session->userdata('is_login');
		if($login):
		return TRUE;
		else:
		return FALSE;
		endif;
	}

}
	
?>