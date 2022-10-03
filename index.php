<!-- 
    Login Page
 -->
<title>Todo - Login</title>
<?php require('./includes/head.php') ?>
<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h2 class="card-title text-center mb-5 fw-light fs-2">ToDo App | LOG IN</h2>            
              <?php
                if(isset($_SESSION['login_failure'])){
                    echo $_SESSION['login_failure'];
                    unset($_SESSION['login_failure']);
                }

                if(isset($_SESSION['register_success'])){
                  echo $_SESSION['register_success'];
                  unset($_SESSION['register_success']);
                }
              ?>
            <form method="POST" action="">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" id="floatingInput" placeholder="aswadali" required>
                <label for="floatingInput">Username</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>

              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" name="submit" type="submit">Login</button>
              </div>
              
              <hr class="my-4">
              
              <div class="d-grid mb-2">
                <button class="btn btn-createAccount btn-login text-uppercase fw-bold" type="submit">
                    <a class="acc" href="signup.php">Create new account</a> 
                </button>
              </div>
            </form>          
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php
  if(isset($_POST['submit'])){
    // 1. get data from user
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // 2. query to get user
    $sql = "SELECT *FROM todo.tbl_users WHERE username = '$username' AND password = '$password'";
    // 3. execute query
    $res = mysqli_query($conn, $sql) or die('error '.mysqli_error($conn));
    // 4. check whether query executed or not
    if($res == true){
      // count num. of rows
      $count = mysqli_num_rows($res);
      // fetching data from database
      $row = mysqli_fetch_assoc($res);
      $id = $row['id'];
      $user = $row['username'];   
      // check user present
      if($count == 1){
        $_SESSION['login_success'] = "<div class='alert alert-success' role='alert'>
                                        Welcome Back! {$user}
                                      </div>";
        $_SESSION['id'] = $id;
        header('location:manage-todo.php');
      } else{
        $_SESSION['login_failure'] = "<div class='alert alert-danger' role='alert'>
                                        User not found. Please try again!
                                      </div>";
        header('location:index.php');
      }
    }
  }
?>
<?php require('./includes/foot.php') ?>