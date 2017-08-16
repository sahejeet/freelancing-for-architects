<?php 
   class Main extends CI_Controller {
  
      public function index() { 
      	// $this->load->view('welcome_message');
      	 $this->load->model('main_model');
      	// $this->main_model->insert_into_user();
      	 
      	 //sleep(3);
      	// $this->main_model->delete();
      	 $this->main_model->update();
      	 $this->main_model->fetch();
      //	 $this->load->view()
         
        // $this->load->view('');
      } 
  }
      ?>