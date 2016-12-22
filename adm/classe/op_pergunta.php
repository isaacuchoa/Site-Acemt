<?php
include "conexao_mural.php";

$acao 	= $_POST["acao"];
$id		= $_POST["id"];

$txt_pergunta 	= $_POST["txt_pergunta"];
$txt_ativo 		= $_POST["txt_ativo"];

if ($acao == "Inserir")
{
	mysql_query("UPDATE tbenquetepergunta SET ativo = 'N'");
	
	$sql = "INSERT INTO tbenquetepergunta (pergunta, ativo) VALUES ('$txt_pergunta', 'S')";
	mysql_query($sql) or die ("não foi possível inserir os dados".mysql_error());
	
	echo "<script type = 'text/javascript'> location.href = '../index.php?telas=frmCadEnqueteIndex'</script>";

}

if ($acao==Alterar)
{
	
	if ($txt_ativo =='S')
	{
		mysql_query("UPDATE tbenquetepergunta SET ativo = 'N'");
	}
	$sql = "UPDATE tbenquetepergunta SET pergunta = '$txt_pergunta', ativo = '$txt_ativo' WHERE idPergunta = '$id' ";
	mysql_query($sql) or die ("não foi possível alterar os dados");

	echo "<script type = 'text/javascript'> location.href = '../index.php?telas=frmManuEnquete'</script>";

	
}

if ($acao == Excluir)
{
	//Exclui todas as resposta da pergunta
	mysql_query("DELETE FROM tbenqueteresposta WHERE idPergunta = '$id'");
	
	$sql = "DELETE FROM tbenquetepergunta WHERE idPergunta = '$id'";
	mysql_query($sql);

	echo "<script type = 'text/javascript'> location.href = '../index.php?telas=frmManuEnquete'</script>";
	
	
}

?>