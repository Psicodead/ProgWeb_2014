<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/styles.css"/>
	<meta name= "viewport" content="width=device-width">
</head>
<body>
	<header>
		<figure><img src="img/logo.png" width="100px" alt=""></figure>
		<div id="headerTitle">
			<h1>The Website</h1>
			<h2>Para web</h2>
		</div>
		
	</header>
	<nav>
		<ul>
			<li  class="activa"><a href="#">HOME</a></li>
			<li><a href="#">ABOUT</a></li>
			<li><a href="#">CONTAC</a></li>
		</ul>
	</nav>
	<section>
		<?php 

			include_once("includes/database.php");
			$id= $_GET["Id"];

			/* El siguiente query se utiliza para seleccionar el usuario que esta logeado y asi poder saber si le ha
			dado favorito a alguno de los post*/
			$qUser="SELECT usuarios.idUsuario FROM photography.usuarios WHERE photography.usuario='".$id."'";
			$userLog=mysqli_query($cxn,$qUser);

			/* El siguiente query se utiliza para seleccionar todos los post que se han hecho asi mismo el autor de cada uno de ellos
			y se ordenan en el orden de creacion (por id). Por cada uno de ellos se crea un bloque de codigo html con el contenido
			del post, el autor, la imagen del post, si es fav o no, el numero de likes y el numero de dislikes*/
			$query= "SELECT p.*, u.usuario FROM photography.publicaciones AS p JOIN photography.usuarios AS u ON u.idUsuario= p.idAutor ORDER by p.id ";
			$result= mysqli_query($cxn,$query);
			while($row=mysqli_fetch_array($result)){

				/*Los siguietnes 3 querys se utilizan para contar el numero de likes de un post ($likePost), el numero de dislikes
				del post($dislikePost) y finalmente si es favorito o no lo es*/
				$likePost= "SELECT count(*) as numLike  FROM photography.likes as l WHERE l.post=".$row['id'];
				$dislikePost= "SELECT count(*) as numDisL FROM photography.dislikes as l WHERE l.post=".$row['id'];
				$favPost= "SELECT count(*) as numFav  FROM photography.favoritos as f WHERE f.post=".$row['id']." AND f.usuario=2";
				$cantLike=  mysqli_query($cxn,$likePost);
				$cantDisL=  mysqli_query($cxn,$dislikePost);
				$cantFav=  mysqli_query($cxn,$favPost);
				echo"<article>";	
				echo"<figure>";
				echo "<img src='".$row['imagen']."' alt=''>";
				echo "</figure>";
				echo "<div>";
				echo "<h3>".$row['titulo']."</h3>";
				echo "<h5>".$row['usuario']."</h5>";
				echo "<p class='contenido'>";
				echo $row['contenido'];
				echo "</p>";
				echo "</div>";
				echo "<footer>";

				echo "<div class='likes'>";
				while($canL=mysqli_fetch_array($cantLike)){
					echo "<p>".$canL['numLike']."</p>";
				}
				echo"<figure><img src='img/like.png'></figure>";
				echo "</div>";

				echo "<div class='dislike'>";
				while($canD=mysqli_fetch_array($cantDisL)){
					echo "<p>".$canD['numDisL']."</p>";
				}
				echo"<figure><img src='img/dislike.png'></figure>";
				echo "</div>";	

				echo "</footer>";
				echo "<div class='star'>";
				while($cantF=mysqli_fetch_array($cantFav)){
					if($cantF['numFav']==0){
						echo "<figure><img src='img/un_favorite.png' alt=''></figure>";
					} else {
						echo "<figure><img src='img/favorite.png' alt=''></figure>";
					}
				}
				echo "</div>";
				echo "</article>";
			}
		?>
	</section>
	<footer>

	</footer>
</body>
</html>