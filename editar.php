<?php
  include('database.php');
if(isset($_POST['id'])) {
  $task_gender = $_POST['gender']; 
  $task_nombre = $_POST['nombre']; 
  $task_apellido = $_POST['apellido']; 
  $task_principal = $_POST['principal'];
  $task_celular = $_POST['celular']; 
  $task_cargo = $_POST['cargo']; 
  $task_pais = $_POST['pais']; 
  $task_departamento = $_POST['departamento']; 
  $task_ciudad = $_POST['ciudad'];
  $task_pagina = $_POST['pagina'];
  $task_empresa = $_POST['empresa'];
  $task_industria = $_POST['industria'];
  $task_direccion = $_POST['direccion'];
  $task_ps = $_POST['ps'];
  $task_fechamod = $_POST['fechamod']; 
  $id = $_POST['id'];
  $query = "UPDATE precontacto SET gender = '$task_gender', 
                                    nombre = '$task_nombre', 
                                    apellido = '$task_apellido', 
                                    principal = '$task_principal', 
                                    celular = '$task_celular', 
                                    cargo = '$task_cargo', 
                                    pais = '$task_pais', 
                                    departamento = '$task_departamento', 
                                    ciudad = '$task_ciudad', 
                                    pagina = '$task_pagina', 
                                    empresa = '$task_empresa', 
                                    industria = '$task_industria', 
                                    direccion = '$task_direccion', 
                                    ps = '$task_ps', 
                                    fechamod = '$task_fechamod' 
                                    WHERE id = '$id'";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Consulta Fallida.');
  }
  echo "Cambios Realizados con Éxito";  
}
/*$task_cc = $_POST['cc'];

 cc = '$task_cc', 
*/
?>

