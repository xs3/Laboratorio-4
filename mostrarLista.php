<?php
	include("./conexion.php");  
	
	$query = "SELECT * FROM posts";
	$result = mysqli_query($cn, $query);
?>