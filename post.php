<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="./stylePost.css">
	<?php 
		include("./mostrarPost.php");
		?>
	<title>Post</title>
</head>
<body>
	<div id="contenedor">
		<div id="titulo"><h2><?=$post["titulo"]?></h2></div><br>
		<div id="post"><?=$post["texto"]?></div><br>
		<div id="comentarios"> 
			<table width="90%" align="center">
				<tr><th width="15%" align="left">Fecha</th><th width="85%">Comentario</th></tr>
				
				<?php
				include("./mostrarComentarios.php");
				while($comentario = mysqli_fetch_assoc($result)) { ?>
				<tr><td width="15%" align="left"><?=$comentario['desde_fecha']?></td><td width="85%"><?=$comentario['texto']?></td></tr>
				<?php }; ?>
			</table></div><br>
		
		<div id="comentarioNuevo">Comentar el post:<div></br></div>
			<form action="./crearComentario.php" method="get">
				<textarea cols="40" rows="10" name="textoComentario"></textarea><br>
				<input type="hidden" name="id" value=<?=$post["post_id"]?> >
				<input class="button" type="submit">
				<input class="button" type="reset" value="Borrar">
			</form>
		</div><br>
	</div>
</body>
</html>
