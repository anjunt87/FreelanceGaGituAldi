<?php
class auth extends CI_Controller{

    function __construct() { 
        parent::__construct();
        // load adalah fungsi membuka suatu fungsi
        // load model berfungsi sebagai membuka informasi yang ada di database
        $this->load->model('model_auth');
        $this->load->library(array('form_validation','session'));
        $this->load->helper('url', 'form');

    }
    
    function index(){
      // load view melihat interface form login

        $data['title'] = 'Masuk';
        $this->load->view('auth/form_login', $data);

        // $this->load->view('modals/form_login');
    }

    function login(){

      // infutan di form login
        $username    = $this->input->post('email',TRUE);
        $password = md5($this->input->post('password',TRUE));

    // validasi data username dan password
        $validate = $this->model_auth->validate($username,$password);

        $user = $this->db->get_where('user', ['email' => $username])->row_array();
        if($user) {
    // if(jika) infutan di form login ada di database maka tampilkan hal
            if($user ['is_active'] == 1) 
            {
                if($validate->num_rows() > 0)
                {
                    $data  = $validate->row_array();
                    $nama_lengkap = $data['nama_lengkap'];
                    $username = $data['email'];
                    $role_id = $data['role_id'];
                    $sesdata = array(
                        'nama_lengkap'  => $nama_lengkap,
                        'username'     => $username,
                        'role_id'     => $role_id,
                        'logged_in' => TRUE
                    );

                // mengindentifikasi halaman sesuai role uder
                    $this->session->set_userdata($sesdata);
                    $this->session->userdata($sesdata);
                // $this->session->has_userdata($sesdata);

                // access login for admin
                    if($role_id === '1'){
                       $this->session->set_flashdata('msg', '<div class="px-1 py-5 text-md text-green-500 text-center" role="alert">Selamat Datang!</div>');
                       redirect('admin/dashboard');

                // access login for staff
                   }elseif($role_id === '2'){
                     redirect('member/c_member');
                 } 
             }

             else{
                echo $this->session->set_flashdata('msg','<div class="px-1 py-5 text-md text-red-500 text-center" role="alert">Username or Password is Wrong !</div>');
                redirect('auth');
            }
        }else{
            echo $this->session->set_flashdata('msg','<div class="px-1 py-5 text-md text-red-500 text-center" role="alert">Akun Sudah Tidak Aktif !</div>');
            redirect('auth');
        }
    }
    else{
        echo $this->session->set_flashdata('msg','<div class="px-1 py-5 text-md text-red-500 text-center" role="alert">Email Belum Terdaftar !</div>');
        redirect('auth');
    }
}

function signup()
{
    $data['title'] = 'Pendaftaran';

    $this->form_validation->set_rules('nama', 'Nama', 'required');
    // $this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
    $this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

    if($this->form_validation->run() === FALSE){
        $this->load->view('auth/form_signup', $data);
    } else {
                // Encrypt password
        $enc_password = md5($this->input->post('password'));

        $this->model_auth->register($enc_password);

                // Set message
        $this->session->set_flashdata('msg', '<div class="px-1 py-5 text-md text-green-500 text-center" role="alert">Email kamu sudah terdaftar silahkan Login!</div>');

        redirect('auth');
    }
}

function logout()
{   
    // Log user out
    // hapus data user ketika keluar
    $this->session->unset_userdata('logged_in');
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('username');
    $this->session->set_flashdata('msg', '<div class="px-1 py-5 text-md text-red-500 text-center" role="alert">You have been logout!</div>');
    redirect('auth');
}

// Check if username exists
// public function check_username_exists($username){
//     $this->form_validation->set_message('check_username_exists', 'Usrname Sudah diambil. Silahkan gunakan username lain');
//     if($this->model_auth->check_username_exists($username)){
//         return true;
//     } else {
//         return false;
//     }
// }

        // Check if email exists
public function check_email_exists($email){
    $this->form_validation->set_message('check_email_exists', 'Email Sudah diambil. Silahkan gunakan email lain');
    if($this->model_auth->check_email_exists($email)){
        return true;
    } else {
        return false;
    }
}
}