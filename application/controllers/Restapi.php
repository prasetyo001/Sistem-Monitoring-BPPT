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

    	function warningSuhu_get(){
    		$this->load->model('suhu_model');
    		$this->load->database();
    		$id = $this->get('id');
    		$data = $this->suhu_model->rest_warningSuhu($id);
    		$this->response($data);
    	}


        function delay_get(){
            $this->load->model('suhu_model');
            $this->load->database();
            $id = $this->get('id');
            $data = $this->suhu_model->rest_delay($id);
            $this->response($data);
        }
	}
 ?>
