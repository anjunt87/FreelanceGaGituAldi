<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Explore extends CI_Controller {
public function __construct() {
parent::__construct();
$this->load->model('model_freelance');

$this->load->helper('text');
}
	public function index()
	{
		$data['recordServices'] = $this->model_freelance->getJoinServiceUser();

		// $this->template->load('','');
		$this->load->view('explore',$data);
	}
}