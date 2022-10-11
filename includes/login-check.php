<?php
    // Authorization - Access Control
    // Check whether the user is logged in or not
    if(!isset($_SESSION['id'])){
        // user is not login
        // redirect with a error message
        $_SESSION['no_login_message']= "<div class='alert alert-danger' role='alert'>
                                            Please Login to access Dashboard!
                                        </div>";
        // Redirect to login page
        header('location:index.php');
    }
?>  