<?php

    session_start();
    session_destroy();
    $_SESSION = array();
    header("location:http://localhost/freelancing/index.php/test");
echo "string";


    //  unset($_SESSION['logged_in']);  
      //session_destroy();  
     // header("location:http://localhost/freelancing/index.php/test/signup_page");
?>