<?php
$email = $this->session->userdata('email');
$name = $this->session->userdata('name');
$user_type=$this->session->userdata('user_type');



$from_email = "sahejeetbawa@gmail.com"; 
         $to_email = $email;
         $headers='Regarding Freelancing Website'; 
         //$headers .= '<br>';
         $headers .= "From: " . strip_tags($from_email) . "\r\n";
        // $headers .= '<html>';
        // $headers .= '<br>';
        // $headers .= '</html>';
         $headers .= "Reply-To: ". strip_tags($email) . "\r\n";
        // $headers .= '<br>';
        // $headers .= "MIME-Version: 1.0\r\n";
         //$headers .= '<br>';
         //$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

if($user_type==1){

       $message = '<html><body>';
       
       $message .= '<h1 style="color:#f40;">';
       $message .= "Hi " ."&nbsp;". strip_tags($name) . "\r\n";
       $message .= ',';
       $message .= '</h1>';
 
  $message .= '<h1 style="color:#f40;">';
      $message .= ' Welcome To ';
       $message.='<a href="http://localhost/freelancing/index.php/test/">SomeArchitects.com</a>';
       $message.='&nbsp;' ;
       $message.='!' ;

        $message .= '<h1 style="color:#f40;">';
      $message .= 'You Have Signed Up As An Architect!';
      $message .= '</h1>';
       


      
       
       $message .= '</h1>';
 


     //  $message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
       $message .= '</body></html>';
        $message .= '<h1 style="color:#f40;">';
        
       $message .= 'Click ';
       $message.='<a href="http://localhost/freelancing/index.php/test/mainpage">here</a>';
       $message.='&nbsp;' ;
       $message.='to verify mail and visit the site now!!!' ;
      $message .= '</h1>';
        
}


else{


 $message = '<html><body>';
       
       $message .= '<h1 style="color:#f40;">';
       $message .= "Hi " ."&nbsp;". strip_tags($name) . "\r\n";
       $message .= ',';
       $message .= '</h1>';



       $message .= '<h1 style="color:#f40;">';
      $message .= ' Welcome To ';
       $message.='<a href="http://localhost/freelancing/index.php/test/">SomeArchitects.com</a>';
       $message.='&nbsp;' ;
       $message.='!' ;
       
       $message .= '</h1>';

      $message .= '<h1 style="color:#f40;">';
      $message .= 'You Have Signed Up As Hirer!';
      $message .= '</h1>';
 


     //  $message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
       $message .= '</body></html>';
        $message .= '<h1 style="color:#f40;">';
        
       $message .= 'Click ';
       $message.='<a href="http://localhost/freelancing/index.php/test/proposals">here</a>';
       $message.='&nbsp;' ;
       $message.='to verify mail and visit the site now!!!' ;
      $message .= '</h1>';



}


    //    set_mailtype('html');
         //Load email library 
        // $this->load->library('email'); 
   
         $this->email->from($from_email, 'sahejeetbawa'); 
         $this->email->to($to_email);
         $this->email->subject($headers); 
         $this->email->message($message); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('email_form'); 

header("location:http://localhost/freelancing/index.php/test/signup_page");
         ?>