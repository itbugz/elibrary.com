<!DOCTYPE html>
<html>
<head>
	<title>LOG IN</title>

   <link rel="stylesheet" type="text/css" href="../css/index.css">
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="../css/font-awesome.min.css">
   <link rel="stylesheet" href="../css/aos.css">

   <script src="../js/jquery-3.4.1.js" type="text/javascript"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

	<style type="text/css">
		
		* {
			padding:0px;
			margin:0px;
		}

		body {
		   background:linear-gradient(rgba(20,20,20,0.6),rgba(20,20,20,0.8)),url(../img/patrick-tomasso-Oaqk7qqNh_c-unsplash.jpg);
	       background-size:cover;
	       background-attachment:fixed;
	       z-index:1;
		}
    
    .submit-button input:hover {
      color:black;
    }

	</style>
</head>
<body>

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

if(isset($_POST['login']))
{
   if(isset($_REQUEST['uname']) || isset($_REQUEST['pass']))
   {
   $uname=$_POST['uname'];
   $pass=$_POST['pass'];

    $usrname = $_REQUEST['uname'];
    $passwd = $_REQUEST['pass'];
  
  }

    
    $_SESSION['pass']= $passwd;

   $q="SELECT * FROM users WHERE uname='$uname' AND pass='$pass' ";

   $res=mysqli_query($conn,$q);

   $num= mysqli_num_rows($res);

   if($num == 1)
   { 
     $_SESSION["uname"]=$uname;

     echo "<script> location.href='../index.php' </script>";
	   //header('location:../index.php'); 
   }
   else
   { ?>
<script>
	    const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
})

Toast.fire({
  type: 'warning',
  title: 'USER NOT FOUND',
  text:'TRY AGAIN'
})
	   </script>

<?php 
   }
}
?>


  	  <section>
  	     <div class="login-creds">
       	     <div class="login-heading"> 
       	    	  <h1>LOG IN</h1>
       	   	 </div>
       	    <div class="container">
       	   	   <div class="login-vals">
       	   	   	   <form class="form-login" method="post" action="">
       	   	   	   	   <div class="parent">
       	   	   	   	   	   <input type="text" name="uname" required>
       	   	   	   	   	   <label>Username</label>
       	   	   	   	   </div>
       	   	   	   	   <div class="parent"> 
       	   	   	   	   	   <input type="password" name="pass" required>
       	   	   	   	   	   <label>Password</label>
       	   	   	   	   </div>
       	   	   	   	   <div class="submit-button">
       	   	   	   	   	   <input type="submit" class="login-btn text-light" value="Log In" name="login">
					   </div>
					   <div class="userinfo">
						   <span class="backhome"><a href="../index.php">back to home</a></span>
                           <span class="signup-text text-light">, If a new user</span>
						</div>
						<div class="signup-info">
                           <button class="signup-btn" name="signup"><a href="signup.php">Sign Up</a></button>
						</div>
       	   	   	   	   
       	   	   	   </form>
       	   	   </div>
       	   </div>
       </div>
  </section>

  <script>
  	  $(document).ready(function(){
          $('input').focus(function(){
              $(this).css({"color":"white"});
          });
  	  });
  </script>

  

<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script  src="../js/aos.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>

<script type="text/javascript">
  AOS.init({
    duration:1000,
  });
</script>  

</body>
</html>