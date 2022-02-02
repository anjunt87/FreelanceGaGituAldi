<?php
session_start();
class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model_freelance');
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}
	public function index() {
		// $data['akun'] = $this->model_freelance->UserAkun();
		$data['title'] = 'Dashboard';
		$data['user'] = $this->model_freelance->UserAkun();

		$data['record']= $this->model_freelance->getJoinReviewServiceUser2()->result_array();
		$data['record2']= $this->model_freelance->getJoinOrdersServiceUser()->result_array();

 		  // $this->template->load('template','admin/index',$data);
		$this->template->load('templates/template', 'admin/dashboard', $data);   
	}
}
?>  