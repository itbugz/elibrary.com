<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

//header('location:login.php');


$servername="localhost";
$dbuser="root";
$pass="";

$conn=mysqli_connect($servername,$dbuser,$pass) or die("UNABLE TO CONNECT ").mysqli_connect_error();

if($conn)
{
   echo("");
}


mysqli_select_db($conn,'elib');  

 if(isset($_POST['send']))
 {
  $name=$_POST['test'];

  $result="INSERT INTO `test` VALUES ( '$name' )";

    $res=mysqli_query($conn,$result); 
 }

?>


	<form method="post" action="">
		<input type="text" name="test">

		<input type="submit" name="send">

	</form>

</body>
</html>