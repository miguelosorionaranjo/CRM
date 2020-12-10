<?php require_once('database.php'); ?>
<?php
$id = $_GET['id_opor'];
if ((isset($_GET['id_opor'])) && ($_GET['id_opor'] != "")) {
$deleteSQL = sprintf("UPDATE oportunidad SET eo='Inactiva' WHERE id_opor=$id_opor ");
  $Result1 = mysqli_query( $conex, $deleteSQL) or die(mysqli_error($conex));
if($Result1==true)
{
  echo 1;
   }
 else 
 {
  echo 0;
   }
}
?>