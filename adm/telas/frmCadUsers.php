<script language="javascript" type="text/javascript">
	function validaForm(){
			var nome = document.getElementById("txtNome");
			var email = document.getElementById("txtEmail");
			var senha = document.getElementById("txtSenha");
			
			if(nome.value == "" || email.value == "" || senha.value == ""){
				alert("Atenção todos os dados devem ser preenchidos");
				return false;
			}else{
				return true;
			}
	}
</script>
<style type="text/css">
<!--
.style5 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
-->
</style>

<br>
<br>
<table width="40%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><form action="funcoes/cadastros.php" method="post" name="formCadUsers" id="formCadUsers" onsubmit="return validaForm();">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" class="bgGround">
        <tr>
          <td height="25" colspan="2" align="center" class="titulos">Cadastro de Usu&aacute;rios</td>
        </tr>
        <tr>
          <td width="14%" height="25"><span class="style5">Nome</span></td>
          <td width="86%" height="25"><input name="txtNome" type="text" class="feldsForm" id="txtNome" size="35" maxlength="40"></td>
        </tr>
        <tr>
          <td height="25"><span class="style5">E-mail</span></td>
          <td height="25"><input name="txtEmail" type="text" class="feldsForm" id="txtEmail" size="30" maxlength="85"></td>
        </tr>
        <tr>
          <td height="25"><span class="style5">Senha</span></td>
          <td height="25"><input name="txtSenha" type="password" class="feldsForm" id="txtSenha" size="20" maxlength="15"></td>
        </tr>
        <tr>
          <td height="25" colspan="2" align="center"><?php echo base64_decode($_GET["msn"]); ?></td>
          </tr>
        <tr>
          <td height="25" colspan="2" align="center"><input name="btCadastrar" type="submit" class="btForm" id="btCadastrar" value="Cadastrar">
            <input name="txtLocal" type="hidden" id="txtLocal" value="formCadUsers" /></td>
        </tr>
      </table>
        </form>
    </td>
  </tr>
</table>
