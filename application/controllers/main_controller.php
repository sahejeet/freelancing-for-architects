<?php 
   class Main_controller extends CI_Controller {
  
      public function index() { 
      	// $this->load->view('welcome_message');
      	 $this->load->model('main_model.php');
      	 $this->main_model->insert_into_user();
      	// $this->load->view('main_view.php');
         
        // $this->load->view('');
      }
      } 
 ?>