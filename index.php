<?php
//create db on phpmyadmin

//connecting db (host, user, password, database)
$link = mysqli_connect('localhost','root','','php-mysqli');

//if any error
if(!$link){
  die('error happen'.mysqli_connect_error());
}

//close connection
mysqli_close($link);
?>
