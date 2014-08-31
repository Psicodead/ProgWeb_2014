<html>
<head>
	<title>Notas de estudiante</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	include_once("includes/database.php");

	/*El siguiente bloque de codigo se encarga de obtener todos los datos de estudiantes, y crear 
	un link con el codigo del estudiante. Muestra en pantalla el codigo del estudiante, su nombre y su apellido*/
	$query= "SELECT * FROM estudiantes_web.estudiantes";
	$result= mysqli_query($cxn,$query);
	if($result!=false){
		while($row = mysqli_fetch_array($result)){
			echo "<a href='resumenEstudiante.php?codigo=".$row["codigo"]."'>".$row["codigo"]."</a> ".$row["nombres"]." ".$row["apellido"]."<br/>";
		}
	}
	?>
	
	<br>
	<!--Se crea el formulario para agregar estudiantes-->
	<form action="includes/crearEstudiante.php" method="POST">
		<label>Nombre:</label> <input type="text" name="Nombre" placeholder="su nombre"><br>
		<label>Apellido:</label> <input type="text" name="Apellido" placeholder="su apellido"><br>
		<label>Codigo:</label> <input type="text" name="Codigo" placeholder="su codigo"><br>
		<label>Correo:</label> <input type="text" name="Correo" placeholder="su correo"><br>
		<input type="submit" value="Subir">
	</form>

	<form action="estudiante_notas_b.php" method="LINK">
		<input type="submit" value="Tabla de notas">
	</form>
</body>

</html>