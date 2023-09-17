<?php 
  $conn = mysqli_connect("localhost","root","","dev");

   if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
   }
?>