<?php
	$host = "localhost";
	$user = "root";
	$senha = "";
	$banco = "bdacemt";
	
	$conn = @mysql_connect($host, $user, $senha) or die(mysql_error());
	$db = @mysql_select_db($banco) or die (mysql_error());
?>
