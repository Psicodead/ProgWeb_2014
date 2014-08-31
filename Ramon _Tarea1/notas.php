<?php
	include_once("includes/database.php");

	$query= "SELECT * FROM estudiantes_web.notas ORDER BY idNota";
	
	$result= mysqli_query($cxn,$query);
	if($result!=false){
		while($row = mysqli_fetch_array($result)){
			echo $row["idNota"]." ".$row["nombre"]." ".$row["porcentaje"]."%"."<br/>";
		}
	}
?>