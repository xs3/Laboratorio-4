<!DOCTYPE html>
<html>
<head><link rel="stylesheet" type="text/css" href="./style.css">
	<title>Miniblog 0.2a</title>
		<div id="divTitulo"></br></br>
		<h1>Miniblog 0.2a</h1>
		</div>	
</head>
<body bgcolor="black">
<div>&nbsp</div>
	<div id="divLista" align="center"><br>
	<h2>&nbspPosts</h2>
	<table id="tablaPosts" align="center">
		<th width="10%" align="center">Codigo</th><th width="70%">Titulo</th><th width="20%" align="center">Fecha</th>
		
		<?php include("./mostrarLista.php");
		
		while($lista = mysqli_fetch_assoc($result)) { ?>
			<tr bgcolor="lavander" style="border-radius:2px; color:black;">
				<td align="center"><?=$lista["post_id"]?></td>
				<td> <?=$lista["titulo"]?></td>
				<td align="center"> <?=$lista["fecha_desde"]?></td>
				<td> <a href="./post.php?id=<?=$lista["post_id"]?>">Ver</a></td>
				<td><a href="./borrar.php">Borrar</a></td>
			</tr>
			<?php }; ?>
		</table>
	</div>

	<div id="divCrearPost" align="left"></br></br>
		<form action="./crearPost.php" method="get">
			<table>
				<td>Titulo: <input class="inputText" type="text" name="titulo"></td> 
				<td>Fecha: <input class="inputText" type="date" name="fecha"></td>
			</table>
		</br>
			<textarea class="inputText" cols="60" rows="15" name="contenido"></textarea></br></br>
			
			<input class="button" type="submit" name="crear" value="Crear">&nbsp&nbsp&nbsp<input class="button" type="reset" name="">
		</form>
	</div>
</body>
</html>