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

    function cetak($page = null)
  {

      $this->load->helper(array('url'));
      $this->load->model('data_suhu');
      $this->load->database();

    $jumlah_data = $this->data_suhu->jumlah_data();
    $this->load->library('pagination');

    $config['base_url'] = base_url().'index.php/monitoring/cetak';
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
   function get_suhu1(){
     $this->load->helper(array('url'));
     $this->load->model('suhu_model');
     $this->load->database();

     $jumlah_data = $this->suhu_model->jumlah_data('1');
     $this->load->library('pagination');

     $config['base_url'] = base_url().'index.php/monitoring/get_suhu1';
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
             $config['next_link']='Next';
             $config['prev_link']='Back';


     $from = $this->uri->segment(3);
     $this->pagination->initialize($config);
     // $data = $this->data_suhu->data($config['per_page'],$from);

     $data['1']=$this->suhu_model->get_suhu_room('1', $config['per_page'], $from);

     $this->template->set_layout('tampilan')->build('/partials/room1',array('get_suhu_room' =>  $data));
  }
    function get_suhu2(){
    $this->load->helper(array('url'));
    $this->load->model('suhu_model');
    $this->load->database();

    $jumlah_data = $this->suhu_model->jumlah_data('2');
    $this->load->library('pagination');

    $config['base_url'] = base_url().'index.php/monitoring/get_suhu2';
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
            $config['next_link']='Next';
            $config['prev_link']='Back';


    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);
    // $data = $this->data_suhu->data($config['per_page'],$from);

    $data['2']=$this->suhu_model->get_suhu_room('2', $config['per_page'], $from);

    $this->template->set_layout('tampilan')->build('/partials/room2',array('get_suhu_room' =>  $data));
  }

  function get_suhu3(){
    $this->load->helper(array('url'));
    $this->load->model('suhu_model');
    $this->load->database();

    $jumlah_data = $this->suhu_model->jumlah_data('3');
    $this->load->library('pagination');

    $config['base_url'] = base_url().'index.php/monitoring/get_suhu3';
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

            $config['first_link']='<< ';
            $config['last_link']=' >> ';
            $config['next_link']='Next';
            $config['prev_link']='Back';


    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);
    // $data = $this->data_suhu->data($config['per_page'],$from);

    $data['3']=$this->suhu_model->get_suhu_room('3', $config['per_page'], $from);

    $this->template->set_layout('tampilan')->build('/partials/room3',array('get_suhu_room' =>  $data));
  }

  function get_suhu4(){
    $this->load->helper(array('url'));
    $this->load->model('suhu_model');
    $this->load->database();

    $jumlah_data = $this->suhu_model->jumlah_data('4');
    $this->load->library('pagination');

    $config['base_url'] = base_url().'index.php/monitoring/get_suhu4';
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
            $config['next_link']='Next';
            $config['prev_link']='Back';


    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);
    // $data = $this->data_suhu->data($config['per_page'],$from);

    $data['4']=$this->suhu_model->get_suhu_room('4', $config['per_page'], $from);

    $this->template->set_layout('tampilan')->build('/partials/room4',array('get_suhu_room' =>  $data));
  }

  function get_suhu5(){
    $this->load->helper(array('url'));
    $this->load->model('suhu_model');
    $this->load->database();

    $jumlah_data = $this->suhu_model->jumlah_data('5');
    $this->load->library('pagination');

    $config['base_url'] = base_url().'index.php/monitoring/get_suhu5';
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
            $config['next_link']='Next';
            $config['prev_link']='Back';


    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);
    // $data = $this->data_suhu->data($config['per_page'],$from);

    $data['5']=$this->suhu_model->get_suhu_room('5', $config['per_page'], $from);

    $this->template->set_layout('tampilan')->build('/partials/room5',array('get_suhu_room' =>  $data));
  }
  function updatedata(){
    $this->load->model('data_suhu');

    $kd_room = $this->input->post('kd_room');
 		$suhu = $this->input->post('suhu');
 		$kelembapan = $this->input->post('kelembapan');

 		$data = array(

 			'kd_room' => $kd_room,
 			'suhu' => $suhu,
 			'kelembapan' => $kelembapan

 			);
 		$this->data_suhu->input_data($data,'room1');
     redirect('monitoring/index');

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

    // $this->template->set_layout('tampilan')->build('/partials/suhu',array('ambil_data' =>  $suhu1));

  }
  function ambil_kelembaban(){
    $this->load->model('db_setmonitoring');
    return $this->db_setmonitoring->ambil_kelembaban();
  }
}
?>
