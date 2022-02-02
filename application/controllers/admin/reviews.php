<?php
session_start();
class Reviews extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model_freelance');
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
	} 
	public function index()
	{	
		$data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 

		$where = array ('email' => $this->session->userdata('username'));
		$data['akun']= $this->model_freelance->find_data($where, 'user')->row_array(); 
		$data['member']= $this->model_freelance->find_data($where, 'user')->row_array();
		
		$data['username'] = $this->session->userdata('username');

		$id=  $this->uri->segment(4);
		$param  =   array('id'=>$id);            
		$data['record']= $this->model_freelance->find_data($param, "reviews")->row_array();

        // $data['record'] = $this->model_freelance->getJoinReviewServiceUser($param);
		$this->template->load('templates/template', 'admin/review', $data);
		// $this->template->load('admin/menuAdminDekstop', 'components/review', $data);
	}
}