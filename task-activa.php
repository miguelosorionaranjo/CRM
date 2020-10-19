<?php
  include('database.php');
if(isset($_POST['id'])) { 
  $id = $_POST['id'];
  $query = "UPDATE task SET  activa=IF(activa='No Aprobado', 'Aprobado', 'No Aprobado')  WHERE id = '$id'";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Consulta Fallida.');
  }
  echo "Cambios Realizados con Éxito";  
}
?>