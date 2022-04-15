<?php 
    //Include constants.php for SITEURL
    include('../../configuration/constrants.php'); 
    //1. Destory the Session
    session_destroy(); //Unsets $_SESSION['user']

    //2. REdirect to Login Page
    header('location:'.SITEURL.'admin/view/login.php');

?>