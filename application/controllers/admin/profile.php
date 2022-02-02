<?php
session_start();
class Profile extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model_freelance');
		$this->load->library('upload');
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}

	public function index()
	{	
		$data['title'] = 'My Profile';
		$data['user'] = $this->model_freelance->UserAkun();

		// $where2 = array ('email' => $this->session->userdata('username'));
		// $data['record']= $this->model_freelance->find_data2($where2, 'user')->result();
		$data['record']= $this->model_freelance->getJoinUserDetailUser()->result();
		$this->template->load('templates/template', 'users/profile', $data);
		
	}

	public function edit()
	{
		$data['title'] = 'Edit Profile';
		$data['user'] = $this->model_freelance->UserAkun();
		$data['username'] = $this->session->userdata('username');
		
		if(isset($_POST['submit'])){
            // proses kategori
			$email 			=  $this->input->post('email');
			$nama_lengkap   =  $this->input->post('nama_lengkap');
			// $bagian     =  $this->input->post('bagian');
			// $kontak        =  $this->input->post('kontak');
			$biografi             =  $this->input->post('bio');

			$foto           =  $_FILES['foto']['name'];


			if($foto) {
				$config['upload_path'] = './assets/img/avatars/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|svg';
				// $config['max_size'] = 10000;
				// $config['max_width'] = 1024;
				// $config['max_height'] = 768; 
				$config['remove_space'] = TRUE;
				$config['overwrite'] = TRUE;

				$this->upload->initialize($config);
				if(!$this->upload->do_upload('foto')){
				// 	$foto="";
				// }else{
				// 	$return = array('result' => 'failed', 'file_name' => '', 'error' => $this->upload->display_errors());
				// 	return $return;
					$data ['error'] = $this->upload->display_errors();
				}else{
					$upload_image = $this->upload->data();
				}

			}
			$edit_user =  array(   
				'email'         => 	$email,
				'nama_lengkap'	=>	$nama_lengkap,
				// 'bagian'		=>	$bagian,
				// 'kontak'		=>	$kotak,
				// 'biografi'		=> 	$biografi
				'foto'	=>	$foto

			);

			$edit_user_detail =  array(   
				// 'email'         => 	$email,
				// 'nama_lengkap'	=>	$nama_lengkap,
				// 'bagian'		=>	$bagian,
				// 'kontak'		=>	$kotak,
				'bio'		=> 	$biografi,
				'foto'	=>	$foto

			);

			$where = array ('email' => $email);
			$this->model_freelance->update_data('user', $edit_user, $where);
			$where2 = array ('user_id' => $email);
			$this->model_freelance->update_data('user_detail', $edit_user_detail, $where2);

			echo $this->session->set_flashdata('msg','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Ubah</div>');
			redirect('admin/profile');
		}
		else{

            //menampilkan data db di edit select option
            // $data['jk']=  $this->model_freelance->get_data('jk')->result();
			
			$id=  $this->uri->segment(4);
			$param  =   array('email'=>$id);            
			// $data['record']= $this->model_freelance->find_data($param, "user")->row_array();
			$data['record']= $this->model_freelance->getJoinUserDetailUser()->row_array();

			$this->template->load('templates/template','users/editprofile', $data);
		}
	}
}


