<!-- 
    ToDo List
 -->

 <title>Todo App - Home</title>

 <?php require('./includes/head.php') ?>
 <?php require('./includes/header.php') ?>

 <body class="vh-100">
  <section>
  <div class="container py-5 h-100 mt-5">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pd-3">To Do App</h4>

            <form class="row row-cols-lg-auto g-3 justify-content-center align-items-center md-4 pd-2">
              <div class="col-12 mt-4">
                <div class="form-outline">
                  <input type="text" id="form1" class="form-control" placeholder="Enter a task here" />
                  <label class="form-label" for="form1"></label>
                </div>
              </div>

              <div class="col-12">
                <button type="submit" class="btn btn-primary">Add</button>
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
              <tbody>
                <tr>
                  <th>1</th>
                  <td>Meet at 6</td>
                  <td>Done</td>
                  <td>
                    <button type="submit" class="btn btn-success">Done</button>
                    <button type="submit" class="btn btn-warning ms-1">Update</button>
                    <button type="submit" class="btn btn-danger ms-1">Remove</button>
                  </td>
                </tr>
              </tbody>
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