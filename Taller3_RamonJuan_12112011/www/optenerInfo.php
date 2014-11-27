  <?php
  include_once('includes/database.php');
  $tipoEle = $_POST['tipoElemento'];
  $result="";
  $tmp=[];
  $query = "SELECT * FROM taller_3.locales WHERE locales.tipo ='".$tipoEle."'";
  $resultado = mysqli_query($cxn,$query);
  
  //creo variables en el arreglo para poder pasar todos los elementos que retorna mi query
  while ( $row = mysqli_fetch_array($resultado) ) {
    $temp['lat'] = $row["latitud"];
    $temp['lon'] = $row["longitud"];
    $temp['nom'] = $row["nombre"];
    array_push($tmp,$temp);
  }
  $result["sitio"] = $tmp;

  echo json_encode($result);

  ?>
