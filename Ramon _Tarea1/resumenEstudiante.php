<html>
<head>
	<title>Resumen estudiante</title>
</head>
<body>

	<?php
	include_once("includes/database.php");
	if(isset($_GET["codigo"])){
		$codigo = $_GET["codigo"];

		/*Este query y la condicion es para saber si el estudiante tiene o no alguna nota.*/
		$sql= " SELECT estudiantes.nombres AS nombre,  estudiantes.apellido AS apellido, estudiantes.codigo AS codigo  FROM estudiantes_web.estudiantenotas JOIN estudiantes_web.estudiantes ON estudiantenotas.codigoEstudiante=estudiantes.codigo WHERE estudiantes.codigo='$codigo' GROUP BY estudiantes.nombres";
		$result = mysqli_query($cxn,$sql);

		if(mysqli_num_rows($result) < 1)
		{
			echo "<h1>El estudiante no tiene notas para mostrar</h1>";
		}

		else{

			echo"<table border='1' style='width:350px'>";
			echo"<th>Codigo</th>";
			echo"<th>Nombre</th>";

			/*Este query seleciona los nombres de la nota y pinta los 
			nombres de las notas en la parte superior de la tabla.*/
			$sqlNNotas="SELECT notas.nombre as nombre FROM estudiantes_web.notas"; 
			$nombreNotas= mysqli_query($cxn,$sqlNNotas);
			while($nombNota = mysqli_fetch_array($nombreNotas)){
					echo"<th>".$nombNota["nombre"]."</th>";
			}

			/*Este while agrega el nombre junto al apellido y asigna
			las notas a cada una de las casillas correspondientes*/
			while($row = mysqli_fetch_array($result)) {
				echo"<tr>";
				echo"<td>".$codigo."</td>";
				echo"<td>".$row["nombre"]." ".$row["apellido"]."</td>";

				$sqlNotas= "SELECT estudiantes.codigo AS codigo, estudiantenotas.valorNota AS valorNota FROM estudiantes_web.estudiantenotas JOIN estudiantes_web.estudiantes ON estudiantenotas.codigoEstudiante=estudiantes.codigo JOIN estudiantes_web.notas ON estudiantenotas.idNota=notas.idNota ";
				$notas= mysqli_query($cxn,$sqlNotas);
				while($valorNota = mysqli_fetch_array($notas)){
					if($row["codigo"]==$valorNota["codigo"]){
						echo"<td>".$valorNota["valorNota"]."</td>";
					}
				}
				echo"</tr>";
			}
		}
		echo"</table>";
	}
	?>

	<form action="estudiantes.php" method="LINK">
		<input type="submit" value="Volver">
	</form>
</body>
</html>