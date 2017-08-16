<?php 
   class Email_controller extends CI_Controller { 
 
      public function index() { 
	


        $this->load->view('email_form'); 



      } 
  
      public function send_mail() { 
      
      

         $from_email = "sahejeetbawa@gmail.com"; 
         $to_email = $this->input->post('email'); 
         $subject = $this->input->post('subject');
         $msg = $this->input->post('message');  
   
         //Load email library 
        // $this->load->library('email'); 
   
         $this->email->from($from_email, 'sahejeetbawa'); 
         $this->email->to($to_email);
         $this->email->subject($subject); 
         $this->email->message($msg); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('email_form'); 
      } 
   } 
?>