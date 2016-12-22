<html>
<head>
<title>UpLoad</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="#" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript">
	function validaForm(){
		var arqA = document.formupload.arquivoA.value;
		var arqB = document.formupload.arquivoB.value;
		
		if(arqA == "" || arqB == ""){
			alert("Para fazer o Upload, é necessário todos os arquivos");
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
            <td height="20" colspan="2" align="center" class="titulos">Up-load das imagens no Slide Show na P&aacute;gina Principal</td>
          </tr>
          <tr> 
            <td width="29%" align="right">imagem pequena 40X40: </td>
            <td width="71%" align="left"> 
            <input name="arquivoA" type="file" size="30" class="feldsForm" id="arquivoA">
              <input name="id" type="hidden" id="id" value="<?php echo $_GET["id"] ?>"> 
            <input name="tamanho" type="hidden" id="tamanho" value="<?php echo $_GET["tamanho"] ?>"></td>
          </tr>
          <tr align="center"> 
            <td height="23" align="right">PopUp - imagem grande 300X300:</td>
            <td height="23" align="left">
            <input name="arquivoB" type="file" size="30" class="feldsForm" id="arquivoB"></td>
          </tr>
          <tr align="center">
            <td colspan="2"><?php echo $_GET["msn"] ?></td>
          </tr>
          <tr align="center"> 
            <td colspan="2"> 
              <input name="btenviar" type="button" id="btenviar" value="Enviar Foto" class="btForm" onClick="validaForm();">
              &nbsp;
              <input name="btfechar" type="button" id="btfechar" value="Fechar" class="btForm" onClick="javascript:window.close();">
            <input name="local" type="hidden" id="local" value="<?php echo $_GET["local"] ?>"></td>
          </tr>
        </table>
      </form></td>
  </tr>
</table>
</body>
</html>
