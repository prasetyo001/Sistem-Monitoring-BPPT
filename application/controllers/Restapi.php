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
    		// $id = $this->get('id');
    		$data = $this->suhu_model->rest_latestSuhu();
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
            $this->load->model('chatbot_model');

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
            $row = $this->chatbot_model->getRow();
            $chatID = $this->chatbot_model->getChatID();

            $this->data_suhu->input_data($data,'room1');

            if($suhu > $suhuMaks[0]->suhuA || $suhu < $suhuMin[0]->suhuB){

              for ($i=0; $i <$row ; $i++) { 

                    
                $txt = urlencode("\n\n 🏢 Kode Ruang : ".$kd_room."\n☀️ Suhu : ".$suhu."\n💧 kelembapan : ".
                       $kelembapan."");

                $ch = curl_init("https://api.telegram.org/bot496182095:AAHminACg2Xb85KSij8x1ayIJCvZKOO43hU/sendMessage?chat_id=".$chatID[$i]->chat_id."&text=⚠️ Peringatan !! Suhu diluar batas ketentuan..".$txt."");
                
                    curl_exec($ch);
                    curl_close($ch);   
              }


            }

            $this->response("OK",200);

        }

        function addChatID_post(){
          $this->load->model('chatbot_model');

          $chatID = $this->input->post('chat_id');
          
          $data = array(
            'chat_id' => $chatID
          );

          $cek = $this->chatbot_model->verifyChatID($chatID);

          if($cek == FALSE){
            $this->chatbot_model->input_data($data,'telegram');
          }else{
            echo "data is exist";
          }
          

          $this->response("OK", 200);
       }
	}
 ?>