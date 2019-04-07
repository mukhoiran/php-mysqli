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

// if(mysqli_query($link, $query)){
//   echo 'created database successfully';
// }else{
//   echo 'failed!';
// }

$query = "SELECT * FROM student";
$result = mysqli_query($link, $query);

if(mysqli_num_rows($result) > 0){
  while($data = mysqli_fetch_assoc($result)){
    echo $data['name']."<br>";
  }
}

//close connection
mysqli_close($link);
?>
