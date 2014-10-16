<?php 
session_start();
include_once("includes/database.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Catalogo</title>
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
			<li><a href="#">Catálogo</a></li>
			<li><a href="perfil.php">Perfil</a></li>
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
		<div class="articulos">
			<h1><u>Productos del catálogo</u></h1>
			<?php 
			$queryCatalog= "SELECT * FROM taller_2.productos WHERE 1";
			$catalog= mysqli_query($cxn,$queryCatalog);
			while($reCat = mysqli_fetch_array($catalog)){
				echo "<article class='producto'>";
				echo "<figure ><img class='cuaderno' src='".$reCat["imagen"]."' alt=''></figure>";
				echo "<aside>";
				echo "<h3>".$reCat["producto"]."</h3>";
				echo "<p>".$reCat["descripcion"]."</p>";
				echo "<h3>Precio:</h3>";
				echo "<p>$".$reCat["precio"]."</p>";
				echo "<a href='includes/agregarAlCarro.php?producto=".$reCat["producto"]."&fecha=14/12/17'><img src='img/icon_carrito.png' alt=''></a>";
				echo "</aside>";
				echo "</article>";
			}
			?>
		</div>

		<div class="carro_compras">
			<h2>Carro de compras</h2>
			<div class="carro_contenedor">
				<?php 
				$queryCarComp= "SELECT * FROM taller_2.carrocompras JOIN taller_2.productos ON carrocompras.producto=productos.producto WHERE carrocompras.usuario='".$_SESSION["username"]."'";
				$carComp= mysqli_query($cxn,$queryCarComp);
				while($resCar = mysqli_fetch_array($carComp)){
					echo "<article>";
					echo "<figure><img src='".$resCar["imagen"]."' alt=''></figure>";
					echo "<aside>";
					echo "<p>".$resCar["producto"]."</p>";
					echo "<p>precio: ".$resCar["precio"]."</p>";
					echo "<a href='includes/comprarProducto.php?producto=".$resCar["producto"]."&fecha=".$resCar["fecha"]."'>Comprar</a>";
					echo "</aside>";
					echo "</article>";
				}
				?>
			</div>
		</div>
	</section>
</body>
</html>