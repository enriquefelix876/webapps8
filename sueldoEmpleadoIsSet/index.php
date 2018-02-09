<?php
if(isset($_GET['sent'])) {
	$nombre = $_GET['nombre'];
	$apellidos = $_GET['apellidos'];
	$ht = $_GET['horas_trabajadas'];

	define("CUOTA_HORA_N", 20);
	define("CUOTA_HORA_E", 40);

	if($ht > 40) {
		$he = $ht - 40;
		$ingreso_n = 40 * CUOTA_HORA_N;
		$ingreso_e = $he * CUOTA_HORA_E;
		$total = $ingreso_e + $ingreso_n;
	} 
	else {
		$total = $ht * CUOTA_HORA_N;
	} 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sueldo empleado</title>
</head>
<body>
	
<h1>Sueldo empleado</h1>

<?php
if(!isset($_GET['sent'])) { ?>
<p>Utiliza el siguiente formulario para calcular el sueldo de un empleado:</p>

<form action="index.php" method="get">
	<table>
		<tr>
			<td><label for="nombre">Nombre:</label></td>
			<td><input type="text" name="nombre"></td>
		</tr>
		<tr>
			<td><label for="apellidos">Apellidos:</label></td>
			<td><input type="text" name="apellidos"></td>
		</tr>
		<tr>
			<td><label for="horas_trabajadas">Horas trabajadas:</label></td>
			<td><input type="text" name="horas_trabajadas"></td>
		</tr>
		<tr>
			<td><input type="submit" value="FIERRO!" name="sent"></td>
			<td>&nbsp;</td>
		</tr>
	</table>
</form>
<?php }
else { ?>
<p>El empleado <?php echo $nombre.' '.$apellidos; ?> trabajó <?php echo $ht; ?> horas, obteniendo un ingreso de $<?php echo $total; ?>, el desglose se presenta a continuación:</p>

<?php
	if($ht > 40) {
		include("includes/formatoConHE.mollete");
	}
	else {
		include("includes/formatoSinHE.salchicha");
	}
}
?>

</body>
</html>













