<?php

class Type_model extends CI_model{

	public function get_data(){
		return $this->db->get('type')->result();
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

	public function total_type(){
		return $this->db->get('type')->num_rows();
	}
 }
  
?>