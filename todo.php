<!-- 
    ToDo List
 -->

 <title>Todo App - Home</title>

 <?php require('./includes/head.php') ?>

 <body class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-9 col-xl-7">
        <div class="card rounded-3">
          <div class="card-body p-4">

            <h4 class="text-center my-3 pd-3">To Do App</h4>

            <form  orm class="row row-cols-lg-auto g-3 justify-content-center align-items-center md-4 pd-2">
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
                  <th scope="col">No.</th>
                  <th scope="col">Todo item</th>
                  <th scope="col">Status</th>
                  <th scope="col">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Buy groceries for next week</td>
                  <td>In progress</td>
                  <td>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <button type="submit" class="btn btn-success ms-1">Finished</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Renew car insurance</td>
                  <td>In progress</td>
                  <td>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <button type="submit" class="btn btn-success ms-1">Finished</button>
                  </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Sign up for online course</td>
                  <td>In progress</td>
                  <td>
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <button type="submit" class="btn btn-success ms-1">Finished</button>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php require('./includes/foot.php') ?>