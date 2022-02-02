<?php
session_start();
class Orders extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model_freelance');
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}
	public function index()
	{	
		$data['title'] = 'Order';
		$data['user'] = $this->model_freelance->UserAkun(); 
		
		$data['username'] = $this->session->userdata('username');
		// $this->template->load('','');
		$this->template->load('templates/template', 'admin/orders/submit', $data);
	}
}
