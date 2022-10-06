<?php
    require('./config/constants.php');
    if(isset($_POST['btnUpdate'])){
        //  get data
        $updateId = $_POST['update-id'];
        $todo = $_POST['todo-item'];
        // query
        $sql = "UPDATE tbl_todo SET todo = '$todo' WHERE id = $updateId ";
        // execute query
        $res = mysqli_query($conn, $sql) or die('Error '.mysqli_error($conn));
        // check
        if($res == true){
            $_SESSION['update_todo'] = "<div class='alert alert-success' role='alert'>
                                            ToDo Item updates successfully!
                                        </div>";
            header('location:manage-todo.php');
        }else{
            $_SESSION['update_todo_failure'] = "<div class='alert alert-danger' role='alert'>
                                                    Something went wrong!
                                                </div>";
            header('location:manage-todo.php');
        }
    }
?>