<?php
require('./config/constants.php');

    if(isset($_POST['itemId'])){
        // 1. get item id
        $item_id = $_POST['itemId'];
        // 2. query to get data 
        $sql = "SELECT *FROM tbl_todo WHERE id = $item_id";
        // 3. execute query
        $res = mysqli_query($conn, $sql) or die('Error '.mysqli_error($conn));
        // 4. check
        if($res == true){
            $count = mysqli_num_rows($res);
            if($count == 1){
                // find data
                $row = mysqli_fetch_assoc($res);

                $id = $row['id'];
                $todo = $row['todo'];
            } else{
                // not find data-----------------
            }
        }        
    }
?>

    <input type="hidden" name="update-id" id="update-id" value="<?php echo $id ?>">   

    <div class="form-group">
        <label for="todo-item" class="ms-1"> <h4>Edit Todo Item</h4></label>
        <input type="text" name="todo-item" id="todo-item" class="form-control mt-2" value="<?php echo $todo ?>" placeholder="Update a task here" required>
    </div>
