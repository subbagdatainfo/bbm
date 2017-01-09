<?php
class Daftar extends CI_Controller {
	function index() {
		$this->form_validation->set_rules('Nisn', 'Nisn', 'callback_validasi_nisn');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('v_daftar');
		}
		else
		{
			$Nisn = $this->input->post('Nisn');
			$data['siswa'] = $this->get_nisn($Nisn);
			$Npsn = $data['siswa']['npsn'];
			$data['sekolah'] = $this->get_npsn($Npsn);
			$data['maestro'] = $this->Maestro->get_maestro();
			$this->load->view('v_daftar2', $data);
		}
	}

	function get_nisn($Nisn){
		$data=array();
		$json = file_get_contents('http://data.kemdikbud.go.id/ref/custom/pdKebudayaan.svc/siswa/nisn='.$Nisn);
		$data['siswa'] = json_decode($json,true);
		return $data['siswa'];
	}

	function get_npsn($Npsn) {
		$data = array();
		$json = file_get_contents('http://data.kemdikbud.go.id/ref/custom/pdss.svc/sekolah/npsn='.$Npsn);
		$data['sekolah'] = json_decode($json, true);
		return $data['sekolah'];
	}

	function validasi_nisn($Nisn){
		if ($this->get_nisn($Nisn) == '' && $this->get_nisn($nisn) == NULL){
			$this->form_validation->set_message('validasi_nisn', 'NISN tidak terdaftar');
			return FALSE;
		} else {
			if ($this->Siswa->cek_nisn($Nisn) != 0) {
				$this->form_validation->set_message('validasi_nisn', 'Nisn sudah terdaftar');
				return FALSE;
			} else {
				$siswa = $this->get_nisn($Nisn);
				$tgl_lahir = get_tgl($siswa['tanggal_lahir']);
				$Tanggal_lahir = $this->input->post('Tanggal_lahir');
				if($Tanggal_lahir != $tgl_lahir){
					$this->form_validation->set_message('validasi_nisn', 'Tanggal Lahir tidak sama');
					return FALSE;
				} else {
					return TRUE;
				}
			}
		}
	}

	function do_daftar(){
		if($this->input->post('submit')!=''):
		$data = array();
		$nisn = $this->input->post('nisn');
		$siswa = $this->get_nisn($nisn);
		$npsn = $siswa['npsn'];
		$sekolah = $this->get_npsn($npsn);
		$this->Siswa->nama_sekolah = $siswa['nama_sekolah'];
		$this->Siswa->nama_siswa = $siswa['nama_siswa'];
		$this->Siswa->nisn = $siswa['nisn'];
		$this->Siswa->npsn = $siswa['npsn'];
		$this->Siswa->tanggal_lahir = $siswa['tanggal_lahir'];
		$this->Siswa->tempat_lahir = $siswa['tempat_lahir'];
		$this->Siswa->Alamat_jalan = $sekolah['Alamat_jalan'];
		$this->Siswa->Desa_kelurahan = $sekolah['Desa_kelurahan'];
		$this->Siswa->Kabupaten = $sekolah['Kabupaten'];
		$this->Siswa->Kecamatan = $sekolah['Kecamatan'];
		$this->Siswa->Provinsi = $sekolah['Provinsi'];
		$this->Siswa->maestro = $this->input->post('maestro');
		$this->Siswa->email = $this->input->post('email_siswa');
		$this->Siswa->password = sha1($this->input->post('password'));
		$this->Siswa->save();

		if ($this->db->affected_rows() > 0): 
            
                $this->Data_json->json_siswa = file_get_contents('http://data.kemdikbud.go.id/ref/custom/pdKebudayaan.svc/siswa/nisn='.$nisn);
                $this->Data_json->json_sekolah = file_get_contents('http://data.kemdikbud.go.id/ref/custom/pdss.svc/sekolah/npsn='.$npsn);
                
                $this->Data_json->id_siswa = $this->Siswa->id_siswa;
                $this->Data_json->save();
				$this->session->set_flashdata('success_msg','Pendaftaran berhasil, silakan login kemudian melengkapi dokumen yang diperlukan (Daftar Riwayat Hidup, Lampiran Prestasi, Foto Hasil Karya, Video yang telah diunggah');
				redirect('daftar');
				
				//$this->load->view('v_daftar');
        endif;
		else:
			redirect('daftar');
		endif;
	}


}
