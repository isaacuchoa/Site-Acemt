<?php 
	include_once("classe/BuscaAlteracao.php");
	$listagem = new BuscaAlteracaoFotos();
	$listagem->setId($_GET["id"]);
	$listagem->geraDados();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">
	function abreJanela(id){
		var url = "telas/FrmUpLoadFotos.php?local=FrmUpFotos&id="+id;
		openWindow(url, 'popup','width=550, height=150');
	}
	function validaForm(){
	
		var nome = document.getElementById("txtNome");
		var descricao = document.getElementById("txtDescricao");
		var imagem = document.getElementById("txtImagem");
		var destaque = document.getElementById("txtDestaque");
		
		if(nome.value == "" || descricao.value == "0" || imagem.value == "" || destaque.value == "0"){
			alert("Atenção Nome, Descrição, Imagem e Destaque devem ser preenchidos");
			return false;
		}else{
			return true;
		}
	}
</script>
</head>

<body>
<table width="60%" border="0" align="center">
  <tr>
    <td height="30" colspan="2"><div align="center">Altera&ccedil;&atilde;o das Fotos ACEMT</div></td>
  </tr>
  <tr>
    <td colspan="2"><form id="frm" name="frm" method="post" action="funcoes/alteracao.php">
      <table width="115%" border="0">
        <tr>
          <td><div align="center">Nome</div></td>
          <td colspan="2"><input name="txtnome" type="text" id="txtnome" value="<?php echo $listagem->getTitulo(); ?>" /></td>
        </tr>
        <tr>
          <td><div align="center">Texto na imagem grande</div></td>
          <td colspan="2"><input name="txtfotogrande" type="text" id="txtfotogrande" value="<?php echo $listagem->getLocal(); ?>" /></td>
        </tr>
        <tr>
          <td width="32%"><div align="center">Imagem</div></td>
          <td width="22%"><input name="txtImagem" type="text" id="txtImagem" value="<?php echo $listagem->getImagem(); ?>" /></td>
          <td width="46%"><a href="javascript:void();" onclick="javascript:abreJanela('<?php echo $_GET["id"] ?>')" title="Janela responsável pelo up-load das imagens">buscar</a></td>
        </tr>
        <tr>
          <td colspan="3"><table width="100%" border="0">
          
           
            
          </table>
            <label></label></td>
          </tr>
        <tr>
          <td><div align="center">Destaque</div></td>
          <td colspan="2">
          	<label>
                <select name="txtDestaque" class="feldsForm" id="txtDestaque">
            <option value="0">N&atilde;o Destacar</option>
            <option value="1" selected="selected">Destacar</option>
            <option value="2">Selecionar</option>
                </select>
              </label>          </td>
        </tr>
        <tr>
          <td colspan="3"><div align="center">
            <label></label>
            <label></label>
            <input type="submit" name="button" id="button" value="Alterar" />
            <input name="idImg" type="hidden" id="idImg" value="<?php echo $_GET["id"]; ?>" />
            <input name="local" type="hidden" id="local" value="formAltFotos" />
          </div></td>
          </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>
