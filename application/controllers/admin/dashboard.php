<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') != '1'){
		redirect('auth','refresh');
	}
}

	public function index()
	{
		$data['customer'] = $this->customer_model->total_customer();
		$data['transaksi'] = $this->transaksi_model->total_transaksi();
		$data['mobil'] = $this->mobil_model->total_mobil();
		$data['type'] = $this->type_model->total_type();
		$data['title'] = 'Dashboard Admin';
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('templates/footer.php');
	}
}
