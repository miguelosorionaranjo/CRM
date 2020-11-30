<?php
  include('database.php');
if(isset($_POST['nombrec'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $task_nombrec = $_POST['nombrec'];
  $task_buscadorvivo = $_POST['buscadorvivo'];
  $task_tipoc = $_POST['tipoc'];
  $task_webc = $_POST['webc'];
  $task_estadoc = $_POST['estadoc'];
  $task_descripcionc = $_POST['descripcionc'];
  $query = "INSERT into campana   (nombrec, 
                                    buscadorvivo, 
                                    tipoc, 
                                    webc, 
                                    estadoc, 
                                    descripcionc) 
                                    VALUES 
                                    ('$task_nombrec', 
                                    '$task_buscadorvivo', 
                                    '$task_tipoc', 
                                    '$task_webc', 
                                    '$task_estadoc', 
                                    '$task_descripcionc')";
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