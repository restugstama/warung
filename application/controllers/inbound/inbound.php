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


		$data['title'] = 'Tambah Data Inbound';
		$this->load->view('temp_us/header',$data);
		$this->load->view('temp_us/topbar', $data);
		$this->load->view('temp_us/sidebar');
		$this->load->view('inven/inbound');
		$this->load->view('temp_us/footer') ;
	}

	public function tambah_data()
	{
		if($this->session->userdata('email') != TRUE )
		{
			redirect('login');
		} 

		$this->form_validation->set_rules('faktur','Faktur','required');
		$this->form_validation->set_rules('nama_agen','Nama_agen','required');
		$this->form_validation->set_rules('total_harga','Total_harga','required');
		$this->form_validation->set_rules('date_inbound','Date_inbound','required');
		$this->form_validation->set_rules('nama_barang','Nama_barang','required');
		$this->form_validation->set_rules('qty','Qty','required');
		$this->form_validation->set_rules('harga_barang','Harga_barang','required');
		$this->form_validation->set_rules('harga_jual','Harga_jual','required');
		$this->form_validation->set_rules('exp_date','Exp_date','required');
		$this->form_validation->set_rules('barcode','Barcode','required');

		$faktur 			= $this->input->post('faktur');
		$nama_agen			= $this->input->post('nama_agen');
		$total_harga		= $this->input->post('total_harga');
		$date_inbound		= $this->input->post('date_inbound');
		$nama_barang		= $this->input->post('nama_barang');
		$qty 				= $this->input->post('qty');
		$harga_barang		= $this->input->post('harga_barang');
		$harga_jual			= $this->input->post('harga_jual');
		$exp_date			= $this->input->post('exp_date');
		$barcode			= $this->input->post('barcode');

		$data = array(
			'faktur'		=> $faktur,
			/*htmlspecialchars($this->input->post('faktur', true )),*/
			'nama_agen'		=> $nama_barang,
			/*htmlspecialchars($this->input->post('nama_agen', true)),*/
			'total_harga'	=> $total_harga,
			/*htmlspecialchars($this->input->post('total_harga', true)),*/
			'date_inbound'	=> $date_inboud,
			/*htmlspecialchars($this->input->post('date_inbound', true)),*/
			'nama_barang'	=> $nama_barang,
			/*htmlspecialchars($this->input->post('nama_barang', true)),*/
			'qty'			=> $qty,
			/*htmlspecialchars($this->input->post('qty', true)),*/
			'harga_barang'	=> $harga_barang,
			/*htmlspecialchars($this->input->post('harga_barang', true)),*/
			'harga_jual'	=> $harga_jual,
			/*htmlspecialchars($this->input->post('harga_jual', true)),*/
			'exp_date'		=> $exp_date,
			/*htmlspecialchars($this->input->post('exp_date', true)),*/
			'barcode'		=> $barcode
			/*htmlspecialchars($this->input->post('barcode', true)),*/
		);

		$this->m_inbound->input_data($data, 'tambah_data' );
		redirect('inbound/inventory');

	}
}