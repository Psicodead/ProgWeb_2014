<?php 
include_once("database.php");
	//Capturo las variables que me son enviadas desde iniciar sesion (index.php)
	$id= $_POST["Id"];
	$password= $_POST["Pass"];

	/*Realizo un query para obtener el usuario y la contraseña de la base de datos de usuarios 
	registrados. Luego confirmo que el nombre de usuario de la base de datos sea igual al id que envio index
	y que la contrasena de la base de datos sea igual a la que envio index. Si es asi, lo redirecciona al
	perfil del usuario y le pasa la variable Id. De lo contrario lo redirecciona a index y le envia una variable
	que indica que no pudo iniciar sesion */
	$query= "SELECT usuarios.nombre as user, usuarios.contrasena as pass FROM taller_1.usuarios";
	$result= mysqli_query($cxn,$query);
	if($result!=false){
		while($row = mysqli_fetch_array($result)){
			if($row['user']==$id AND $row['pass']==$password){
				header("Location: http://localhost/icesi/unidad1_server/Taller1_RamonJuan_12112011/www/usuario.php?Id=".$id);
				break;	
			}else{
				header("Location: http://localhost/icesi/unidad1_server/Taller1_RamonJuan_12112011/www/index.php?men=false");
			}
		}
	}
	
 ?>