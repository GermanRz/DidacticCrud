<?php
  include_once("modules/enrutador.php");
  include_once("modules/controlador.php");
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">

    <title>CRUD PHP</title>
  </head>
  <body>
    <h1>Ejercicio creacion de CRUD con POO y MVC</h1>

    <nav>
  		<ul>
  				<li><a href="index.php">Inicio</a></li>
  				<li><a href="?cargar=crear">Registrar</a></li>
  		</ul>
  	</nav>

    <section>
      <?php 
        error_reporting(0);
        

        $enrutador=new enrutador();
 
 
        if (isset($_GET['cargar'])) {
          $cargar = $_GET['cargar'];
        } else {
          $cargar = '';
       }
        // $cargar = isset($_GET['cargar']) ? $_GET['cargar'] : '';
        if ($enrutador->validarVista($cargar)) {
          $enrutador->cargarVista($cargar);
        }

      ?>
    </section>
  </body>
</html>
