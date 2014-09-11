<?php 
	$nombre= $_POST["Nombre"];
	$contrasena= $_POST["Contrasena"];

	include_once("database.php");
	$query= "INSERT INTO taller_1.usuarios(`id`, `nombre`, `contrasena`) VALUES ('','$nombre','$contrasena')";
	echo $query;
	if($nombre!=null AND $contrasena != null){
		$result= mysqli_query($cxn,$query);
	}
	header("Location: http://localhost/icesi/unidad1_server/Taller1_RamonJuan_12112011/www/index.php?");
 ?>