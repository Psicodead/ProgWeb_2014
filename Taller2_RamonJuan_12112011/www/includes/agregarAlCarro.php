<?php 
session_start();
$producto= $_GET["producto"];
$fecha= $_GET["fecha"];
include_once("database.php");

/*Se agrega un elemente a la tabla carrocompras, con los elementos que se optienen con GET*/
$queryPrecompra= "INSERT INTO taller_2.carrocompras(`usuario`, `producto`, `fecha`) VALUES ('".$_SESSION["username"]."','$producto','$fecha')";
$preCompra= mysqli_query($cxn,$queryPrecompra);
header("Location: " . $_SERVER['HTTP_REFERER']); 
?>