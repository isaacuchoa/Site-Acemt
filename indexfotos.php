
<?php
include_once("classe/mySqlConn.php");
include_once ("classe/verURL.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="jsfotos/thickbox.css">

<script type="text/javascript" src="jsfotos/jquery.js"></script>
<script type="text/javascript" src="jsfotos/thickbox.js"></script>


<title>ACEMT</title>
</head>

<body>
<div id="topo"><div id="banner"><a href="index.php"><img src="images/banner1.jpg" /></a></div>
<div id="estrutura">
	
    	
	<div id="border">
		<div id="main">
			<div id="left">
				<div id="menu">
					<ul>
						<li><a href="index.php?secao=home">HOME</a></li>
                        <li><a href="index.php?secao=historico">História da ACEMT</a></li>
                        <li><a href="index.php?secao=estatuto">Estatuto</a></li>
                        <li><a href="index.php?secao=diretoria">Diretoria</a></li>
                        <li><a href="index.php?secao=agenda">Agenda</a></li>
                        <li><a href="index.php?secao=associados">Associados</a></li>
                        <li><a href="index.php?secao=link">Links</a></li>
                        <li><a href="index.php?secao=fotos">Fotos</a></li>
                        <li><a href="index.php?secao=biblioteca">Bibliografia</a></li>
                        <li><a href="index.php?secao=artigos">Artigos</a></li>
                        <li><a href="index.php?secao=contato">Fale Conosco</a></li>
						
					</ul>
				</div>
                <div id="redes_sociais">
                	<a href="#"><img src="images/rs_facebook.jpg" /></a>
                	                </div>
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
			<span>© Copyright acemt.com.br, 2011.<br /> All rights reserved.</span> 
		</div>
		
	</div>	
	
</div>
</body>
</html>