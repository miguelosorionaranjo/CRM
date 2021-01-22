<?php
include('database.php');
$search = $_POST['search'];
if(!empty($search)) {
  $query = "SELECT * FROM precontacto WHERE nombre LIKE '$search%' OR apellido LIKE '$search%' OR cargo LIKE '$search%'";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Error' . mysqli_error($connection));
  }
  
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'gender' => $row['gender'],
      'nombre' => $row['nombre'],
      'apellido' => $row['apellido'],
      'cargo' => $row['cargo'],
      'id' => $row['id']
    );
    
  }
  
  $jsonstring = json_encode($json);
  echo $jsonstring;
}
?>
