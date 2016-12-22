<?php 
	include_once("classe/ListagemManu.php");
	$listagem = new listagemManu();
	$listagem->SetNumPagina($_GET["pg"]);
	$listagem->setUrl("?telas=frmManuAgenda");
	$listagem->setCampoPesquisa($_GET["txtBusca"]);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
}
-->
</style>
</head>

<body>
<table width="60%" border="0" align="center">
  <tr>
    <td height="30" colspan="2" bgcolor="#FFFFFF"><div align="center">Altera&ccedil;&atilde;o da Agenda</div></td>
  </tr>
  <tr>
    <td height="30" colspan="2" bgcolor="#ffffff"><form id="formPesquisa" name="formPesquisa" method="get" action="">
      <table width="100%" border="0">
        <tr>
          <td width="11%">Pesquisa</td>
          <td width="46%"><input name="txtBusca" type="text" id="txtBusca" size="50" maxlength="120" />
            <input name="telas" type="hidden" id="telas" value="frmManuEventos" /></td>
          <td width="43%"><input type="submit" name="btPesquisar" id="btPesquisar" value="buscar" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td colspan="2"><span class="style1">N&atilde;o digite textos com acentos ou com&nbsp;&quot;&ccedil;&quot; na pesquisa. Ex da digita&ccedil;&atilde;o: administracao</span></td>
          </tr>
      </table>
        </form>
    </td>
  </tr>
  <tr>
    <td colspan="2"><form id="formCadEventos" name="formCadEventos" method="post" action="funcoes/cadastros.php">
      <table width="100%" border="0">
        <tr>
          <td width="32%"><div align="center">T&iacute;tulo</div></td>
          <td width="33%"><div align="center"></div></td>
          <td width="35%" colspan="2"><label>
            <div align="center">A&ccedil;&otilde;es</div>
          </label></td>
          </tr>
        <tr>
          <td colspan="4"><table width="100%" border="0">
          
            <?php $listagem->geraManuAgenda()?>
            
          </table>
            <label></label></td>
          </tr>
        <tr>
          <td colspan="4"><div align="center"></div></td>
        </tr>
        <tr>
          <td colspan="4"><div align="center">
            <label></label>
            <label></label><div id="paginacao"></div>
          </div></td>
          </tr>
        <tr>
          <td colspan="4"><div align="center" id="paginacao"><?php echo $listagem->geraNumeros(); ?></div></td>
        </tr>
      </table>
        </form>    </td>
  </tr>
</table>
</body>
</html>
