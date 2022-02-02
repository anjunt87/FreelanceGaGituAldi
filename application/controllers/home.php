<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('model_freelance');

$this->load->helper('text');
}
	public function index()
	{
		$data['recordServices'] = $this->model_freelance->getJoinServiceUser();
		$data['CustomImage'] = $this->model_freelance->CustomImage()->row_array();
		$data['CustomFav'] = $this->model_freelance->CustomFav()->row_array();


		$this->load->view('index', $data);
	}
}
