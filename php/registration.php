<?php 

  session_start();

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

     $fname=$_POST['fname'];
     $uname=$_POST['uname'];
     $pass=$_POST['pass'];
     $mobile=$_POST['mobile'];
     $email=$_POST['email'];

     $q="SELECT * FROM users WHERE uname='$uname' ";

     $res=mysqli_query($conn,$q);

     $num= mysqli_num_rows($res);

     if($num == 1)
     { 
         echo("<h1 class='error'>not done</h1>");
     }
     else
     {
        $result="INSERT INTO users (fname,uname,pass,mobile,email) VALUES ( '$fname' , '$uname' , '$pass' , '$mobile' , '$email' )";

        mysqli_query($conn,$result);

        echo("registration done");
     }

 ?>