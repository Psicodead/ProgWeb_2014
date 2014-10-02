<?php 
include_once("database.php");
	//Capturo la variable id (es el nombre de usuario) que llega desde index.
	$id= $_POST["Id"];

	/*Este query permite verificar si existe un usuario con ese nombre registrado*/
	$query= "SELECT usuarios.usuario FROM photography.usuarios WHERE usuarios.usuario='".$id."'";
	$result= mysqli_query($cxn,$query);
	if($result!=false){
			header("Location: http://localhost/icesi/unidad1_server/semana%208/inicio.php?Id=".$id);
		//while($row = mysqli_fetch_array($result)){
		//	if($row['user']==$id){
		//		header("Location: http://localhost/icesi/unidad1_server/semana%208/inicio.php?Id=".$id);
		//		break;	
		//	}else{
		//		header("Location: http://localhost/icesi/unidad1_server/semana%208/index.php");
		//	}
		}else{
			header("Location: http://localhost/icesi/unidad1_server/semana%208/index.php");
		}
	//}
	
 ?>