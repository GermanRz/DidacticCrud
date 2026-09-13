<?php
  class enrutador{
    //sin atributos
 
    public function cargarVista($vista){

      echo "la vista a cargar es ... $vista  <br>";
      switch ($vista) {
        case 'crear':
          include_once("vistas/crear.php");
          break;

        case 'ver':
          include_once("vistas/ver.php");
          break;

        case 'editar':
          include_once("vistas/editar.php");
          break;

        case 'eliminar':
          include_once("vistas/eliminar.php");
          break;

        default:
          include_once("vistas/error404.php");

        }
      }

      public function validarVista($variable){
        if(empty($variable)){
          include_once("vistas/inicio.php");
        }else{
          return true;
        }
      }



  }//fin de la clase enrutador

 ?>
