<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Administrador do Sistema</title>
<link href="css/css.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
a {
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
	color: #999900;
}
a:active {
	text-decoration: none;
}
.style4 {font-size: 12px}
-->
</style>
</head>

<body>
<br />
<br />
<br />
<br />

<table width="500" border="0" align="center" cellpadding="0" cellspacing="0" class="bgGround">
  <tr>
    <td valign="top"><form id="frmLogin" name="frmLogin" method="post" action="classe/LoginSistema.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="30" colspan="2" align="center" class="titulos"><img src="images/logo_acemt.jpg" /></td>
        </tr>
        <tr>
          <td height="30" colspan="2" valign="middle"><div align="center" class="style1">&Aacute;rea administrativa <img src="images/cadeado.png" /></div></td>
        </tr>
        <tr>
          <td width="17%" height="30">&nbsp;&nbsp;Usu&aacute;rio</td>
          <td width="83%" height="30"><input name="txtUsuario" type="text" id="txtUsuario" size="50" maxlength="100" /></td>
        </tr>
        <tr>
          <td height="30">&nbsp;&nbsp;Senha</td>
          <td height="30"><input name="txtSenha" type="password" id="txtSenha" size="25" maxlength="15" /></td>
        </tr>
        <tr>
          <td height="30" colspan="2" align="center"><?php echo base64_decode($_GET["msn"]); ?></td>
        </tr>
        <tr>
          <td height="30" colspan="2" align="center"><a href="http://www.acemt.com.br" target="_blank" class="style4">voltar para o site</a></td>
        </tr>
        <tr>
          <td height="30" colspan="2" align="center"><input type="submit" name="btLogin" id="btLogin" value="Efetuar" />
            <input name="txtLocal" type="hidden" id="txtLocal" value="frmLogin" /></td>
        </tr>
        <tr>
          <td height="30" colspan="2" align="center"><span class="style3">www.acemt.com.br</span></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
</body>
</html>
