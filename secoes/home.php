<?php 
	include_once("classe/ListaProdutos.php");
	$listagem = new ListaProdutos();
	$listagem->setNumPagina("");
	$listagem->setUrl("");
	$listagem->setUrl("");
	$listagem->setSessao("");
?>

 
        
<!--- Slide de not�cias abaixo  -->
<div id="blocoDestaques">

	<ul style="position: relative;">
		<?php $listagem->geraSlideNoticias(); ?>
	</ul>
</div>

<!-- Busca de m�dicos -->
        <div id="busca-servicos">
          <h2 class="fundo-topico">Buscar Associado</h2>
          

                  <form action="" method="get">    
                  <input type="text" id="buscar" class="campo-busca" value="Digite o nome de um M�dico(a) associado(a)." size="70" >
				  <div id="loading"><img src="images/BarraCarregando.gif"></div>
				  <div id="alvo"></div> 	     
        	</form>
        </div> 

<!-- Banner empregos abaixo -->
<a href="?secao=empregos" title="Confira algumas vagas"><img src="images/banner_empregos.jpg" /></a>


<!-- Include da p�gina com os artigos do site -->
<div id="hm_artigos">
 <?php include "include/artigos.php"; ?>
</div>

<div class="clear"></div>
<!-- Include da p�gina com agenda do site -->
<div id="agenda-topic">
       		<?php include "include/agenda.php"; ?>
</div>




<!-- /destaques -->