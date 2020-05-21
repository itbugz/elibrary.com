<html>
    <head></head>
    <body>
<?php 

  session_start();

  
 $servername="localhost";
 $dbuser="root";
 $pass="";

 $conn=mysqli_connect($servername,$dbuser,$pass) or die("UNABLE TO CONNECT ").mysqli_connect_error();

 if($conn)
 {
 	echo("");
 }


 mysqli_select_db($conn,'elib');  

     $fname=$_POST['fname'];
     $uname=$_POST['uname'];
     $pass=$_POST['pass'];
     $mobile=$_POST['mobile'];
     $email=$_POST['email'];

     $q="SELECT * FROM users WHERE uname='$uname' && pass='$pass' ";

     $res=mysqli_query($conn,$q);

     $num= mysqli_num_rows($res);

     if($num == 1)
     { 
        echo("hello"); 
        header('location:../index.php');
       
     }
     else
     {
         echo("username does not match");

         header('location:login.php');
     }

 ?>

    </body>
    </html>