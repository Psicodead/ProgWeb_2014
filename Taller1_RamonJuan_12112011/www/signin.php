<html>
<head>
	<title>Registro</title>
		<meta charset="UTF-8">
</head>
<body>
	<!--Formulario que envia la informacion al include crearUsuario, para registrar nuevos usuarios-->
	<form action="includes/crearUsuario.php" method="POST">
			<label>Id:</label> <input type="text" name="Nombre" placeholder="ID"><br>
			<label>Password:</label> <input type="text" name="Contrasena" placeholder="password"><br>
			<input type="submit" value="Registrarse">
		</form>
</body>
</html>