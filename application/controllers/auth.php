<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Login Admin';
		$this->load->view('templates/header.php',$data);
		$this->load->view('admin/login');
		$this->load->view('templates/footer_login.php');
	}

	public function login()
	{

		$this->_rules();

		if($this->form_validation->run() == FALSE){
		$data['title'] = 'Login Admin';
		$this->load->view('templates/header.php',$data);
		$this->load->view('admin/login');
		$this->load->view('templates/footer_login.php');	
		} else{
			$username 			= $this->input->post('username');
			$password 			= md5($this->input->post('password'));

			$cek = $this->app_model->cek_login($username, $password);

			if ($cek == FALSE)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  <strong>Username atau Password Salah!!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth/login');
			}else{
				$this->session->set_userdata('id_admin', $cek->id_admin);
				$this->session->set_userdata('username', $cek->username);
				$this->session->set_userdata('role_id', $cek->role_id);
				$this->session->set_userdata('nama_admin', $cek->nama_admin);

				switch ($cek->role_id) {
					case 1 : redirect('admin/dashboard');
						break;
					
					default:
					break;
				}
			}
		}

	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">You have been logged out</div>');
		redirect('auth');
	}
	public function _rules()
	{
		$this->form_validation->set_rules('username','Username','required',[
			'required' => 'Username harus diisi!!']);
		$this->form_validation->set_rules('password','Password','required',[
			'required' => 'Password harus diisi!!']);
	}
}
