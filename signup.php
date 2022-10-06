<!-- 
    Sign-up Page
 -->
<title>TODO - Register</title>
<?php require('./includes/head.php') ?>
<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-lg-10 col-xl-9 mx-auto mt-5">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body p-4 p-sm-5">
            <h2 class="card-title text-center mb-5 fw-light fs-2">TODO APP | SIGN UP</h2>
            <div class="row">
              <?php
                if(isset($_SESSION['username'])){
                    echo $_SESSION['username'];
                    unset($_SESSION['username']);
                }
                if(isset($_SESSION['password'])){
                    echo $_SESSION['password'];
                    unset($_SESSION['password']);
                }
              ?>
            </div>
            <form method="POST" action="">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" id="floatingInputUsername" placeholder="myusername" required autofocus>
                <label for="floatingInputUsername">Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="confirmpassword" id="floatingPasswordConfirm" placeholder="Confirm Password" required>
                <label for="floatingPasswordConfirm">Confirm Password</label>
              </div>
              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" name="submit" type="submit">Register</button>
              </div>                        
              <hr class="my-4">
              <div class="d-grid mb-2">
                <button class="btn btn-createAccount btn-login fw-bold text-uppercase" type="submit">
                  <a class="acc" href="index.php">Have an account? Sign In</a>
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
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $confirmpassword = mysqli_real_escape_string($conn, md5($_POST['confirmpassword']));
    // 2. query to get username
    $sql = "SELECT * FROM todo.tbl_users WHERE username = '$username' ";
    // 3. execute query
    $res = mysqli_query($conn, $sql) or die('error in query '.mysqli_error($conn)); 
    // 4. check query whether execute or not
    if($res == true){
      $count = mysqli_num_rows($res);
      // check unqiue username
      if($count==1){
        // failure message
        $_SESSION['username'] = "<div class='alert alert-danger' role='alert'>
                                  Username already taken!
                                </div>";
        // redirct to signup page
        header('location:signup.php');
      }
      // check same password and confirm_password
      elseif($password != $confirmpassword){
        // failure message
        $_SESSION['password'] = "<div class='alert alert-danger' role='alert'>
                                  Password and Confirm Password are not same
                                </div>";
        // redirct to signup page
        header('location:signup.php');  
      }
      // execute insert query
      else{
        $sql2 = "INSERT INTO tbl_users SET
                    username = '$username',
                    password = '$password'
                  ";
        $res2 = mysqli_query($conn, $sql2) or die('error in query2 '.mysqli_error($conn));
        if($res2 == true){
          // session start
          $_SESSION['register_success'] = "<div class='alert alert-success' role='alert'>
                                            Register Successfully!
                                          </div>";
          // redirect to todo page
          header('location:'.'index.php');
        }
      }
    }
  }
?>
<?php require('./includes/foot.php') ?>