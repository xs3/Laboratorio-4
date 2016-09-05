<?php
	include("./conexion.php");

	$post_id = $_GET['id'];
	$query = "SELECT * FROM comentarios WHERE post_id = $post_id";
	$result = mysqli_query($cn, $query);
?>
