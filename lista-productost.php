<?php
  include('database.php');
  $query = "SELECT * from producto  ";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'name' => $row['name'],
        'codigo' => $row['codigo'],
      'total' => $row['total'],
      'cantidad' => $row['cantidad'],
      'proveedor' => $row['proveedor'],
      'imagen' => $row['imagen'],
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>