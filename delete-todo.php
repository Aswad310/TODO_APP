<?php
    require('./config/constants.php');
    if(isset($_GET['id'])){
        // 1. get data from user
        $id = $_GET['id'];

        // 2. query to update status
        $sql= "DELETE FROM tbl_todo WHERE id= $id ";

        // 3. execute query
        $res = mysqli_query($conn, $sql) or die('error '.mysqli_error($conn));

        // 4. check whether query executed or not
        if($res == true){
            // done
            $_SESSION['delete_todo'] = "<div class='alert alert-warning' role='alert'>
                                            You have successfully remove the task!
                                    </div>";
            header('location:manage-todo.php');
        } else{
            // something went wrong
            $_SESSION['delete_todo_failure'] = "<div class='alert alert-danger' role='alert'>
                                                Something went wrong!
                                            </div>";
            header('location:manage-todo.php');
        }
    }
?>