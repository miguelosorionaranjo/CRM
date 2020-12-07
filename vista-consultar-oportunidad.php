<?php

 $id_opor = $_POST['id_opor'];

require 'database.php';

$sql_u = mysql_query("SELECT * FROM oportunidad WHERE id_opor ='$id_opor'");

$row_u = mysql_fetch_array($sql_u);

$nombreopor = $row_u['nombreopor'];
?>
<h4> Datos del usuario para examinar </h4>
<table class="table table-condensed">
	<tr>
		<td> Nombre : </td>
		<td> <?php echo $nombreopor; ?></td>
	</tr>

	
</table>
<?php

?>