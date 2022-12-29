<?php

 require "function.php";  
 $country  = null; $city = null;
 getParams(); 


$page = (isset($_REQUEST['page']) && $_REQUEST['page'] != "") ? $_REQUEST['page'] : 'signin';  
 

// if(isset($_SESSION['varname'])){
//     session_unset();
//     session_destroy();
//     echo 'myau';
// }

if ($page == 'signin') { 
    header("Location: signin.php", true, 303); 
    
} elseif ($page == 'signup') {   
    signup($mail, $fname, $lname, $age, $gender, $pass, $country, $city)  ? header("Location: signin.php", true, 303) :                                                                       header("Location: signup.php", true, 303);
}
