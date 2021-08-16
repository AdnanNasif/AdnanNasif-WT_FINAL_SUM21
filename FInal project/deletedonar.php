<?php

     require_once '../FInal project/models/db_config.php';
     $id = $_GET['id'];
	 $query = "DELETE FROM donarr WHERE id = '$id'";
     get($query);
	 header("Location: alldonar.php");
?>