<?php
  include_once("clases/persona.php");

  class controladorPersona{
    //atributos
    private $persona;

    //métodos
    public function __construct(){
      $this->persona= new Persona();
    }

    public function index(){
      $resultado=$this->persona->listar();
      return $resultado;
    }

    public function crear($cedula, $nombres, $apellidos, $usuario, $clave){
      $this->persona->set("cedula", $cedula);
      $this->persona->set("nombres", $nombres);
      $this->persona->set("apellidos", $apellidos);
      $this->persona->set("usuario", $usuario);
      $this->persona->set("clave", $clave);

      $resultado=$this->persona->crear();
      return $resultado;
    }

    public function eliminar($id){
      $this->persona->set("id", $id);  
      $this->persona->eliminar();
    }

    public function ver($id){
      $this->persona->set("id", $id);
      return $this->persona->ver();
    }





    
    public function editar($id, $nombres, $apellidos, $usuario){
      $this->persona->set("id", $id);
      $this->persona->set("nombres", $nombres);
      $this->persona->set("apellidos", $apellidos);
      $this->persona->set("usuario", $usuario);
      //$this->persona->ver();
      $this->persona->editar();
    }

  }// fin de la clase controladorPersona


// $miControlador= new controladorPersona();


 ?>
