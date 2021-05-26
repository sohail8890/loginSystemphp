<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "users";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
//   echo "Successfull";
// }
// else{
  echo "Failed to connect";
}

?>