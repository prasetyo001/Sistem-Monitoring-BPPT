<?php

defined('BASEPATH') OR exit('No direct script access allowed');
	
	class  Chatbot_model extends CI_Model {
	
	function verifyChatID($data){
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

	function getRow(){
		return $this->db->get('telegram')->num_rows();
	}

	function getChatID(){
		return $this->db->select('chat_id')->get('telegram')->result();
	}
}
