<?php
  include('database.php');
  $query = "SELECT * from precontacto WHERE conver='Pre-contacto'  ";
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
      'empresa' => $row['empresa'],
      'precontacto' => $row['precontacto'],
      'fecha' => $row['fecha'],
      'conver' => $row['conver'],
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>