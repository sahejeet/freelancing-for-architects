<?php

$user_type=$this->session->userdata('user_type');

if(user_type==1)
{

header("location:http://localhost/freelancing/index.php/test/insert_skills");


}



else{


header("location:http://localhost/freelancing/index.php/test/insert_project_skills");

}



?>