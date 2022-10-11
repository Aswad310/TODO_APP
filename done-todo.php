<?php
    require('./config/constants.php');
    // require
    if(isset($_GET['id'])){
        // 1. get data from user
        $id = $_GET['id'];
        // 2. query to update status
        $sql = "UPDATE tbl_todo SET status = 'Done' WHERE id = $id";
        // 3. execute query
        $res = mysqli_query($conn, $sql) or die('error '.mysqli_error($conn));
        // 4. check whether query executed or not
        if($res == true){
            // done
            $_SESSION['done_todo'] = "<script>
                                        swal('Whoohoooo!', 'You has been completed the task!', 'success')
                                      </script>";
            header('location:manage-todo.php');
        } else{
            // something went wrong
            $_SESSION['done_todo_failure'] = "<div class='alert alert-danger' role='alert'>
                                                Something went wrong!
                                            </div>";
            header('location:manage-todo.php');
        }
    }
?>