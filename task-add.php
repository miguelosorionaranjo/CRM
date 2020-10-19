<?php
  include('database.php');
if(isset($_POST['name'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $task_fuec = $_POST['fuec'];
  $task_name = $_POST['name'];
  $task_apellido = $_POST['apellido'];
  $task_description = $_POST['description'];
  $task_contratante = $_POST['contratante'];
  $task_objetocontrato = $_POST['objetocontrato'];
  $task_cc = $_POST['cc'];
  $task_origen = $_POST['origen'];
  $task_recorrido = $_POST['recorrido'];
  $task_activa = $_POST['activa'];
  $query = "INSERT into task(fuec, name, apellido, description, contratante, objetocontrato, cc, origen, recorrido, activa) VALUES ('$task_fuec','$task_name', '$task_apellido', '$task_description', '$task_contratante', '$task_objetocontrato', '$task_cc', '$task_origen', '$task_recorrido', 'No Aprobado')";
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
