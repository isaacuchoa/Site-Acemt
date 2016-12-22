<html>
<head>
<title>UpLoad</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="../css/css.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript">
	function validaForm(){
		var arqA = document.formupload.arquivo.value;
		
		if(arqA == ""){
			alert("Para fazer o Upload, é necessário um arquivo");
		}else{
			document.formupload.btenviar.value = "Aguarde enviando...";
			document.formupload.btfechar.disabled = true;
			document.formupload.btenviar.disabled = true;
			document.formupload.submit();
		}
	}
</script>
</head>

<body background="images/fundo.jpg" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="bordageral">
  <tr>
    <td valign="top"> 
      <form action="../funcoes/upload.php" method="post" enctype="multipart/form-data" name="formupload" id="formupload">
        <table width="100%" border="0" cellpadding="0" cellspacing="3" class="corpotabelascentrais">
          <tr> 
            <td width="100%" height="20" colspan="2" align="center" class="titulos">Up-load das imagens presentes no Slide de not&iacute;cias da index</td>
          </tr>
          <tr align="center">
            <td height="10" colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td align="right">Imagem com tamanho (400X215) </td>
            <td align="left"><input name="arquivo" type="file" size="30" class="feldsForm" id="arquivo" onChange="">
                <input name="id" type="hidden" id="id" value="<?php echo $_GET["id"] ?>">
                <input name="tamanho" type="hidden" id="tamanho" value="<?php echo $_GET["tamanho"]; ?>"></td>
          </tr>
          <tr align="center">
            <td height="10" colspan="2">msn</td>
          </tr>
          <tr align="center"> 
            <td colspan="2"> 
              <input name="btenviar" type="button" id="btenviar" value="Enviar Foto" 
              							onClick="validaForm();" class="btForm">
              &nbsp;
              <input name="btfechar" type="button" id="btfechar" value="Fechar" 
              							onClick="javascript:window.close();" class="btForm">
            <input name="local" type="hidden" id="local" value="FrmUpSlide">
            </td>
          </tr>
        </table>
      </form></td>
  </tr>
</table>
</body>
</html>
