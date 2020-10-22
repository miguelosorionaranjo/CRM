<?php
  include('database.php');
  $query = "SELECT * from task where activa = 'Aprobado'";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'fuec' => $row['fuec'],
      'name' => $row['name'],
      'apellido' => $row['apellido'],
      'description' => $row['description'],
      'contratante' => $row['contratante'],
      'objetocontrato' => $row['objetocontrato'],
      'cc' => $row['cc'],
      'origen' => $row['origen'],
      'recorrido' => $row['recorrido'],
      'fecha' => $row['fecha'],
      'activa' => $row['activa'],
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>
