<?php
	include 'controllers/RaiserController.php';
	$ownerrs =  getAllRaiser();
	
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
  border-radius: 5px;
}
.red1 {
  background-color: #ff0000;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}
.red2 {
  background-color: #0080ff;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
			 </head>
<body>
         <div>
			<h3 class="header">All Raiser</h3>
			</div>
			
			
<div align = "center">
	
	<table class="">
		<thead>
			<th>Sl# &nbsp </th>
			<th>Name &nbsp &nbsp   </th>
			
			<th>Password &nbsp &nbsp </th>
			<th>Nid &nbsp &nbsp </th>
			<th>Number</th>
			
		</thead>
		<tbody>
			<?php
				$i=1;//dyn
				foreach($ownerrs as $s){
					$id = $s["id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$s["name"]. "</td>" ; 
						
						echo "<td>".$s["password"]. "</td>";
						echo "<td>".$s["nid"]. "</td>";
						echo "<td>".$s["num"]. "</td>";
						echo '<td><a href="editraiser.php?id='.$id.'" class="red"> Edit</a></td>';
						echo '<td><a href="deleteraiser.php?id='.$id.'"  class="red1">Delete</td>';
					echo "</tr>";
					$i++;
				}
				
			?>
			
		</tbody>
	</table>
</div>
</body>
</html>