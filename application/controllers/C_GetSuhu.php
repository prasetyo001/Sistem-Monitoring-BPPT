<?php
/**
 *
 */
class C_GetSuhu extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('suhu_model');
        $this->load->database();
        $this->load->library('pagination');

        $this->template->set_partial('footer', '/partials/footer');
  }
      public function get_suhu1(){

        $jumlah_data = $this->suhu_model->jumlah_data('1');

        $config['base_url'] = base_url().'index.php/C_GetSuhu/get_suhu1';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 10;
        //Tambahan untuk styling
                $config['full_tag_open'] = "<ul class='pagination'>";
                $config['full_tag_close'] ='</ul>';
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
        $data['1']=$this->suhu_model->get_suhu_room('1', $config['per_page'], $from);

        $this->template->set_layout('tampilan')->build('/partials/room1',array('get_suhu_room' =>  $data));
     }
       public function get_suhu2(){

       $jumlah_data = $this->suhu_model->jumlah_data('2');

       $config['base_url'] = base_url().'index.php/C_GetSuhu/get_suhu2';
       $config['total_rows'] = $jumlah_data;
       $config['per_page'] = 10;

       //Tambahan untuk styling
               $config['full_tag_open'] = "<ul class='pagination'>";
               $config['full_tag_close'] ='</ul>';
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

       $data['2']=$this->suhu_model->get_suhu_room('2', $config['per_page'], $from);

       $this->template->set_layout('tampilan')->build('/partials/room2',array('get_suhu_room' =>  $data));
     }

     public function get_suhu3(){

       $jumlah_data = $this->suhu_model->jumlah_data('3');

       $config['base_url'] = base_url().'index.php/C_GetSuhu/get_suhu3';
       $config['total_rows'] = $jumlah_data;
       $config['per_page'] = 10;

       //Tambahan untuk styling
               $config['full_tag_open'] = "<ul class='pagination'>";
               $config['full_tag_close'] ='</ul>';
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

       $data['3']=$this->suhu_model->get_suhu_room('3', $config['per_page'], $from);

       $this->template->set_layout('tampilan')->build('/partials/room3',array('get_suhu_room' =>  $data));
     }

     public function get_suhu4(){

       $jumlah_data = $this->suhu_model->jumlah_data('4');

       $config['base_url'] = base_url().'index.php/C_GetSuhu/get_suhu4';
       $config['total_rows'] = $jumlah_data;
       $config['per_page'] = 10;
       //Tambahan untuk styling
               $config['full_tag_open'] = "<ul class='pagination'>";
               $config['full_tag_close'] ='</ul>';
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

       $data['4']=$this->suhu_model->get_suhu_room('4', $config['per_page'], $from);

       $this->template->set_layout('tampilan')->build('/partials/room4',array('get_suhu_room' =>  $data));
     }

     public function get_suhu5(){

       $jumlah_data = $this->suhu_model->jumlah_data('5');

       $config['base_url'] = base_url().'index.php/C_GetSuhu/get_suhu5';
       $config['total_rows'] = $jumlah_data;
       $config['per_page'] = 10;
       //Tambahan untuk styling
               $config['full_tag_open'] = "<ul class='pagination'>";
               $config['full_tag_close'] ='</ul>';
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

       $data['5']=$this->suhu_model->get_suhu_room('5', $config['per_page'], $from);

       $this->template->set_layout('tampilan')->build('/partials/room5',array('get_suhu_room' =>  $data));
     }
     public function get_suhu6(){

       $jumlah_data = $this->suhu_model->jumlah_data('6');

       $config['base_url'] = base_url().'index.php/C_GetSuhu/get_suhu6';
       $config['total_rows'] = $jumlah_data;
       $config['per_page'] = 10;
       //Tambahan untuk styling
               $config['full_tag_open'] = "<ul class='pagination'>";
               $config['full_tag_close'] ='</ul>';
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
       $data['6']=$this->suhu_model->get_suhu_room('6', $config['per_page'], $from);

       $this->template->set_layout('tampilan')->build('/partials/room6',array('get_suhu_room' =>  $data));
    }
      public function get_suhu7(){

      $jumlah_data = $this->suhu_model->jumlah_data('7');

      $config['base_url'] = base_url().'index.php/C_GetSuhu/get_suhu7';
      $config['total_rows'] = $jumlah_data;
      $config['per_page'] = 10;

      //Tambahan untuk styling
              $config['full_tag_open'] = "<ul class='pagination'>";
              $config['full_tag_close'] ='</ul>';
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
      $data['7']=$this->suhu_model->get_suhu_room('7', $config['per_page'], $from);

      $this->template->set_layout('tampilan')->build('/partials/room7',array('get_suhu_room' =>  $data));
    }

    public function get_suhu8(){

      $jumlah_data = $this->suhu_model->jumlah_data('8');

      $config['base_url'] = base_url().'index.php/C_GetSuhu/get_suhu8';
      $config['total_rows'] = $jumlah_data;
      $config['per_page'] = 10;

      //Tambahan untuk styling
              $config['full_tag_open'] = "<ul class='pagination'>";
              $config['full_tag_close'] ='</ul>';
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
      $data['8']=$this->suhu_model->get_suhu_room('8', $config['per_page'], $from);

      $this->template->set_layout('tampilan')->build('/partials/room8',array('get_suhu_room' =>  $data));
    }

    public function get_suhu9(){

      $jumlah_data = $this->suhu_model->jumlah_data('9');

      $config['base_url'] = base_url().'index.php/C_GetSuhu/get_suhu9';
      $config['total_rows'] = $jumlah_data;
      $config['per_page'] = 10;
      //Tambahan untuk styling
              $config['full_tag_open'] = "<ul class='pagination'>";
              $config['full_tag_close'] ='</ul>';
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
      $data['9']=$this->suhu_model->get_suhu_room('9', $config['per_page'], $from);

      $this->template->set_layout('tampilan')->build('/partials/room9',array('get_suhu_room' =>  $data));
    }

    public function get_suhu10(){

      $jumlah_data = $this->suhu_model->jumlah_data('10');

      $config['base_url'] = base_url().'index.php/C_GetSuhu/get_suhu10';
      $config['total_rows'] = $jumlah_data;
      $config['per_page'] = 10;
      //Tambahan untuk styling
              $config['full_tag_open'] = "<ul class='pagination'>";
              $config['full_tag_close'] ='</ul>';
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
      $data['10']=$this->suhu_model->get_suhu_room('10', $config['per_page'], $from);

      $this->template->set_layout('tampilan')->build('/partials/room10',array('get_suhu_room' =>  $data));
    }
}

 ?>
