<?php 
$usuario= $_POST["usuario"];
$correo= $_POST["correo"];
$contrasena= $_POST["contrasena"];
$confContra= $_POST["conf_contrasena"];
include_once("database.php");

/*en las siguientes lineas de codigo se revisa si existe algun usuario en la base de 
datos con el nombre que se esta tratando de registrar, si encuentra alguno, conteo se 
vuelve 1 y sale del while con el break. Luego se analiza si conteo es 0 o 1, si es 0
significa que no existe ese usuario y se procede a hacer el registro, para que se
aplique el registro debe haber usuario, correo, contrasena y confcontraseña, estos dos 
ultimos deben ser iguales*/
$query= "SELECT usuarios.usuario as user FROM taller_2.usuarios";
$conteo=0;
$result= mysqli_query($cxn,$query);
if($result!=false){
	while($row = mysqli_fetch_array($result)){
		if($row['user']==$usuario){
			$conteo=1;
			break;
		}else{
			$conteo=0;
		}
	}
	if($conteo==1){
		header("Location: " . $_SERVER['HTTP_REFERER']); 
	}else{
		if($contrasena==$confContra&&$usuario!=""&&$correo!=""){
			$queryRegistro= "INSERT INTO taller_2.usuarios(`usuario`, `correo`, `contrasena`) VALUES ('$usuario','$correo','$contrasena')";
			$registro= mysqli_query($cxn,$queryRegistro);	
			header("Location: http://localhost/icesi/unidad2/Taller2_RamonJuan_12112011/www/includes/login.php?usuario=$usuario&contrasena=$contrasena");
		}else{
			header("Location: " . $_SERVER['HTTP_REFERER']); 
		}
	}
}
?>