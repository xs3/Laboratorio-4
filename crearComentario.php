<?php
	include("./conexion.php");

	$post_id = $_GET['id'];
	$texto = $_GET['textoComentario'];
	$query = "INSERT INTO comentarios(post_id, texto) VALUES('$post_id', '$texto')";

	$var = mysqli_query($cn, $query);
	var_dump($var, $post_id, $texto);
	$previousPage = $_SERVER["HTTP_REFERER"];
	header('Location: '.$previousPage);
?>