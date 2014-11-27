<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
  body {
    padding-top: 50px;
    padding-bottom: 20px;
  }
  </style>
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/main.css">

  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>

  <div class="col-md-4 dragAndDrop">          
    <div id="iconos" class="col-md-12">
      <p>Arrastra los elementos que deseas encontrar en el mapa</p>

      <figure class="col-md-4"><img id="restaurante" src="img/restaurante.png"></figure>
      <figure class="col-md-4"><img id="museo" src="img/museo.png"></figure>
      <figure class="col-md-4"><img id="teatro" src="img/teatro.png"></figure>

    </div>
    <div id="areaSensible" class="col-md-12">
      
      <canvas id="lienzo" height="300"></canvas>
    </div>
  </div>
  <div class="col-md-8 conten">
     <div id="miMapa" style="height:615px"></div>
 </div>

 <div id="mapholder"></div>
 <script>window.jQuery || document.write('<script src="js/vendor/jquery-2.1.1.min.js"><\/script>')</script>
 <script src="js/vendor/bootstrap.min.js"></script>
 <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
 <script src="js/main.js"></script>
 
</body>
</html>
