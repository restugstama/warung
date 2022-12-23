<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventory extends CI_controller{

	public function index()
	{
		if($this->session->userdata('email') != TRUE )
		{
			redirect('login');
		}

		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


		$data['title'] = 'Inventory';
		$this->load->view('temp_us/header',$data);
		$this->load->view('temp_us/topbar', $data);
		$this->load->view('temp_us/sidebar');
		$this->load->view('inven/inven');
		$this->load->view('temp_us/footer') ;
	}


	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('login');
	}

}
 