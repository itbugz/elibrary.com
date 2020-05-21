<!DOCTYPE html>
<html>
<head>
	<title>E-LIBRARY</title>

         <!-- META TAGS -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
         <!-- META TAGS ENDS HERE -->

          <!-- LINKS STYLING -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" type="text/css" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" rel="stylesheet">
<link href="css/index1.css" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.default.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/aos.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">

<script src="js/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

          <!-- LINKS STYLINGS ENDS HERE -->

		  <style>
              html {
				scroll-behavior:smooth;
			  }
		  </style>
</head>
<body>

                  <!-- NAVIGATION BAR -->

<div class="menu navbar navbar-expand-sm navbar-dark fixed-top" style="background-color:#000;">
     <div class="container">
         <div class="leftmenu">
      
            <!--<h1 class="heading"><a class="navbar-brand" href="index.php">ELIB</a></h1>  -->
            <a href="index.php"><img src="img/logo4Elib.png" width="100px" /></a>

        </div>

      <button class="navbar-toggler" data-toggle="collapse" data-target="#nvbr">
           <span class="navbar-toggler-icon" style="color:white;"></span>
      </button>

      <div class="rightmenu collapse navbar-collapse" id="nvbr">

         <ul class="list-inline navbar-nav text-center ml-auto">
          <li class="list-inline-item nav-item"><a style="color:ivory;" class="nav-link" href="#popular">POPULAR</a></li>
         	<li class="list-inline-item nav-item"><a style="color:ivory;" class="nav-link" href="#catogery">CATOGERY</a></li>
          <li class="list-inline-item nav-item"><a style="color:ivory;" class="nav-link" href="#orderbooks">ORDER BOOKS</a></li>
         	<li class="list-inline-item nav-item"><a style="color:ivory;" class="nav-link" href="#staff">STAFF</a></li>
            <li class="list-inline-item nav-item"><a style="color:ivory;" class="nav-link" href="php/contactus.php">CONTACT US</a></li>
          <li class="list-inline-item nav-item"><a style="color:ivory;" class="nav-link" href="php/signup.php">SIGN UP</a></li>

          <?php
            session_start();
            error_reporting(0);
            $s=$_SESSION['uname'];
                if(null !== $s)
                {?>
                  <li class="list-inline-item nav-item"><a style="color:ivory;" class="nav-link" href="php/logout.php"><?php error_reporting(0); ?>LOG OUT</a></li>
               <?php }
               else 
               { ?>
                 <li class="list-inline-item nav-item"><a style="color:ivory;" class="nav-link" href="php/login.php"><?php error_reporting(0); ?>LOG IN</a></li>        
              <?php   
               }
              ?>
          
          <li class="list-inline-item nav-item"><a style="color:ivory;" class="nav-link" href="#"><?php error_reporting(0); echo $_SESSION['uname']; ?></a></li>
     
         </ul>

      </div>
    </div>
  </div>

                       <!-- NAVIGATION BAR ENDS HERE-->   

                       <!-- OWL CAROUSEL -->

    <section class="home-slider" >
  <div id="myslider">
        
        <div class="owl-carousel owl-theme img">
    <div class="item">
    	<img class="img-fluid" src="img/slider1.jpg" data-aos="zoom-in-up"/>
    	        <h1 style="font-family:'lithos pro';">BEST COLLECTION OF BOOKS</h1>

    	        <span class="text-center button-start"><a href="#start">Start reading</a></span>
    </div>
    <div class="item">
    	<img class="img-fluid" src="img/slider2.jpg" data-aos="zoom-in-up"/>

    	<h1 style="font-family:'lithos pro';position:absolute;left:10%;">PLUNGE INTO THE WONDERFUL WORLD OF READING</h1>
    </div>
    <div class="item">
    	<img class="img-fluid" src="img/slider3.jpg" data-aos="zoom-in-up"/>

    	<h1 style="font-family:'lithos pro';">YOU CAN LEARN ANYTHING </h1>
    </div>
  </div>

   </div>
