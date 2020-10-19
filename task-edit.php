<?php
  include('database.php');
if(isset($_POST['id'])) {
  $task_fuec = $_POST['fuec']; 
  $task_name = $_POST['name']; 
  $task_apellido = $_POST['apellido']; 
  $task_description = $_POST['description'];
  $task_contratante = $_POST['contratante']; 
  $task_objetocontrato = $_POST['objetocontrato']; 
  $task_cc = $_POST['cc']; 
  $task_origen = $_POST['origen']; 
  $task_recorrido = $_POST['recorrido']; 
  $id = $_POST['id'];
  $query = "UPDATE task SET fuec = '$task_fuec', name = '$task_name', apellido = '$task_apellido', description = '$task_description', contratante = '$task_contratante', objetocontrato = '$task_objetocontrato', cc = '$task_cc', origen = '$task_origen', recorrido = '$task_recorrido' WHERE id = '$id'";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Consulta Fallida.');
  }
  echo "Cambios Realizados con Éxito";  
}
?>
