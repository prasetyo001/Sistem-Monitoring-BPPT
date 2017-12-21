<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Db_setmonitoring extends CI_Model {

  function input_data($data, $tabel){
    $this->db->update($tabel, $data);
  }

  function ambil_suhu(){
    return $this->db->get('set_suhu','')->result();
  }

  function ambil_kelembaban(){
    return $this->db->get('set_kelembaban','')->result();
  }
  function delay($data, $tabel){
    $this->db->update($tabel, $data);
  }

}
/* End of file ${TM_FILENAME:${1/(.+)/lSet_monitoring.php/}} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Set_monitoring/:application/models/${1/(.+)/lSet_monitoring.php/}} */
