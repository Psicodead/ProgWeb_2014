<?php 
session_start();
$producto= $_GET["producto"];
$fecha= $_GET["fecha"];
include_once("database.php");

$queryCompra= "INSERT INTO taller_2.comprausuario(`usuario`, `articulo`, `fecha`) VALUES ('".$_SESSION["username"]."','$producto','$fecha')";
$compra= mysqli_query($cxn,$queryCompra);

/* esta linea de codigo debia limpiar el contenedor, debido a que no tienen un identificador
propio elimina todos los elementos con el mismo nombre de producto.
$queryEliminar= "DELETE FROM taller_2.carrocompras WHERE carrocompras.producto='$producto' AND carrocompras.usuario='".$_SESSION["username"]."'";
$eli= mysqli_query($cxn,$queryEliminar);*/

/*Esta parte del codigo actualiza el valor cantComprada del producto que fue comprado, para esto
se utilizan 3 querys, el primero para seleccionar todos los productos, el segundo para contar
en numero de veces que se producto aparece en la tabla comprausuario, y el tercero para actualizar
el varlo de cantComprada en ese producto*/
$queryProd= "SELECT * FROM taller_2.productos WHERE 1";
$prod= mysqli_query($cxn,$queryProd);

while($reProd = mysqli_fetch_array($prod)){
	$queryDest="SELECT count(*) as numComp FROM taller_2.comprausuario WHERE comprausuario.articulo='".$reProd["producto"]."'";
	$cantDest=  mysqli_query($cxn,$queryDest);
	while($canL=mysqli_fetch_array($cantDest)){
		$queryActu="UPDATE taller_2.productos SET productos.cantComprada=".$canL['numComp']." WHERE productos.producto='".$reProd["producto"]."'";
		$actualizar= mysqli_query($cxn,$queryActu);
	}
}
header("Location: " . $_SERVER['HTTP_REFERER']); 
?>