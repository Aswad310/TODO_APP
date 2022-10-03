<!-- 
    ToDo List
 -->
 <title>Todo App - Home</title>
 <?php require('./includes/head.php') ?>
 <?php require('./includes/header.php') ?>
 <body class="vh-100">
  <section>
    <?php
      if(isset($_SESSION['login_success'])){
        $username =  $_SESSION['login_success'];
      }
      if(isset($_SESSION['id'])){
        $id = $_SESSION['id'];
      }
    ?>    
    <div class="container">
      <div class="mt-4">
        <h3><?php echo $username ?></h3>
      </div>  
    </div>
    <div class="container py-5 h-100 mt-5">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-lg-9 col-xl-7">
          <div class="card rounded-3">
            <div class="card-body p-4">

              <h4 class="text-center my-3 pd-3">To Do App</h4>
              <?php // echo "ID : {$id}" ?>
              <?php
                if(isset($_SESSION['add_todo'])){
                  echo $_SESSION['add_todo'];
                  unset($_SESSION['add_todo']);
                }

                if(isset($_SESSION['add_todo_failure'])){
                  echo $_SESSION['add_todo_failure'];
                  unset($_SESSION['add_todo_failure']);
                }

                if(isset($_SESSION['done_todo'])){
                  echo $_SESSION['done_todo'];
                  unset($_SESSION['done_todo']);
                }

                if(isset($_SESSION['done_todo_failure'])){
                  echo $_SESSION['done_todo_failure'];
                  unset($_SESSION['done_todo_failure']);
                }

                if(isset($_SESSION['delete_todo'])){
                  echo $_SESSION['delete_todo'];
                  unset($_SESSION['delete_todo']);
                }

                if(isset($_SESSION['delete_todo_failure'])){
                  echo $_SESSION['delete_todo_failure'];
                  unset($_SESSION['delete_todo_failure']);
                }
              ?>
              <form method="POST" action="./add-todo.php" class="row row-cols-lg-auto g-3 justify-content-center align-items-center md-4 pd-2">
                <div class="col-12 mt-4">
                  <div class="form-outline">
                    <input type="text" id="form1" name="todo" class="form-control" placeholder="Enter a task here" required/>
                    <input type="hidden" name = "id" value=<?php echo $id ?> />
                    <label class="form-label" for="form1"></label>
                  </div>
                </div>

                <div class="col-12">
                  <button type="submit" name="submit" class="fa-sharp fa-solid fa-plus btn add"></button>
                </div>
              </form>

              <table class="table md-4">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">ToDo</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <?php
                  // 1. query to execute data from database
                  $sql = "SELECT *FROM tbl_todo WHERE user_id = $id";                  
                  // 2. execute query
                  $res = mysqli_query($conn, $sql) or die('error '.mysqli_error($conn));
                  // 3. check whether query executed or not
                  if($res == true){
                    $sn = 1;
                    $count = mysqli_num_rows($res);
                    if($count > 0){
                      // data found
                      while($rows = mysqli_fetch_assoc($res)){
                        $id = $rows['id'];
                        $todo = $rows['todo'];
                        $status = $rows['status']; ?>
                        <tbody>
                          <tr>
                            <th><?php echo $sn++ ?></th>
                            <td><?php echo $todo ?></td>
                            <td>
                              <?php                              
                                if($status == "In Progress"){
                                  echo "<label style='color: red'>{$status}</label>";
                                } else{
                                  echo "<label style='color: green'>{$status}</label>";
                                }
                              ?>
                            </td>
                            <td>
                              <a href="done-todo.php?id=<?php echo $id ?>" class="done fa-sharp fa-solid fa-check me-2"></a>
                              <a href="edit-todo.php?id=<?php echo $id ?>" class="edit fa-sharp fa-solid fa-pencil me-2"></a>
                              <a href="delete-todo.php?id=<?php echo $id ?>" class="delete fa-solid fa-trash-can" ></a>
                            </td>
                          </tr>
                        </tbody>
                        <?php
                      }
                    } else{
                      // data not found
                      ?>
                      <tr>
                        <td colspan="4" style="text-align: center">Nothing to do. Enjoy</td>
                      </tr>
                      <?php
                    }
                  }
                ?>                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
<?php require('./includes/footer.php') ?>
<?php require('./includes/foot.php') ?>