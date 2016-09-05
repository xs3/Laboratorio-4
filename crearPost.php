<?php
include("./conexion.php");

$titulo= $_GET['titulo'];
$texto= nl2br($_GET['contenido']);
$fecha_desde= $_GET['fecha'];

$query = "INSERT INTO `posts`(`titulo`, `texto`, `fecha_desde`) VALUES (
	'$titulo',
	'$texto',
	'$fecha_desde')";

mysqli_query($cn, $query);

$previousPage = $_SERVER["HTTP_REFERER"];
header('Location: '.$previousPage);
?>