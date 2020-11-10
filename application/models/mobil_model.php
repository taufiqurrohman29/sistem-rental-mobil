<?php

class Mobil_model extends CI_model{

	public function get_data(){
		$this->db->select('*');
		$this->db->from('mobil');
		$this->db->join('type', 'type.id_type = mobil.id_type', 'left');
		$this->db->order_by('id_mobil','desc');
		return $this->db->get()->result();
	}

	public function get_data_mobil($id_mobil){
		$this->db->select('*');
		$this->db->from('mobil');
		$this->db->join('type', 'type.id_type = mobil.id_type', 'left');
		$this->db->where('id_mobil',$id_mobil);
		return $this->db->get()->row();
	}

	public function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function update_data($table, $data, $where){
		$this->db->update($table, $data, $where);
	}

	public function delete_data($data){
		$this->db->where('id_mobil', $data['id_mobil']);
		$this->db->delete('mobil',$data);
	}

	public function delete_data_transaksi($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function total_mobil(){
		return $this->db->get('mobil')->num_rows();
	}
		public function downloadPembayaran($id)
	{
		$query= $this->db->get_where('transaksi', array('id_rental' => $id));
		return $query->row_array();
	}

		public function get_where($where,$table){
		return $this->db->get_where($table,$where);
	}
 }
  
?>