<!DOCTYPE html>
<html>
<head>
	<title>Iniciar sesion</title>
	<link rel="stylesheet" href="css/styles.css"/>
	<meta charset="UTF-8">
	<meta name= "viewport" content="width=device-width">
</head>

<body>
	<header>
		<figure><img src="img/logo.png" alt=""></figure>
	</header>
	<section>
		<div id="log_in">
			<h2>Iniciar Sesión</h2>
			<form action="includes/login.php" method="GET">
				<label for="usuario">Usuario:</label>
				<input type="text" name="usuario">
				<label for="contrasena">Contraseña:</label>
				<input type="password" name="contrasena">
				<input type="submit" value="Iniciar sesión">
			</form>
		</div>
		<div id="sign_in">
			<h2>Registrarse</h2>
			<form action="includes/registro.php" method="POST">
				<label for="usuario">Usuario:</label>
				<input type="text" name="usuario">
				<label for="correo">Correo:</label>
				<input type="text" name="correo">
				<label for="contrasena">Contraseña:</label>
				<input type="password" name="contrasena">
				<label for="conf_contrasena">Confirmar contraseña:</label>
				<input type="password" name="conf_contrasena">
				<input type="submit" value="Registrarse">
			</form>
		</div>
	</section>
</body>

</html>
