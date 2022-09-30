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

            <div>

            </div>

            <form method="POST"  action="">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" id="floatingInput" placeholder="aswadali" required>
                <label for="floatingInput">Username</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
              </div>

              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" name="submit" type="submit">Log
                  in</button>
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

<?php require('./includes/foot.php') ?>