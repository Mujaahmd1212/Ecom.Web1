<?php
$server = 'localhost';
$un = 'root';//username
$pass = '';//pasword nothing
$db = 'atom.lk';//datbase name

$con = mysqli_connect($server, $un, $pass, $db);

if (!$con){
  die(mysqli_error($con));
}


?>