<?php
class View_suhu extends CI_Model{
   public function suhu($kodesuhu)
   {
		   $this->db->order_by('time','DESC');
    	 $this->db->where(array('kd_room' => $kodesuhu));
		   return $this->db->get('room1','1')->result();
   }
}
?>
