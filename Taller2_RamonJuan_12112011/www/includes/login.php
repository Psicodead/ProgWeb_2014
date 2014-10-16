<?php 
// start them engines!
session_start();
// store session data
$_SESSION["username"] =$_GET["usuario"];
$_SESSION["password"] = $_GET["contrasena"];

include_once("database.php");

/*Esta parte del codigo utiliza un query para seleccionar los usuarios y las contraseñas de la
tabla usuarios, si encuentra alguno donde el usuario que se ingreso es igual a usuario de la tabla
y la contraseña ingresada es igual a la contraseña de la tabla, aumenta una variable contadora y 
termina el ciclo. Despues se analiza la variable conteo y si es 1 se logea al usuario, de lo contrario
se devuelve a index.*/
$query= "SELECT usuarios.usuario as user, usuarios.contrasena as pass FROM taller_2.usuarios";
$conteo=0;
$result= mysqli_query($cxn,$query);
if($result!=false){
	while($row = mysqli_fetch_array($result)){
		if($row['user']==$_SESSION["username"] AND $row['pass']==$_SESSION["password"]  ){
			$conteo=1;
			break;
		}else{
			$conteo=0;
		}
	}
	if($conteo==1){
		header("Location: http://localhost/icesi/unidad2/Taller2_RamonJuan_12112011/www/home.php?Usuario=".$_SESSION["username"]);
	}else{
		header("Location: http://localhost/icesi/unidad2/Taller2_RamonJuan_12112011/www/index.php");
	}
}
?>