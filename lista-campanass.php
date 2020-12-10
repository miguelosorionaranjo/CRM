<?php
  include('database.php');
  $query = "SELECT * from campana  ";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
        'nombrec' => $row['nombrec'],
      'descripcionc' => $row['descripcionc'],
      'estadoc' => $row['estadoc'],
      'idc' => $row['idc']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>