<?php
class Mlaporan extends CI_Model {

    var $tabel = 'room1';

    function __construct() {
        parent::__construct();
    }
    function getAllItem($limit, $offset) {
        $this->db->from($this->tabel);
        $this->db->order_by('time','DESC');
        $this->db->limit($limit, $offset);

        $query = $this->db->get();
        return $query->result();
    }

    function getRoom1($limit =null, $offset =null) {
        $this->db->from($this->tabel);
        $this->db->order_by('time','DESC');
        $this->db->where(array('kd_room' => '1'));
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }

    function getRoom2($limit =null, $offset =null) {
        $this->db->from($this->tabel);
        $this->db->order_by('time','DESC');
        $this->db->where(array('kd_room' => '2'));
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }

    function getRoom3($limit =null, $offset =null) {
        $this->db->from($this->tabel);
        $this->db->order_by('time','DESC');
        $this->db->where(array('kd_room' => '3'));
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }

    function getRoom4($limit =null, $offset =null) {
        $this->db->from($this->tabel);
        $this->db->order_by('time','DESC');
        $this->db->where(array('kd_room' => '4'));
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }

    function getRoom5($limit =null, $offset= null) {
        $this->db->from($this->tabel);
        $this->db->order_by('time','DESC');
        $this->db->where(array('kd_room' => '5'));
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result();
    }

}
?>
