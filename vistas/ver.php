<?php
  $controlador=new controladorPersona();

  if (isset($_GET['id'])) {
    $registro=$controlador->ver($_GET['id']);
  }else {
    header('Location:index.php');
  }
?>

<p>Id        : <?php echo $registro['id'] ?></p>
<p>Cedula    : <?php echo $registro['cedula'] ?></p>
<p>Nombres   :<?php echo $registro['nombres'] ?></p>
<p>Apellidos :<?php echo $registro['apellidos'] ?></p>
<p>Usuario   :<?php echo $registro['usuario'] ?></p>
<p>Clave     :<?php echo $registro['clave'] ?></p>
