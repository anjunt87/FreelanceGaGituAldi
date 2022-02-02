<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menu extends CI_Controller {


    // public function __construct()
    // {
    //     parent::__construct();
    //     is_logged_in();
    // }

    function __construct() {
        parent::__construct();
        $this->load->model('model_freelance');
        if ($this->session->userdata('username')=="") {
            redirect('auth');
        }
    } 

    public function index()
    {
        $data['title'] = 'Menu Management';
        $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('email' => $this->session->userdata('username'));
        $data['akun']= $this->model_freelance->find_data($where, 'user')->row_array();
        

        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('menu', 'Menu', 'required');

        if( $this->form_validation->run() == false){

           $this->template->load('templates/template','menu/index', $data);
       } else {
        $this->db->insert('user_menu', ['menu' => $this->input->post('menu')]);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Menu berhasil ditambahkan
          </div>');
        redirect('menu');
    }
}

public function submenu()
{   
    $data['title'] = 'SubMenu Management';

    $data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
    $where = array ('email' => $this->session->userdata('username'));
    $data['akun']= $this->model_freelance->find_data($where, 'user')->row_array();

    $data['user'] = $this->db->get_where('user', ['email' => 
        $this->session->userdata('email')])->row_array();
    $this->load->model('Menu_model','menu');

    $data['subMenu'] = $this->menu->getSubMenu();
    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('menu_id', 'Menu', 'required');
    $this->form_validation->set_rules('url', 'URL', 'required');
    $this->form_validation->set_rules('icon', 'icon', 'required');

    if( $this->form_validation->run() == false){
        $this->template->load('templates/template','menu/submenu', $data);

    }else {
       $data = [
        'title' => $this->input->post('title'),
        'menu_id' => $this->input->post('menu_id'),
        'url' => $this->input->post('url'),
        'icon' => $this->input->post('icon'),
        'is_active' => $this->input->post('is_active')
    ];
    $this->db->insert('user_sub_menu', $data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New sub menu added!</div>');
    redirect('menu/submenu');
}
}

}