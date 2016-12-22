<?php 
	include("classe/conexao_agenda.php"); 
	
	$id = $_GET["id"];  // código da matéria ativa
	
		
	//sql para a notícia
	$sql_1 = "SELECT * FROM tbartigos WHERE idArtigos = '$id'";
	$qr_1 = mysql_query($sql_1);
	$materia = mysql_fetch_array($qr_1);
	
	
?>
<style type="text/css">
<!--
.conteudo-texto {font-family: Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#333;}
a:link {
	color: #0000ff;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
	color: #000000;
}
a:active {
	text-decoration: none;
}
-->
</style>




<div id="HOTWordsTxt" name="HOTWordsTxt">
<p>
<span class="conteudo-texto"><?php echo $materia["descArtigos"]; ?>
</span></p>
</div>
<script src='http://ads24110.hotwords.com.br/show.jsp?id=24110'></script>