<?php

class Rental extends CI_Controller{

		public function __construct(){
		parent::__construct();
		if($this->session->userdata('role_id') != '2'){
		redirect('auth_customer','refresh');
	}
}

	public function tambah_rental($id_mobil)
	{
		$data['mobil'] = $this->mobil_model->get_data_mobil($id_mobil);

		$data['title'] = 'Form Rental';
		$this->load->view('templates_customer/header',$data);
		$this->load->view('customer/tambah_rental',$data);
		$this->load->view('templates_customer/footer');
	}

	public function tambah_rental_aksi()
	{
		$id_customer			= $this->session->userdata('id_customer');
		$id_mobil 				= $this->input->post('id_mobil');
		$tanggal_rental 		= $this->input->post('tanggal_rental');
		$tanggal_kembali 		= $this->input->post('tanggal_kembali');
		$denda 					= $this->input->post('denda');
		$harga 					= $this->input->post('harga');

		$data = array(
			'id_customer' 			=> $id_customer,
			'id_mobil' 				=> $id_mobil,
			'tanggal_rental' 		=> $tanggal_rental,
			'tanggal_kembali' 		=> $tanggal_kembali,
			'denda' 				=> $denda,
			'harga' 				=> $harga,
			'tanggal_pengembalian' 	=> '-',
			'status_rental' 		=> 'Belum Selesai',
			'status_pengembalian' 	=> 'Belum Kembali'
		);

		$this->mobil_model->insert_data($data,'transaksi');
		$status = array(
			'status' => '0');
		$id = array(
			'id_mobil' => $id_mobil);
		$this->mobil_model->update_data('mobil',$status,$id);
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <strong>Transaksi Berhasil, Silahkan CheckOut Batas Waktu Pembayaran 30 menit</strong>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('customer/transaksi');
	}
} 
?>