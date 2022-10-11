<!-- 
    ToDo List
 -->
 <title>TODO - Dashboard</title>
 <?php require('./includes/head.php') ?>
 <?php require('./includes/header.php') ?>
 <?php require('./edit-model.php') ?>
 <body style="font-family: 'Rubik', sans-serif;" class="vh-100">
  <section>   
    <div class="container">
      <div class="mt-3">
        <?php        
          if(isset($_SESSION['login_success'])){
            echo $_SESSION['login_success'];
          } else {
            echo "<div class='alert alert-danger' role='alert'>
                    Session out login Again!
                  </div>";
          }
          if(isset($_SESSION['id'])){ 
            $id = $_SESSION['id'];
          }
        ?>
      </div>
    </div>
    <div class="container py-5 mt-3">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col col-lg-9 col-xl-7">
          <div class="card rounded-3">
            <div class="card-body p-4">
              <h4 class="text-center my-3 pd-3">TODO</h4>
              <!-- set sessions -->
              <?php require('./set_sessions.php');?>
              <!-- Add TODO form -->
              <form method="POST" action="./add-todo.php" class="row row-cols-lg-auto g-3 justify-content-center align-items-center md-4 pd-2">
                <div class="col-12 mt-4">
                  <div class="form-outline">
                    <input type="text" id="add-todo" name="todo" class="form-control" placeholder="Enter a task here" required/>
                    <input type="hidden" name = "id" value=<?php echo $id ?> />
                    <label class="form-label" for="form1"></label>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" name="submit" class="fa-sharp fa-solid fa-plus btn add">Add</button>
                </div>
              </form>
              <table class="table table-bordered md-4 " >
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">TODO</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">ACTIONS</th>
                  </tr>
                </thead>
                <?php
                  // 1. query to execute data from database
                  $sql = "SELECT *FROM tbl_todo WHERE user_id = $id ORDER BY id DESC";                  
                  // 2. execute query
                  $res = mysqli_query($conn, $sql);
                  // 3. check whether query executed or not
                  if($res == true){
                    $sn = 1;
                    $count = mysqli_num_rows($res);
                    if($count > 0){
                      // data found
                      while($rows = mysqli_fetch_assoc($res)){
                        $item_id = $rows['id'];
                        $todo = $rows['todo'];
                        $status = $rows['status']; 
                        $created_at = $rows['created_at']?>
                        <tbody>
                          <tr>
                            <th><?php echo $sn++ ?></th>
                            <td><?php echo $todo ?></td>
                            <td>
                              <?php                              
                                if($status == "Ongoing"){
                                  echo "<label style='color: red'>{$status}</label>";
                                } else{
                                  echo "<label style='color: green'>{$status}</label>";
                                }
                              ?>
                            </td>
                            <td>  
                              <?php 
                                if($status == "Done"){ ?>
                                  <a href="ongoing-todo.php?id=<?php echo $item_id ?>" id="alert-btn-ongoing" class="ongoing alert-btn-ongoing fa-sharp fa-solid fa-xmark me-2" title="Ongoing"></a>                                  
                                <?php
                                } else{ ?>
                                  <a href="done-todo.php?id=<?php echo $item_id ?>" id="alert-btn-done" class="done alert-btn-done fa-sharp fa-solid fa-check me-2" title="Done"></a>
                                <?php
                                }
                              ?>
                              <a
                                data-id='<?php echo $rows['id'];?>' ;
                                class="edit-btn fa-sharp fa-solid fa-pencil me-2" 
                                data-bs-toggle="modal"
                                title="Edit"
                              >
                              </a>
                              <a href="delete-todo.php?id=<?php echo $item_id ?>" id="alert-btn-delete" class="delete alert-btn-delete fa-solid fa-trash-can" title="Remove"></a>
                            </td>
                          </tr>
                        </tbody>
                        <?php
                      }
                    } else{
                      // data not found
                      ?>
                      <tr>
                        <td colspan="4" class="p-5" style="text-align: center;">" Nothing to do have fun &#9996 "</td>
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
  </section>
</body>
<?php require('./includes/footer.php') ?>
<?php require('./includes/foot.php') ?>

<script type="text/javascript" src="./js/alerts.js"></script>