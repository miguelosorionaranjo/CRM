<?php
  include('database.php');
  $query = "SELECT * from oportunidad  ";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
        'nombreopor' => $row['nombreopor'],
      'nombreorg' => $row['nombreorg'],
      'eo' => $row['eo'],
      'id_opor' => $row['id_opor']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
?>