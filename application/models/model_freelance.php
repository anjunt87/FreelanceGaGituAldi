<?php
class model_freelance extends CI_Model{
 
    function login($username,$password)
    {
        $chek=  $this->db->get_where('user',array('username'=>$username,'password'=>  md5($password)));
        if($chek->num_rows()>0){
            return 1;
        }
        else{
            return 0;
        }
    }
    
    public function get_data($table)
    {
        return $this->db->get($table);
    }

    public function insert_data($data, $table, $id)
    {
        $this->db->insert($table, $data);
    }

    // untuk mendapatkan 1 data yang akan di edit
    public function find_data($where, $table){
        return $this->db->get_where($table,$where);
    }

    public function find_data2($where2, $table){
        return $this->db->get_where($table,$where2);
    }

    // untuk update data
    public function update_data($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table, $where);
    }

    public function CustomImage(){
        $query = "SELECT * from `icon_gambar` WHERE `icon_gambar`.`id` = '3' ";
        return $this->db->query($query);
    }

     public function CustomFav(){
        $query = "SELECT * from `icon_gambar` WHERE `icon_gambar`.`id` = '2' ";
        return $this->db->query($query);
    }

    public function UserAkun()
    {   
        $data = $this->db->get_where('user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array(); 
        $where = array ('email' => $this->session->userdata('username'));
        $data = $this->model_freelance->find_data($where, 'user')->row_array();
        // $data = $this->model_freelance->getJoinUserDetailUser()->row_array();
        return $data;
    }

    public function getJoinServiceUser() {
        $this->db->select('*');
        $this->db->from('services');
        $this->db->join('user','services.user_id = user.email');
        $query = $this->db->get();
        return $query->result();
    }

    public function getJoinUserDetailUser() {
        // $id = $this->session->userdata('username');
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('user_detail','user.email = user_detail.user_id');
         // $this->db->where('email', $id);
        $result = $this->db->get();
        return $result;
    }

    //  public function getJoinServiceUserReviews() {
    //     $this->db->select('*');
    //     $this->db->from('services');
    //     $this->db->join('user','services.user_id = user.email');
    //     $this->db->join('reviews','services.id = reviews.id', 'left');
    //     $query = $this->db->get();
    //     return $query->result();
    // }

    public function getJoinReviewServiceUser($id) {
        $this->db->select('*');
        $this->db->from('reviews');
        $this->db->join('user','reviews.buyer_id = user.email');
        $this->db->join('services','reviews.services_id = services.id', 'left' , $id);
        // $this->db->where('services.services_id', $id);
        $this->db->where('services_id', $id);
        $result = $this->db->get();
        return $result;
    

        // $this->db->select();
        // $this->db->from('reviews as b');
        // $this->db->join('user as a','a.id = b.user_id');
        // $this->db->join('services as c','c.id = b.services_id', 'left');
        // // $this->db->join('services','reviews.services_id = services.id', 'left' , $id);
        // $this->db->where('b.services_id', $id);
        // $result = $this->db->get();
        // return $result;
    }

    public function getJoinReviewServiceUser2() {
        $user =  $this->session->userdata('username');
        $query = "SELECT * from `reviews` JOIN `user` on `reviews`.`buyer_id` = `user`.`email` JOIN `services` ON `services`.`id` = `reviews`.`services_id` WHERE `reviews`.`freelance_id` = '$user' ORDER BY `reviews`.`id` ASC";
         return $this->db->query($query);
    }

     public function getJoinOrdersServiceUser() {
        $user =  $this->session->userdata('username');
        $query = "SELECT * from `order` JOIN `user` on `order`.`buyer_id` = `user`.`email` JOIN `services` ON `services`.`id` = `order`.`services_id` WHERE `order`.`freelance_id` = '$user' ORDER BY `order`.`id` ASC";
         return $this->db->query($query);
    }
} 