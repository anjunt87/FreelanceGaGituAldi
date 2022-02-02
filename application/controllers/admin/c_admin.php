<?php
session_start();
class C_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('model_freelance');

		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->library('session');
	}
	public function index() {
			// $data['contents']=  $this->model_freelance->get_data('data_ktp')->num_rows();
		$data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 

		$where = array ('email' => $this->session->userdata('username'));
		$data['akun']= $this->model_freelance->find_data($where, 'user')->row_array(); 
		$data['member']= $this->model_freelance->find_data($where, 'user')->row_array();

		$param  =   array ('freelance_id' => $this->session->userdata('username'));
		$data['record']= $this->model_freelance->find_data($param, "reviews")->result_array();

		// $data['record']= $this->model_freelance->getJoinReviewServiceUser2()->result_array();

 		  // $this->template->load('template','admin/index',$data);
		$this->template->load('templates/template', 'admin/dashboard', $data);  

	}

	public function explore() {

		$data['title'] = 'Explore';
		$data['user'] = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
		$where = array ('email' => $this->session->userdata('username'));
		$data['akun']= $this->model_freelance->find_data($where, 'user')->row_array(); 

		$data['username'] = $this->session->userdata('username');
		   // $data['recordServices'] = $this->model_freelance->get_data('services');
		$data['recordServices'] = $this->model_freelance->getJoinServiceUser();
 		  // $this->template->load('templates/template','admin/index',$data);
		   // $this->load->view('admin/dashboard', $data);
		$this->template->load('templates/template', 'admin/explore', $data);

	}

	public function allUser()
	{
		$data['title'] = 'All User';
		$data['user'] = $this->db->get_where('user', ['email' => 
			$this->session->userdata('username')])->row_array();
		$data['allUser'] = $this->db->get('user')->result_array();

		if ($this->input->post('keyword') ) {
			$data['allUserCari'] = $this->Admin_model->CariallUser();
		}
		$this->template->load('templates/template', 'users/user', $data);
	}

	public function tambahUser()
	{
		$data['title'] = 'All User';
		$data['user'] = $this->db->get_where('user', ['email' => 
			$this->session->userdata('email')])->row_array();
		$data['allUser'] = $this->db->get('user')->result_array();

    // menampung hasil inputan
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'email', 'required|trim|is_unique[user.email]', [
			'is_unique' => 'email Sudah pernah daftar!',
		]);
		$this->form_validation->set_rules('email', 'email');
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]' , [
			'matches' => 'Password Tidak Sama!',
			'min_length' => 'Panjang password bermasalah!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		$this->form_validation->set_rules('role_id', 'role_id', 'required|trim');
    // jika inputan kosong
		if( $this->form_validation->run() == false){
			$data['title'] = 'User role';
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/topbar', $data);
			$this->load->view('admin/tambahUser', $data);
			$this->load->view('templates/footer');
		} else {
			$data = [
				'nama_lengkap' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' =>'default.jpg',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'role_id' => htmlspecialchars($this->input->post('role_id', true)),
				'is_active' => 1,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
				Hallo, User sudah terdaftar sekarang
				</div>');
			redirect('admin/allUser');
		}
	}

	public function deleteuser($id)
	{
		$this->Admin_model->deleteuser($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
			User berhasil dihapus
			</div>');
		redirect('admin/allUser');
	}

	public function role()
	{
		$data['title'] = 'Role';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get('user_role')->result_array();

		$this->template->load('templates/template', 'users/role', $data);
	}

	public function roleAccess($role_id)
	{
		$data['title'] = 'Role Access';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

		$this->db->where('id !=', 1);
		$data['menu'] = $this->db->get('user_menu')->result_array();

		$this->template->load('templates/template', 'users/role-acces', $data);

	}

	public function changeAccess()
	{
		$menu_id = $this->input->post('menuId');
		$role_id = $this->input->post('roleId');

		$data = [
			'role_id' => $role_id,
			'menu_id' => $menu_id
		];

		$result = $this->db->get_where('user_acces_menu', $data);

		if ($result->num_rows() < 1) {
			$this->db->insert('user_acces_menu', $data);
		} else {
			$this->db->delete('user_acces_menu', $data);
		}

		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
	}
}
?>  