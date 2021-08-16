<?php
	include 'controllers/DonarController.php';
	$ownerr = getAllDonars();
	
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
			<h3 class="header">All Donar</h3>
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
				foreach($ownerr as $o){
					$id = $o["id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$o["name"]. "</td>" ; 
						
						echo "<td>".$o["password"]. "</td>";
						echo "<td>".$o["nid"]. "</td>";
						echo "<td>".$o["num"]. "</td>";
						echo '<td><a href="editdonar.php?id='.$id.'" class="red"> Edit</a></td>';
						echo '<td><a href="deletedonar.php?id='.$id.'"  class="red1">Delete</td>';
					echo "</tr>";
					$i++;
				}
				
			?>
			
		</tbody>
	</table>
</div>
</body>
</html>