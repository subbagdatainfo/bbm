<?php

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model(array('user','siswa'));
		$this->load->library('form_validation');
	}
	
	public function index() {
		if($this->input->post('submit')):
			$this->form_validation->set_rules( 'email', 'Email', 'trim|required|xss_clean' );
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
            $this->form_validation->set_error_delimiters( '<div class="alert alert-danger">', '</div>' );
			if($this->form_validation->run()):
				if($this->verify_login()):
					$users=new User();
					$user=$users->login();
					$this->session->set_userdata('user_id',$user->id);
					$this->session->set_userdata('is_login', TRUE);
					$this->session->set_userdata('email',$user->email);
					redirect('dashboard');
				elseif($this->verify_login_sis()):
					$siswas=new Siswa();
					$siswa=$siswas->login();
					$this->session->set_userdata('id_siswa',$siswa->id_siswa);
					$this->session->set_userdata('is_login', TRUE);
					$this->session->set_userdata('email',$siswa->email);
					redirect('siswadb/detail');
				else:
					$this->session->set_flashdata('error_msg','<div class="alert alert-danger">Gagal Login! username atau password tidak dikenali</div>');
					redirect('login');
				endif;
			endif;
		endif;
		$this->load->view('v_login');
	}
	
	public function verify_login(){
		$users = new User();
		if($users->login()):
			return TRUE;
		else:
			return FALSE;
		endif;
	}
	
	public function verify_login_sis(){
		$siswas = new Siswa();
		if($siswas->login()):
			return TRUE;
		else:
			return FALSE;
		endif;
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}

}
	
?>