</section>

                       <!-- OWL CAROUSEL ENDS HERE -->

                       <!-- EXTRA SECTION -->

 <section>
 	  <div data-aos="fade-up" class="xtra-sec container mb-5 p-5" id="start">
 	  	  <div class="row">
 	  	  	  <div class="col-md-12">
                  <h1 class="text-center text-dark font-weight-bold h1 mt-1">OUR GOAL</h1> 	  	  	  	

                  <p class="text-center container">OUR GOAL IS TO PROVIDE BROAD KNOWLEDGE TO EVERY SINGLE PERSON OUT THERE. WE HAVE <BR>
                   A HUGE STOCK OF SOCIAL , PHYSICAL , AUTOBIOGRAPHIES , COMPUTER , BIOLOGICAL , SCIENTIFIC , FICTION , <BR>
                   SCIENCE FICTION, SATIRE, DRAMA, ACTION AND ADVENTURE, ROMANCE, MYSTERY, HORROR, SELF HELP, GUIDE, TRAVEL, RELIGIOUS, SCIENCE, HISTORY, MATH, ANTHOLOGIES, POETRY, ENCYCLOPEDIA, DICTIONARIES, COMICS, ART, COOKBOOKS, DIARIES, [PRAYERS BOOKS, SERIES. <BR>
                   WE WILL TRY TO KEEP OURSELF UPDATED SO THAT YOU DON'T HAVE ANY PROBLEM REGARDING YOUR PROBLEMS. </p>
 	  	  	  </div>
 	  	  </div>
 	  </div>
 </section>

                       <!-- EXTRA SECTION ENDS HERE-->

                       <!-- POPULAR BOOKS -->

 <section id="popular">
 	  <div class="popular-books">
 	  	  <div class="container-fluid">
 	  	  	 <div class="popular-heading">
 	  	  	 	 <h1 class="text-center mb-5">POPULAR</h1>
 	  	  	 </div>
           <?php include('php/dbconfig.php'); ?>
 	  	  	  <div class="row mb-5 ml-3">
 	  	  	  	  <div class="col-md-3 col-6 mt-4" data-aos="fade-down" data-aos-duration="1000">
 	  	  	  	  	  <div class="popular-book-info">
 	  	  	  	  	  	  <?php
                             include('dbconfig.h');

                             $q="SELECT * FROM info WHERE id=1";
                             $res=mysqli_query($conn,$q);

                             $result=mysqli_num_rows($res);

                             if($result > 0)
                             {
                               while($rows=mysqli_fetch_assoc($res))
                               {
                                 echo ' <img src="data:image;base64,'.base64_encode($rows['image']).' " alt="image" width="100%" height="100%"> ';
                               }
                             }
                         ?>

 	  	  	  	  	  	  <div class="overlay">
                          <?php
                            $res="SELECT * FROM info where id=1";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
 	  	  	  	  	  	  	  <h4 class="text-center mt-3">
                          <?php echo($rows['title']) ?>
                            </h4>

                        <p class="text-center"><?php echo($rows['details']) ?></p> 

                        <p class="text-center">CODE : <?php echo($rows['code']) ?></p> 

                        <p class="text-center">PRICE : <?php echo($rows['price']) ?></p> 

                        <?php }
                        }
                        ?>

                        <a href="pdf/compsci.pdf" download><i style="width:80%;height:50px; " class="fa fa-download" aria-hidden="true"></i></a>

 	  	  	  	  	  	  </div>
 	  	  	  	  	  </div>
 	  	  	  	  </div>
 	  	  	  	  <div class="col-md-3 col-6 mt-4" data-aos="fade-down" data-aos-duration="1500">
 	  	  	  	  	  <div class="popular-book-info">
 	  	  	  	  	  	   <?php
                             include('dbconfig.h');

                             $q="SELECT * FROM info WHERE id=2";
                             $res=mysqli_query($conn,$q);

                             $result=mysqli_num_rows($res);

                             if($result > 0)
                             {
                               while($rows=mysqli_fetch_assoc($res))
                               {
                                 echo ' <img src="data:image;base64,'.base64_encode($rows['image']).' " alt="image" width="100%" height="100%"> ';
                               }
                             }
                         ?>

 	  	  	  	  	  	  <div class="overlay">
                          <?php
                            $res="SELECT * FROM info where id=2";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                            <h4 class="text-center mt-3">
                          <?php echo($rows['title']) ?>
                            </h4>

                        <p class="text-center"><?php echo($rows['details']) ?></p>

                        <p class="text-center">CODE : <?php echo($rows['code']) ?></p> 

                        <p class="text-center">PRICE : <?php echo($rows['price']) ?></p> 
                        <?php }
                        }
                        ?>

                        <a href="pdf/hacking.pdf" download><i style="width:80%;height:50px; " class="fa fa-download" aria-hidden="true"></i></a>
 	  	  	  	  	  	  </div>
 	  	  	  	  	  </div>
 	  	  	  	  </div>
 	  	  	  	  <div class="col-md-3 col-6 mt-4" data-aos="fade-down" data-aos-duration="2000">
 	  	  	  	  	  <div class="popular-book-info">
 	  	  	  	  	  	   <?php
                             include('dbconfig.h');

                             $q="SELECT * FROM info WHERE id=3";
                             $res=mysqli_query($conn,$q);

                             $result=mysqli_num_rows($res);

                             if($result > 0)
                             {
                               while($rows=mysqli_fetch_assoc($res))
                               {
                                 echo ' <img src="data:image;base64,'.base64_encode($rows['image']).' " alt="image" width="100%" height="100%"> ';
                               }
                             }
                         ?>

 	  	  	  	  	  	  <div class="overlay">
 	  	  	  	  	  	  	<?php
                            $res="SELECT * FROM info where id=3";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                            <h4 class="text-center mt-3">
                          <?php echo($rows['title']) ?>
                            </h4>

                        <p class="text-center"><?php echo($rows['details']) ?></p>

                        <p class="text-center">CODE : <?php echo($rows['code']) ?></p> 

                        <p class="text-center">PRICE : <?php echo($rows['price']) ?></p> 
                        <?php }
                        }
                        ?>

                        <a href="pdf/hitler.pdf" download><i style="width:80%;height:50px; " class="fa fa-download" aria-hidden="true"></i></a>
 	  	  	  	  	  	  </div>
 	  	  	  	  	  </div>
 	  	  	  	  </div>
 	  	  	  	  <div class="col-md-3 col-6 mt-4" data-aos="fade-down" data-aos-duration="2500">
 	  	  	  	  	  <div class="popular-book-info">
 	  	  	  	  	  	   <?php
                             include('dbconfig.h');

                             $q="SELECT * FROM info WHERE id=4";
                             $res=mysqli_query($conn,$q);

                             $result=mysqli_num_rows($res);

                             if($result > 0)
                             {
                               while($rows=mysqli_fetch_assoc($res))
                               {
                                 echo ' <img src="data:image;base64,'.base64_encode($rows['image']).' " alt="image" width="100%" height="100%"> ';
                               }
                             }
                         ?>

 	  	  	  	  	  	  <div class="overlay">
 	  	  	  	  	  	  	<?php
                            $res="SELECT * FROM info where id=4";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                            <h4 class="text-center mt-3">
                          <?php echo($rows['title']) ?>
                            </h4>

                        <p class="text-center"><?php echo($rows['details']) ?></p>

                        <p class="text-center">CODE : <?php echo($rows['code']) ?></p> 

                        <p class="text-center">PRICE : <?php echo($rows['price']) ?></p> 
                        <?php }
                        }
                        ?>

                        <a href="pdf/think.pdf" download><i style="width:80%;height:50px; " class="fa fa-download" aria-hidden="true"></i></a>
 	  	  	  	  	  	  </div>
 	  	  	  	  	  </div>
 	  	  	  	  </div>

 	  	  	  </div>

 	  	  	  <div class="row mb-5 ml-3" data-aos="fade-down" data-aos-duration="1000">
 	  	  	  	  <div class="col-md-3 col-6 mt-4">
 	  	  	  	  	  <div class="popular-book-info">
 	  	  	  	  	  	   <?php
                             include('dbconfig.h');

                             $q="SELECT * FROM info WHERE id=5";
                             $res=mysqli_query($conn,$q);

                             $result=mysqli_num_rows($res);

                             if($result > 0)
                             {
                               while($rows=mysqli_fetch_assoc($res))
                               {
                                 echo ' <img src="data:image;base64,'.base64_encode($rows['image']).' " alt="image" width="100%" height="100%"> ';
                               }
                             }
                         ?>

 	  	  	  	  	  	  <div class="overlay">
 	  	  	  	  	  	  	  <?php
                            $res="SELECT * FROM info where id=5";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                            <h4 class="text-center mt-3">
                          <?php echo($rows['title']) ?>
                            </h4>

                        <p class="text-center"><?php echo($rows['details']) ?></p>

                        <p class="text-center">CODE : <?php echo($rows['code']) ?></p> 

                        <p class="text-center">PRICE : <?php echo($rows['price']) ?></p> 
                        <?php }
                        }
                        ?>

                        <a href="pdf/power.pdf" download><i style="width:80%;height:50px; " class="fa fa-download" aria-hidden="true"></i></a>
 	  	  	  	  	  	  </div>
 	  	  	  	  	  </div>
 	  	  	  	  </div>
 	  	  	  	  <div class="col-md-3 col-6 mt-4" data-aos="fade-down" data-aos-duration="1500">
 	  	  	  	  	  <div class="popular-book-info">
 	  	  	  	  	  	  <?php
                             include('dbconfig.h');

                             $q="SELECT * FROM info WHERE id=6";
                             $res=mysqli_query($conn,$q);

                             $result=mysqli_num_rows($res);

                             if($result > 0)
                             {
                               while($rows=mysqli_fetch_assoc($res))
                               {
                                 echo ' <img src="data:image;base64,'.base64_encode($rows['image']).' " alt="image" width="100%" height="100%"> ';
                               }
                             }
                         ?>

 	  	  	  	  	  	  <div class="overlay">
 	  	  	  	  	  	  	  <?php
                            $res="SELECT * FROM info where id=6";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                            <h4 class="text-center mt-3">
                          <?php echo($rows['title']) ?>
                            </h4>

                        <p class="text-center"><?php echo($rows['details']) ?></p>

                        <p class="text-center">CODE : <?php echo($rows['code']) ?></p> 

                        <p class="text-center">PRICE : <?php echo($rows['price']) ?></p> 
                        <?php }
                        }
                        ?>

                        <a href="pdf/attitude.pdf" download><i style="width:80%;height:50px; " class="fa fa-download" aria-hidden="true"></i></a>
 	  	  	  	  	  	  </div>
 	  	  	  	  	  </div>
 	  	  	  	  </div>
 	  	  	  	  <div class="col-md-3 col-6 mt-4" data-aos="fade-down" data-aos-duration="2000">
 	  	  	  	  	  <div class="popular-book-info">
 	  	  	  	  	  	   <?php
                             include('dbconfig.h');

                             $q="SELECT * FROM info WHERE id=7";
                             $res=mysqli_query($conn,$q);

                             $result=mysqli_num_rows($res);

                             if($result > 0)
                             {
                               while($rows=mysqli_fetch_assoc($res))
                               {
                                 echo ' <img src="data:image;base64,'.base64_encode($rows['image']).' " alt="image" width="100%" height="100%"> ';
                               }
                             }
                         ?>

 	  	  	  	  	  	  <div class="overlay">
 	  	  	  	  	  	  	  <?php
                            $res="SELECT * FROM info where id=7";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                            <h4 class="text-center mt-3">
                          <?php echo($rows['title']) ?>
                            </h4>

                        <p class="text-center"><?php echo($rows['details']) ?></p>

                        <p class="text-center">CODE : <?php echo($rows['code']) ?></p> 

                        <p class="text-center">PRICE : <?php echo($rows['price']) ?></p> 
                        <?php }
                        }
                        ?>

                        <a href="pdf/shrlockholmes.pdf" download><i style="width:80%;height:50px; " class="fa fa-download" aria-hidden="true"></i></a>
 	  	  	  	  	  	  </div>
 	  	  	  	  	  </div>
 	  	  	  	  </div>
 	  	  	  	  <div class="col-md-3 col-6 mt-4" data-aos="fade-down" data-aos-duration="2500">
 	  	  	  	  	  <div class="popular-book-info">
 	  	  	  	  	  	   <?php
                             include('dbconfig.h');

                             $q="SELECT * FROM info WHERE id=8";
                             $res=mysqli_query($conn,$q);

                             $result=mysqli_num_rows($res);

                             if($result > 0)
                             {
                               while($rows=mysqli_fetch_assoc($res))
                               {
                                 echo ' <img src="data:image;base64,'.base64_encode($rows['image']).' " alt="image" width="100%" height="100%"> ';
                               }
                             }
                         ?>
 	  	  	  	  	  	  <div class="overlay">
 	  	  	  	  	  	  	  <?php
                            $res="SELECT * FROM info where id=8";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                            <h4 class="text-center mt-3">
                          <?php echo($rows['title']) ?>
                            </h4>

                        <p class="text-center"><?php echo($rows['details']) ?></p>

                        <p class="text-center">CODE : <?php echo($rows['code']) ?></p> 

                        <p class="text-center">PRICE : <?php echo($rows['price']) ?></p> 
                        <?php }
                        }
                        ?>

                        <a href="pdf/apjak.pdf" download><i style="width:80%;height:50px; " class="fa fa-download" aria-hidden="true"></i></a>
 	  	  	  	  	  	  </div>
 	  	  	  	  	  </div>
 	  	  	  	  </div>

 	  	  	  </div>
 	  	  </div>
 	  </div>
 </section>


                       <!-- POPULAR BOOKS ENDS HERE -->


                       <!-- CUSTOMER REVIEWS -->
