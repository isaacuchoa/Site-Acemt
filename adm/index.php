<?php 
	session_start();
	if(!isset($_SESSION["LOGADO"])){
		@header("Location: login.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>&Aacute;rea administrativa - ACEMT</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<link href="css/mainMenu.css" rel="stylesheet" type="text/css" />


<link href="menu/style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="tinymce/botoes.js"></script>

<?php include"include/metatags.php"; ?>

<script type="text/javascript" src="js/jquery-1.2.6.js"></script>
<script language="javascript" type="text/javascript" src="../js/functions.js"></script>
<script type="text/javascript">
//<![CDATA[
	$(document).ready(function(){
		$('#menu').css('height', 'auto');
		$('#menu ul').hide();
		$('#menu h3').click(function(){
			$(this).next().slideToggle(1500)
			.siblings('ul:visible').slideUp(1500);
			$(this).toggleClass('corrente');
			$(this).siblings('#menu h3').removeClass('corrente');
		});
	});
	// ]]>	
</script>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
-->
</style>
</head>

<body>
<div id="estrutura">

	<div id="topo"> <a href="http://www.acemt.com.br/adm" target="_self"><img src="images/banner.jpg" width="760" height="198" border="0" /></a>
    </div>
    <div class="style1"><a href="classe/LoginSistema.php?txtLocal=logOff">Sair do sistema</a></div>
<div id="col_esquerda">
    	<div id="menu">
            <h5>:: Cadastros</h5>
            
             <h3>Usuários</h3>
            
            <ul>
            <li><a href="?telas=frmCadUsers" title="Cadastro Users">users</a></li>
            
      
           
            </ul>
            
            <h3>Início</h3>
            
            <ul>
            <li><a href="?telas=frmCadSlideNoticias" title="Cadastro da Palavra do consultor">not&iacute;cias-slide</a></li>
            <li><a href="?telas=frmCadArtigos" title="Cadastro do currículo e qualificações">artigos</a></li>
            <li><a href="?telas=frmCadAgenda" title="Cadastro dos serviços">agenda</a></li>
      
           
            </ul>
            
            <h3>Associados</h3>
            
            <ul>
            <li><a href="?telas=frmCadAssociados" title="Cadastro dos cursos ministrados">associados</a></li>
            
            
           
            </ul>
            
             <h3>Bibliografia</h3>
            
            <ul>
            <li><a href="?telas=frmCadBibliografia" title="Cadastro da Bibliografia ACEMT">bibliografia</a></li>
            
                          
           
            </ul>
            
            <h3>Diretoria</h3>
            
            <ul>
            <li><a href="?telas=frmCadDiretoria" title="Cadastro dos eventos ministrados">diretoria</a></li>
            
                          
           
            </ul>
            
                       
             <h3>Fotos</h3>
            
            <ul>
            <li><a href="?telas=frmCadFoto" title="Cadastro das Fotos">fotos</a></li>
            
                          
           
            </ul>
            
                       
            <h3>Hist&oacute;ria</h3>
            
            <ul>
            <li><a href="?telas=frmCadHistoria" title="Cadastro da Cultura Organizacional">hist&oacute;ria</a></li>
           
            </ul>
            
           
            
            <h5>:: Manutenção</h5>
            <h4><a href="?telas=instrucao" title="Início">Instruções</a></h4>
            
            <h3>Início</h3>
            <ul>
            <li><a href="?telas=frmManuSlideNoticias" title="Alteração das notícias slide">not&iacute;cias-slide</a></li>
            <li><a href="?telas=frmManuArtigos" title="Alteração dos artigos">artigos</a></li>
            <li><a href="?telas=frmManuAgenda" title="Alteração da agenda">agenda</a></li>
            </ul>
            
            <h3>História</h3>
            <ul>
             <li><a href="?telas=frmManuHistoria" title="Manutenção dos cursos">História ACEMT</a></li>
             
            	
            </ul>
            
            <h3>Associados</h3>
            <ul>
               <li><a href="?telas=frmManuAssociados" title="Manutenção dos associados">busca</a></li>
            	
            </ul>
            
            <h3>Fotos</h3>
            <ul>
               <li><a href="?telas=frmManuFotos" title="Manutenção dos Fotos">fotos</a></li>
            	
            </ul>
            
            <h3>Bibliografia</h3>
            <ul>
               <li><a href="?telas=frmManuBibliografia" title="Manutenção da Bibliografia">bibliografia</a></li>
            	
            </ul>
            
                    
            
            
         </div>
    </div>
    
    
    <div id="meio-site">
    
    			<?php
					include_once("classe/verURL.php");
					$url = new verURL();
					$url->trocarURL($_GET["telas"])
          		?>
    
    </div>
    
    <div id="rodape">
    <img src="../images/rodape.jpg" />
    </div>

<!-- fim da estrutura -->
</div>
</body>
</html>
