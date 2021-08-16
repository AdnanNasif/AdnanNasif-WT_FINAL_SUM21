<?php

     require_once '../FInal project/models/db_config.php';
     $id = $_GET['id'];
	 $query = "DELETE FROM admin WHERE id = '$id'";
     get($query);
	 header("Location: alladmin.php");
?>