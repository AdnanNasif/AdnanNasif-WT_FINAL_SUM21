<?php 
	include 'controllers/DonarController.php';
	$id = $_GET["id"]; // vl pbo
	$c = getDonar($id);
?>
<html>
 
         
    <head>
	 <link rel="stylesheet" href="style/login.css">
	   <style>
.red {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


</style>
	  </head>
	   <body>
	   <div>
			<h3 class="header">Edit Donar </h3>
			</div>

<div align="center">
	<h5 ><?php echo $err_db;?></h5>
	<form action="" method="post" >
		<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="hidden" name="id" value="<?php echo $c["id"];?>">
				<input type="text" name="name" value ="<?php echo $c["name"];?>">
			</div>

			<div class="form-group">
				<h4 class="text">Password:</h4> 
			
				<input type="password" name ="pass" value ="<?php echo $c["password"];?>">
			</div>
			<div class="form-group">
				<h4 class="text">NID:</h4> 
				
				<input type="text" name ="nid" value ="<?php echo $c["nid"];?>">
			</div>
			<div class="form-group">
				<h4 class="text">Number:</h4> 
				
				<input type="text" name="num" value ="<?php echo $c["num"];?>">
			</div>
			<br>
		
		<div >
			
			<input type="submit" name="edit_donar" class="red" value="Edit" >
		</div>
	</form>
</div>

</body>
</html>