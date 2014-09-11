<html>
	<head>
		<title>Lista de usuarios</title>
		<meta charset="UTF-8">
		<style>
			a{
				font-size: 20px;
			}
		</style>
	</head>
	<body>
		
		<h1>Usuarios Registrados</h1>
		<?php 
			/*este bloque php es utilizado para crear un link por cada usuario que este registrado.
			Este link envia la variable Id que corresponde al nombre del usuario.*/
			include_once("includes/database.php");
			$query= "SELECT usuarios.nombre as user FROM taller_1.usuarios";
			$result= mysqli_query($cxn,$query);
			while($row=mysqli_fetch_array($result)){
				echo "<a href='usuario.php?Id=".$row["user"]."'>".$row["user"]."</a><br>";
			}
		?>

		<!--Bloque de codigo para hacer un formulario que permita agregar tareas a los usuarios-->
		<h2>Asignar nueva tarea</h2>
		<form action="includes/crearTarea.php" method="POST">
			<label>Descripcion:</label> <input type="text" name="Descrip" placeholder="Descripcion"><br>
			<label>Fecha Creacion:</label> <input type="date" name="Creac" placeholder="Fecha Creacion"><br>
			<label>Fecha Finalizacion:</label> <input type="date" name="Finali" placeholder="Fecha Finalizacion"><br>
			<label>prioridad:</label> <input type="text" name="Priori" placeholder="prioridad"><br>
			<label>Usuario:</label> <input type="text" name="Usua" placeholder="Usuario"><br>
			<br>
			<input type="submit" value="asignar">
		</form>
		
		<!--bloque de codigo php para mostrar un mensaje de si se pudo o no asignar la tarea-->
		<?php 
			if(isset($_GET["men"])){
				$mensaje= $_GET["men"];
				if($mensaje=="true"){
					echo "<h3>Tarea asignada con exito</h3>";
				}else{
					echo "<h3>No se pudo asignar tarea</h3>";
				}
			}
		?>
	</body>
	
</html>