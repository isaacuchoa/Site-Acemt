<?php
	$host = "localhost";
	$user = "acem_medacemt";
	$senha = "AssoMed234";
	$banco = "acem_bd_med";
	
	$conn = @mysql_connect($host, $user, $senha) or die(mysql_error());
	$db = @mysql_select_db($banco) or die (mysql_error());
?>
