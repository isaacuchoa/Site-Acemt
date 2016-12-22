<?php 
	include_once("classe/ListaProdutos.php");
	$listagem = new ListaProdutos();
?>

<h2 class="fundo-topico">Fotos da ACEMT</h2>

<div class="img_fotos">
<?php $listagem->geraPagFotos(); ?>
</div>