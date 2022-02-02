<?php

function chek_session()
{
    $CI= & get_instance();
    $session=$CI->session->userdata('status_login');
    if($session!='oke')
    {
        redirect('auth/login');
    }
}


function check_access($role_id, $menu_id)
{
    $ci = get_instance();

    $ci->db->where('role_id', $role_id);
    $ci->db->where('menu_id', $menu_id);
    $result = $ci->db->get('user_acces_menu');

    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

//function chek_session_login()
//{
//    $CI= & get_instance();
//    $session=$CI->session->userdata('status_login');
//    if($session=='oke')
//    {
 //       redirect('dashboard');
 //   }
//}
?>
