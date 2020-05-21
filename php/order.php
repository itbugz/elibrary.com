
<!DOCTYPE html>
<html>
<head>
  <title></title>

 <link rel="stylesheet" type="text/css" href="../css/index.css">
 <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

 <script src="../js/jquery-3.4.1.js" type="text/javascript"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

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
  $name=$_POST['name'];
  $address=$_POST['address'];
  $mobile=$_POST['mobile'];
  $code=$_POST['code'];

  $result="INSERT INTO `test` VALUES ( '$name', '$address' , '$mobile' , '$code' )";

    $res=mysqli_query($conn,$result); ?>

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

?>


 <section style="" class="p-5 booking-order-bg" id="orderbooks" >
       <div class="container-fluid" data-aos="fade-up" data-aos-duration="1000">
           <div class="booking-order">
               <div class="booking-order-heading">
                   <h1 class="text-center" data-aos="fade-right" data-aos-duration="2000">ORDER BOOKS</h1>
               </div>
               <div class="order-form p-5" >
                   <form class="orderbooks-form" method="post" action="#orderbooks" class="" >
                        <div class="parent">
                           <input type="text" name="name" class="order-entity inp1" required="" placeholder="FULL NAME" data-aos="fade-right" data-aos-duration="1000">
                        </div>
                        <div class="parent">
                           <input type="text" name="address" class="order-entity inp2" required="" placeholder="ADDRESS" data-aos="fade-right" data-aos-duration="1500">
                        </div>
                        <div class="parent">
                           <input type="text" name="mobile" class="order-entity inp3" required="" placeholder="MOBILE" data-aos="fade-right" data-aos-duration="2000">
                        </div>
                        <div class="parent">
                           <input type="text" name="code" class="order-entity inp4" required="" value="<?php session_start(); $_SESSION['code']; ?>" placeholder="BOOK CODE" data-aos="fade-right" data-aos-duration="2500">      
                        </div>
                        <div class="orderbooks-but">
                          <input type="submit" name="send" value="Order Now" data-aos="fade-up" data-aos-duration="1000">
                        </div>
                   </form>
               </div>
           </div>
       </div>      
  </section>

  <script type="text/javascript">
    
    $(document).ready(function(){
        $('input').focus(function(){
           $(this).css({"color":"white"});
        });
    });

  </script>


<script src="../js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>
