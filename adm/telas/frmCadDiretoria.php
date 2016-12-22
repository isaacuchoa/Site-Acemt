

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/stilo.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
	
	function validaForm(){
	
		var nome = document.getElementById("txtNome");
		
		var descricao = document.getElementById("txtDesc");
		
		if(nome.value == "" || descricao.value == "0"){
			alert("Atenção Nome e descrição devem ser preenchidos");
			return false;
		}else{
			return true;
		}
	}
</script>
<style type="text/css">
#frm table tr td table tr td {
	text-align: center;
}
#frm table tr td {
	text-align: left;
}
</style>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="500" border="0" align="left">
  <tr>
    <td height="30" colspan="2"><div align="center" class="tituloform">Cadastro da Diretoria ACEMT</div></td>
  </tr>
  <tr>
    <td colspan="2"><form action="funcoes/cadastros.php" method="post" name="frm" id="frm" onsubmit="return validaForm();">
      <table width="100%" border="0">
        <tr>
          <td colspan="3" bgcolor="#FF9797" class="conteudoform">Obs: Esse cadastro e para ser feito s&oacute; uma vez</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td width="70%" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="30%" class="conteudoform">T&iacute;tulo da Diretoria</td>
          <td colspan="2"><label>
            <input type="text" name="txtNome" id="txtNome" />
          </label></td>
          </tr>
        <tr>
          <td colspan="3"><table width="100%" border="0">
            <tr>
              <td class="conteudoform">Descri&ccedil;&atilde;o da Diretoria</td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td colspan="3"><label for="txtDesc"></label>
            <textarea name="txtDesc" id="txtDesc" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <td colspan="3"><div align="center"><?php echo base64_decode($_GET["msn"]); ?></div></td>
        </tr>
        <tr>
          <td colspan="3"><div align="center">
            <label></label>
            <label>
            <input type="submit" name="btCadastrar" id="btCadastrar" value="Cadastrar" />
            </label>
            <input name="txtLocal" type="hidden" id="txtLocal" value="formDiretoria" />
          </div></td>
          </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>
