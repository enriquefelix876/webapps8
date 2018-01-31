<?php
	$nombre = "Sebastian";
	$apellidos = "Carmona";
	$ht = 30;

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

<?php
	if($ht > 40) {
		include("includes/formatoConHE.mollete");
	}
	else {
		include("includes/formatoSinHE.salchicha");
	}
?>

</body>
</html>













