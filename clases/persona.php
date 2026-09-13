<?php


  //incluir la clase para la conexxion a la base de datos
  include_once("connection.php");

  class Persona{
    //atributos
    private $id;
    private $cedula;
    private $nombres;
    private $apellidos;
    private $usuario;
    private $clave;

    private $con;

    //metodos

    //conexion
    public function __construct(){
      $this->con=new conexion();

    }

    public function set($atributo, $contenido){
      $this->$atributo=$contenido;
    }

    public function get($atributo){
      return $this->$atributo;
    }

    public function crear(){

      //validar que la cedula no se repita
      $sql2="SELECT * FROM personas WHERE cedula='{$this->cedula}'"; //trae los registros que tengan la cedula a insertar

      $resultado=$this->con->consultaRetorno($sql2); //ejecuta la consulta y la guarda en resultado

      $filas=mysqli_num_rows($resultado); //cantidad de registros devueltos por la consulta



      if($filas==0){

        $sql="INSERT INTO personas (cedula, nombres, apellidos, usuario, clave)
              VALUES ('{$this->cedula}', '{$this->nombres}', '{$this->apellidos}', '{$this->usuario}', '{$this->clave}')";
        //ejecutar la consulta en la conexion
        $this->con->consultaSimple($sql);
        return true;

      }else{
        return false;
      }
    }

    public function eliminar(){
      $sql="DELETE FROM personas WHERE id='{$this->id}'";
      $this->con->consultaSimple($sql);
    }

    public function ver(){
      $sql="SELECT * FROM personas WHERE id='{$this->id}'";
      $resultado=$this->con->consultaRetorno($sql);
      $reg=mysqli_fetch_assoc($resultado); //convertimos el resultado en un array asociativo en $reg

      //asignamos los valores asociado a los atributos
      $this->cedula=$reg["cedula"];
      $this->nombres=$reg["nombres"];
      $this->apellidos=$reg["apellidos"];
      $this->usuario=$reg["usuario"];
      $this->clave=$reg["clave"];

      return $reg;
    }

    public function editar(){
      $sql="UPDATE personas SET nombres='{$this->nombres}',
                               apellidos='{$this->apellidos}',
                               usuario='{$this->usuario}'
            WHERE id='{$this->id}'";

      $this->con->consultaSimple($sql);
    }

    public function listar(){
      $sql="SELECT * FROM personas";
      $resultado=$this->con->consultaRetorno($sql);
      return $resultado;
    }


  }


$miPersona = new Persona();

 ?>
