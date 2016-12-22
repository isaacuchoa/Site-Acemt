<?php 
	include_once("classe/BuscaAlteracao.php");
	$listagem = new BuscaAlteracaoAgenda();
	$listagem->setId($_GET["id"]);
	$listagem->geraDados();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
#frm table tr td {
	text-align: left;
}
</style>
</head>

<body>
<table width="60%" border="0" align="center">
  <tr>
    <td height="30" colspan="2"><div align="center">Altera&ccedil;&atilde;o da Agenda</div></td>
  </tr>
  <tr>
    <td colspan="2"><form id="frm" name="frm" method="post" action="funcoes/alteracao.php">
      <table width="115%" border="0">
        <tr>
          <td width="32%">T&iacute;tulo</td>
          <td><input name="txttitulo" type="text" id="txttitulo" value="<?php echo $listagem->getTitulo(); ?>" size="70" /></td>
          </tr>
        <tr>
          <td colspan="2"><table width="100%" border="0">
          
           
            
          </table>
            <label></label></td>
          </tr>
        <tr>
          <td>Data</td>
          <td><input name="txtData" type="text" id="txtData" value="<?php echo $listagem->getData(); ?>" size="60" /></td>
        </tr>
        <tr>
          <td>Hora</td>
          <td><input name="txtHora" type="text" id="txtHora" value="<?php echo $listagem->getHora(); ?>" size="60" /></td>
        </tr>
        <tr>
          <td>Resumo</td>
          <td><input name="txtResumo" type="text" id="txtResumo" value="<?php echo $listagem->getResumo(); ?>" size="60" /></td>
        </tr>
        <tr>
          <td colspan="2">Descri&ccedil;&atilde;o</td>
          </tr>
        <tr>
          <td colspan="2"><textarea name="txtdescri" id="txtdescri" cols="45" rows="5"><?php echo $listagem->getDesc(); ?></textarea></td>
          </tr>
        <tr>
          <td colspan="2"><div align="center">
            <label></label>
            <label></label>
            <input type="submit" name="button" id="button" value="Alterar" />
            <input name="idAgenda" type="hidden" id="idAgenda" value="<?php echo $_GET["id"]; ?>" />
            <input name="local" type="hidden" id="local" value="formAltAgenda" />
          </div></td>
          </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>
