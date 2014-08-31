<html>
<head>
	<title>Tabla de Notas</title>
	<!--<meta charset="utf-8">///// esta linea de codigo esta comentada para evitar problemas con las Ñ's --> 
</head>
<body>
	<?php

	include_once("includes/database.php");
	$sql= "SELECT estudiantes.nombres AS nombre, estudiantes.apellido AS apellido, estudiantes.codigo AS codigo FROM estudiantes_web.estudiantenotas JOIN estudiantes_web.estudiantes ON estudiantenotas.codigoEstudiante= estudiantes.codigo GROUP by codigo";
	$result = mysqli_query($cxn,$sql);
	echo"<table border='1' style='width:350px'>";

	/*En el siguiente bloque de codigo se crea un query para obtener los datos y agruparlos segun el nombre de la nota,
	para evitar que el nombre de la nota este repetido, estos nombres se almacenan en un arreglo y se utilizan para la
	construccion de los titulos superiores de la tabla.*/
	$sqlNNotas= "SELECT notas.nombre As nombreDeLaNota, estudiantes.codigo AS codigo, estudiantenotas.valorNota AS valorNota FROM estudiantes_web.estudiantenotas JOIN estudiantes_web.estudiantes ON estudiantenotas.codigoEstudiante=estudiantes.codigo JOIN estudiantes_web.notas ON estudiantenotas.idNota=notas.idNota GROUP by nombreDeLaNota";
	$nombreNota = mysqli_query($cxn,$sqlNNotas);
	echo "<th>Nombre</th>";
	while($nNota = mysqli_fetch_array($nombreNota)) {
		echo"<th>".$nNota["nombreDeLaNota"]."</th>";
	}
	/////-------------------------------------------------------------------------------------------------------------//////
	
	/*En el siguiente bloque de codigo se crea un arreglo con los valores de $result y se crea otro query para obtener 
	los datos de las notas. Se realiza un while interno para llenar los datos de las notas, solo si el codigo del estudiantes
	concuerda con el codigo que posee la nota (el codigo hace referencia al codigo del estudiante, no al id de la nota)*/
	while($row = mysqli_fetch_array($result)) {
		echo"<tr><td>".$row["nombre"]." ".$row["apellido"]."</td>";

		$sqlNotas= "SELECT notas.nombre As nombreDeLaNota, estudiantes.codigo AS codigo, estudiantenotas.valorNota AS valorNota FROM estudiantes_web.estudiantenotas JOIN estudiantes_web.estudiantes ON estudiantenotas.codigoEstudiante=estudiantes.codigo JOIN estudiantes_web.notas ON estudiantenotas.idNota=notas.idNota";
		$notas= mysqli_query($cxn,$sqlNotas);

		while($datosNotas = mysqli_fetch_array($notas)){
			if($row["codigo"]==$datosNotas["codigo"]){
				echo"<td>".$datosNotas["valorNota"]."</td>";
			}
		}
		echo"</tr>";
	}
	echo"</table>";
	?>

	<!--Este bloque de codigo corresponde al boton de volver, el cual permite volver a
	estudiantes.php-->
	<form action="estudiantes.php" method="LINK">
		<input type="submit" value="Volver">
	</form>
</body>

</html>