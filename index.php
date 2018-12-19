<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
  <title>VMOM Arquitecto Técnico</title>

  <link rel="stylesheet " href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css ">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet' type='text/css'>
  <link rel="stylesheet " href="stylesheet/estilos.css ">
  <link rel="stylesheet " href="stylesheet/slider.css ">
  <link rel="stylesheet " href="stylesheet/style.css ">
  <link rel="shortcut icon" type="image/png" href="favicon.png"/>
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js "></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js "></script>
    <![endif]-->
</head>

<body onLoad="inicio()" data-spy="scroll" data-target="#myScrollspy" data-offset="20">
  <?php
     include('view/navbar.php');
     include('view/pantallaCarga.php');
   ?>

    <div class="container-fluid ">
      <?php
       include('view/row1.php');
       include('view/row2.php');
       include('view/rowCarta.php');
       include('view/row3.php');
      //  include('view/row4.php'); Activar cuando arregles lo de row4
       include('view/row5.php');
      ?>
    </div>
    <?php
       include('view/footer.php');
     ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="js/miJavascript.js" type="text/javascript"></script>
    <script src="js/parallax.min.js" type="text/javascript"></script>
    <script src="js/scrollTo.js" type="text/javascript"></script>
    <script src="js/slider.js" type="text/javascript"></script>
    <script src="js/unslider.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.4/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="js/scrollme.js" type="text/javascript"></script>

    <script type="text/javascript">
      if(!detectarMovil()){
        document.write("<script language='javascript' type='text/javascript' src='js/skrollr.min.js'><\/script>");
      }
    </script>

</body>

</html>
