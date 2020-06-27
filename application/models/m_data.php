<?php

class m_data extends CI_Model{
	public function data_berita(){
		$query = $this->db->query("SELECT * FROM berita");
		return $query->result();
	}
	public function input_berita($data){
		$this->db->insert('berita', $data);
	}


}


?>