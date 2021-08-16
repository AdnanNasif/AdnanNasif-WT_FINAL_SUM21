<?php
      session_start();
?>


<html>
      <head>
	         <link rel="stylesheet" href="style/login.css">
			 <style>
 .button7 {
  background-color: #ff0066; 
 
  color: white;
 

  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px 5px 5px 5px;
  padding: 8px 8px 8px 8px;
  border-radius: 5px;
  
}
			 </style>
	  </head>
      <body>
	        <div>
			<h1 class="header">Admin <?php echo $_SESSION["adminlogin"]; ?> </h1>
			
			</div>
			<div align = "center">
			<a  href="donar.php" class ="button button7">Donar</a>
			
			<a  href="raiser.php" class ="button button7">Raiser</a>
			<a  href="admin.php" class ="button button7">Admin</a>
			
			
	
			
			
		
			
	  </body>
</html>