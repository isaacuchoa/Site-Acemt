
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">
	function abreJanela(id){
		var url = "telas/FrmUpLoadSlideNoticias.php?local=FrmUpSlide&id="+id;
		openWindow(url, 'popup','width=550, height=150');
	}
	function validaForm(){
	
		var nome = document.getElementById("txtNome");
		var link = document.getElementById("txtLink");
		var imagem = document.getElementById("txtImagem");
		var destaque = document.getElementById("txtDestaque");
		
		if(nome.value == "" || link.value == "" || imagem.value == "" || destaque.value == "0"){
			alert("Atenção Nome, Link, Imagem e Destaque devem ser preenchidos");
			return false;
		}else{
			return true;
		}
	}
</script>


<link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="64%" border="0" align="center">
  <tr>
    <td height="30" colspan="2"><div align="center" class="tituloform">Cadastro do Slide de not&iacute;cias na P&aacute;gina principal</div></td>
  </tr>
  <tr>
    <td colspan="2"><form action="funcoes/cadastros.php" method="post" name="frm" id="frm" onsubmit="return validaForm();">
      <table width="143%" border="0">
        <tr>
          <td class="conteudoform">T&iacute;tulo da not&iacute;cia</td>
          <td colspan="2"><label>
            <input type="text" name="txtNome" id="txtNome" />
          </label></td>
          </tr>
        <tr>
          <td class="conteudoform">Link da p&aacute;gina</td>
          <td colspan="2"><input type="text" name="txtLink" id="txtLink" /></td>
          </tr>
        <tr>
          <td class="conteudoform">T&iacute;tulo do link</td>
          <td><label for="txtLinkTitulo"></label>
            <input type="text" name="txtLinkTitulo" id="txtLinkTitulo" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="24%" class="conteudoform">imagem</td>
          <td width="19%"><label>
            <input type="text" name="txtImagem" id="txtImagem" />
          </label></td>
          <td width="57%"><a href="javascript:void();" onclick="abreJanela('')" title="Janela responsável pelo up-load das imagens">buscar</a></td>
        </tr>
        <tr>
          <td colspan="3"><table width="100%" border="0">
            <tr>
              <td width="24">&nbsp;</td>
            </tr>
            <tr>
              <td><div align="left" class="conteudoform">Texto da not&iacute;cia</div></td>
            </tr>
            <tr>
              <td>
                <label for="textarea"></label>
                <textarea name="txtNoticia" id="txtNoticia" cols="45" rows="5"></textarea></td>
              </tr>
          </table></td>
          </tr>
        <tr>
          <td colspan="3"><table width="100%" border="0">
            <tr>
              <td width="13%" class="conteudoform">Destaque:</td>
              <td width="87%"><label>
                <select name="txtDestaque" class="feldsForm" id="txtDestaque">
            <option value="0">N&atilde;o Destacar</option>
            <option value="1" selected="selected">Destacar</option>
            <option value="2">Selecionar</option>
            </select>
              </label></td>
            </tr>
          </table></td>
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
            <input name="txtLocal" type="hidden" id="txtLocal" value="formSlideNoticias" />
          </div></td>
          </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>
