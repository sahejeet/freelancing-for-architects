<?php 


   class Test extends CI_Controller {
  
      public function index() { 
      	// $this->load->view('welcome_message');
      	 $this->load->view('firstpage.php');

      //    $this->load->view('footer');
       // $this->load->model('model_website');
      // $this->model_website->chat();
         
        // $this->load->view('');
      } 

 public function signup_page() { 
      	// $this->load->view('welcome_message');
      	 $this->load->view('signup_page.php');
        
      } 


public function login_check() { 
      	// $this->load->view('welcome_message');
      	 $this->load->view('login_check.php');
          $this->load->model('model_website');
        $this->model_website->login_check();




        
      }

public function mainpage() { 
      	
         // $this->load->view('welcome_message');
          $this->load->model("model_website");
          //$data["fetch_data"]=
          $this->model_website->fetch_skills();
        $this->load->view('header_worker.php');
      	 $this->load->view('mainpage.php');
          $this->load->view('bg');        
          $this->load->view('footer');
        
      }

public function insert_details() { 
         
          //$this->load->view('mainpage.php');


        $this->load->model('model_website');
        $this->model_website->insert_into_user();





      }

public function worker_skills() { 
         
          //$this->load->view('mainpage.php');


        $this->load->view('worker_skills');

      

      }

public function emailuser() { 
         
          //$this->load->view('mainpage.php');

         $this->email->set_mailtype("html");
        $this->load->view('emailuser');

        
      }




public function insert_skills() { 
         
          //$this->load->view('mainpage.php');
   $data=$this->session->userdata('data');
    unset($data['submit']);
        //print_r($data);


       $this->load->model('model_website');
       $this->model_website->insert_into_skills($data);





      }


public function hirer_project() { 
         
          //$this->load->view('mainpage.php');


        $this->load->view('hirer_project');

        





      }



public function insert_into_project() { 
         
          //$this->load->view('mainpage.php');


        $this->load->model('model_website');
        $this->model_website->insert_into_project();

        





      }




public function decider() { 
         
         $data=$this->input->post();
        $this->session->set_userdata('data', $data);
  




$user_type=$this->session->userdata('user_type');
echo $user_type;

if($user_type==1)
{
echo 'hello worker';
header("location:http://localhost/freelancing/index.php/test/insert_skills");


}



else{

echo 'hello hirer';
header("location:http://localhost/freelancing/index.php/test/insert_project_skills");

}



      }













public function insert_project_skills() { 
         
          //$this->load->view('mainpage.php');
    $data=$this->session->userdata('data');
    unset($data['submit']);
       // print_r($data);


       $this->load->model('model_website');
       $this->model_website->insert_into_project_skills($data);





      }

public function hirer_mainpage() { 
         
          $this->load->view('hirermainpage');
          $this->load->model("model_website");
         // $data["fetch_data"]=$this->model_website->fetch_skills();
          $this->load->view('header_hirer.php');
          $this->load->view('footer.php');
          //$this->load->view('mainpage.php',$data);
        
      }



public function my_projects() { 
         
          
       $this->load->view('header_hirer.php');
          $this->load->model("model_website");
         $data['categories']= $this->model_website->my_projects();
     // print_r($data);
      //   echo($data['PROJECT_ID']);
       //   print_r($proj_id);
        $this->load->view('my_projects.php',$data);
         $this->load->view('bg'); 
        $this->load->view('footer');
        
      }



public function local_jobs() { 
         
          
       $this->load->view('header_worker.php');
          $this->load->model("model_website");
          $this->model_website->local_jobs();
           $this->load->view('bg'); 
     // print_r($data);
      //   echo($data['PROJECT_ID']);
       //   print_r($proj_id);
       // $this->load->view('my_projects.php',$data);
       $this->load->view('footer');
        
      }

public function bid() { 
         
          
       $this->load->view('header_worker.php');
     //  $this->load->view('bid');
       $this->load->model("model_website");
        $this->model_website->bid();
        $this->load->view('emp');
     //   $this->load->view('footer');
        
      }




public function bid_form() { 
         
          
       $this->load->view('header_worker.php');
       $this->load->view('bid_form');
      // $this->load->model("model_website");
      //  $this->model_website->bid_form();
        $this->load->view('footer');
        
      }

public function bid_form_insert() { 
         
          
       
       $this->load->model("model_website");
        $this->model_website->bid_form();
        
        
      }




public function my_bid() { 
         
          
       $this->load->view('header_worker.php');
      // $this->load->view('bid_form');
       $this->load->model("model_website");
        $this->load->view('bg'); 
        $this->model_website->my_bid();
        $this->load->view('footer');
        
      }


public function proposals() { 
         
          
       $this->load->view('header_hirer.php');
      // $this->load->view('bid_form');
       $this->load->model("model_website");
        $this->model_website->proposals();
         $this->load->view('bg'); 
        $this->load->view('footer');
        
      }


public function award_bidder() { 
         
          
       //$this->load->view('header_hirer.php');
      // $this->load->view('bid_form');
       $this->load->model("model_website");
        $this->model_website->award_bidder();
      //  $this->load->view('footer');
        
      }





public function inbox() { 
         $this->load->view('header_worker');

          $this->load->model('model_website');
        $this->model_website->inbox();
         $this->load->view('footer');
          $this->load->view('bg'); 
        // $this->load->view('');
      }

public function inbox_display() { 
         // $this->load->view('welcome_message');
      //    $this->load->view('firstpage.php');
          $this->load->model('model_website');
        $this->model_website->inbox_display();
         
        // $this->load->view('');
      }



public function chat_insertion() { 
         // $this->load->view('welcome_message');
      //    $this->load->view('firstpage.php');
          $this->load->model('model_website');
        $this->model_website->chat_insertion();
         
        // $this->load->view('');
      }


public function chat_display() { 
         // $this->load->view('welcome_message');
      //    $this->load->view('firstpage.php');
          $this->load->model('model_website');
        $this->model_website->chat_display();
         
        // $this->load->view('');
      }







public function message_insert() { 
         // $this->load->view('welcome_message');
      //    $this->load->view('firstpage.php');
          $this->load->model('model_website');
        $this->model_website->message_insert();
         
        // $this->load->view('');
      }

public function chat_display_session() { 
         // $this->load->view('welcome_message');
      //    $this->load->view('firstpage.php');
          $this->load->model('model_website');
        $this->model_website->chat_display_session();
         
        // $this->load->view('');
      }


public function inbox_hirer() { 
         $this->load->view('header_hirer');

          $this->load->model('model_website');
        $this->model_website->inbox_hirer();
         $this->load->view('bg'); 
         $this->load->view('footer');
        // $this->load->view('');
      }

public function chat_display_hirer() { 
    //     $this->load->view('header_hirer');

          $this->load->model('model_website');
        $this->model_website->chat_display_hirer();
    //     $this->load->view('footer');
        // $this->load->view('');
      }


public function message_insert_hirer() { 
        // $this->load->view('header_hirer');
          $this->load->model('model_website');
        $this->model_website->message_insert_hirer();
      //   $this->load->view('footer');
        // $this->load->view('');
      }


public function chat_display_session_hirer() { 
    //     $this->load->view('header_hirer');

          $this->load->model('model_website');
        $this->model_website->chat_display_session_hirer();
    //     $this->load->view('footer');
        // $this->load->view('');
      }


public function bookmarked_projects() { 
      $this->load->view('header_worker');

          $this->load->model('model_website');
        $this->model_website->bookmarked_projects();
         $this->load->view('bg'); 
         $this->load->view('footer');
        // $this->load->view('');
      }

public function buttons() { 
    //     $this->load->view('header_hirer');

          $this->load->view('buttons.php');
         // $this->load->view('header');
    //     $this->load->view('footer');
        // $this->load->view('');
      }



public function bookmark_insert() { 
    //     $this->load->view('header_hirer');

          $this->load->model('model_website');
        $this->model_website->bookmark_insert();
         
      }






public function delete_bookmark() { 
    //     $this->load->view('header_hirer');

          $this->load->model('model_website');
        $this->model_website->delete_bookmark();
         
      }



public function logout() { 
    //     $this->load->view('header_hirer');

          //$this->load->model('model_website');
        $this->load->view("logout");
         
      }

public function new_project() { 
    //     $this->load->view('header_hirer');

          //$this->load->model('model_website');
        $this->load->view("new_project");
         
      }


public function new_project_insert() { 
    
        $this->load->model("model_website");
        $this->model_website->new_project_insert();

      }


public function worker_skills_new_project() { 
         
          $this->load->view('worker_skills_new_project');
    

      }




public function insert_skills_new_project() { 
         

          $data=$this->input->post();
          unset($data['submit']);
         // print_r($data);

          $this->load->model("model_website");
          $this->model_website->insert_skills_new_project($data);
        //  $this->load->view('insert_skills_new_project');
    

      }



public function worker_profile() { 
         

         // $data=$this->input->post();
         // unset($data['submit']);
         // print_r($data); 
          $this->load->view('header_worker');

          $this->load->model("model_website");
          $this->model_website->worker_profile();
          $this->load->view('footer');
        //  $this->load->view('insert_skills_new_project');
    

      }




public function hirer_profile() { 
         

         // $data=$this->input->post();
         // unset($data['submit']);
         // print_r($data); 
          $this->load->view('header_hirer');
          $this->load->model("model_website");
          $this->model_website->hirer_profile();
          $this->load->view('footer');
        //  $this->load->view('insert_skills_new_project');
    

      }




public function emp_prof() { 
         

         // $data=$this->input->post();
         // unset($data['submit']);
         // print_r($data); 
          $this->load->view('header_worker');
          $this->load->model("model_website");
          $this->model_website->emp_prof();
          $this->load->view('footer');
        //  $this->load->view('insert_skills_new_project');
    

      }



public function profile_of_worker() { 
         

         // $data=$this->input->post();
         // unset($data['submit']);
         // print_r($data); 
          $this->load->view('header_hirer');

          $this->load->model("model_website");
          $this->model_website->profile_of_worker();
          $this->load->view('footer');
        //  $this->load->view('insert_skills_new_project');
    

      }



public function report() { 
         

         // $data=$this->input->post();
         // unset($data['submit']);
         // print_r($data); 
         $this->load->view('header_worker');

          //$this->load->model("model_website");
          //$this->model_website->report();
          $this->load->view('report');
          $this->load->view('footer');
        //  $this->load->view('insert_skills_new_project');
    

      }



public function report_insert() { 
         

         // $data=$this->input->post();
         // unset($data['submit']);
         // print_r($data); 
    //     $this->load->view('header_worker');

          $this->load->model("model_website");
          $this->model_website->report_insert();
     //     $this->load->view('report');
    //      $this->load->view('footer');
        //  $this->load->view('insert_skills_new_project');
    

      }


public function report_hirer() { 
         

         // $data=$this->input->post();
         // unset($data['submit']);
         // print_r($data); 
         $this->load->view('header_hirer');

          //$this->load->model("model_website");
          //$this->model_website->report();
          $this->load->view('report_hirer');
          $this->load->view('footer');
        //  $this->load->view('insert_skills_new_project');
    

      }





public function chat_admin() { 
         

         // $data=$this->input->post();
         // unset($data['submit']);
         // print_r($data); 
    //     $this->load->view('header_worker');

          $this->load->model("model_website");
          $this->model_website->chat_admin();
     //     $this->load->view('report');
    //      $this->load->view('footer');
        //  $this->load->view('insert_skills_new_project');
    

      }




public function message_insert_admin() { 
         // $this->load->view('welcome_message');
      //    $this->load->view('firstpage.php');
          $this->load->model('model_website');
        $this->model_website->message_insert_admin();
         
        // $this->load->view('');
      }


public function report_insert_hirer() { 
         

         // $data=$this->input->post();
         // unset($data['submit']);
         // print_r($data); 
    //     $this->load->view('header_worker');

          $this->load->model("model_website");
          $this->model_website->report_insert_hirer();
     //     $this->load->view('report');
    //      $this->load->view('footer');
        //  $this->load->view('insert_skills_new_project');
    

      }






public function chat_admin_hirer() { 
         

         // $data=$this->input->post();
         // unset($data['submit']);
         // print_r($data); 
    //     $this->load->view('header_worker');

          $this->load->model("model_website");
          $this->model_website->chat_admin_hirer();
     //     $this->load->view('report');
    //      $this->load->view('footer');
        //  $this->load->view('insert_skills_new_project');
    

      }




public function message_insert_admin_hirer() { 
         // $this->load->view('welcome_message');
      //    $this->load->view('firstpage.php');
          $this->load->model('model_website');
        $this->model_website->message_insert_admin_hirer();
         
        // $this->load->view('');
      }













}










?>