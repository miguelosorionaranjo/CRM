<?php
  include('database.php');
if(isset($_POST['id'])) { 
  $id = $_POST['id'];
  $query = "UPDATE precontacto SET conver = if(conver='Pre-contacto', 'Contacto', 'Pre-contacto') WHERE id = '$id'";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Consulta Fallida.');
  }
  echo "Cambios Realizados con Éxito";  
}
?>