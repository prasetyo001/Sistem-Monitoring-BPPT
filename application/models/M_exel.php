<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_exel extends CI_Model {

    var $tabel = 'room1';

    function __construct() {
        parent::__construct();
    }
    function getAll() {
        $this->db->from($this->tabel);
        $this->db->order_by('time','DESC');
        $this->db->limit('10');
        $query = $this->db->get();
        return $query->result();
  }
}
/* End of file ${TM_FILENAME:${1/(.+)/l.php/}} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)//:application/models/${1/(.+)/l.php/}} */
