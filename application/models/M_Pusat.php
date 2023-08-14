<?php 
class M_Pusat extends CI_Model{

	function tampil_data(){
		return $this->db->get('tbl_pusat');
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

	public function get_count_pst()
	{
		$sql = "SELECT count(berkas) as berkas FROM tbl_pusat";
		$result = $this->db->query($sql);
		return $result->row()->berkas;
	}

}