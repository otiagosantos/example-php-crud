<?php

require_once 'db_connect.php';

if(isset($_POST['btn-edit'])){
  $title = mysqli_escape_string($connect, $_POST['title']);
  $priority = mysqli_escape_string($connect, $_POST['priority']);
  $id = mysqli_escape_string($connect, $_POST['id']);

  $sql = "UPDATE task SET title = '$title', priority = '$priority' WHERE id = '$id'";

  if(mysqli_query($connect, $sql)){
    header('Location: ../index.php?sucess');
  }
  else {
    header('Location: ../index.php?error');
  }
}