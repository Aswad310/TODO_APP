<!-- 
    Database Connectivity
 -->
<?php
    ############ start session  ############
    session_start();    

    ############ SITE URL  ############
    define('SITEURL', 'localhost/todo_app/');

    ############ CONSTANTS  ############
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '*Aswad*123');
    define('DB_NAME', 'todo');
    
    ############ MySQL Workbench Connection ############
    /* Database Connection */
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die('error'.mysqli_error($conn));
    if($conn == true){
        // echo "Database connect successfully!";
    }
    /* Select Database */
    $db_select = mysqli_select_db($conn, DB_NAME) or die('error'.mysqli_error($conn));
?>