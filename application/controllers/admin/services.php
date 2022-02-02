<?php
session_start();
class Services extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model_freelance');
		$this->load->helper('text', 'url');
		$this->load->library('form_validation', 'session');
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
	} 
	public function index()
	{	
		$data['title'] = 'Services';
		$data['user'] = $this->model_freelance->UserAkun();

		$where2 = array ('user_id' => $this->session->userdata('username'));
		$data['record']= $this->model_freelance->find_data2($where2, 'services')->result();
		if($data['record'] == null){
			$this->template->load('templates/template', 'admin/empty/services', $data);
		}else{
			$this->template->load('templates/template', 'admin/services/index', $data);
		}
	}

	public function add()
	{	
		$data['title'] = 'Tambah Services';
		$data['user'] = $this->model_freelance->UserAkun();

		$this->form_validation->set_rules('judul_services', 'Judul Services', 'required|min_length[5]');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required|min_length[5]');   
		$this->form_validation->set_rules('keunggulan1', 'Keunggulan 1', 'required|min_length[5]');   
		$this->form_validation->set_rules('keunggulan2', 'Keunggulan 2', 'required|min_length[5]');   
		$this->form_validation->set_rules('keunggulan3', 'Keunggulan 3', 'required|min_length[5]');   
		$this->form_validation->set_rules('estimasi', 'Estimasi', 'required|callback_check_default');   
		$this->form_validation->set_rules('revisi', 'Revisi', 'required|callback_check_default');   
		$this->form_validation->set_rules('role', 'Role', 'required');   
		$this->form_validation->set_rules('price', 'Price', 'required');   
		// // $this->form_validation->set_rules('thumbnails', 'Thumbnails', 'required');   
		$this->form_validation->set_rules('k_kamu1', 'Keunggulan Kamu 1', 'required|min_length[5]');   
		$this->form_validation->set_rules('k_kamu2', 'Keunggulan Kamu 2', 'required|min_length[5]');   
		$this->form_validation->set_rules('k_kamu3', 'Keunggulan Kamu 3', 'required|min_length[5]');   
		// $this->form_validation->set_rules('note', 'Note', 'required');   
		// $this->form_validation->set_rules('tagline', 'Tagline', 'required');   
		$this->form_validation->set_rules('status', 'Status', 'required|callback_check_default');   

		$this->form_validation->set_message('required', '%s masih kosong', 'silahkan isi terlebih dahulu');
		$this->form_validation->set_message('min_length', '%s minimal 5 karakter');
		$this->form_validation->set_message('check_default', '%s masih kosong', 'silahkan pilih terlebih dahulu');

		// $this->form_validation->set_message('is_unique', '%s Email Sudah pernah daftar!');

		// $this->form_validation->set_error_delimiters('<span class="inline-block"></span>');

		if($this->form_validation->run() == FALSE)
		{
		// 	$data['jk']=  $this->model_freelance->get_data('jk')->result();
		// 	$data['agama']=  $this->model_freelance->get_data('agama')->result();
		// 	$data['pangkat']=  $this->model_freelance->get_data('pangkat')->result();
		// 	$data['jabatan']=  $this->model_freelance->get_data('jabatan')->result();
		// 	$data['bagian']=  $this->model_freelance->get_data('bagian')->result();


            //$this->load->view('user/form_input');
			// $this->template->load('templates/template','anggota/form_input', $data);
			// $this->load->view('admin/services/add', $data);
			$this->template->load('templates/template','admin/services/add', $data);

		}
		else
		{   
			$input_services = array (   
				'judul_services'	=> $this->input->post('judul_services'),
				'deskripsi'			=> $this->input->post('deskripsi'),
				'keunggulan1'		=> $this->input->post('keunggulan1'),
				'keunggulan2'		=> $this->input->post('keunggulan2'),
				'keunggulan3'		=> $this->input->post('keunggulan3'),
				'estimasi'          => $this->input->post('estimasi'),
				'revisi'			=> $this->input->post('revisi'),
				'role'				=> $this->input->post('role'),
				'price'				=> $this->input->post('price'),
				'k_kamu1'			=> $this->input->post('k_kamu1'),
				'k_kamu2'			=> $this->input->post('k_kamu2'),
				'k_kamu3'			=> $this->input->post('k_kamu3'),
				'status'			=> $this->input->post('status'),
				'user_id'			=> $this->session->userdata('username')
			);

			$this->model_freelance->insert_data($input_services, 'services');
			echo $this->session->set_flashdata('success','<div class="px-1 py-5 text-xs text-green-500 text-center" role="alert">Data Berhasil Di Simpan</div>');
			redirect('admin/services');
			// var_dump($input_services);
		}
	}

	function check_default($post_string){
		return $post_string == '0' ? FALSE : TRUE;
	}

	public function edit()
	{	
		$data['title'] = 'Edit Services';
		$data['user'] = $this->model_freelance->UserAkun();

		$data['record']=  $this->model_freelance->get_data('services');
		if(isset($_POST['submit'])){

			$id       			=  $this->input->post('id',true);
			$judul_services      =  $this->input->post('judul_services',true);
			$deskripsi      	=  $this->input->post('deskripsi',true);
			$keunggulan1    	=  $this->input->post('keunggulan1',true);
			$keunggulan2      	=  $this->input->post('keunggulan2',true);
			$keunggulan3      	=  $this->input->post('keunggulan3',true);
			$estimasi      		=  $this->input->post('estimasi',true);
			$revisi      		=  $this->input->post('revisi',true);
			// $thumbnail      	=  $this->input->post('thumbnail',true);
			$k_kamu1      		=  $this->input->post('k_kamu1',true);
			$k_kamu2      		=  $this->input->post('k_kamu2',true);
			$k_kamu3      		=  $this->input->post('k_kamu3',true);
			$note      			=  $this->input->post('role',true);
			$tagline      		=  $this->input->post('tagline',true);
			$role      			=  $this->input->post('role',true);
			$price      		=  $this->input->post('price',true);
			$status      		=  $this->input->post('status',true);

			$edit_services =  array(
				'judul_services' 	=> $judul_services,
				'deskripsi' 		=> $deskripsi,
				'keunggulan1' 		=> $keunggulan1,
				'keunggulan2' 		=> $keunggulan2,
				'keunggulan3' 		=> $keunggulan3,
				'estimasi' 			=> $estimasi,
				'revisi' 			=> $revisi,
				// 'thumbnail' 		=> $thumbnail,
				'k_kamu1' 			=> $k_kamu1,
				'k_kamu2' 			=> $k_kamu2,
				'k_kamu3' 			=> $k_kamu3,
				'note' 				=> $note,
				'tagline'			=> $tagline,
				'role'				=> $role,
				'price' 			=> $price,
				'status' 			=> $status
			);
			$where = array ('id' => $id);
			$this->model_freelance->update_data("services", $edit_services, $where);
			echo $this->session->set_flashdata('success','<div class="alert alert-success text-center" role="alert">Data Berhasil Di Ubah</div>');
			redirect('admin/services');
		}
		else{

			$id=  $this->uri->segment(4);
			$param  =   array('id'=>$id);            
			$data['record']= $this->model_freelance->find_data($param, "services")->row_array();
			// $this->load->view('admin/services/edit',$data);
			$this->template->load('templates/template', 'admin/services/edit',$data);

		}
	}

	function delete()
    {
        $id=  $this->uri->segment(4);
        $this->db->where('id',$id);
        $this->db->delete('services');

        echo $this->session->set_flashdata('msg','<div class="px-1 py-5 text-xs text-green-500 text-center" role="alert">Data Berhasil Di Hapus</div>');
        redirect('admin/services');
    }


	public function details()
	{	
		$data['title'] = 'Details Services';
		$data['user'] = $this->model_freelance->UserAkun();

		$id=  $this->uri->segment(4);
		$param  =   array('id'=>$id);            
		$data['record']= $this->model_freelance->find_data($param, "services")->row_array();
		// $this->load->view('admin/services/details', $data);
		$this->template->load('templates/template','admin/services/details', $data);

	}

	public function reviews($id)
	{	
		$data['title'] = 'Reviews Services';
		$data['user'] = $this->model_freelance->UserAkun();

		// $id=  $this->uri->segment(4);
		// $param  =   array('id'=>$id);            
        $data['record'] = $this->model_freelance->getJoinReviewServiceUser($id);

        $param2  =   array('id'=>$id);
		$data['record2']= $this->model_freelance->find_data($param2, "services")->row_array();
		// $this->load->view('admin/reviews', $data);
		$this->template->load('templates/template','admin/reviews', $data);

	}
}
