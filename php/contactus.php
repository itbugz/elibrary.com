<!DOCTYPE html>
<html>
<head>
	<title>CONTACT US</title>

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

  	 .btn {
  	 	border:1px solid black;
  	 	border-radius:0px;
  	 	width:25%;
  	 	height:50px;
  	 	background-color:black;
     	color:white;
  	 }
     
     .btn:hover {
     	background-color:white;
     	color:black;
     }

     @media screen and (max-width:590px)
     {
    .contactus-heading h1 {
        font-size:50px;
        transition:.2s ease;
    }

    .btn {
    	width:50%;
    	transition:.3s ease;
    }
    }

    @media screen and (max-width:360px)
    {
     .contactus-heading h1 {
        font-size:35px;
        transition:.2s ease;
    }	

    .btn {
    	transition:.3s ease;
    	width:50%;
    	font-size:15px;
    }
    }
     
    .footer-creds {
    	background-color:black;
    	width:100%;
    	height:102px;
    	margin-top:6%;
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

 if(isset($_POST['send']))
 {
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $zip=$_POST['zip'];

  $result="INSERT INTO `contact` VALUES ('$fname','$lname','$email','$mobile','$city', '$state', '$zip')";

    $res=mysqli_query($conn,$result); ?>
<script>
      const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
})

Toast.fire({
  type: 'success',
  title: 'Message sent',
})
     </script>
    <?php
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
  title: 'Something went wrong',
})
     </script>
<?php

 }

?>
	<section>

		<div class="contactus-heading text-center ">
			<h1>
				CONTACT US
			</h1>
		</div>
	 	 <div class="contact container ">
             <form method="post" action="">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First name</label>
      <input type="text" class="form-control" id="inputfname" placeholder="First name" required="" name="fname">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Last name</label>
      <input type="text" class="form-control" id="inputlname" placeholder="Last name" name="lname">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">E-mail</label>
    <input type="email" class="form-control" id="inputemail" placeholder="example@example.com" required="" name="email">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Mobile</label>
    <input type="text" class="form-control" id="inputmobile" placeholder="Mobile" required="" name="mobile">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity" required="" name="city">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <input type="text" name="state" class="form-control" id="inputstate" required="" name="state">
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip" required="" name="zip">
    </div>
  </div>
 
  <button type="submit" class="btn mb-5" name="send">Send</button>

</form>
		 </div>
</section>


<footer>
	<div class="footer-creds">
		<div class="container-fluid">
			<div class="container">
				<div class="backhome">

					<h3 class="pt-4"><a href="../index.php" class="text-light">BACK TO HOME</a></h3>
				</div>
			</div>
		</div>
	</div>
</footer>


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
