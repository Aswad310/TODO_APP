<?php error_reporting(0); ?>
<!-- 
    ToDo List
 -->
 <title>Todo App - Home</title>
 <?php require('./includes/head.php') ?>
 <?php require('./includes/header.php') ?>
 <?php require('./edit-model.php') ?>


 <body class="vh-100">
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
              <h4 class="text-center my-3 pd-3">ToDo App</h4>
              <?php
                if(isset($_SESSION['logout_message'])){
                  echo $_SESSION['logout_message'];
                  unset($_SESSION['logout_message']);
                }
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
                if(isset($_SESSION['ongoing_todo'])){
                  echo $_SESSION['ongoing_todo'];
                  unset($_SESSION['ongoing_todo']);
                }
                if(isset($_SESSION['ongoing_todo_failure'])){
                  echo $_SESSION['ongoing_todo_failure'];
                  unset($_SESSION['ongoing_todo_failure']);
                }
                if(isset($_SESSION['delete_todo'])){
                  echo $_SESSION['delete_todo'];
                  unset($_SESSION['delete_todo']);
                }
                if(isset($_SESSION['delete_todo_failure'])){
                  echo $_SESSION['delete_todo_failure'];
                  unset($_SESSION['delete_todo_failure']);
                }
                if(isset($_SESSION['update_todo'])){
                  echo $_SESSION['update_todo'];
                  unset($_SESSION['update_todo']);
                }
                if(isset($_SESSION['update_todo_failure'])){
                  echo $_SESSION['update_todo_failure'];
                  unset($_SESSION['update_todo_failure']);
                }
              ?>
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

              <table class="table md-4 font-family-roboto" >
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
                                  <a href="ongoing-todo.php?id=<?php echo $item_id ?>" id="alert-btn-ongoing" class="ongoing alert-btn-ongoing fa-sharp fa-solid fa-xmark me-2"></a>                                  
                                <?php
                                } else{ ?>
                                  <a href="done-todo.php?id=<?php echo $item_id ?>" id="alert-btn-done" class="done alert-btn-done fa-sharp fa-solid fa-check me-2"></a>
                                <?php
                                }
                              ?>                            
                              
                              <a
                                data-id='<?php echo $rows['id'];?>' ;
                                class="edit-btn fa-sharp fa-solid fa-pencil me-2" 
                                data-bs-toggle="modal"
                              >
                              </a>
                              <a href="delete-todo.php?id=<?php echo $item_id ?>" id="alert-btn-delete" class="delete alert-btn-delete fa-solid fa-trash-can" ></a>
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
  </section>
</body>
<?php require('./includes/footer.php') ?>
<?php require('./includes/foot.php') ?>
<script>
    // alert on done
    $(document).ready(function(){
      $('.alert-btn-done').click(function(){
        if(confirm('Do you want to done the status?')){
          return true;
        }else{
          return false;
        }
      });      
    });
    // alert on delete
    $(document).ready(function(){
      $('.alert-btn-delete').click(function(){
        if(confirm('Do you want to delete the item?')){
          return true;
        }else{
          return false;
        }
      }); 
    });
    // alert on ongoing
    $(document).ready(function(){
      $('.alert-btn-ongoing').click(function(){
        if(confirm('Do you want to set back the status?')){
          return true;
        }else{
          return false;
        }
      }); 
    });
    // fetch data 
    $(document).ready(function() {
          $('.edit-btn').click(function(){
            var itemId = $(this).data('id');       
            $.ajax({
              url: 'fetch-data.php',
              type: 'POST',
              data: {itemId: itemId},
              success: function(response){
                $('.modal-body').html(response);
                $('#edit-todo').modal('show');
              }
            });
          });          
        });    
    // update data
    $(document).on('click', '#updateBtn', function() {
            var formData = $("#updateForm").serialize()
            if(confirm('Do you want to update?')){
              return true;
            }else{
              return false;
            }
            $.ajax({
              url:'update-todo.php',
              type:'POST',
              data: formData,
              dataType: 'json',
              success:function(data){
                $('#edit-todo').modal('hide');
              }
            });         
        });
</script>