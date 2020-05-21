<?php

include('dbconfig.php');

 $id=$_GET['id'];

 $q="DELETE FROM `info` where id='$id' ";

 $sql=mysqli_query($conn,$q);

 header('location:admin.php');

 ?>