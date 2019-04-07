<?php
//create db on phpmyadmin

//connecting db (host, user, password, database)
$link = mysqli_connect('localhost','root','','php-mysqli');

//if any error
if(!$link){
  die('error happen'.mysqli_connect_error());
}

//First query
// $query = 'CREATE DATABASE leraning123';
//
// if(mysqli_query($link, $query)){
//   echo 'database create successfully';
// }else{
//   echo 'failed!';
// }

//close connection
mysqli_close($link);
?>
