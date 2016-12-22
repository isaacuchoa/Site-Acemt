<?php 
	include_once("classe/ListaProdutos.php");
	$listagem = new ListaProdutos();
	
	//sql da agenda
	$sql = "SELECT * FROM tbartigos ORDER BY idArtigos DESC LIMIT 4";
	$qr = mysql_query($sql);
?>


<h2 class="fundo-topico">Artigos</h2>
	
  <?php while($artigos = mysql_fetch_array($qr)){ ?>
  
<div class="img_hmNoticias"><a href="artigos.php?id=<?php echo $artigos["idArtigos"] ?>?keepThis=true&TB_iframe=true&height=300&width=800" class="thickbox"><img src="imgArtigo/<?php echo $artigos["imagem"] ?>" width="80" height="80"/>  </a>
<div class="art_home"><a href="artigos.php?id=<?php echo $artigos["idArtigos"] ?>?keepThis=true&TB_iframe=true&height=300&width=800" class="thickbox"><?php echo $artigos["tituloArtigos"] ?></a></div></div>

 <?php } ?>
     
