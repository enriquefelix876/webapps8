<?php
function printMsg($msg, $tipo) {
	echo "<div class=\"$tipo\">";
	print_r($msg);
	echo "</div>";
}
?>