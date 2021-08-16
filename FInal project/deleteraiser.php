<?php

     require_once '../FInal project/models/db_config.php';
     $id = $_GET['id'];
	 $query = "DELETE FROM raiser WHERE id = '$id'";
     get($query);
	 header("Location: allraiser.php");
?>