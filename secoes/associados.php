<?php 
	include_once("classe/ListaProdutos.php");
	$listagem = new ListaProdutos();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<!-- Busca de médicos -->
<h2 class="fundo-topico">Associados</h2>
        <div id="busca-servicos">
                  <form action="" method="get">    
                  <input type="text" id="buscar" class="campo-busca" value="Digite o nome de um Médico(a) associado(a)." size="70" >
				  <div id="loading"><img src="images/BarraCarregando.gif"></div>
				  <div id="alvo"></div> 	     
        	</form>
        </div>

<div id="Accordion1" class="Accordion" tabindex="0">
  <?php $listagem->geraAssociadosPag(); ?>
</div>
<script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
</script>


</body>
</html>