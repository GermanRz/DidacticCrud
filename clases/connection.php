<?php

  class conexion{
    //atributos
    private $host;
    private $user;
    private $pass;
    private $bd;
    private $con;


    //metodos

    public function __construct(){
      $this->host="localhost";
      $this->user="root";
      $this->pass="root";
      $this->bd="pruebas";
      
      $this->con=mysqli_connect($this->host, $this->user, $this->pass, $this->bd);
      if(mysqli_errno($this->con)){
         echo "Fallo la conexion a $this->bd";
      }
      else{
        echo "Conexion exitosa a $this->bd";
      }
    }

    public function consultaSimple($sql){
      mysqli_query($this->con,$sql);
    }

    public function consultaRetorno($sql){
      $consulta=mysqli_query($this->con,$sql);
      return $consulta;
    }

  }

  // $miconexion= new conexion();
  // $retorno = $miconexion->consultaRetorno("SELECT * FROM personas WHERE id=50");
  // $filas=mysqli_num_rows($retorno);
  // echo "<br>La cantidad de registros es: $filas";

  
 ?>


