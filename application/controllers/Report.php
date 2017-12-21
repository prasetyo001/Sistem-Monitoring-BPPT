<?php
/**
 *
 */
class Report extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->library('dompdf_gen');
    $this->load->library('template');
    $this->template->title('tampilan');

    $this->template->set_partial('footer', '/partials/footer');
    $this->template->set_layout('tampilan');
  }

  public function report(){
    $this->template->set_layout('tampilan')->build('/partials/report');

  }
  public function sort($page = null){
    $this->load->model('laporan');
    $this->load->helper(array('url'));

    $date = array(
        'date_awal' => $_POST['ts'],
        'date_akhir' => $_POST['te']
        );

    $where = array(
        'DATE(time) >=' => $date['date_awal'],
        'DATE(time) <=' => $date['date_akhir']
          );

          $jumlah_data = $this->laporan->h_row($where);

          $this->load->library('pagination');

          $config['base_url'] = base_url().'index.php/report/sort';
          $config['total_rows'] = $jumlah_data;
          $config['per_page'] = null;
          $config['full_tag_open'] = '<p>';
          $config['full_tag_close'] = '</p>';

          $from = $this->uri->segment(3);
          $this->pagination->initialize($config);

    $data['suhu']= $this->laporan->h_get($where, $config['per_page'], $from);
    $data['temp'] = $date;
    $this->template->set_layout('tampilan')->build('partials/sort',array('suhu' => $data));

  }

  public function laporan()
  {
    $this->load->model('laporan');
    $room= $_POST['room'];

    $r= implode(',',$room);

        $dateA= $_POST['ts'];
        $dateB= $_POST['te'];

          $_select = "SELECT * FROM room1 WHERE DATE(time) >= '$dateA' AND DATE(time) <= '$dateB'
                      AND kd_room in ($r) ORDER BY time DESC ";

          $history = $this->laporan->_select($_select);

          $data['title'] = 'Cetak History'; //judul title
          $data['rsuhu'] = $history; //query model semua barang

          $submit= $_POST['_submit'];
          if($submit == 'Print PDF'){
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
              else
              $this->load->view('cetak_excel/cetak_history', $data);


      }
  }




 ?>
