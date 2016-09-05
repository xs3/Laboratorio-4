<?php

	include("./conexion.php");
	$post_id = $_GET['id'];
	$query = "SELECT * FROM posts WHERE post_id = $post_id";
	$result = mysqli_query($cn, $query);
	$post = mysqli_fetch_assoc($result);
?>