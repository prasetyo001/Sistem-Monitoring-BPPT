<?php
class Monitoring extends CI_Controller
{

    public function __construct()
    {
      parent::__construct();
      date_default_timezone_set('Asia/Jakarta');

      $this->load->library('template');
      $this->template->title('tampilan');

      $this->template->set_partial('footer', '/partials/footer');
      $this->template->set_layout('tampilan')->build('/partials/suhu');
    }
    public function index()
  {
    $this->load->model('view_suhu');
    $data['s']=$this->ambil_suhu();
    $data['k']=$this->ambil_kelembaban();

    $data['1']=$this->view_suhu->suhu('1');
    $data['2']=$this->view_suhu->suhu('2');
    $data['3']=$this->view_suhu->suhu('3');
    $data['4']=$this->view_suhu->suhu('4');
    $data['5']=$this->view_suhu->suhu('5');

    $this->template->set_layout('tampilan')->build('/partials/suhu',array('suhu' =>  $data));
  }
  public function suhu2()
{
  $this->load->model('view_suhu');
  $data['s']=$this->ambil_suhu();
  $data['k']=$this->ambil_kelembaban();

  $data['6']=$this->view_suhu->suhu('6');
  $data['7']=$this->view_suhu->suhu('7');
  $data['8']=$this->view_suhu->suhu('8');
  $data['9']=$this->view_suhu->suhu('9');
  $data['10']=$this->view_suhu->suhu('10');

  $this->template->set_layout('tampilan')->build('/partials/suhu2',array('suhu' =>  $data));
}

    function history($page = null)
  {

      $this->load->helper(array('url'));
      $this->load->model('data_suhu');
      $this->load->database();

    $jumlah_data = $this->data_suhu->jumlah_data();
    $this->load->library('pagination');

    $config['base_url'] = base_url().'index.php/monitoring/history';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = 10;
    $config['full_tag_open'] = '<p>';
    $config['full_tag_close'] = '</p>';
    //Tambahan untuk styling
            $config['full_tag_open'] = "<ul class='pagination'>";
            $config['full_tag_close'] ="</ul>";
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
            $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
            $config['next_tag_open'] = "<li>";
            $config['next_tagl_close'] = "</li>";
            $config['prev_tag_open'] = "<li>";
            $config['prev_tagl_close'] = "</li>";
            $config['first_tag_open'] = "<li>";
            $config['first_tagl_close'] = "</li>";
            $config['last_tag_open'] = "<li>";
            $config['last_tagl_close'] = "</li>";

            $config['first_link']=' << ';
            $config['last_link']=' >> ';
            $config['next_link']=' Next ';
            $config['prev_link']='Back ';


    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);
    $data = $this->data_suhu->data($config['per_page'],$from);

    $this->template->title('history');
    $this->template->set_layout('tampilan')->build('/partials/history',array('suhu' =>  $data));

  }

   function v_delay(){
     $this->template->set_layout('tampilan')->build('/partials/input_delay');
   }
   
   function u_delay(){
     $this->load->model('db_setmonitoring');

     $kd_room = $this->input->post('kd_room');
     $delay = $this->input->post('delay');

     $data = array(
       'kd_room' => $kd_room,
       'delay' => $delay
      );

    $this->db_setmonitoring->delay($data,'relay'); //nama tabel "relay"
    redirect('monitoring/v_delay');
   }

  //
  //Fungsi untuk setting kondisi suhu Monitoring
  //

   function set_tampil(){
     $data['s']=$this->ambil_suhu();
     $data['k']=$this->ambil_kelembaban();
     $this->template->set_layout('tampilan')->build('/set_monitoring/set_tampilan',array('data' =>  $data));
   }
   function set_monitoring(){

     $this->load->model('db_setmonitoring');

     $suhuAtas = $this->input->post('suhuA');
     $suhuBawah = $this->input->post('suhuB');

     $data = array(

       'suhuA' => $suhuAtas,
       'suhuB' => $suhuBawah

      );
    $this->db_setmonitoring->input_data($data,'set_suhu'); //nama tabel "set_monitoring"
    redirect('monitoring/set_tampil');
  }
  function set_kelembaban(){

    $this->load->model('db_setmonitoring');

    $kelembabanA = $this->input->post('kelembabanA');
    $kelembabanB = $this->input->post('kelembabanB');

    $data = array(

      'kelembabanA' => $kelembabanA,
      'kelembabanB' => $kelembabanB

     );
   $this->db_setmonitoring->input_data($data,'set_kelembaban'); //nama tabel "set_monitoring"
   redirect('monitoring/set_tampil');
 }
  function ambil_suhu(){
    $this->load->model('db_setmonitoring');
   return $this->db_setmonitoring->ambil_suhu();

  }
  function ambil_kelembaban(){
    $this->load->model('db_setmonitoring');
    return $this->db_setmonitoring->ambil_kelembaban();
  }
}
?>
