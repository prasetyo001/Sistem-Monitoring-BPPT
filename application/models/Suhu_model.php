<?php

class Suhu_model extends CI_Model{

	function get_suhu_room($kd, $limit, $offset){

		$this->db->order_by('time','DESC');
    $this->db->where(array('kd_room' => $kd));
		return $this->db->get('room1',$limit, $offset)->result();

	}
	function jumlah_data($kd){
		return $this->db->where(array('kd_room' => $kd ))
				->get('room1')
				->num_rows();
}

	function data($number ,$offset){
      return $query = $this->db->order_by('time', 'DESC')->get('room1',$number,$offset)->result();
 	}

	function rest_latestSuhu($id){
 		return $this->db->where('kd_room',$id)->order_by('time','DESC')->get('room1',1)->result();
 	}

 	function rest_warningSuhu($id){
 		$min = 18;
 		$max = 24;
 		$where = "suhu < '$min' OR suhu > '$max'";
	 	$this->db->where($where);
	 	$this->db->where('kd_room', $id);

 		return $this->db->order_by('time', 'DESC')->get('room1',1)->result();
 	}

 	function rest_delay($id){

 		$this->db->where('kd_room',$id);
 		return $this->db->get('delay')->result();
 	}
}
