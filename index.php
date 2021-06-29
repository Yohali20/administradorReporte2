<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php require_once 'app/dependencias.php' ?>
  <title>Document</title>

  <style>
  .fondo {
    background-image: url("raw/img/fondo1.jpg");

    background-repeat: no-repeat;
    background-size: cover;
  }
  </style>
</head>

<body class="fondo">

  <?php 

    if(isset($_GET['vista_solicitada'])){
        
      switch($_GET['vista_solicitada']){

        case 'usuario':{
          require_once 'administrar/admi.php';
          break;
        }

        default:{
          
          require_once 'view/default.php';
        
          break;
        }

      }

    }else{
      require_once 'view/default.php';
    }

  ?>

</body>

</html>
<?php
  require_once 'view/modal_login.php';
  require_once 'view/modal_registro.php';
?>