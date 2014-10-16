<?php 
session_start();
include_once("includes/database.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<link rel="stylesheet" href="css/styles.css"/>
	<meta charset="UTF-8">
	<meta name= "viewport" content="width=device-width">
</head>

<body>
	<header>
		<figure><img src="img/logo.png" alt=""></figure>
	</header>
	<nav>
		<ul id="navegacion">
			<li><a href="home.php">Inicio</a></li>
			<li><a href="catalogo.php">Catálogo</a></li>
			<li><a href="#">Perfil</a></li>
		</ul>
		<ul id="user_logout">
			<?php 
			echo "<li><figure><img src='img/icon_usuario.png' alt=''></figure><p>".$_SESSION["username"]."</p></li>";
			?>
			<li><figure><img src="img/icon_logout.png" alt=""></figure><a href="includes/logout.php">Salir</a></li>
			<div class="clear"></div>
		</ul>
	</nav>
	<section class="contenedor">
		<div id="userInf">
			<figure><img src="img/user_picture.png" alt=""></figure>
			<h4>Usuario:</h4>
			<?php 
			echo "<p>".$_SESSION["username"]."</p>";
			$queryCor= "SELECT * FROM taller_2.usuarios WHERE usuarios.usuario='".$_SESSION["username"]."'";
			$result= mysqli_query($cxn,$queryCor);
			if($result!=false){
				while($cor = mysqli_fetch_array($result)){
					echo"<h4>Correo:</h4>";
					echo"<p>".$cor["correo"]."</p>";
				}
			}
			?>
		</div>
		<div class="compras">
			<h2>Carro de compras</h2>
			<div class="carro_contenedor">
				<?php 
				$queryCompras= "SELECT * FROM taller_2.comprausuario JOIN taller_2.productos ON productos.producto=comprausuario.articulo WHERE comprausuario.usuario='".$_SESSION["username"]."'";
				$compras= mysqli_query($cxn,$queryCompras);
				while($reComp = mysqli_fetch_array($compras)){
					echo"<article>";
					echo"<figure><img src='".$reComp["imagen"]."' alt=''></figure>";
					echo"<aside>";
					echo"<h3>".$reComp["articulo"]."</h3>";
					echo"<h4>Precio:</h4>";
					echo"<p>$".$reComp["precio"]."</p>";
					echo"<h4>Fecha:</h4>";
					echo"<p>".$reComp["fecha"]."</p>";
					echo"</aside>";
					echo"</article>";
				}
				?>
			</div>
		</div>
	</section>
</body>
</html>