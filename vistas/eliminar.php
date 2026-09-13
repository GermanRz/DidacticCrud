<?php

$controlador=new controladorPersona();

if (isset($_GET['id'])) {
  $registro=$controlador->ver($_GET['id']);
}else {
  header('Location:index.php');
}

if (isset($_POST['eliminar'])) {
  $controlador->eliminar($_GET['id']);
  header('Location:index.php');
}

?>


<form action="" method="post">
<table border="1">
  <thead>
    <tr>
      <th>Id</th>
      <th>Cedula</th>
      <th>Nombres</th>
      <th>Apellido</th>
      <th>Usuario</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $registro['cedula'] ?></td>
      <td><?php echo $registro['nombres'] ?></td>
      <td><?php echo $registro['apellidos'] ?></td>
      <td><?php echo $registro['usuario'] ?></td>
      <td><?php echo $registro['clave'] ?></td>
      <td>
        <input type="submit" name='eliminar' value="Eliminar">
      </td>
    </tr>
  </tbody>
</form>

</table>
