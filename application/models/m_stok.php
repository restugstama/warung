<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_stok extends CI_Model
{
	public function input_data($where)
	{
		$this->db->get_where('storage', $where );
	}

	//Kategori
	public function tampil_kategori()
    {
        $this->db->select('kategori.*');
        $this->db->from('kategori');
        $this->db->order_by('kategori.nama_kategori','ASC');
        return $this->db->get()->result();
    } 
	public function tampil_item()
    {
        $this->db->select('item.*');
        $this->db->from('item');
        $this->db->order_by('item.nama_barang','ASC');
        return $this->db->get()->result();
    }


  
}
