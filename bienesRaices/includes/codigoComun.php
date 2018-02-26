<?php
function printMsg($msg, $tipo) {
	echo "<div class=\"$tipo\">";
		if(is_array($msg)) {
			echo '<ul>';
			foreach ($msg as $calzon => $caca) {
				echo "<li>$caca</li>";
			}
			echo '</ul>';
		}
		else {
			echo $msg;
		} 
	echo "</div>";
}
?>