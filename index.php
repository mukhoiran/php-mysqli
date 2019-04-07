<?php
//create db on phpmyadmin

//connecting db (host, user, password, database)
$link = mysqli_connect('localhost','root','','php-mysqli');

//if any error
if(!$link){
  die('error happen'.mysqli_connect_error());
}

#First query
// $query = 'CREATE DATABASE leraning123';

// if(mysqli_query($link, $query)){
//   echo 'created database successfully';
// }else{
//   echo 'failed!';
// }

#Select Query
// $query = "SELECT * FROM student";
// $query = "SELECT * FROM student ORDER BY id ASC";
// $result = mysqli_query($link, $query);
//
// if(mysqli_num_rows($result) > 0){
//   while($data = mysqli_fetch_assoc($result)){
//     echo $data['name']."<br>";
//   }
// }


#Insert Into
// single insert
// $query = "INSERT INTO student(name,age,address)
//           VALUES ('Hadi',23,'Tangerang');";

// if(mysqli_query($link,$query)){
//   echo "Insert successfully";
// }

//multiple insert (also get data from variable query)
// $query .= "INSERT INTO student(name,age,address)
//           VALUES ('Hamdan',22,'Semarang')";

// if(mysqli_multi_query($link,$query)){
//   echo "Insert successfully";
// }

#delete row
// $query = "DELETE FROM student WHERE id = 6";
// $query = "DELETE FROM student WHERE id IN (1,2)";
// $query = "DELETE FROM student BETWEEN 3 AND 7"

// if(mysqli_query($link,$query)){
//   echo "Delete successfully";
// }

#update row
$query = "UPDATE student SET name = 'Heru' WHERE id = 3";

if(mysqli_query($link,$query)){
  echo "Update successfully";
}

//close connection
mysqli_close($link);
?>
