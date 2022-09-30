<!-- 
    Sign-up Page
 -->

<title>Todo - Sign-Up</title>

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
            <h2 class="card-title text-center mb-5 fw-light fs-2">ToDo App | SIGN UP</h2>
            
            <form method="" action="">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="username" id="floatingInputUsername" placeholder="myusername" required autofocus>
                <label for="floatingInputUsername">Username</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" class="form-control" name="password" id="floatingPasswordConfirm" placeholder="Confirm Password">
                <label for="floatingPasswordConfirm">Confirm Password</label>
              </div>

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
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

<?php require('./includes/foot.php') ?>