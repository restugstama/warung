<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_stok extends CI_Model
{
	public function input_data($where)
	{
		$this->db->get_where('storage', $where );
	}

 
	public function join_barang()
	{
		$this->db->select('item.*');
		$this->db->from('item');
		$this->db->order_by('item.nama_barang','ASC');
		return $this->db->get()->result();
	}

    public function join_stok()
	{
		$this->db->select('item.*, item.nama_barang');
		$this->db->select('item.*, item.barcode');
		$this->db->from('item');
		$this->db->join('storage', 'storage.id_storage=item.id_item');
		$this->db->order_by('item.nama_barang','ASC');
		$this->db->order_by('item.barcode','ASC');
		return $this->db->get()->result();
	}




}
