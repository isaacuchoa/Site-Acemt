<?php 
	include_once("classe/ListaProdutos.php");
	$listagem = new ListaProdutos();
?>

<h2 class="fundo-topico">Hist�ria da ACEMT</h2>

<div id="historia">
<?php $listagem->geraHistoria(); ?>
</div>
