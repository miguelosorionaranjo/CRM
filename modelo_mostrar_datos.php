<?php
error_reporting(0);
 $id = $_POST['id'];

 include('database.php');

	$query = ( "SELECT * FROM precontacto WHERE id ='$id'");
	$result = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_array($result)) {
		
		$nombre = $row['nombre'];
		$apellido = $row['apellido'];
		$cargo = $row['cargo'];
}
?>
<h4> Datos del usuario para examinar </h4>
<table class="table table-condensed">
	<tr>
		<td> Nombre : </td>
		<td> <?php echo $nombre; ?></td>
	</tr>

	<tr>
		<td> Apellidos : </td>
		<td> <?php echo $apellido; ?></td>
	</tr>
	<tr>
		<td> Cargo : </td>
		<td> <?php echo $cargo; ?></td>
	</tr>

</table>
<?php

?>


