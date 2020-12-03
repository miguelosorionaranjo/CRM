<?php

 $id_usuario = $_POST['id_usuario'];

 include('database.php');

	$query =  "SELECT * FROM usuario order by  id_usuario ='$id_usuario'";
	$result = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_array($result)) {
		
		$nombre3 = $row['nombre3'];
		$apellido3 = $row['apellido3'];
	
}
?>
<h4> Datos del usuario para examinar </h4>
<table class="table table-condensed">
	<tr>
		<td> Nombre : </td>
		<td> <?php echo $nombre3; ?></td>
	</tr>

	<tr>
		<td> Apellidos : </td>
		<td> <?php echo $apellido3; ?></td>
	</tr>


</table>
<?php

?>


