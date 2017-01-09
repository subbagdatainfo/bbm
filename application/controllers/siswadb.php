<?php
session_start();
class Siswadb extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		if ( ! $this->session->userdata('is_login'))
		{ 
			redirect('login');
		}
	}

	function index() {
		
		$data = array();
		$data['siswa'] = $this->Siswa->get_siswa();
		$this->load->view('v_siswa_dashboard',$data);
	}
	
	function detail() {
	
		$data = array();
		$id_siswa = $this->session->userdata('id_siswa');
		
		$data['siswa'] = $this->Siswa->get_siswa_detail($id_siswa);
		$data['profpict'] = $this->Konten->get_konten($id_siswa,'profpict');
		$data['drh'] = $this->Konten->get_konten($id_siswa,'drh');
		$data['dokumen'] = $this->Konten->get_konten($id_siswa,'dokumen');
		$data['foto'] = $this->Konten->get_konten($id_siswa,'foto');
		$data['youtube'] = $this->Konten->get_konten($id_siswa,'youtube');
		$this->load->view('v_siswa_dashboard_detail',$data);
	}
	
	function details($id_siswa=NULL) {
	
		$data = array();
		
		$data['siswa'] = $this->Siswa->get_siswa_detail($id_siswa);
		$data['profpict'] = $this->Konten->get_konten($id_siswa,'profpict');
		$data['drh'] = $this->Konten->get_konten($id_siswa,'drh');
		$data['dokumen'] = $this->Konten->get_konten($id_siswa,'dokumen');
		$data['foto'] = $this->Konten->get_konten($id_siswa,'foto');
		$data['youtube'] = $this->Konten->get_konten($id_siswa,'youtube');
		$this->load->view('v_siswa_dashboard_detail',$data);
	}

	function edit() {
		$data = array();
		$id_siswa = $this->session->userdata('id_siswa');
		$data['siswa'] = $this->Siswa->get_siswa_detail($id_siswa);
		$data['profpict'] = $this->Konten->get_konten($id_siswa,'profpict');
		$data['drh'] = $this->Konten->get_konten($id_siswa,'drh');
		$data['dokumen'] = $this->Konten->get_konten($id_siswa,'dokumen');
		$data['foto'] = $this->Konten->get_konten($id_siswa,'foto');
		$data['youtube'] = $this->Konten->get_konten($id_siswa,'youtube');
		$this->load->view('v_siswa_dashboard_edit',$data);
	}

	function upload() {
		$data = array();
		$id_siswa = $this->session->userdata('id_siswa');
		$this->Konten->id_siswa = $id_siswa;
		$this->load->helper('date');
		$this->Konten->date_upload = date('Y-m-d');
		$jenis = $this->input->post('jenis');

		if ($jenis != 'youtube'){
			$config['file_name'] =  $id_siswa.'_'. $jenis;
            $config['upload_path'] = './konten/';
            $config['allowed_types'] = 'pdf|jpg|png';
            $this->upload->initialize($config);

            if ($this->upload->do_upload())
            {
            	$data_file = $this->upload->data();
            	$file_ext = $data_file['file_ext'];
            	$this->Konten->jenis = $jenis;
            	$this->Konten->url = $id_siswa.'_'.$jenis.''.$file_ext; 
            }
			
		} else {
			$this->Konten->jenis = 'youtube';
			$this->Konten->url = $this->input->post('link');	
        }
        $this->Konten->save(); 
        redirect('siswadb/edit');
	}
	
	function edit_no_telp() {
		if($this->input->post('submit')!=''):
		$id_siswa = $this->session->userdata('id_siswa');
		$no_telp = $this->input->post('no_telp');
		if($this->Siswa->edit_telp($id_siswa, $no_telp)){
			redirect('siswadb/detail');
		}
		endif;
	}

}
	
?>