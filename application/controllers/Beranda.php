<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		if(!$this->session->userdata('email')){
			redirect('Auth');
		}else {
			$data['register'] 			= $this->db->get_where('user', ['email' =>
			$this->session->userdata('email')])->row_array();
			$data['title'] 				= 'Logo';
			$this->load->view('Template/Beranda_header',$data);
			$this->load->view('index');
			$this->load->view('Template/Beranda_footer');
			
		}
		
	}
}
