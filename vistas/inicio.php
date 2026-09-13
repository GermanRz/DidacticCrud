	<?php

		$controlador = new controladorPersona();
		$resultado=$controlador->index();

	?>

	<h3>Pagina de inicio</h3>

	<table border=1>
	<thead>
            <tr>
                <th>ID</th>
                <th>Cédula</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th>Clave</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
			<?php
				while($fila=mysqli_fetch_assoc($resultado)){
					echo "<tr>";
						echo "<td>" . $fila["id"] . "</td>";
						echo "<td>" . $fila["cedula"] . "</td>";
						echo "<td>" . $fila["nombres"] . "</td>";
						echo "<td>" . $fila["apellidos"] . "</td>";
						echo "<td>" . $fila["usuario"] . "</td>";
						echo "<td>" . $fila["clave"] . "</td>";
						echo "<td><a href='?cargar=ver&id=".$fila["id"]."'> Ver</a><a href='?cargar=editar&id=".$fila["id"]."'> Editar</a><a href='?cargar=eliminar&id=".$fila["id"]."'> eliminar</a></td>";
					echo "</tr>";				
				}
			?>

        </tbody>
	</table>
