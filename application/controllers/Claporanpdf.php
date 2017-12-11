<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Claporanpdf extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mlaporan');
        $this->load->library('dompdf_gen');
    }

    public function index()
    {
        $data['title'] = 'Laporan History Monitoring Suhu dan Kelembapan Server'; //judul title
        $data['rsuhu'] = $this->mlaporan->getAllItem(); //query model semua barang
        $this->load->view('print',$data);
    }

    // fungsi cetak pdf
    public function cetakpdf($segment = null){
        $offset = $segment;
        $data['title'] = 'Cetak History'; //judul title
        $data['rsuhu'] = $this->mlaporan->getAllItem(10, $offset); //query model semua barang

        $this->load->view('cetak_pdf/cetak_history', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'landscape'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_Monitoring-(".date('d-F-Y').").pdf", array('Attachment'=>0));
    }

    public function room1($segment = null){
        $offset = $segment;
        $data['title'] = 'Cetak History'; //judul title
        $data['rsuhu'] = $this->mlaporan->getRoom1(10, $offset); //query model semua barang

        $this->load->view('cetak_pdf/cetak_room1', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_Monitoring-(".date('d-F-Y').").pdf", array('Attachment'=>0));
    }

    public function room2($segment = null){
        $offset = $segment;
        $data['title'] = 'Cetak History'; //judul title
        $data['rsuhu'] = $this->mlaporan->getRoom2(10, $offset); //query model semua barang

        $this->load->view('cetak_pdf/cetak_room2', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_Monitoring-(".date('d-F-Y').").pdf", array('Attachment'=>0));
    }

    public function room3($segment = null){
        $offset = $segment;
        $data['title'] = 'Cetak History'; //judul title
        $data['rsuhu'] = $this->mlaporan->getRoom3(10, $offset); //query model semua barang

        $this->load->view('cetak_pdf/cetak_room3', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_Monitoring-(".date('d-F-Y').").pdf", array('Attachment'=>0));
    }

    public function room4($segment = null){
        $offset = $segment;
        $data['title'] = 'Cetak History'; //judul title
        $data['rsuhu'] = $this->mlaporan->getRoom4(10, $offset); //query model semua barang

        $this->load->view('cetak_pdf/cetak_room4', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_Monitoring-(".date('d-F-Y').").pdf", array('Attachment'=>0));
    }

    public function room5($segment = null){
        $offset = $segment;
        $data['title'] = 'Cetak History'; //judul title
        $data['rsuhu'] = $this->mlaporan->getRoom5(10, $offset); //query model semua barang

        $this->load->view('cetak_pdf/cetak_room5', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Laporan_Monitoring-(".date('d-F-Y').").pdf", array('Attachment'=>0));
    }
}
