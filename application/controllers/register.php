<?php

class Register extends CI_Controller{

	public function index()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
	{
		$data['title'] = 'Register Customer';
		$this->load->view('templates/header.php',$data);
		$this->load->view('customer/register_form');
		$this->load->view('templates/footer_login.php');
	}
		}else{
			$nama_lengkap		= $this->input->post('nama_lengkap');
			$username 			= $this->input->post('username');
			$alamat 			= $this->input->post('alamat');
			$gender 			= $this->input->post('gender');
			$no_telepon 		= $this->input->post('no_telepon');
			$no_ktp 			= $this->input->post('no_ktp');
			$password 			= md5($this->input->post('password'));

			$data = array(
				'nama_lengkap'		 => $nama_lengkap,
				'username'			 => $username,
				'alamat'		  	 => $alamat,
				'gender'		 	 => $gender,
				'no_telepon'		 => $no_telepon,
				'no_ktp'		 	 => $no_ktp,
				'password'			 => $password,
				'role_id'			 => 2
			);

			$this->customer_model->insert_data($data,'customer');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong>Berhasil Register, Silahkan Login!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth_customer/login');
		}

	}

		public function _rules(){
		$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('no_telepon','No Telepon','required');
		$this->form_validation->set_rules('no_ktp','No KTP','required');
		$this->form_validation->set_rules('password','Password','required');

	}
}
?>