<?php
  include('database.php');
if(isset($_POST['nombre2'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $task_nombre2 = $_POST['nombre2'];
  $task_estadom = $_POST['estadom'];
  $query = "INSERT into marca (nombre2,estadom) VALUES 
  ('$task_nombre2', '$task_estadom')";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Query Failed.');
  }
  echo "Registrado con Éxito";  
#if (fuec: $('#fuec').length==0){
#  alert("Ingrese Número de FUEC");
#}
#else (fuec: $('#fuec').length==0){
 # alert("Ingrese Número de FUEC");
#}
}
?>