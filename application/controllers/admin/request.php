<?php
session_start();
class Request extends CI_Controller {

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
		$data['title'] = 'Requests';
		$data['user'] = $this->model_freelance->UserAkun();

		$where2 = array ('user_id' => $this->session->userdata('username'));
		$data['record'] = $this->model_freelance->find_data2($where2, 'request')->result();
		if($data['record'] == null){
			$this->template->load('templates/template', 'admin/empty/requests', $data);
		}else{
			$this->template->load('templates/template', 'admin/requests/details', $data);
		}
	}
}
