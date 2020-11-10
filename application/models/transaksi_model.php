<?php

class Transaksi_model extends CI_model{

	public function total_transaksi(){
		return $this->db->get('transaksi')->num_rows();
	}
 }
  
?>