<!DOCTYPE html>
<html>
<head>
	<title>LOG IN</title>

   <link rel="stylesheet" type="text/css" href="css/index.css">
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
        
        
.signup-heading h1 {
	font-family:'lithos pro';
	font-size:70px;
	color:white;
	text-align:center;
	font-weight:lighter;

}

.signup-vals {
	text-align:center;
	background-color:rgba(0,0,0,0.5);
	padding:5%;
	width:500px;
	height:620px;
	margin-left:30%;
	animation:bgcolor 1s linear-infinite;
}

.parent input {
	width:100%;
	height:50px;
	background-color:transparent;
	border:none;
	border-bottom:1px solid white;
	margin-top:5%;
}

.parent {
	position:relative;
}

.parent label {
	color:white;
	position:absolute;
    top:0%;
    opacity:.7;
	left:0px;
    font-size:25px;

}

.form-signup input {
    color:white;
}

.form-signup input:focus ~ label , .form-signup input:focus ~ label 

 {
    font-size:25px;
    top:5px;
    left:70%;
	opacity:.6;
    transition:.3s ease;
    color:#fac544;
}

.form-signup input:focus {
    border-bottom:1px solid #fac544;
}

.submit-button .signup-btn {
	width:100%;
	height:50px;
	margin-top:10%;
	border-radius:0px;
	background-color:transparent;
	border:1px solid white;
}

.submit-button .signup-btn a:hover {
	text-decoration:none;	
  color:black;
}

.submit-button .signup-btn:hover {
	background-color:whitesmoke;
	color:black;
	transition:.2s ease;
}

.login-info .login-btn a:hover {
	text-decoration:none;
    color:black;
}

.login-info .login-btn a {
	color:white;
}

.login-text {
	font-size:20px;
	
}

.userinfo {
	margin-top:5%;
}

.login-info .login-btn {
	width:100%;
	height:50px;
	margin-top:5%;
	border-radius:0px;
	background-color:transparent;
	border:1px solid white;
}	

.login-info .login-btn:hover , .login-info .login-btn:hover a{
	background-color:white;
	color:black;
	transition:.2s ease;
}


	</style>
</head>
<body>

<script>
 
  	 $(document).ready(function(){
       $('input').focus(function(){
         $(this).css({"color":"white","font-style":"italic","font-weight":"lighter"});
       });
  	 }); 

  </script>

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

if(isset($_POST['signup']))
{

   $fname=$_POST['fname'];
   $uname=$_POST['uname'];
   $pass=$_POST['pass'];
   $mobile=$_POST['mobile'];
   $email=$_POST['email'];

   $q="SELECT * FROM users WHERE uname='$uname' ";

   $res=mysqli_query($conn,$q);

   $num= mysqli_num_rows($res);

   if($num == 1)
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
  title: 'User already exists',
})
	   </script>
   
<?php
   }
   else
   {
	  $result="INSERT INTO users (fname,uname,pass,mobile,email) VALUES ( '$fname' , '$uname' , '$pass' , '$mobile' , '$email' )";

	  mysqli_query($conn,$result);
      
	   echo("registration done");
	  
	   ?>
<script>
	    const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
})

Toast.fire({
  type: 'success',
  title: 'Signed in successfully',
  text:'Log in now'
})
	   </script>

<?php 
   }
}
?>
  	  <section>
  	     <div class="signup-creds">
       	     <div class="signup-heading"> 
       	    	  <h1>SIGN UP</h1>
       	   	 </div>
       	    <div class="container">
       	   	   <div class="signup-vals">
       	   	   	   <form class="form-signup" method="post" action="">
       	   	   	   	   <div class="parent">
       	   	   	   	   	   <input class="input" type="text" name="fname" required>
       	   	   	   	   	   <label>Full Name</label>
       	   	   	   	   </div>
       	   	   	   	   <div class="parent"> 
       	   	   	   	   	   <input type="text" name="uname" required>
       	   	   	   	   	   <label>Username</label>
       	   	   	   	   </div>
                       <div class="parent">
       	   	   	   	   	   <input type="password" name="pass" required>
       	   	   	   	   	   <label>Password</label>
       	   	   	   	   </div>
                       <div class="parent">
       	   	   	   	   	   <input type="text" name="mobile" required>
       	   	   	   	   	   <label>Mobile</label>
       	   	   	   	   </div>
                       <div class="parent">
       	   	   	   	   	   <input type="email" name="email" required>
       	   	   	   	   	   <label>Email</label>
       	   	   	   	   </div>
       	   	   	   	   <div class="submit-button">
       	   	   	   	   	   <input class="signup-btn" type="submit" name="signup" value="Sign Up">
					   </div>
					   <div class="userinfo">
                          <span class="home"><a href="../index.php">back to home </a></span>
                           <span class="signup-text text-light"> , If already a user</span>
						</div>
						<div class="login-info">
                           <button class="login-btn" name="signup"><a href="login.php">Log In</a></button>
						</div>
       	   	   	   	   
       	   	   	   </form>
       	   	   </div>
       	   </div>
       </div>
  </section>




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