<?php
  include('database.php');
  $query = "SELECT * from precontacto ";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'gender' => $row['gender'],
      'nombre' => $row['nombre'],
      'apellido' => $row['apellido'],
      'principal' => $row['principal'],
      'celular' => $row['celular'],
      'correop' => $row['correop'],
      'cargo' => $row['cargo'],
      'origen' => $row['origen'],
      'pais' => $row['pais'],
      'departamento' => $row['departamento'],
      'ciudad' => $row['ciudad'],
      'pagina' => $row['pagina'],
      'empresa' => $row['empresa'],
      'industria' => $row['industria'],
      'direccion' => $row['direccion'],
      'ps' => $row['ps'],
      'buscadormarca' => $row['buscadormarca'],
      'buscadorp' => $row['buscadorp'],
      'precontacto' => $row['precontacto'],
      'descripcion' => $row['descripcion'],
      'fecha' => $row['fecha'],
      'fechamod' => $row['fechamod'],
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>