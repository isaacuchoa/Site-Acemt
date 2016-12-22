<?php 
	include_once("classe/ListaProdutos.php");
	$listagem = new ListaProdutos();
?>

<h2 class="fundo-topico">Diretoria</h2>

<div id="diretoria">
<?php $listagem->geraDiretoria(); ?>

</div>