<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('format_indo')) {
  function format_indo($date){
    date_default_timezone_set('Asia/Jakarta');
    // array hari dan bulan
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    
    // pemisahan tahun, bulan, hari, dan waktu
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = substr($date,8,2);
    $waktu = substr($date,11,5);
    $hari = date("w",strtotime($date));
    $result = $tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$waktu;
    // $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$waktu;

    return $result;
  }
  

function facebook_time_ago($timestamp){  
      $time_ago = strtotime($timestamp);  
      $current_time = time();  
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;  
      $minutes      = round($seconds / 60 );        // value 60 is seconds  
      $hours        = round($seconds / 3600);       //value 3600 is 60 minutes * 60 sec  
      $days         = round($seconds / 86400);      //86400 = 24 * 60 * 60;  
      $weeks        = round($seconds / 604800);     // 7*24*60*60;  
      $months       = round($seconds / 2629440);    //((365+365+365+365+366)/5/12)*24*60*60  
      $years        = round($seconds / 31553280);   //(365+365+365+365+366)/5 * 24 * 60 * 60  
      if($seconds <= 60) {  
       return "Saat Ini";  
      } else if($minutes <=60) {  
       if($minutes==1){  
         return "satu menit yang lalu";  
       }else {  
         return "$minutes menit yang lalu";  
       }  
      } else if($hours <=24) {  
       if($hours==1) {  
         return "satu jam yang lalu";  
       } else {  
         return "$hours jam yang lalu";  
       }  
      }else if($days <= 7) {  
       if($days==1) {  
         return "Kemarin";  
       }else {  
         return "$days hari yang lalu";  
       }  
      }else if($weeks <= 4.3) {  //4.3 == 52/12
       if($weeks==1){  
         return "seminggu yang lalu";  
       }else {  
         return "$weeks minggu yang lalu";  
       }  
      } else if($months <=12){  
       if($months==1){  
         return "sebulan yang lalu";  
       }else{  
         return "$months bulan yang lalu";  
       }  
      }else {  
       if($years==1){  
         return "setahun yang lalu";  
       }else {  
         return "$years tahun yang lalu";  
       }  
      }  
 } 
}