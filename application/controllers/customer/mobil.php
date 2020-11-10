<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {


		public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') != '2'){
		redirect('auth_customer','refresh');
	}
}


	public function index()
	{

		$data['title'] = 'Mobil';
		$data['mobil'] = $this->mobil_model->get_data();
		$this->load->view('templates_customer/header',$data);
		$this->load->view('customer/mobil',$data);
		$this->load->view('templates_customer/footer');

	}

	public function detail_mobil($id_mobil)
	{
		$data['mobil'] = $this->mobil_model->get_data_mobil($id_mobil);
		$data['type'] = $this->type_model->get_data();
		$data['title'] = 'Detail Mobil';
		$this->load->view('templates_customer/header',$data);
		$this->load->view('customer/detail_mobil',$data);
		$this->load->view('templates_customer/footer');
	}
}