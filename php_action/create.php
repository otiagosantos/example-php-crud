<?php

require_once 'db_connect.php';

if(isset($_POST['btn-add'])){
  $title = mysqli_escape_string($connect, $_POST['title']);
  $priority = mysqli_escape_string($connect, $_POST['priority']);

  $sql = "INSERT INTO task (title, priority) VALUES ('$title', '$priority')";

  if(mysqli_query($connect, $sql)){
    header('Location: ../index.php:sucess');
  }
  else {
    header('Location: ../index.php?error');
  }
}