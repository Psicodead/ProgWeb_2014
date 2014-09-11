<?php 
	$descrip= $_POST["Descrip"];
	$fechaC= $_POST["Creac"];
	$fechaF= $_POST["Finali"];
	$prioridad= $_POST["Priori"];
	$usuario= $_POST["Usua"];

	include_once("database.php");
	$queryId= "SELECT usuarios.id, usuarios.nombre FROM taller_1.usuarios";
	$usuExistentes= mysqli_query($cxn,$queryId);

	/*El siguiente bloque de codigo utiliza un query interno para insertar las tareas, solo si la variable de usuario que se asigno si
	esta registrado. Ademas relaciona el nombre de usuario con el id espefico que tiene cada usuario, con el cual se identifica que 
	tarea le corresponde*/
	while ($info = mysqli_fetch_array($usuExistentes)){
		if($info["nombre"]==$usuario){
			$query= "INSERT INTO taller_1.tareas(`descripcion`, `creacion`, `finalizacion`, `prioridad`, `idtarea`) VALUES ('$descrip','$fechaC','$fechaF','$prioridad','".$info["id"]."'".")";
			echo $query;
			if($descrip!=null AND $fechaC != null AND $fechaF!=null AND $prioridad != null AND $usuario!=null){
				$result= mysqli_query($cxn,$query);
				header("Location: http://localhost/icesi/unidad1_server/Taller1_RamonJuan_12112011/www/listaUsuarios.php?men=true");
			}else{
				header("Location: http://localhost/icesi/unidad1_server/Taller1_RamonJuan_12112011/www/listaUsuarios.php?men=false");
			}
			break;
		}else{
			header("Location: http://localhost/icesi/unidad1_server/Taller1_RamonJuan_12112011/www/listaUsuarios.php?men=false");
		}
	}
 ?>