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
                $this->data_suhu->input_data($data,'room1');

             $this->response("OK",200);

        }
	}
 ?>