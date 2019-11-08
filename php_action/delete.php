<?php

require_once 'db_connect.php';

if(isset($_GET['id'])){
  $id = mysqli_escape_string($connect, $_GET['id']);

  echo "id: " . $id;
  $sql = "DELETE FROM `task` WHERE id = '$id'";

  if(mysqli_query($connect, $sql)){
    header('Location: ../index.php?sucess');
  }
  else {
    header('Location: ../index.php?error');
  }
}

?>