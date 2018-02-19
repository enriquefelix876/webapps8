<?php

$servidor = 'localhost';
$baseDatos = 'bienesRaices8';
$usuarioBd = 'root';
$passwordBd = 'iswug';

$conexionLocalhost = mysql_connect($servidor,$usuarioBd,$passwordBd) or trigger_error(mysql_error(),E_USER_ERROR);

mysql_query("SET NAMES 'utf8'");

mysql_select_db($baseDatos,$conexionLocalhost);
?>