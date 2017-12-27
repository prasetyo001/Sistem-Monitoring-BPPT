<?php

defined('BASEPATH') OR exit('No direct script access allowed');
	
	class  Chatbot_model extends CI_Model {
	
	function getChatID($data){
		$this->db->where('chat_id',$data);
		$query = $this->db->get('telegram');
		if($query->num_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function input_data($data, $tabel){
	    $this->db->insert($tabel,$data);
	}
}
