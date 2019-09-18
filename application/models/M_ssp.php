<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ssp extends CI_Model {

	public function get_data($table)
	{
		return $this->db->get($table);
	}

	public function  get_where_data($table, $where)
	{
		return $this->db->get_where($table, $where);
	}

	public function join_data($table1, $table2, $where)
	{
		$this->db->select('*');
		$this->db->from($table1);
		$this->db->join($table2, $where);

		return $this->db->get();
	}

	public function insert_data($table, $data)
	{
		$this->db->insert($table, $data);
	}

	public function edit_data($table, $where, $field)
	{
		$this->db->where($where);
		$this->db->update($table, $field);
	}

	public function hapus_data($table, $id)
	{
		$this->db->where($id);
		$this->db->delete($table);
	}
}