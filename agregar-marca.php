<?php
  include('database.php');
if(isset($_POST['nombre2'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $task_nombre2 = $_POST['nombre2'];
  $query = "INSERT into marca (nombre2) VALUES 
  ('$task_nombre2')";
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