<div id="carouselExampleControls" class="carousel slide p-5" data-ride="carousel">
	<div class="review-heading">
		<h1 class="text-center mb-5 ">CUSTOMER REVIEWS</h1>
	</div>
  <div class="carousel-inner p-3 customer-reviews" data-aos="fade-up" data-aos-duration="1000">
    <div class="carousel-item active">
         <div class="carousel-img container">
             <img src="img/3.jpg" class="d-block w-100" alt="...">
         </div>
           <ul class="list-inline text-center">
           	  <li class="list-inline-item">
                 <h4 class="text-center mt-2"> <i class="fa fa-star fullstar" aria-hidden="true"></i></h4>
           	  </li>
           	  <li class="list-inline-item">
           	  	<h4 class="text-center mt-2"> <i class="fa fa-star fullstar" aria-hidden="true"></i></h4>
           	  </li>
           	  <li class="list-inline-item">
           	  	<h4 class="text-center mt-2"> <i class="fa fa-star fullstar" aria-hidden="true"></i></h4>
           	  </li>
           	  <li class="list-inline-item">
           	  	 <h4 class="text-center mt-2"> <i class="fa fa-star fullstar" aria-hidden="true"></i></h4>
           	  </li>
           	  <li class="list-inline-item">
           	  	 <h4 class="text-center mt-2"> <i class="fa fa-star-half-o halfstar" aria-hidden="true"></i></h4>
           	  </li>

           </ul>
           <div class="review-desc">
              <p class="text-center"><sup><i class="fa fa-quote-left mt-2" aria-hidden="true"></i></sup> I HAVE LIKED YOUR COLLECTION <sub><i class="fa fa-quote-right " aria-hidden="true"></i></sub></p>
           </div>
    </div>
    <div class="carousel-item">
    	<div class="carousel-img container">
             <img src="img/1.jpg" class="d-block w-100" alt="...">
         </div>

           <ul class="list-inline text-center">
           	  <li class="list-inline-item">
                 <h4 class="text-center mt-2"> <i class="fa fa-star fullstar" aria-hidden="true"></i></h4>
           	  </li>
           	  <li class="list-inline-item">
           	  	<h4 class="text-center mt-2"> <i class="fa fa-star fullstar" aria-hidden="true"></i></h4>
           	  </li>
           	  <li class="list-inline-item">
           	  	<h4 class="text-center mt-2"> <i class="fa fa-star fullstar" aria-hidden="true"></i></h4>
           	  </li>
           	  <li class="list-inline-item">
           	  	 <h4 class="text-center mt-2"> <i class="fa fa-star fullstar" aria-hidden="true"></i></h4>
           	  </li>
           	  <li class="list-inline-item">
           	  	 <h4 class="text-center mt-2"> <i class="fa fa-star fullstar" aria-hidden="true"></i></h4>
           	  </li>
           </ul>
           <div class="review-desc">
           
           	<p class="text-center"><sup><i class="fa fa-quote-left mt-2" aria-hidden="true"></i></sup> I ENJOYED READING IN A BEAUTIFUL ATMOSPHERE. <sub><i class="fa fa-quote-right" aria-hidden="true"></i></sub></p>
       </div>
    </div>
    <div class="carousel-item">
    	<div class="carousel-img container">
             <img src="img/2.jpg" class="d-block w-100" alt="...">
         </div>

           <ul class="list-inline text-center">
           	  <li class="list-inline-item">
                 <h4 class="text-center mt-2"> <i class="fa fa-star fullstar" aria-hidden="true"></i></h4>
           	  </li>
           	  <li class="list-inline-item">
           	  	<h4 class="text-center mt-2"> <i class="fa fa-star fullstar" aria-hidden="true"></i></h4>
           	  </li>
           	  <li class="list-inline-item">
           	  	<h4 class="text-center mt-2"> <i class="fa fa-star fullstar" aria-hidden="true"></i></h4>
           	  </li>
           	  <li class="list-inline-item">
           	  	 <h4 class="text-center mt-2"> <i class="fa fa-star fullstar" aria-hidden="true"></i></h4>
           	  </li>
           	  <li class="list-inline-item">
           	  	 <h4 class="text-center mt-2"> <i class="fa fa-star fullstar" aria-hidden="true"></i></h4>
           	  </li>
           </ul>
           <div class="review-desc">
           <p class="text-center"><sup><i class="fa fa-quote-left mt-2" aria-hidden="true"></i></sup> YOUR COLLECTION INSPIRES ME TO DO MORE . <sub><i class="fa fa-quote-right" aria-hidden="true"></i></sub></p>
           </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>





                       <!-- CUSTOMER REVIEWS -->

                        <!-- CATOGORIES -->

