<!DOCTYPE html>
<html>
<head>
	<title>ADMIN BLOCK</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="css/index.css" type="text/css" rel="stylesheet">
    

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/index.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.default.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

<script src="../js/jquery-3.4.1.js"></script> 


   <style type="text/css">
     
     .nav-pills {
      margin-left:10%;
      margin-top:5%;
     }
     
     .nav-pills .nav-link.active {
      background-color:black;
     }
     
     .nav-pills .nav-item a {
      color:black;
      font-style:italic;
      font-weight:bold;
     }



   </style>

</head>

<body>

    <div class="admin-heading">
        <h1 class="text-center bg-success">ELIB ADMIN PANEL</h1>
    </div>

<?php include('dbconfig.php') ?>

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-reserve-tab" data-toggle="pill" href="#pills-reserve" role="tab" aria-controls="pills-reserve" aria-selected="true">ORDERS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-foodorder-tab" data-toggle="pill" href="#pills-foodorder" role="tab" aria-controls="pills-foodorder" aria-selected="false">FEEDBACK</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">CONTACT US</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-users-tab" data-toggle="pill" href="#pills-users" role="tab" aria-controls="pills-users" aria-selected="false">USERS</a>
  </li>
   <li class="nav-item">
    <a class="nav-link" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="false">INFO</a>
  </li>
</ul>


<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-reserve" role="tabpanel" aria-labelledby="pills-reserve-tab">
  	
    <section class="container">
        <div class="tab-heading1">
            <h1 class="text-center bg-info">ORDER BOOKS</h1>
        </div>
    	 <div class="orderbooks-tab ">
             <table class="container table table-striped" border="2px" style="width:800px;line-height:50px;text-align:center;"  >
             	 <tr class="thead-dark">
             	 	<th>
             	 		Full name
             	 	</th>
             	 	<th>
             	 		Address
             	 	</th>
             	 	<th>
             	 		Mobile
             	 	</th>
             	 	<th>
             	 		Book code
             	 	</th>
             	 </tr>
             	 <?php

                 session_start();
             	  
                    $res="SELECT * FROM test";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                    	while($rows=mysqli_fetch_assoc($result))
                    	{?>

             	 <tr>
             	 	<td>
             	 		<?php echo($rows['name']) ?>
             	 	</td>
             	 	<td>
             	 		<?php echo($rows['address']) ?>
             	 	</td>
             	 	<td>
             	 		<?php echo($rows['mobile']) ?>
             	 	</td>
             	 	<td>
             	 		<?php echo($rows['code']) ?>
             	 	</td>
             	 </tr>
             	 <?php	} ?>
                    
             <?php } ?>
             
             </table>

             <table align="right" class="align table table-striped" border="2px" style="width:100px;line-height:50px;text-align:center;position:absolute;right:17.2%;top:31.30%;">
                 <tr >
                     <th class="bg-dark text-light">
                         price
                     </th>
                 </tr>
                 <?php

                     include('dbconfig.php');

                      $sql="SELECT * FROM test";

                      $query=mysqli_query($conn,$sql);

                      $checkresult=mysqli_num_rows($query);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($query))
                        {
                            $code=$rows['code'];

                             $res="SELECT * FROM catog where code='$code' ";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {  ?> 
                    <tr>
                        <td>
                            <?php echo $rows['price'] ?>
                        </td>
                    </tr>
          <?php } } 
            } } ?>
             </table>
    	 </div>
    </section>

  </div>
  <div class="tab-pane fade" id="pills-foodorder" role="tabpanel" aria-labelledby="pills-foodorder-tab">
      
   <section class="container">
        <div class="tab-heading1">
            <h1 class="text-center bg-info">FEEDBACKS BLOCK</h1>
        </div>
         <div class="orderbooks-tab ">
             <table class="container table table-striped" border="2px" align="center" style="width:800px;line-height:50px;text-align:center;"  >
                 <tr class="thead-dark">
                    <th>
                        FEEDBACKS
                    </th>
                 </tr>
                 <?php
                  
                    $res="SELECT * FROM feedback";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>

                 <tr>
                    <td>
                        <?php echo($rows['feed']) ?>
                    </td>
                 </tr>
                 <?php  } ?>
                    
             <?php } ?>
             
             </table>
         </div>
    </section>

  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      
       <section class="container">
        <div class="tab-heading1">
            <h1 class="text-center bg-info">CONTACT US BLOCK</h1>
        </div>
         <div class="orderbooks-tab ">
             <table class="container table table-striped" border="2px" align="center" style="width:800px;line-height:50px;text-align:center;"  >
                 <tr class="thead-dark">
                    <th>
                        FULL NAME
                    </th>
                    <th>
                        LAST NAME
                    </th>
                    <th>
                        EMAIL
                    </th>
                    <th>
                        MOBILE
                    </th>
                    <th>
                        CITY
                    </th>
                    <th>
                        STATE
                    </th>
                    <th>
                        ZIP
                    </th>
                 </tr>
                 <?php
                  
                    $res="SELECT * FROM contact";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>

                 <tr>
                    <td>
                        <?php echo($rows['fname']) ?>
                    </td>
                    <td>
                        <?php echo($rows['lname']) ?>
                    </td>
                    <td>
                        <?php echo($rows['email']) ?>
                    </td>
                    <td>
                        <?php echo($rows['mobile']) ?>
                    </td>
                    <td>
                        <?php echo($rows['city']) ?>
                    </td>
                    <td>
                        <?php echo($rows['state']) ?>
                    </td>
                    <td>
                        <?php echo($rows['zip']) ?>
                    </td>
                 </tr>
                 <?php  } ?>
                    
             <?php } ?>
             </table>
             </div>
       
    </section>
