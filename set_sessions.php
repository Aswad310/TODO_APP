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