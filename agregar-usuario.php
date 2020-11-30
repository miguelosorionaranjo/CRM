<?php
  include('database.php');
if(isset($_POST['nombre3'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $task_nombre3 = $_POST['nombre3'];
  $task_apellido3 = $_POST['apellido3'];
  $query = "INSERT into usuario (nombre3, apellido3) VALUES 
  ('$task_nombre3','$task_apellido3')";
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