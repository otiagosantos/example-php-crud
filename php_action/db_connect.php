<?php
//Conexão Com MySQL

$servername = "localhost";
$username = "<user>";
$password = "<password>";
$db_name = "<db_name>";

$connect = mysqli_connect($servername, $username, $password, $db_name);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()){
  echo "Error: " . mysqli_connect_error();
}