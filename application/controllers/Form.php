<?php
  
   class Form extends CI_Controller { 
	
      public function index() { 
        
         
         $this->form_validation->set_rules('name', 'Name', 'required'); 
			
         if ($this->form_validation->run() == FALSE) { 
         $this->load->view('forms'); 
         } 
         else { 
            $this->load->view('formsuccess'); 
         } 
      }
   }
?>