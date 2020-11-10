<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') != '1'){
		redirect('auth','refresh');
	}
}

	public function index()
	{
		$data['title'] = 'Laporan';
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();

		$dari = $this->input->post('dari');
		$sampai = $this->input->post('sampai');

		$this->_rules();

		if($this->form_validation->run() == FALSE){
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/filter_laporan',$data);
		$this->load->view('templates/footer.php');
	}else{
		$data['laporan'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND date(tanggal_rental) >= '$dari' AND date (tanggal_rental) <= '$sampai'")->result();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/tampilkan_laporan',$data);
		$this->load->view('templates/footer.php');
	}
	}

	public function _rules()
	{
		$this->form_validation->set_rules('dari','Dari Tanggal','required');
		$this->form_validation->set_rules('sampai','Sampai Tanggal','required');
	}

	public function print_laporan()
	{
		$dari   = $this->input->get('dari');
		$sampai = $this->input->get('sampai');
		$data['title'] = 'Cetak Laporan';
		$data['laporan'] = $this->db->query("SELECT * FROM transaksi tr, mobil mb, customer cs WHERE tr.id_mobil=mb.id_mobil AND tr.id_customer=cs.id_customer AND date(tanggal_rental) >= '$dari' AND date (tanggal_rental) <= '$sampai'")->result();
		$this->load->view('templates/header.php',$data);
		$this->load->view('admin/print_laporan',$data);
	}
}
