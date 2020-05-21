<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">

	<script src="../js/jquery-3.4.1.js"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>

<?php 

include('dbconfig.php');

if(isset($_GET['update']))
{
	$id=$_GET['id'];
	$tit=$_GET['title'];
	$det=$_GET['details'];
	$code=$_GET['code'];
	$price=$_GET['price'];

	$q="UPDATE `info` SET `id`='$id', `title`='$tit', `details`='$det' , `code`='$code' , `price`='$price' WHERE `id`='$id'";

	mysqli_query($conn,$q);

	header('location:admin.php');
}

 ?>

 <div class="container">
     <h1 class="text-center bg-primary">UPDATE INFO</h1>
 </div>

   <div class="container mt-5">
	<form action="" method="get" class="form-group container">
		<table align="center">
			<tr>
				<td>
					<label>ID</label>
				   <input class="form-control form-control-lg" type="text" name="id" value="<?php echo $_GET['id']; ?>" >
				</td>
			</tr>
		    <tr>
		    	<td>
		    	  <label>TITLE</label>
		    	  <input class="form-control form-control-lg" type="text" name="title" value="<?php echo $_GET['tit']; ?>">
		    	</td>
		    </tr>
		    <tr>
		    	<td>
		    		<label>TEXT</label>
		    	  <input class="form-control form-control-lg" type="text" name="details" value="<?php echo $_GET['det']; ?>">	
		    	</td>
		    </tr>
		    <tr>
		    	<td>
		    		<label>CODE</label>
		    	  <input class="form-control form-control-lg" type="text" name="code" value="<?php echo $_GET['code']; ?>">	
		    	</td>
		    </tr>
		    <tr>
		    	<td>
		    		<label>PRICE</label>
		    	  <input class="form-control form-control-lg" type="text" name="price" value="<?php echo $_GET['price']; ?>">	
		    	</td>
		    </tr>
		    <tr>
		    	<td>
		    	   <input class="btn btn-success mt-2 w-100" type="submit" name="update" value="update">
		    	</td>
		    </tr>
		</table>
	</form>
</div>

</body>
</html>