</div>

<div class="tab-pane fade" id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab">
    <section class="container">
        <div class="tab-heading1">
            <h1 class="text-center bg-info">USERS BLOCK</h1>
        </div>
         <div class="orderbooks-tab ">
             <table class="container table table-striped" border="2px" align="center" style="width:800px;line-height:50px;text-align:center;"  >
                 <tr class="thead-dark">
                    <th>
                        FNAME
                    </th>
                    <th>
                        UNAME
                    </th>
                    <th>
                        PASSWORDS
                    </th>
                    <th>
                        MOBILE
                    </th>
                    <th>
                        EMAIL
                    </th>
                 </tr>
                 <?php
                  
                    $res="SELECT * FROM users";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>

                 <tr>
                    <td>
                        <?php echo($rows['fname']) ?>
                    </td>
                    <td>
                        <?php echo($rows['uname']) ?>
                    </td>
                    <td>
                        <?php echo($rows['pass']) ?>
                    </td>
                    <td>
                        <?php echo($rows['mobile']) ?>
                    </td>
                    <td>
                        <?php echo($rows['email']) ?>
                    </td>
                 </tr>
                 <?php  } ?>
                    
             <?php } ?>
             
             </table>
         </div>
    </section>
</div>

<div class="tab-pane fade" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
    <section class="container">
        <div class="tab-heading1">
            <h1 class="text-center bg-info">INFO BLOCK</h1>
        </div>
         <div class="info-tab ">
             <table class="container table table-striped" border="2px" align="center" style="width:800px;line-height:50px;text-align:center;"  >
                 <tr>
                    <td>
                 <form class="infoform" action="" method="post" enctype="multipart/form-data">
                    <?php
                      include('dbconfig.php');

                      if(isset($_POST['input']))
                      {
                        $bookstitle=$_POST['bookstitle'];
                        $bookstext=$_POST['bookstext'];
                        $bookscode=$_POST['bookscode'];
                        $booksprice=$_POST['booksprice'];
                        $img=addslashes(file_get_contents($_FILES['img']['tmp_name']));

                        $q="INSERT INTO `info` VALUES ('0','$bookstitle' , '$bookstext' , '$bookscode', '$booksprice' , '$img')";

                        $res=mysqli_query($conn,$q);
                      }
                     ?><div class="parent">
                        <label>TITLE </label>
                         <input type="text" name="bookstitle" required="">
                     </div>
                     <div class="parent"> 
                        <label>TEXT </label>
                        <input type="text" name="bookstext" required="">
                     </div>
                     <div class="parent"> 
                        <label>CODE</label>
                        <input type="text" name="bookscode" required="">
                     </div>
                     <div class="parent"> 
                        <label>PRICE</label>
                        <input type="text" name="booksprice" required="">
                     </div>
                     <div class="parent"> 
                        <label>IMAGE</label>
                        <input type="file" name="img" required="">
                     </div>

                     <input type="submit" name="input">
                 </form>
             </td>
         </tr>

         
             </table>

             <table class="container table table-striped" border="2px" align="center" style="width:800px;line-height:50px;text-align:center;" >
          
                <tr class="thead-dark">
                    <th>
                        ID
                    </th>
                    <th>
                        TITLE
                    </th>
                    <th>
                        TEXT
                    </th>
                    <th>
                        CODE
                    </th>
                    <th>
                        PRICE
                    </th>
                    <th>
                        IMAGE
                    </th>
                    <th>
                        EDIT
                    </th>
                    <th>
                        DELETE
                    </th>
                </tr>
<?php

                    $res="SELECT * FROM info order by id desc";
                    $result=mysqli_query($conn,$res);

                    $checkresult=mysqli_num_rows($result);

                    if($checkresult > 0)
                    {
                        while($rows=mysqli_fetch_assoc($result))
                        {?>
                <tr>
                    <td>
                        <?php echo $rows['id'] ?>
                    </td>
                    <td>
                        <?php echo $rows['title'] ?>
                    </td>
                    <td>
                        <?php echo $rows['details'] ?>
                    </td>
                    <td>
                        <?php echo $rows['code'] ?>
                    </td>
                    <td>
                        <?php echo $rows['price'] ?>
                    </td>
                    <td>
                        <?php echo '<img src="data:image;base64,'.base64_encode($rows['image']).' "  alt="image" style="width:100px;height:100px;" > '; ?>
                    </td>
                    <td>
                        <?php echo "<a href='update.php?id=$rows[id]&tit=$rows[title]&det=$rows[details]&code=$rows[code]&price=$rows[price]'>EDIT</a> " ?>
                      </td>
                      <td>
                        <a href="delete.php?id=<?php echo $rows['id']; ?>" class="btn btn-danger">DELETE</a>
                      </td>
                </tr>
                    <?php  } ?>
                    
             <?php } ?>
             </table>
         </div>
    </section>
</div>

</div>


 <script src="../js/bootstrap.min.js" type="text/javascript"></script>
 <script src="../js/util.js" type="text/javascript"></script>

</body>
</html>