<?php
class model_auth extends CI_Model{
    
    function validate($email,$password){
      //validasi data pada databse user, untuk mengindentifikasi role id ny
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('user',1);
    return $result;
    
  }

  public function register($enc_password){
   // User data array
   $data = array(
    'username'  => $this->input->post('email'),
    'nama_lengkap' => $this->input->post('nama'),
    'email' => $this->input->post('email'),
    // 'username' => $this->input->post('username'),
    'password' => $enc_password,
    'role_id' => 2,
    'date_created' => date('Y-m-d'),
    'is_active' => 1,
    'foto' => 'default.png'
   );
  // Insert user
   return $this->db->insert('user', $data);
  }

  // Check username exists
  // public function check_username_exists($username){
  //  $query = $this->db->get_where('user', array('username' => $username));
  //  if(empty($query->row_array())){
  //   return true;
  //  } else {
  //   return false;
  //  }
  // }

  // Check email exists
  public function check_email_exists($email){
   $query = $this->db->get_where('user', array('email' => $email));
   if(empty($query->row_array())){
    return true;
   } else {
    return false;
   }
  }    
}
