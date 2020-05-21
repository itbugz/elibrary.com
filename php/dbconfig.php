<?php 

 $servername="localhost";
 $dbuser="root";
 $pass="";

 $conn=mysqli_connect($servername,$dbuser,$pass) or die("UNABLE TO CONNECT ").mysqli_connect_error();

 if($conn)
 {
 	echo("");
 }

 mysqli_select_db($conn,'elib');
  
?>