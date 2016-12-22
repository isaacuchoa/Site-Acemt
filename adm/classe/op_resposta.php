<?php
include "conexao_mural.php";

$acao 	= $_POST["acao"];
$id		= $_POST["id"];
$idPergunta	 	= $_POST["idPergunta"];
$txt_resposta 		= $_POST["txt_resposta"];
$txt_totalvotos		= $_POST["txt_totalvotos"];


if ($acao == "Inserir")
{
	$sql = "INSERT INTO tbenqueteresposta (idPergunta, resposta) VALUES ('$idPergunta','$txt_resposta')";
	//echo $sql;
	
	mysql_query($sql) or die ("não foi possível inserir os dados");
	
	echo "<script type = 'text/javascript'> location.href = '../index.php?telas=frmCadEnqueteResposta'</script>";

}

if ($acao==Alterar)
{
	$sql = "UPDATE tbenqueteresposta SET 
	id_pergunta = '$idPergunta',
	resposta = '$txt_resposta'
	 WHERE idResposta = '$id' ";
	//echo $sql;
	
	mysql_query($sql) or die ("não foi possível alterar os dados");

	echo "<script type = 'text/javascript'> location.href = '../index.php?telas=frmCadEnqueteResposta'</script>";

	
}

if ($acao == Excluir)
{
	mysql_query("UPDATE tbenquetepergunta SET totalgeral = totalgeral - '$txt_totalvotos' WHERE idPergunta = '$idPergunta' ");
	
	
	$sql = "DELETE FROM tbenqueteresposta WHERE idResposta = '$id'";
	mysql_query($sql);

	echo "<script type = 'text/javascript'> location.href = '../index.php?telas=frmCadEnqueteResposta'</script>";
	
	
}

?>