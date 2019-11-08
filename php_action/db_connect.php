<?php
//Conexão Com MySQL (editar se necessário)
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "<db_name_here>";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()){
  echo "Error: " . mysqli_connect_error();
}