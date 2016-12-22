<?php 
	include_once("classe/BuscaAlteracao.php");
	$listagem = new BuscaAlteracaoHistoria();
	$listagem->setId($_GET["id"]);
	$listagem->geraDados();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<form action="funcoes/alteracao.php" method="post" name="frm" id="frm" enctype="multipart/form-data">
	<label>
    	<span>Título</span><br />
        <input type="text" name="txtNome" id="txtNome" value="<?php echo $listagem->getNome(); ?>" />
    </label><br />
    
    <label>
    	<span> Conteúdo </span><br />
        <textarea name="txtDesc" id="txtDesc" cols="30" rows="5">
        <?php echo $listagem->getDescricao(); ?>
        </textarea>
    </label>
    
    <input type="submit" value="Alterar" />
	 <input name="idHistoria" type="hidden" id="idHistoria" value="<?php echo $_GET["id"]; ?>" />
     <input name="local" type="hidden" id="local" value="formAltHistoria" />

</form>


</body>
</html>