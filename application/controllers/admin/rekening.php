<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rekening extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') != '1'){
		redirect('auth','refresh');
	}
}

	public function index()
	{
		$data['rekening'] = $this->rekening_model->get_data();
		$data['title'] = 'Data Rekening';
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/data_rekening',$data);
		$this->load->view('templates/footer.php');
	}

	public function tambah_rekening()
	{
		$data['title'] = 'Form Tambah Rekening';
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/form_tambah_rekening');
		$this->load->view('templates/footer.php');
	}

	public function tambah_rekening_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->tambah_rekening();
		} else {
			$nama_rekening 		= $this->input->post('nama_rekening');
			$no_rekening 		= $this->input->post('no_rekening');
			

			$data = array(
				'nama_rekening'		 => $nama_rekening,
				'no_rekening'		 => $no_rekening
			);

			$this->rekening_model->insert_data($data,'rekening');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong>Data Rekening berhasil di tambahkan!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/rekening');
		}
	}

	public function delete_rekening($id_rekening)
	{
		$where = array('id_rekening' => $id_rekening);
		$this->rekening_model->delete_data($where,'rekening');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  <strong>Data Rekening berhasil di hapus!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/rekening');
	}

	public function update_rekening($id_rekening)
	{
		$where = array('id_rekening' => $id_rekening);
		$data['rekening'] = $this->db->query("SELECT * FROM rekening WHERE id_rekening = '$id_rekening'")->result();
		$data['title'] = 'Form Edit Rekening';
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/form_edit_rekening',$data);
		$this->load->view('templates/footer.php');
	}

	public function update_rekening_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE){
			$this->update_rekening();
		} else {
			$id_rekening 			= $this->input->post('id_rekening');
			$nama_rekening 			= $this->input->post('nama_rekening');
			$no_rekening 			= $this->input->post('no_rekening');

			$data = array(
				'nama_rekening'		 => $nama_rekening,
				'no_rekening'		 => $no_rekening
			);

			$where = array(
				'id_rekening' => $id_rekening
			);

			$this->rekening_model->update_data('rekening', $data, $where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong>Data Rekening berhasil di update!</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('admin/rekening');
		}

	}


	public function _rules(){
		$this->form_validation->set_rules('nama_rekening','Nama Rekening','required',[
			'required' => 'Nama rekening harus diisi!!']);
		$this->form_validation->set_rules('no_rekening','No Rekening','required',[
			'required' => 'No Rekening harus diisi!!']);
	}

}
