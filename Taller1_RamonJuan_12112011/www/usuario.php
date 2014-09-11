
<html>
<head>
	<title>Perfil de usuario</title>
		<meta charset="UTF-8">
</head>
<body>
	
	<?php 
		/*Creo una tabla para mostrar las tareas asignadas al usuario. Selecciona las tareas y las ordena por prioridad de forma
		ascendente. luego llena los valores de la tabla con los datos que se obtuvieron con el query*/
		include_once("includes/database.php");
		$user= $_GET["Id"];
		echo "<h1>".$user."</h1>";
		echo "<h2> Tareas del usuario </h2>";
		echo"<table border='1' style='width:350px'>
			<th>Descripcion</th>
			<th>Fecha Creacion</th>
			<th>Fecha Finalizacion</th>
			<th>Prioridad</th>
			<tr>";	
		$query= "SELECT * FROM taller_1.tareas JOIN taller_1.usuarios ON tareas.idtarea=usuarios.id WHERE usuarios.nombre='$user' ORDER BY  tareas.prioridad ASC ";
		$seleccion= mysqli_query($cxn,$query);
		if($seleccion!=false){
		 	while($info = mysqli_fetch_array($seleccion)){
				echo "<td>".$info["descripcion"]."</td><td>".$info["creacion"]."</td><td>".$info["finalizacion"]."</td><td>".$info["prioridad"]."</td><tr>";
			}
		}
		echo"</table>";
	?>

	<form action="listaUsuarios.php" method="LINK">
		<input type="submit" value="Usuarios">
	</form>

	
</body>
</html>