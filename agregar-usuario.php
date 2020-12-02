<?php
  include('database.php');
if(isset($_POST['nombre3'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $task_nombre3 = $_POST['nombre3'];
  $task_apellido3 = $_POST['apellido3'];


  
				//////////////////////// PRESIONAR EL BOTÓN //////////////////////////
				if(isset($_POST['agregar-usuario']))

				{


				$items1 = ($_POST['nombre3']);
				$items2 = ($_POST['apellido3']);
				 
				///////////// SEPARAR VALORES DE ARRAYS, EN ESTE CASO SON 4 ARRAYS UNO POR CADA INPUT (ID, NOMBRE, CARRERA Y GRUPO////////////////////)
				while(true) {

				    //// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
				    $item1 = current($items1);
				    $item2 = current($items2);
				    
				    ////// ASIGNARLOS A VARIABLES ///////////////////
				     $task_nombre3=(( $item1 !== false) ? $item1 : ", &nbsp;");
				    $task_apellido3=(( $item2 !== false) ? $item2 : ", &nbsp;");

				   
				    
				    // Up! Next Value
				    $item1 = next( $items1 );
				    $item2 = next( $items2 );
				    
				    // Check terminator
				    if($item1 === false && $item2 === false  ) break;
    
				}
		
				}
   //// CONCATENAR LOS VALORES EN ORDEN PARA SU FUTURA INSERCIÓN ////////
   $valores='("'.$task_nombre3.'","'.$task_apellido3.'"),';

    //////// YA QUE TERMINA CON COMA CADA FILA, SE RESTA CON LA FUNCIÓN SUBSTR EN LA ULTIMA FILA /////////////////////
    $valoresQ= substr($valores, 0, -1);

  $query = "INSERT into usuario (nombre3, apellido3) VALUES 
  $valoresQ";

  $result=$connection->query($query) or mysql_error();

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