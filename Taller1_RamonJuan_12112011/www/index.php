<html>
	<head>
		<title>Log in</title>
		
	</head>
	<body>
		<!--En este bloque de codigo estoy creando el formulario para iniciar sesion
		el codigo php esta en la mitad solo por cuestones esteticas de la ubicacion del 
		mensaje de error-->
		 <form action="includes/login.php" method="POST">
			<label>Id:</label> <input type="text" name="Id" placeholder="ID"><br>
			<label>Password:</label> <input type="password" name="Pass" placeholder="password"><br>

			<!--este codigo php es para que muestre un mensaje de error cuando no puede iniciar sesion
			ya sea por contraseña incorrecta o porque el usuario no existe-->
			<?php 
				if(isset($_GET["men"])){
					$mensaje= $_GET["men"];
					if($mensaje=="false"){
						echo "<h3>contrasena usuario incorrecta</h3>";
					}
				}
			?>

			<!--Botones, uno para inciar sesion y otro para ir a registro-->
			<input type="submit" value="Log in">
		</form>
		<input type="submit" value="Sign in" 
    	onclick="window.location='signin.php';" />    
	</body>
</html>