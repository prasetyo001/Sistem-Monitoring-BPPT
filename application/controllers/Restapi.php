<?php

	require(APPPATH.'libraries/REST_Controller.php');

	/**
	* 
	*/
	class Restapi extends REST_Controller
	{
		
		function suhuRoom_get()
    	{
    		$this->load->model('suhu_model');
    		$this->load->database();
    		$id = $this->get('id');
    		$data = $this->suhu_model->rest_latestSuhu($id);
        	$this->response($data);
    	}
        
        function delay_get(){
            $this->load->model('suhu_model');
            $this->load->database();
            $id = $this->get('id');
            $data = $this->suhu_model->rest_delay($id);
            print "{".$data[0]->sendDelay."}";
        }

        function updatedata_get(){
            $this->load->model('data_suhu');

            $kd_room = $this->input->get('kd_room');
            $suhu = $this->input->get('suhu');
            $kelembapan = $this->input->get('kelembapan');

            $data = array(

                'kd_room' => $kd_room,
                'suhu' => $suhu,
                'kelembapan' => $kelembapan

            );

            $suhuMaks = $this->db->select('suhuA')->from('set_suhu')->get()->result();
            $suhuMin = $this->db->select('suhuB')->from('set_suhu')->get()->result();


            $this->data_suhu->input_data($data,'room1');

            if($suhu > $suhuMaks[0]->suhuA || $suhu < $suhuMin[0]->suhuB){
                echo "suhu diatas batas ketentuan";
            }

            $this->response("OK",200);

        }

        function addChatID_post(){
          $this->load->model('chatbot_model');

          $chatID = $this->input->post('chat_id');
          
          $data = array(
            'chat_id' => $chatID
          );

          $cek = $this->chatbot_model->getChatID($chatID);

          if($cek == FALSE){
            $this->chatbot_model->input_data($data,'telegram');
          }else{
            echo "data is exist";
          }
          

          $this->response("OK", 200);
       }
	}
 ?>