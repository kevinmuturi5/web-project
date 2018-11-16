<?php 

   // connection code to 6470users
  $conn = mysqli_connect('localhost', 'root', '' , '6470');

   // confirm connection
  if (!$conn) {
  	die('Could not connect. Run diagnostics ' . mysqli_connect_error());
  }

 


 ?>