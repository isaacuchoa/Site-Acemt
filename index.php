<?php
include_once("classe/mySqlConn.php");
include_once ("classe/verURL.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">

<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="js/thickbox.css">


<link href="js/destaque.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery_002.js"></script>
<script src="js/thickbox.js" type="text/javascript"></script>
<!-- Script e css abaixo sendo usados no Accordion da página agenda  -->
<script src="SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />

<!-- busca de médicos abaixo -->
<script type="text/javascript">
$('document').ready(function(){
        $('#loading').hide();
        $('#buscar').click(function(){
                $('#buscar').val('');
        });
        $('#buscar').keyup(function(){
                $('#loading').ajaxStart(function(){
                        $('#alvo').hide();
                        $('#loading').show();   
                });
                $('#loading').ajaxStop(function(){
                        $('#loading').hide();   
                });
                $.post('busca.php',
                {busca: $('#buscar').val()},
                function(data){
                        if ($('#buscar').val()!=''){
                                $('#alvo').show();
                                $('#alvo').empty().html(data);
                        }
                        else{
                                $('#alvo').empty();
                        }
                }
                );
        });
});
</script>
<!-- Fim da busca de médicos -->

<!-- Estilos adicionais (apenas para o slide de notícias) -->
	<style>
	h1 { font-size: 20px; color: black; }
	p.creditos { font-size: 14px; color: black; font-family: Tahoma, Verdana, sans-serif; }
	</style>
<!-- Fim do estilo slide notícias -->

<title>ACEMT</title>
</head>

<body>
<div id="topo">
	<div id="banner"><a href="index.php"><img src="images/banner1.jpg" /></a></div>
     
   		
	</div>
<div id="estrutura">
	<nav id="nav-topo">
	<div id="menu_topo">
    <ul>
        <li><a href="?secao=contato">Fale Conosco</a></li>
    
    </ul>
    
    </div>  
	</nav> 
	<div id="border">
		<div id="main">
			<div id="left">
				<div id="menu">
					<ul>
						<li><a href="?secao=home">HOME</a></li>
                        <li><a href="?secao=historico">História da ACEMT</a></li>
                        <li><a href="?secao=estatuto">Estatuto</a></li>
                        <li><a href="?secao=diretoria">Diretoria</a></li>
                        <li><a href="?secao=agenda">Agenda</a></li>
                        <li><a href="?secao=associar">Associar-se</a></li>
                        <li><a href="?secao=associados">Associados</a></li>
                        <li><a href="?secao=treinamentos">Palestras das Reuni&otilde;es Cient&iacute;ficas</a></li>
                        <li><a href="?secao=eventos">Palestras de Eventos</a></li>
                        <li><a href="?secao=legislacao">Legisla&ccedil;&atilde;o</a></li>
                        <li><a href="?secao=link">Links</a></li>
                        <li><a href="indexfotos.php?secao=fotos">Fotos</a></li>
                        <li><a href="?secao=biblioteca">Bibliografia</a></li>
                        <li><a href="?secao=artigos">Artigos</a></li>
                        <li><a href="?secao=contato">Fale Conosco</a></li>
						
					</ul>
				</div>
                <div id="redes_sociais">
                	<a href="http://www.facebook.com/profile.php?id=100002642071399" target="_blank"><img src="images/rs_facebook.jpg" /></a>
                	
                </div>
                <div id="contador_vis"><div id="contador" ><a href='#'><img src='http://contador.s12.com.br/img-WD8yBw2c-19.gif' border='0' alt='contador de acesso grátis'></a><script type='text/javascript' src='#'></script></div></div>
                <div id="jornal">
                
                <a href="?secao=jornal"><img src="images/img-jornal.jpg" />  </a>
                
                	
               </div>
                
			
            <!--<div>
                    <object style="width:200px;height:100px" ><param name="movie" value="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf?mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Fcolor%2Flayout.xml&amp;backgroundColor=ffffff&amp;showFlipBtn=true&amp;autoFlip=true&amp;autoFlipTime=6000&amp;pageNumber=2&amp;documentId=110730235445-ba2ca5b7d332485ab92c8d1c39e1086d&amp;docName=ano_xi_13&amp;username=acemt&amp;loadingInfoText=Ano%20XI%20N%C2%BA13&amp;et=1312070947830&amp;er=27" /><param name="allowfullscreen" value="true"/><param name="menu" value="false"/><embed src="http://static.issuu.com/webembed/viewers/style1/v1/IssuuViewer.swf" type="application/x-shockwave-flash" allowfullscreen="true" menu="false" style="width:200px;height:250px" flashvars="mode=embed&amp;layout=http%3A%2F%2Fskin.issuu.com%2Fv%2Fcolor%2Flayout.xml&amp;backgroundColor=ffffff&amp;showFlipBtn=true&amp;autoFlip=true&amp;autoFlipTime=6000&amp;pageNumber=2&amp;documentId=110730235445-ba2ca5b7d332485ab92c8d1c39e1086d&amp;docName=ano_xi_13&amp;username=acemt&amp;loadingInfoText=Ano%20XI%20N%C2%BA13&amp;et=1312070947830&amp;er=27" /></object>
                    </div>-->
                
            
            
			</div>
			<div id="conteudo">
           
           <?php
				$red = new verURL();
				$red->trocarURL($_GET["secao"]);
?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="rodape">
		<div id="copyright">
			<span>Copyright © 2015 - acemt.com.br</span> 
		</div>
		
	</div>	
       
	
</div><!-- end DIV estrutura -->

</body>
</html>