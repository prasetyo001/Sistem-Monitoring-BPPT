<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class  Data_suhu extends CI_Model {
    function data($number ,$offset){
      return $query = $this->db->order_by('time', 'DESC')->get('room1',$number,$offset)->result();
}

    function jumlah_data(){
      return $this->db->get('room1')->num_rows();
}
    function input_data($data, $tabel){
        $this->db->insert($tabel,$data);
}
}
