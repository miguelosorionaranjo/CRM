<?php
  include('database.php');
if(isset($_POST['id'])) { 
  $id = $_POST['id'];
  $query = "UPDATE marca SET estadom = if(estadom='Inactiva', 'Activa', 'Inactiva') WHERE id = '$id'";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Consulta Fallida.');
  }
  echo "Cambios Realizados con Éxito";  
}
?>