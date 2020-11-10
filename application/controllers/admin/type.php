<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Type extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') != '1'){
		redirect('auth','refresh');
	}
}

	public function index()
	{
		$data['type'] = $this->type_model->get_data();
		$data['title'] = 'Data Type';
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/data_type',$data);
		$this->load->view('templates/footer.php');
	}

	public function tambah_type()
	{
		$data['title'] = 'Form Tambah Type';
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/form_tambah_type');
		$this->load->view('templates/footer.php');
	}

	public function tambah_type_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->tambah_type();
		} else {
			$kode_type 		= $this->input->post('kode_type');
			$nama_type 		= $this->input->post('nama_type');
			

			$data = array(
				'kode_type'		 => $kode_type,
				'nama_type'		 => $nama_type
			);

			$this->type_model->insert_data($data,'type');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong>Data Type berhasil di tambahkan!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/type');
		}
	}

	public function delete_type($id_type)
	{
		$where = array('id_type' => $id_type);
		$this->type_model->delete_data($where,'type');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  <strong>Data Type berhasil di hapus!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/type');
	}

	public function update_type($id_type)
	{
		$where = array('id_type' => $id_type);
		$data['type'] = $this->db->query("SELECT * FROM type WHERE id_type = '$id_type'")->result();
		$data['title'] = 'Form Edit Type';
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/form_edit_type',$data);
		$this->load->view('templates/footer.php');
	}

	public function update_type_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->update_type();
		} else {
			$id_type 			= $this->input->post('id_type');
			$kode_type 			= $this->input->post('kode_type');
			$nama_type 			= $this->input->post('nama_type');

			$data = array(
				'kode_type'		 => $kode_type,
				'nama_type'		 => $nama_type
			);

			$where = array(
				'id_type' => $id_type
			);

			$this->type_model->update_data('type', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong>Data Type berhasil di update!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/type');
		}

	}

	public function _rules(){
		$this->form_validation->set_rules('kode_type','Kode Type','required',[
			'required' => 'Kode type harus diisi!!']);
		$this->form_validation->set_rules('nama_type','Nama Type','required',[
			'required' => 'Nama type harus diisi!!']);
	}
}
