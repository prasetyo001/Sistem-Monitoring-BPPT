<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_excel extends CI_Controller {

  public function __construct() {
      parent::__construct();
      $this->load->model('mlaporan');
  }
      function export_history($segment = null){
         $offset = $segment;
         $data['title'] = "Laporan_Monitoring-(".date('d-F-Y').").xls"; //judul title
         $data['rsuhu'] = $this->mlaporan->getAllItem(10, $offset); //query model semua barang
         $this->load->view('cetak_excel/cetak_history', $data);
      }
     function export_room1($segment = null){
         $offset = $segment;
         $data['title'] = "Laporan_Monitoring-(".date('d-F-Y').").xls"; //judul title
         $data['rsuhu'] = $this->mlaporan->getRoom1(10, $offset); //query model semua barang
         $this->load->view('cetak_excel/cetak_room1', $data);
      }
    function export_room2($segment = null){
        $offset = $segment;
        $data['title'] = "Laporan_Monitoring-(".date('d-F-Y').").xls"; //judul title
        $data['rsuhu'] = $this->mlaporan->getRoom2(10, $offset); //query model semua barang
        $this->load->view('cetak_excel/cetak_room2', $data);
      }
     function export_room3($segment = null){
        $offset = $segment;
        $data['title'] = "Laporan_Monitoring-(".date('d-F-Y').").xls"; //judul title
        $data['rsuhu'] = $this->mlaporan->getRoom3(10, $offset); //query model semua barang
        $this->load->view('cetak_excel/cetak_room3', $data);
      }
    public function export_room4($segment = null){
        $offset = $segment;
        $data['title'] = "Laporan_Monitoring-(".date('d-F-Y').").xls"; //judul title
        $data['rsuhu'] = $this->mlaporan->getRoom4(10, $offset); //query model semua barang
        $this->load->view('cetak_excel/cetak_room4', $data);
      }
      public function export_room5($segment = null){
        $offset = $segment;
        $data['title'] = "Laporan_Monitoring-(".date('d-F-Y').").xls"; //judul title
        $data['rsuhu'] = $this->mlaporan->getRoom5(10, $offset); //query model semua barang
        $this->load->view('cetak_excel/cetak_room5', $data);
      }

}