<div class="category-heading" id="catogery">
	<h1 class="text-center">CATEGORIES</h1>
</div>


 
<ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist" data-aos="zoom-in-up" data-aos-duration="1000">
  <li class="nav-item">
    <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">ALL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-computer-tab" data-toggle="pill" href="#pills-computer" role="tab" aria-controls="pills-computer" aria-selected="false">COMPUTER</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-enter-tab" data-toggle="pill" href="#pills-enter" role="tab" aria-controls="pills-enter" aria-selected="false">ENTERTAINMENT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-biography-tab" data-toggle="pill" href="#pills-biography" role="tab" aria-controls="pills-biography" aria-selected="false">BIOGRAPHIES</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-encyclopedias-tab" data-toggle="pill" href="#pills-encyclopedias" role="tab" aria-controls="pills-encyclopedias" aria-selected="false">ENCYCLOPEDIAS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-mathematics-tab" data-toggle="pill" href="#pills-mathematics" role="tab" aria-controls="pills-mathematics" aria-selected="false">MATHEMATICS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-chemistry-tab" data-toggle="pill" href="#pills-chemistry" role="tab" aria-controls="pills-chemistry" aria-selected="false">CHEMISTRY</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-physics-tab" data-toggle="pill" href="#pills-physics" role="tab" aria-controls="pills-physics" aria-selected="false">PHYSICS</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
  	 <div class="container-fluid books-images">
  	 	 <div class="row ml-3">
  	 	 	 <div class="col-md-3 col-3 imgs" data-aos="fade-up" data-aos-duration="1000">
                 <a href="pdf/computer hardware.pdf" download><img src="img/comp1.jpg" class="mb-5 mt-5"></a>
                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=1";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE : <?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="1500">
                 <a href="pdf/physics1.pdf" download><img src="img/physics1.jpg" class="mb-5 mt-5" /></a>
                 
                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=2";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>

  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="2000">
                 <a href="pdf/chem.pdf" download><img src="img/chem1.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=3";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="2500">
                 <a href="pdf/fred.pdf" download><img src="img/enter1.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=4";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 </div>
  	 	 <div class="row ml-3" >
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="1000">
  	 	 	 	 <a href="pdf/zelda.pdf" download><img src="img/encyclo1.jpg"  class="mb-5 mt-5" /></a>

           <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=5";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="1500">
  	 	 	 	 <a href="pdf/helen.pdf" download><img src="img/biography1.jpg" class="mb-5 mt-5" /></a>

           <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=6";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="2000">
  	 	 	 	 <a href="pdf/rewind.pdf" download><img src="img/enter2.jpg" class="mb-5 mt-5" /></a>

           <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=7";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="2500">
  	 	 	 	 <a href="pdf/math1.pdf" download><img src="img/maths1.jpg" class="mb-5 mt-5" /></a>

           <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=8";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 </div>
  	 </div>
  </div>
  <div class="tab-pane fade" id="pills-computer" role="tabpanel" aria-labelledby="pills-computer-tab">
  	  <div class="container-fluid books-images">
  	 	 <div class="row ml-3">
  	 	 	 <div class="col-md-3 col-4" data-aos="fade-up" data-aos-duration="1000">
                 <a href="pdf/computer hardware.pdf" download><img src="img/comp1.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=1";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-4" data-aos="fade-up" data-aos-duration="1500">
                 <a href="pdf/comp2.pdf" download><img src="img/comp2.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=9";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-4" data-aos="fade-up" data-aos-duration="2000">
                 <a href="pdf/comp3.pdf" download><img src="img/comp3.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=10";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 </div>
  	 </div>
  </div>
  <div class="tab-pane fade" id="pills-enter" role="tabpanel" aria-labelledby="pills-enter-tab">
  	  <div class="container-fluid books-images">
  	 	 <div class="row ml-3">
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="1000">
                 <a href="pdf/fred.pdf" download><img src="img/enter1.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=4";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="1500">
                 <a href="pdf/rewind.pdf" download><img src="img/enter2.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=7";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="2000">
                 <a href="pdf/enter3.pdf" download><img src="img/enter3.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=11";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="2500">
                 <a href="pdf/enter4.pdf" download><img src="img/enter4.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=12";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 </div>
  	 </div>
  </div>
  <div class="tab-pane fade" id="pills-biography" role="tabpanel" aria-labelledby="pills-biography-tab">
  	  <div class="container-fluid books-images">
  	 	 <div class="row ml-3">
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="1000">
                 <a href="pdf/helen.pdf" download><img src="img/biography1.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=6";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="1500">
                 <a href="pdf/bio2.pdf" download><img src="img/biography2.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=13";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="2000">
                 <a href="pdf/bio3.pdf" download><img src="img/biography3.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=14";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-3" data-aos="fade-up" data-aos-duration="2500">
                 <a href="pdf/bio4.pdf" download><img src="img/biography4.jpg" class="mb-5 mt-5" /></a>
                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=15";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 </div>
  	 </div>
  </div>
  <div class="tab-pane fade" id="pills-encyclopedias" role="tabpanel" aria-labelledby="pills-encyclopedias-tab">
  	  <div class="container-fluid books-images">
  	 	 <div class="row ml-3">
  	 	 	 <div class="col-md-3 col-4" data-aos="fade-up" data-aos-duration="1000">
                 <a href="pdf/zelda.pdf" download><img src="img/encyclo1.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=5";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-4" data-aos="fade-up" data-aos-duration="1500">
                 <a href="pdf/encyclo2.pdf" download><img src="img/encyclo2.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=16";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-4" data-aos="fade-up" data-aos-duration="2000">
                 <a href="pdf/encyclo3.pdf" download><img src="img/encyclo3.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=17";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 </div>
  	 </div>
  </div>
  <div class="tab-pane fade" id="pills-mathematics" role="tabpanel" aria-labelledby="pills-mathematics-tab">
  	  <div class="container-fluid books-images">
  	 	 <div class="row ml-3">
  	 	 	 <div class="col-md-3 col-6" data-aos="fade-up" data-aos-duration="1000">
                 <a href="pdf/math1.pdf" download><img src="img/maths1.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=8";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-6" data-aos="fade-up" data-aos-duration="1500">
                 <a href="pdf/math2.pdf" download><img src="img/maths2.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=18";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 </div>
  	 </div>
  </div>
  <div class="tab-pane fade" id="pills-chemistry" role="tabpanel" aria-labelledby="pills-chemistry-tab">
  	  <div class="container-fluid books-images">
  	 	 <div class="row ml-3">
  	 	 	 <div class="col-md-3 col-4" data-aos="fade-up" data-aos-duration="1000">
                 <a href="pdf/chem.pdf" download><img src="img/chem1.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=3";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-4" data-aos="fade-up" data-aos-duration="1500">
                 <a href="pdf/chem2.pdf" download><img src="img/chem2.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=19";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-4" data-aos="fade-up" data-aos-duration="2000">
                 <a href="pdf/chem3.pdf" download><img src="img/chem3.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=20";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 </div>
  	 </div>
  </div>
  <div class="tab-pane fade" id="pills-physics" role="tabpanel" aria-labelledby="pills-physics-tab">
  	  <div class="container-fluid books-images">
  	 	 <div class="row ml-3">
  	 	 	 <div class="col-md-3 col-4" data-aos="fade-up" data-aos-duration="1000">
                 <a href="pdf/physics2.pdf" download><img src="img/phys1.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=21";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-4" data-aos="fade-up" data-aos-duration="1500">
                 <a href="pdf/physics3.pdf" download><img src="img/phys2.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=22";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 	 <div class="col-md-3 col-4" data-aos="fade-up" data-aos-duration="2000">
                 <a href="pdf/physics4.pdf" download><img src="img/phys3.jpg" class="mb-5 mt-5" /></a>

                 <div class="overlay2">
                     <div class="code">
                      <?php

                    $res="SELECT * FROM catog where id=2";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                      <h5>CODE :<?php echo $rows['code'] ?></h5>
                      <h5>Rs. <?php echo $rows['price'] ?>/-</h5>
                      <?php 
                           }
                        }
                        ?>
                     </div>
                 </div>
  	 	 	 </div>
  	 	 </div>
  	 </div>
  </div>
