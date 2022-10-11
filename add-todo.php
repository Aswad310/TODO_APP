<?php
    require('./config/constants.php');
    if(isset($_POST['submit'])){
        // 1. get data from user
        $todo = $_POST['todo'];
        $user_id = $_POST['id'];
        // 2. insert data into database
        $sql = "INSERT into tbl_todo SET
                todo = '$todo',
                user_id = $user_id
                ";
        // 3. execute query
        $res = mysqli_query($conn, $sql) or die('error '.mysqli_error($conn));
        // 4. check whether query executed or not
        if($res == true){
            $_SESSION['add_todo'] = "<div class='alert alert-success' role='alert'>
                                        TODO Item successfully included into your table!     
                                    </div>";
            header('location:manage-todo.php');
        } else {
            $_SESSION['add_todo_failure'] = "<div class='alert alert-danger' role='alert'>
                                                Something went wrong!    
                                            </div>";
            header('location:manage-todo.php');
        }
    }
?>