<?php 
    // include constant for siteurl
    include('./config/constants.php');

    // session destroy
    session_destroy(); // unsets $_SESSION['user']

    // redirect to login page
    header('location:index.php');
?>