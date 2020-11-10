<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobil extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') != '1'){
		redirect('auth','refresh');
	}
}

	public function index()
	{
		$data['mobil'] = $this->mobil_model->get_data();
		$data['title'] = 'Data Mobil';
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/data_mobil',$data);
		$this->load->view('templates/footer.php');
	}

	public function tambah_mobil()
	{
		$data['title'] = 'Form Tambah Data Mobil';
		$data['type'] = $this->type_model->get_data();
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/form_tambah_mobil', $data);
		$this->load->view('templates/footer.php');
	}

	public function tambah_mobil_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->tambah_mobil();
		} else {
			$id_type 		= $this->input->post('id_type');
			$merk 			= $this->input->post('merk');
			$warna 			= $this->input->post('warna');
			$tahun 			= $this->input->post('tahun');
			$no_plat 		= $this->input->post('no_plat');
			$harga 			= $this->input->post('harga');
			$denda 			= $this->input->post('denda');
			$status 		= $this->input->post('status');
			$ac 			= $this->input->post('ac');
			$supir 			= $this->input->post('supir');
			$mp3_player 	= $this->input->post('mp3_player');
			$gambar 		= $_FILES['gambar']['name'];
			if ($gambar = '') {
			} else {
				$config['upload_path'] = './assets/upload';
				$config['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar')) {
					echo "Gambar gagal di upload!";
				} else {
					$gambar = $this->upload->data('file_name');
				}
			}

			$data = array(
				'id_type'		=> $id_type,
				'merk'		 	=> $merk,
				'warna'		 	=> $warna,
				'tahun' 		=> $tahun,
				'no_plat' 		=> $no_plat,
				'harga' 		=> $harga,
				'denda' 		=> $denda,
				'status' 		=> $status,
				'ac' 		 	=> $ac,
				'supir' 		=> $supir,
				'mp3_player' 	=> $mp3_player,
				'gambar' 		=> $gambar,
			);

			$this->mobil_model->insert_data($data, 'mobil');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Data Mobil berhasil di tambahkan!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
			redirect('admin/mobil');
		}
	}

	public function delete_mobil($id_mobil = NULL)
	{
		$mobil = $this->mobil_model->get_data_mobil($id_mobil);
		if($mobil->gambar != ""){
			unlink('./assets/upload/'. $mobil->gambar);
		}
		$data = array('id_mobil' => $id_mobil);
		$this->mobil_model->delete_data($data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>Data Mobil berhasil di hapus!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
		redirect('admin/mobil');
	}

	public function update_mobil($id_mobil)
	{
		$data['mobil'] = $this->mobil_model->get_data_mobil($id_mobil);
		$data['type'] = $this->type_model->get_data();
		$data['title'] = 'Form Edit Data Mobil';
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/form_edit_mobil', $data);
		$this->load->view('templates/footer.php');
	}

	public function update_mobil_aksi()
	{
		$this->_rules();

		if ($this->form_validation->run() == FALSE) {
			$this->update_mobil();
		} else {
			$id_mobil 		= $this->input->post('id_mobil');
			$id_type 		= $this->input->post('id_type');
			$merk 			= $this->input->post('merk');
			$warna 			= $this->input->post('warna');
			$tahun 			= $this->input->post('tahun');
			$no_plat 		= $this->input->post('no_plat');
			$harga 			= $this->input->post('harga');
			$denda 			= $this->input->post('denda');
			$status 		= $this->input->post('status');
			$ac 			= $this->input->post('ac');
			$supir 			= $this->input->post('supir');
			$mp3_player 	= $this->input->post('mp3_player');
			$gambar 		= $_FILES['gambar']['name'];
			if ($gambar) {
				$config['upload_path'] = './assets/upload';
				$config['allowed_types'] = 'jpg|jpeg|png|tiff';

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('gambar')) {
					$gambar = $this->upload->data('file_name');
					$this->db->set('gambar', $gambar);
				} else {
					echo $this->upload->display_errors();
				}
			}

			$data = array(
				'id_type'		=> $id_type,
				'merk'		 	=> $merk,
				'warna'		 	=> $warna,
				'tahun' 		=> $tahun,
				'no_plat' 		=> $no_plat,
				'harga' 		=> $harga,
				'denda' 		=> $denda,
				'status' 		=> $status,
				'ac' 		 	=> $ac,
				'supir' 		=> $supir,
				'mp3_player' 	=> $mp3_player
			);

			$where = array(
				'id_mobil' => $id_mobil
			);

			$this->mobil_model->update_data('mobil', $data, $where);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>Data Mobil berhasil di update!</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>');
			redirect('admin/mobil');
		}
	}

	public function detail_mobil($id_mobil)
	{
		$data['mobil'] = $this->mobil_model->get_data_mobil($id_mobil);
		$data['type'] = $this->type_model->get_data();
		$data['title'] = 'Detail Mobil';
		$data['admin'] = $this->db->get_where('admin',['username' => $this->session->userdata('username')])->row_array();
		$this->load->view('templates/header.php',$data);
		$this->load->view('templates/sidebar.php',$data);
		$this->load->view('admin/detail_mobil', $data);
		$this->load->view('templates/footer.php');
	}
	public function _rules(){
		$this->form_validation->set_rules('id_type','Nama Type','required',[
			'required' => 'Nama type harus diisi!!']);
		$this->form_validation->set_rules('merk','Merk','required',[
			'required' => 'Merk harus diisi!!']);
		$this->form_validation->set_rules('warna','Warna','required',[
			'required' => 'Warna harus diisi!!']);
		$this->form_validation->set_rules('tahun','Tahun','required',[
			'required' => 'Tahun harus diisi!!']);
		$this->form_validation->set_rules('no_plat','No Plat','required',[
			'required' => 'No Plat harus diisi!!']);
		$this->form_validation->set_rules('harga','Harga','required',[
			'required' => 'Harga harus diisi!!']);
		$this->form_validation->set_rules('denda','Denda','required',[
			'required' => 'Denda harus diisi!!']);
		$this->form_validation->set_rules('status','Status','required',[
			'required' => 'Status harus diisi!!']);
		$this->form_validation->set_rules('ac','AC','required',[
			'required' => 'AC harus diisi!!']);
		$this->form_validation->set_rules('supir','Supir','required',[
			'required' => 'Supir harus diisi!!']);
		$this->form_validation->set_rules('mp3_player','MP3 Player','required',[
			'required' => 'MP3 Player harus diisi!!']);
	}

}
