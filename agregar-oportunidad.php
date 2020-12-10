<?php
  include('database.php');
if(isset($_POST['nombreorg'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $task_nombreopor = $_POST['nombreopor'];
  $task_nombreorg = $_POST['nombreorg'];
  $task_nombrecon = $_POST['nombrecon'];
  $task_importe = $_POST['importe'];
  $task_tipoopor = $_POST['tipoopor'];
  $task_fechac = $_POST['fechac'];
  $task_origenpc = $_POST['origenpc'];
  $task_co = $_POST['co'];
  $task_fv = $_POST['fv'];
  $task_pro = $_POST['pro'];
  $task_buscadorvivo2 = $_POST['buscadorvivo2'];
  $task_sp = $_POST['sp'];
  $task_descrip_o = $_POST['descrip_o'];
  $task_fechaco = $_POST['fechaco'];
  $task_eo = $_POST['eo'];
  $query = "INSERT into oportunidad(nombreopor, 
                                    nombreorg, 
                                    nombrecon, 
                                    importe, 
                                    tipoopor, 
                                    fechac,
                                    origenpc, 
                                    co,
                                    fv, 
                                    pro, 
                                    buscadorvivo2,  
                                    sp, 
                                    descrip_o, 
                                    fechaco,
                                    eo) 
                                    VALUES 
                                    ('$task_nombreopor',
                                    '$task_nombreorg', 
                                    '$task_nombrecon', 
                                    '$task_importe', 
                                    '$task_tipoopor',
                                    '$task_fechac',  
                                    '$task_origenpc', 
                                    '$task_co',
                                    '$task_fv', 
                                    '$task_pro', 
                                    '$task_buscadorvivo2', 
                                    '$task_sp', 
                                    '$task_descrip_o',  
                                    '$task_fechaco',
                                    '$task_eo')";
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