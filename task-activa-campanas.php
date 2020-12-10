<?php
  include('database.php');
if(isset($_POST['idc'])) { 
  $idc = $_POST['idc'];
  $query = "UPDATE campana SET estadoc = if(estadoc='Inactiva', 'Activa', 'Inactiva') WHERE idc = '$idc'";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Consulta Fallida.');
  }
  echo "Cambios Realizados con Éxito";  
}
?>