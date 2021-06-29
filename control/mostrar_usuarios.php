<?php

  require_once "../app/conexion.php";

  $conexion=conexion();
  // Inicializa la sesion
  session_start();

  $query_busqueda = "SELECT id,usuario FROM usuarios";

  $resultado_query = $conexion->query($query_busqueda);

  $preconstruccion_tabla="";

  while($datos_tabla=$resultado_query->fetch_assoc()){

    $preconstruccion_tabla = $preconstruccion_tabla.'
    <tr>
    <td>'.$datos_tabla['id'].'</td>
    <td>'.$datos_tabla['usuario'].'</td>
  <tr>';
}

$conexion->close();

echo '
  <table class="table table stripped">
    <thead>
      <th>Id</th>
      <th>Usuario</th>
    </thead>
    <tbody>
      '.$preconstruccion_tabla.'
    </tbody>
  </table>

    ';



?>

