<?php

class Customer_model extends CI_model{

	public function get_data(){
		return $this->db->get('customer')->result();
	}

	public function get_data_customer($id_customer){
		$this->db->select('*');
		$this->db->from('customer');
		$this->db->where('id_customer',$id_customer);
		return $this->db->get()->row();
	}

	public function insert_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function update_data($table, $data, $where){
		$this->db->update($table, $data, $where);
	}

	public function total_customer(){
		return $this->db->get('customer')->num_rows();
	}
 }
  
?>