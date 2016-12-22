<?php 
	include_once("classe/ListaProdutos.php");
	$listagem = new ListaProdutos();
	
	//sql da agenda
	$sql = "SELECT * FROM tbagenda ORDER BY idAgenda DESC LIMIT 7";
	$qr = mysql_query($sql);
?>


<h2 class="fundo-topico">Agenda</h2>

	
  <?php while($dados = mysql_fetch_array($qr)){ ?>
  
<div id="tit_agenda"><a href="agenda.php?id=<?php echo $dados["idAgenda"] ?>?keepThis=true&TB_iframe=true&height=300&width=800" class="thickbox"> <?php echo $dados["tituloAgenda"] ?> </a></div>
<div class="data_evento"><?php echo $dados["data"] ?> - <?php echo $dados["hora"] ?></div>
<div class="evento"><a href="agenda.php?id=<?php echo $dados["idAgenda"] ?>?keepThis=true&TB_iframe=true&height=300&width=800" class="thickbox"><?php echo $dados["resumo"] ?></a></div>
 <?php } ?>
     
