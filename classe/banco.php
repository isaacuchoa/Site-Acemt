<?php
$servidor		= "localhost";
$usuario		= "acem_medacemt";
$senha			= "AssoMed234";
$banco			= "acem_bd_med";

$conn = mysql_connect($servidor,$usuario,$senha);
if ($conn){
	$banco = mysql_select_db($banco);
	if (!$banco){
		echo "Erro no banco";
	}
}
else{
	echo "Erro no servidor";
}
?>