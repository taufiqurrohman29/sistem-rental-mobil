<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') != '1'){
		redirect('auth','refresh');
	}
}

	public function index()
	{
		$data['customer'] = $this->customer_model->get_data();
		$data['title'] = 'Data Customer';
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/data_customer',$data);
		$this->load->view('templates/footer.php');
	}

	public function tambah_customer()
	{
		$data['title'] = 'Form Tambah Customer';
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/form_tambah_customer');
		$this->load->view('templates/footer.php');

	}

	public function tambah_customer_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->tambah_customer();
		} else {
			$nama_lengkap 		= $this->input->post('nama_lengkap');
			$username 			= $this->input->post('username');
			$alamat 			= $this->input->post('alamat');
			$gender 			= $this->input->post('gender');
			$no_telepon 		= $this->input->post('no_telepon');
			$no_ktp 			= $this->input->post('no_ktp');
			$password 			= md5($this->input->post('password'));
			

			$data = array(
				'nama_lengkap'		 => $nama_lengkap,
				'username'			 => $username,
				'alamat'		 	 => $alamat,
				'gender'		 	 => $gender,
				'no_telepon'		 => $no_telepon,
				'no_ktp'		 	 => $no_ktp,
				'password'			 => $password,
				'role_id'			 =>2,
			);
			


			$this->customer_model->insert_data($data,'customer');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong>Data Customer berhasil di tambahkan!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/customer');
		}
	}

	public function update_customer($id_customer){
		$data['customer'] = $this->customer_model->get_data_customer($id_customer);
		$data['title'] = 'Form Edit Customer';
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/form_edit_customer',$data);
		$this->load->view('templates/footer.php');
	}

	public function update_customer_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->update_customer();
		} else {
			$id_customer 			= $this->input->post('id_customer');
			$nama_lengkap 			= $this->input->post('nama_lengkap');
			$username 				= $this->input->post('username');
			$alamat 				= $this->input->post('alamat');
			$gender 				= $this->input->post('gender');
			$no_telepon 			= $this->input->post('no_telepon');
			$no_ktp 				= $this->input->post('no_ktp');
			$password 				= md5($this->input->post('password'));

			$data = array(
				'nama_lengkap'		 => $nama_lengkap,
				'username'			 => $username,
				'alamat'		 	 => $alamat,
				'gender'		 	 => $gender,
				'no_telepon'		 => $no_telepon,
				'no_ktp'		 	 => $no_ktp,
				'password'			 => $password
			);

			$where = array(
				'id_customer' => $id_customer
			);

			$this->customer_model->update_data('customer', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong>Data Customer berhasil di update!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/customer');
		}

	}

	public function delete_customer($id_customer)
	{
		$where = array('id_customer' => $id_customer);
		$this->type_model->delete_data($where,'customer');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  <strong>Data Customer berhasil di hapus!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/customer');
	}
	public function _rules(){
		$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required',[
			'required' => 'Nama Lengkap harus diisi!!']);
		$this->form_validation->set_rules('username','Username','required',[
			'required' => 'Username harus diisi!!']);
		$this->form_validation->set_rules('alamat','Alamat','required',[
			'required' => 'Alamat harus diisi!!']);
		$this->form_validation->set_rules('gender','Gender','required',[
			'required' => 'Gender harus diisi!!']);
		$this->form_validation->set_rules('no_telepon','No Telepon','required',[
			'required' => 'No Telepon harus diisi!!']);
		$this->form_validation->set_rules('no_ktp','No KTP','required',[
			'required' => 'No KTP harus diisi!!']);
		$this->form_validation->set_rules('password','Password','required',[
			'required' => 'Password harus diisi!!']);
	}
}
