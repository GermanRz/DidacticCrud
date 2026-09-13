<?php

$controlador=new controladorPersona();

if (isset($_GET['id'])) {
  $registro=$controlador->ver($_GET['id']);
}else {
  header('Location:index.php');
}

if (isset($_POST['modificar'])) {
  $controlador->editar($_GET['id'],$_POST['nombres'],$_POST['apellidos'],$_POST['usuario']);
  header('Location:index.php');
}

 ?>

<form action="" method="post">

<input type="text" name="cedula" value="<?php echo $registro['cedula'];?> " disabled ><br>
<input type="text" name="nombres" value="<?php echo $registro['nombres'];?>"><br>
<input type="text" name="apellidos" value="<?php echo $registro['apellidos'];?>"><br>
<input type="text" name="usuario" value="<?php echo $registro['usuario'];?>"><br>
<input type="text" name="clave" value="<?php echo $registro['clave']; ?> " disabled><br><br>
<input type="submit" name="modificar" value="modificar">

</form>


