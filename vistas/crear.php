

<h2>Estas en el módulo crear registro persona</h2>

<form action="" method="post">
  <!-- <label>Cedula</label><br> -->
  <input type="text" name="cedula" placeholder="Cédula" required><br><br>
  <label>Nombres</label><br>
  <input type="text" name="nombres" placeholder="Nombres"><br><br>
  <label>Apellidos</label><br>
  <input type="text" name="apellidos" required><br><br>
  <label>Usuario</label><br>
  <input type="text" name="usuario" required><br><br>
  <label>Clave</label><br>
  <input type="text" name="clave" required><br><br>
  <input type="submit" name="registrar"  value="Registrar">
</form>

<?php
  $controlador=new controladorPersona();
  if (isset($_POST["registrar"])) {
    $res=$controlador->crear($_POST['cedula'], $_POST['nombres'],$_POST['apellidos'],$_POST['usuario'],$_POST['clave']);
  }



  if ($res){
    echo "Se ha realizado el registro con éxito";
  }else{
    echo "la cedula ya se encuentra registrada";
  }

 ?>