</div>                       
                        <!-- CATOGORIES ENDS HERE -->


                        <!-- BOOKING ORDER -->

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

    $res=mysqli_query($conn,$result); 
    
    if($res)
    { ?>

 <script>
      const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
})

Toast.fire({
  type: 'success',
  title: 'Order placed',
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

                        <!-- BOOKING ORDER ENDS HERE-->
                        

                        <!-- TESTIMONIAL -->

    <section id="staff">
    	 <div class="container-fluid mt-5">
    	 	 <div class="testim-heading">
    	 	 	 <h1 class="text-center">TESTIMONIALS</h1>
    	 	 </div>

    	 	 <div class="testim-body" data-aos="fade-up" data-aos-duration="1000">
    	 	 	 <div id="controls" class=" testim-slider carousel slide p-5" data-ride="carousel" data-interval="2000">
    	 	 	 	 <div class="carousel-inner">
    	 	 	 	 	 <div class="carousel-item active">
    	 	 	 	 	 	 <div class="testim-creds">
    	 	 	 	 	 	 	<div class="carousel-img container">
                                    <img src="img/c1.jpg" class="mt-2">
                                </div>
                                 
                                 <h2 class="testim-name text-center">ANUSHKA SHARMA</h2>
                                 <div class="text-center testim-desc">
                                    <p><sup><i class="fa fa-quote-left mt-2" aria-hidden="true"></i></sup> SHE IS A POST-GRADUATED TEACHER . SHE IS SERVING HERE AS HEAD LIBRARIAN.<bR> SHE MANAGES ALL THE ORDERTAKINGS AND DELIVERING THE BOOKS.<br> <sub><i class="fa fa-quote-right mb-5" aria-hidden="true"></i></sub></p>
                                 </div>
    	 	 	 	 	 	 </div>
    	 	 	 	 	 </div>

    	 	 	 	 	 <div class="carousel-item">
    	 	 	 	 	 	 <div class="testim-creds container">
    	 	 	 	 	 	 	<div class="carousel-img container">
                                    <img src="img/c2.jpg" class="mt-2">
                                </div>
                                 
                                 <h2 class="testim-name text-center">APOORVA VERMA</h2>
                                 <div class="text-center testim-desc">
                                    <p><sup><i class="fa fa-quote-left mt-2" aria-hidden="true"></i></sup> HE IS ALSO A POST-GRADUATED TEACHER .<BR> HE IS WORKING WITH US FOR 3 YEARS. HE HAD DONE SOME OF THE<br> DIFFICULT PROJECTS WITH EASE. <sub><i class="fa fa-quote-right mb-5" aria-hidden="true"></i></sub></p>
                                 </div>
    	 	 	 	 	 	 </div>
    	 	 	 	 	 </div>

    	 	 	 	 	 <div class="carousel-item">
    	 	 	 	 	 	 <div class="testim-creds container">
    	 	 	 	 	 	 	<div class="carousel-img container">
                                  <img  src="img/c4.jpg" class="mt-2">
                                </div>
                                 
                                 <h2 class="testim-name text-center">IRFAN KHAN</h2>
                                 <div class="text-center testim-desc">
                                    <p><sup><i class="fa fa-quote-left mt-2" aria-hidden="true"></i></sup>HE IS A COMPUTER PROFESSIONAL.<br> HE MADE OUR WORK EASY IN MANY FACTORS. HE MANAGES ALL<br> THE TECHNICAL WORK AND MAINTAINS THE QUALITY .<sub><i class="fa fa-quote-right mb-5" aria-hidden="true"></i></sub></p>
                                 </div>
    	 	 	 	 	 	 </div>
    	 	 	 	 	 </div>
    	 	 	 	 </div>
   	<a class="carousel-control-prev navigator-left" href="#controls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next navigator-right" href="#controls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
    	 	 	 </div>
    	 	 </div>
    	 </div>
    </section>

                        <!-- TESTIMONIAL ENDS HERE -->

                        <!-- FOOTER CREDS -->

    <footer style="background-color:black;">
    	 <div class="container-fluid">
    	 	 <div class="footer-creds p-5">
    	 	 	 <div class="row">
    	 	 	 	 <div class="col-md-4 col-4">
    	 	 	 	 	<div class="footer-about text-center" data-aos="fade-down" data-aos-duration="1000">
    	 	 	 	 		<h4 style="color:white;">About Us</h4>
    	 	 	 	 		<p style="color:white;">We are ELIB. We provide books to them who need them. We provide books to them in least rates. We provide competitions for advancements in practical skills. </p>
    	 	 	 	 	</div>
    	 	 	 	 </div>
    	 	 	 	 <div class="col-md-4 col-4 text-center">
    	 	 	 	 	 <div class="footer-social" data-aos="fade-up" data-aos-duration="1000">
    	 	 	 	 	 	 <h4 style="color:white;">Social Media</h4>
    	 	 	 	 	 	 <p style="color:white;"> Follow us on social media to get daily updates regarding our new books. </p>
    	 	 	 	 	 </div>

    	 	 	 	 	 <div class="footer-social-list container pt-3 ">
    	 	 	 	 	 	 <ul class="list-inline row">
    	 	 	 	 	 	 	<li class="col-sm-4 col-4 mt-1">
    	 	 	 	 	 	 		<a href="#"><i style="color:white" class="fa fa-facebook p-2" data-aos="fade-right" data-aos-duration="300"></i></a>
    	 	 	 	 	 	 	</li>
    	 	 	 	 	 	 	<li class="col-sm-4 col-4 mt-1">
    	 	 	 	 	 	 		<a href="#"><i style="color:white" class="fa fa-instagram p-2" data-aos="fade-right" data-aos-duration="700"></i></a>
    	 	 	 	 	 	 	</li>
    	 	 	 	 	 	 	<li class="col-sm-4 col-4 mt-1">
    	 	 	 	 	 	 		<a href="#"><i style="color:white;" class="fa fa-twitter p-2" data-aos="fade-right" data-aos-duration="1000"></i></a>
    	 	 	 	 	 	 	</li>
    	 	 	 	 	 	 </ul>
    	 	 	 	 	 </div>
    	 	 	 	 </div>

    	 	 	 	 <div class="col-md-4 col-4 text-center text-light">
    	 	 	 	 	 <div class="footer-question" data-aos="fade-down" data-aos-duration="1000">
    	 	 	 	 	 	 <h4 style="color:white;" >HAVE A QUESTION ?</h4>
                             
    	 	 	 	 	 	 <p>Plot No. 786 Opp. Infotech, Jalandhar</p>

    	 	 	 	 	 	 <p>(+91) 9056311509</p>

    	 	 	 	 	 	 <p>support@elib.com</p>
    	 	 	 	 	 </div>
    	 	 	 	 </div>
    	 	 	 </div>


    <?php include('php/dbconfig.php') ?>

    <?php
       if(isset($_POST['feed']))
       {
        $feedback=$_POST['feedback'];

        $out="INSERT INTO `feedback` VALUES ('$feedback')";

        mysqli_query($conn,$out);
       }
     ?>
    	 	 	 <div class="row pt-5">
    	 	 	 	 <div class="col-md-12 container">
                         <div class="feedback-space">
                         	<div class="feedback-heading" data-aos="fade-up" data-aos-duration="1000">
                         		<h3 class="text-light">HAVE SOMETHING TO SAY???</h3>
                         	</div>
                         	 <form method="post" action="#">
                         	 	  <input type="text" name="feedback" class="feedback-frm" >
                         	 	  <span class="text-center btn"><input type="submit" name="feed" value="Submit"></span>
                         	 </form>

                         	
                         </div>
    	 	 	 	 </div>
    	 	 	 </div>
    	 	 </div>
    	 </div>
    </footer> 

<script type="text/javascript">
	 $(document).ready(function(){
          $('.feedback-frm').focus(function(){
               $(this).css({"color":"black","font-style":"italic"});
          });
	 });
</script>
    

                        <!-- FOOTER CREDS ENDS HERE -->




<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/docs/assets/vendors/jquery.min.js"></script>
<script  src="js/aos.js" type="text/javascript"></script>

<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>

<script src="js/owl.carousel.min.js" type="text/javascript"></script>


<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/owl.js" type="text/javascript"></script>

<script type="text/javascript">
  AOS.init({
    duration:1000,
  });
</script>

</body>
</html>