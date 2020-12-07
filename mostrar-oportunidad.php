<!-- Modal -->
<div class="modal fade" id="editar<?php echo $row['id_opor'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" align="center">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar usuario</h4>
      </div>
      <div class="modal-body">



      <table class="table table-bordered">
	<tr>
    <th> # </th>
		<th> Nombre Oportunidad </th>
		<th> Nombre de la Organización </th>
		<th> Importe $ </th>
	
  </tr>
  

  
<?php

include('database.php');

$query = "SELECT * from oportunidad where id_opor ='$id_opor' ";
$result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }
$i =0;
while($row = mysqli_fetch_array($result)) {
	$i++;
	$id_opor = $row['id_opor'];
	$nombreopor = $row['nombreopor'];
  $nombreorg = $row['nombreorg'];
  $importe = $row['importe'];
	?>
     <tr>
     	<td> <?php echo $i; ?></td>
     	<td> <?php echo $nombreopor; ?></td>
     	<td> <?php echo $nombreorg; ?></td>
     	<td> <?php echo $importe; ?></td>
     </tr>
	<?php
}

?>
</table>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
					
