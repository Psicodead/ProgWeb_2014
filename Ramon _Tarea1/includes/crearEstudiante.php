<?php 
	$nombre= $_POST["Nombre"];
	$apellido= $_POST["Apellido"];
	$codigo= $_POST["Codigo"];
	$correo= $_POST["Correo"];

	include_once("database.php");
	$query= "INSERT INTO estudiantes_Web.estudiantes(`codigo`, `nombres`, `apellido`, `correo`) VALUES ('$codigo','$nombre','$apellido','$correo')";
	echo $query;
	if($nombre!=null AND $apellido != null AND $codigo!= null){
		$result= mysqli_query($cxn,$query);
	}
	header("Location: http://localhost/icesi/unidad1_server/semana5/estudiantes.php?");
 ?>