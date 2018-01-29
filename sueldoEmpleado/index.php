<?php
	$nombre = "Sebastian";
	$apellidos = "Carmona";
	$ht = 35;

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

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sueldo empleado</title>
</head>
<body>
	
<h1>Sueldo empleado</h1>

<p>El empleado <?php echo $nombre.' '.$apellidos; ?> trabajó <?php echo $ht; ?> horas, obteniendo un ingreso de $<?php echo $total; ?>, el desglose se presenta a continuación:</p>

<!--<?php //echo "<p>El empleado $nombre $apellidos trabajó $ht horas, obteniendo un ingreso de $$total, el desglose se presenta a continuación:</p>" ;?>-->

<table>
	<tr>
		<td><b>Horas extras:</b></td>
		<td><?php echo $he; ?></td>
	</tr>
	<tr>
		<td><b>Ingreso por hora normal:</b></td>
		<td><?php echo $ingreso_n; ?></td>
	</tr>
	<tr>
		<td><b>Ingreso por hora extra:</b></td>
		<td><?php echo $ingreso_e; ?></td>
	</tr>
	<tr>
		<td><b>Total:</b></td>
		<td><?php echo $total; ?></td>
	</tr>
</table>

</body>
</html>













