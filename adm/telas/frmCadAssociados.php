

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
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

</head>

<body>
<table width="500" border="0" align="left">
  <tr>
    <td height="30" colspan="2"><div align="center" class="tituloform">Cadastro dos Associados ACEMT</div></td>
  </tr>
  <tr>
    <td colspan="2"><form action="funcoes/cadastros.php" method="post" name="frm" id="frm" onsubmit="return validaForm();">
      <table width="100%" border="0">
        <tr>
          <td>&nbsp;</td>
          <td width="68%">&nbsp;</td>
        </tr>
        <tr>
          <td width="32%" class="conteudoform">Nome do Associado(a)</td>
          <td><label>
            <input type="text" name="txtNome" id="txtNome" />
          </label></td>
          </tr>
        <tr>
          <td class="conteudoform">Data da Associa&ccedil;&atilde;o</td>
          <td><input type="text" name="txtData" id="txtData" /> 
              <span class="conteudoform">Ex: 12/07/2012</span></td>
        </tr>
        <tr>
          <td class="conteudoform">Especialidade</td>
          <td><input type="text" name="txtEspecialidade" id="txtEspecialidade" /></td>
        </tr>
        <tr>
          <td class="conteudoform">Site do M&eacute;dico(a)</td>
          <td><input type="text" name="txtSite" id="txtSite" /></td>
        </tr>
        <tr>
          <td class="conteudoform">Twitter do M&eacute;dico(a)</td>
          <td><input type="text" name="txtTwitter" id="txtTwitter" /></td>
        </tr>
        <tr>
          <td class="conteudoform">Email</td>
          <td><input type="text" name="txtEmail" id="txtEmail" /></td>
        </tr>
        <tr>
          <td colspan="2"><table width="100%" border="0">
            <tr>
              <td class="conteudoform">Descri&ccedil;&atilde;o da Carreira do M&eacute;dico(a)</td>
              </tr>
            </table></td>
        </tr>
        <tr>
          <td colspan="2"><label for="txtDesc"></label>
            <textarea name="txtDesc" id="txtDesc" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"><?php echo base64_decode($_GET["msn"]); ?></div></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">
            <label></label>
            <label>
            <input type="submit" name="btCadastrar" id="btCadastrar" value="Cadastrar" />
            </label>
            <input name="txtLocal" type="hidden" id="txtLocal" value="formCadAssoc" />
          </div></td>
          </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>
