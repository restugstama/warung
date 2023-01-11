<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbound extends CI_controller{

	public function index()
	{
		if($this->session->userdata('email') != TRUE )
		{
			redirect('login');
		}

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['inbound'] = $this->m_inbound->view()->result();
		$data['datakategori'] = $this->m_inbound->tampil_kategori();
		$data['item'] = $this->m_inbound->join_item(); 
		$data['kode'] = $this->m_inbound->faktur();
		$data['title'] = 'Tambah Data Inbound';
		$this->load->view('temp_us/header',$data);
		$this->load->view('temp_us/topbar', $data);
		$this->load->view('temp_us/sidebar');
		$this->load->view('inbound/inbound', $data);
		$this->load->view('temp_us/footer');
	}

	public function data_inbound()
	{ 

		$faktur 			= $this->input->post('faktur');
		$nama_agen			= $this->input->post('nama_agen');
		$total_harga		= $this->input->post('total_harga');
		$tanggal 			= $this->input->post('tanggal');

		$data = array(
			'faktur'		=> $faktur, 
			'nama_agen'		=> $nama_agen,
			'total_harga'	=> $total_harga, 
			'tanggal'		=> $tanggal 
		);  

		$this->m_inbound->input_data($data, 'tambah_inbound');
		redirect('inbound/inbound');
	}

	public function tambah_kategori() 
	{
		$nama_kategori		= $this->input->post('nama_kategori');

		$data = array( 'nama_kategori' => $nama_kategori );
		$this->m_inbound->input_kategori($data, 'kategori');
		redirect('inbound/inbound');
	}

	public function tambah_item()  
	{
		$nama_barang		= $this->input->post('nama_barang');
		$barcode			= $this->input->post('barcode');
		$id_kategori		= $this->input->post('id_kategori');

		$data = array( 'nama_barang' => $nama_barang, 'barcode' => $barcode,
			'id_kategori' => $id_kategori
		);
		$this->m_inbound->input_item($data, 'item');
		redirect('inbound/inbound');
	}

	public function insert_data($faktur)
	{
		if($this->session->userdata('email') != TRUE )
		{
			redirect('login'); 
		}
		$data['title'] = 'Tambah data';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$where = array('id_inbound' => $faktur); 
		$data['datakategori'] = $this->m_stok->tampil_kategori();
		$data['dataitem'] = $this->m_stok->tampil_item();
		$data['inbound'] = $this->m_inbound->inset_data($where, 'tambah_inbound')->result();
		$data['inbound_detail'] = $this->m_inbound->join_inbound_detail($faktur);	 

		$this->load->view('temp_us/header',$data);
		$this->load->view('temp_us/topbar', $data);
		$this->load->view('inbound/tambah_data', $data);
		$this->load->view('temp_us/footer');
	}

	public function input_produk_inbound ()
	{
		$id_inbound = $this->input->post('id_inbound');
		$nama_produk = $this->input->post('nama_produk');
		$qty = $this->input->post('qty');
		$harga = $this->input->post('harga_beli');
		$exp_date = $this->input->post('exp_date');

		$data = array( 
			'id_inbound' => $id_inbound,			
			'id_item' => $nama_produk,
			'qty' => $qty,
			'harga' => $harga,
			'exp_date' => $exp_date,
		);

		$this->m_inbound->input_inbound_detail($data, 'tb_ibound_detail');
		redirect('inbound/inbound');
	}

}