<?php
/**
 *
 */
class Laporan extends CI_Model
{

  function __construct()
  {

  }
  public function _select($select,$limit=null, $offset=null){


    $this->db->limit($limit, $offset);
    return $this->db->query($select)->result();
  }


  public function v_get($where,$rm, $limit=null, $offset=null)
  {
    $this->db->order_by('time','DESC');
    $this->db->limit($limit, $offset);

      $data = $this->db->select('*')
          ->from('room1')
          ->where($where)
          ->where_in($rm);

    return $this->db->get($limit, $offset)
          ->result();
}
public function h_get($where, $limit, $offset)
{
    $this->db->select('*')
        ->from('room1')
        ->where($where);

    $this->db->order_by('time','DESC');

  return  $result = $this->db->get('',$limit, $offset)
        ->result();
}
public function h_row($where, $limit=null, $offset=null)
{
    $this->db->select('*')
        ->from('room1')
        ->where($where);

    $this->db->order_by('time','DESC');
    $this->db->limit($limit, $offset);
  return  $result = $this->db->get()
        ->num_rows();
}


}
 ?>
