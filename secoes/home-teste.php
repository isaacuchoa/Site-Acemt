<?php 
	include_once("classe/ListaProdutos.php");
	$listagem = new ListaProdutos();
	$listagem->setNumPagina("");
	$listagem->setUrl("");
	$listagem->setUrl("");
	$listagem->setSessao("");
?>

 <!-- Busca de médicos -->
 <div id="busca-servicos">
                  <form action="" method="get">    
                  <input type="text" id="buscar" class="campo-busca" value="Digite o nome de um Médico(a) associado(a)." size="70" >
				  <div id="loading"><img src="images/BarraCarregando.gif"></div>
				  <div id="alvo"></div> 	     
        	</form>
        </div>
        
<!--- Slide de notícias abaixo  -->
<div id="blocoDestaques"><ul style="position: relative;">
	  <li style="position: absolute; top: 0px; left: 0px; display: none; z-index: 3; opacity: 0; width: 400px; height: 215px;">
			<a href="#" title="Destaque 1">
				<img src="js/destaque1.jpg" alt="Destaque 1">
			</a>
			<div style="display: none;" class="fundo"><!--  --></div>
			<p style="display: none;"><a href="#" title="Destaque 1">Destaque 1 - Muita coisa boa!</a></p>
	  </li>
		
	<li style="position: absolute; top: 0px; left: 0px; display: none; z-index: 3; opacity: 0; width: 400px; height: 215px;">
			<a href="#" title="Destaque 2">
				<img src="js/destaque2.jpg" alt="Destaque 2">
			</a>
			<div style="display: none;" class="fundo"><!--  --></div>
			<p style="display: none;"><a href="#" title="Destaque 2">Destaque 2 - Nem tão bom assim...</a></p>
		</li>
		
		<li style="position: absolute; top: 0px; left: 0px; display: block; z-index: 4; opacity: 1; width: 400px; height: 215px;">
			<a href="#" title="Destaque 3">
				<img src="js/destaque3.jpg" alt="Destaque 3">
			</a>
			<div style="display: block;" class="fundo"><!--  --></div>
			<p style="display: block;"><a href="#" title="Destaque 3">Destaque 3 - Agora sim... bem melhor!</a></p>
		</li>
	</ul>
</div>


<div id="img_home"><img src="images/home_img_medicos.jpg" width="400" height="277"/></div> 
<div id="hm_noticias">
	<div class="img_hmNoticias"><a href="#"><img src="images/hm_img_01.jpg" width="80" height="80"/></a></div>
	<div class="img_hmNoticias"><a href="#"><img src="images/home_img_02.jpg" width="80" height="80"/></a></div>
	<div class="img_hmNoticias"><a href="#"><img src="images/home_img_03.jpg" width="80" height="80"/></a></div>
	<div class="img_hmNoticias"><a href="#"><img src="images/home_img_04.jpg" width="80" height="80"/></a></div>
</div>


<!-- /destaques -->