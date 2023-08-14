<?php 
class M_Aplikasi extends CI_Model{

	function tampil_data(){
		return $this->db->get('tbl_aplikasi');
	}

	function input_data($data, $table){
		$this->db->insert($table,$data);
	}

	function view_data($where, $table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_count_apk()
	{
		$sql = "SELECT count(berkas) as berkas FROM tbl_aplikasi";
		$result = $this->db->query($sql);
		return $result->row()->berkas;
	}

	public function countAllAplikasi(){
		return $this->db->get('tbl_aplikasi')->num_rows();
	}

	public function getAplikasi($limit, $start){
		return $this->db->get('tbl_aplikasi', $limit, $start)->result_array();
	}


}