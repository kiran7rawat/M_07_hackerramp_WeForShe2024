<?php
 session_start();
 $conn = mysqli_connect('localhost','root','Sql@123');
 $db = mysqli_select_db($conn,'myntra');
 if(!$conn)
 {
   echo "Connection failed";
 } 
 if(!$db)
 {
 	echo "Database not connected";
 }
?>