<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	public function index()
	{

		$data['title'] = 'Home';
		$data['mobil'] = $this->mobil_model->get_data();
		$this->load->view('templates_customer/header',$data);
		$this->load->view('templates_customer/home',$data);
		$this->load->view('templates_customer/footer');

	}
}
