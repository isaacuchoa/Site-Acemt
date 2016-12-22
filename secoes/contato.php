<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div id="texto-contato">
   <h2 class="fundo-topico">Contato</h2>

        <p>Envie a sua mensagem através do formulário abaixo.</p>
        </div>
        <div id="fale-conteudo">
        
        <p>
        <form action="classe/EnviaMail.php" method="post" name="formContato" id="form" onsubmit="return validaForm();">
    <fieldset>
        	<label for="txtNome">Nome:</label>
            <div class="campoform">
            <input type="Nome" id="txtNome" name="txtNome" tabindex="1" accesskey="n" />
           
            </div>
                            
            <label for="telefone">Telefone:</label>
            <div class="campoform">
            <input type="telefone" id="txtFone" name="txtFone" tabindex="4" accesskey="t" />
            </div>
            
            <label for="txtEmail">Email:</label>
            <div class="campoform">
            <input type="Email" id="txtEmail" name="txtEmail" tabindex="5" accesskey="e" />
            </div>            
                     
<label for="txtAssunto">Assunto:</label>
            <div class="campoform">
              <input type="text" id="txtAssunto" name="txtAssunto" tabindex="6" accesskey="a" />
            </div>
            
<label for="txtMensagem">Mensagem:</label>
            <div class="campoform">
            <textarea name="txtMensagem" rows="5" id="txtMensagem" tabindex="7" accesskey="m"></textarea>
            </div>
            <input type="image" src="images/bt_enviarform.gif" name="Enviar" id="Enviar" tabindex="5" />
            
        </fieldset>
        
        </form>
        <p><span> <?php echo base64_decode($_GET["msn"]); ?>  </span></p>
        
        </p>
        </div>
</body>
</html>