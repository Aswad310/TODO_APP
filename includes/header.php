<!-- 
    Navbar
-->
<?php require ('login-check.php') ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
  <div class="container">
    <a class="navbar-brand" href="./manage-todo.php" title="Dashboard">
      <img src="./images/todo-logo.png" alt="todo-logo-img" height="36">  
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link fa-sharp fa-solid fa-right-from-bracket fa-lg" href="./logout.php" title="Logout"></a>
        </li>
      </ul>
    </div>
  </div>
</nav>