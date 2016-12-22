<script>
<!--
function send(img){
  window.opener.document.frm.txtImagem.value=img;
  self.close();
-->  
}
</script>
<?php 

include_once("../classe/ManipulateData.php");

function geraGaleraIndex($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensgalera");
		 $criaNome->setFieldId("idGalera");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}



// Fotos do Slide show na Index 

if($_POST["local"] == "FrmUpSlideee"){
	
	$caminhoA = "../imgslidep/".geraSlideee($_POST["id"]);
	$caminhoB = "../imgslideg/".geraSlideee($_POST["id"]);
	
	$tipoArquivoA = $_FILES ['arquivoA']['type'];
	$tipoArquivoB = $_FILES ['arquivoB']['type'];
	
	if($tipoArquivoA != "image/jpeg" &&	$tipoArquivoB != "image/jpeg" && $tipoArquivoB != "image/pjpeg" && $tipoArquivoB != "image/pjpeg"){
		$erro ="Atencao: Arquivos Permitidos sao Apenas: <b>JPG</b><br> Este Arquivo eh: ".$tipoArquivoA;
		@header("Location: ../telas/FrmUpLoadSlideNoticias.php?msn=$erro");
	}else{
		if($decoracoes = move_uploaded_file($_FILES['arquivoA']['tmp_name'], $caminhoA)){
				// define o tamanho do arquivo em modo de upload
				list($largura,$altura,$tipo) = getimagesize($caminhoA);
				$imagem = imagecreatefromjpeg($caminhoA);
				$imgPequena = imagecreatetruecolor(40, 40);
				imagecopyresampled($imgPequena, $imagem, 0, 0, 0, 0, 40, 40, $largura, $altura);
				imagejpeg($imgPequena,$caminhoA);
				// fim da definição do tamanho do arquivo
				if($popup = move_uploaded_file($_FILES['arquivoB']['tmp_name'], $caminhoB)){		
					$erro = "enviados com sucesso!!";
				}else{
					$erro = "Ouve um erro ao enviar arquivos<br>Entre em contato com o programador!";
					@header("Location: ../telas/FrmUpLoadSlideNoticias.php?msn=$erro");
				}
		}
	}
		  $new_name = geraSlideee($_POST["id"]);
		  echo " 
		    <script>
             send('$new_name');
            </script>";
		}





//funcão que gera as fotos do bairro presente na Index
function geraBairroIndex($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensbairro");
		 $criaNome->setFieldId("idProd");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}

//funcão que gera as fotos do bairro presente na página fotosjoao.php
function geraBairroPag($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensbairropag");
		 $criaNome->setFieldId("idimg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}

//funcão que gera as fotos do bairro presente na página fotosgalera.php
function geraGaleraPag($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensgalerapagin");
		 $criaNome->setFieldId("idImgGaPag");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}

//funcão que gera as fotos católicas presente na página fotoscatolica.php
function geraCatolicoPag($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagenscatolica");
		 $criaNome->setFieldId("idCatol");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}

//funcão que gera as fotos evangélicas presente na página fotosevangelica.php
function geraEvangelPag($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensevangelica");
		 $criaNome->setFieldId("idEvang");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}


//funcão que gera o proximo nome para o arquivo de produtos
function geraNomeBanner($id, $tipo){
	
	if($tipo == "application/x-shockwave-flash"){
		$ext = "swf";
	}
	if($tipo == "image/gif"){
		$ext = "gif";
	}
	if($tipo == "image/jpeg"){
		$ext = "jpg";
	}	
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbbanners");
		 $criaNome->setFieldId("idBanner");
		 $id = $criaNome->getLastId() + 1;
         return "$id.".$ext;        
     }else{
		 return "$id.".$ext;
     }
}



//funcão que gera o menu principal
function geraNomeMainMenu($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbmainmenu");
		 $criaNome->setFieldId("idMainMenu");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}


//funcão que gera a imagem presente no conteúdo dos eventos
function geraImgEventos($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagenseventos");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}

//funcão que gera as logomarcas das empresas na publicidade
function geraImgLogoPubli($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbempresaspublicidade");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}

//funcão que gera a imagem presente no conteúdo da Diversão
function geraImgDiversao($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensdivertido");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}


//funcão que gera a imagem presente no conteúdo das Notícias
function geraImgNotic($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensnoticias");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}

//funcão que gera a imagem qualquer presente em qualquer parte do site
function geraImgQualqueruma($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensqualquer");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}


//funcão que gera a imagem presente no conteúdo das Dicas
function geraImgDics($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensdicas");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}


//funcão que gera a imagem presente no conteúdo dos imóveis nos classificados
function geraImgClassifImovel($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensclassificimovel");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}

//funcão que gera a imagem presente no conteúdo dos transportes nos classificados
function geraImgClassifTransporte($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensclassifictransporte");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}


//funcão que gera a imagem presente no conteúdo dos diversos nos classificados
function geraImgClassifDiversos($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensclassificdiversos");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}


//funcão que gera a imagem presente na busca em ajax dos serviços na index
function geraImgBusca($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensbuscalogo");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}


//funcão que gera a imagem presente nos anúncios
function geraImgAnuncios($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensanuncio");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}

//funcão que gera a imagem do banner no topo
function geraBannerTopo($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbbannerstopo");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}

//funcão que gera a imagem do banner no menu
function geraBannerMenu($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbbannersmenu");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}

//funcão que gera a imagem presente no destaque
function geraImgDestaq($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbdestaque");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}


//funcão que gera a a imagem do Slide de notícias na index
function geraSlide($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbslidenoticias");
		 $criaNome->setFieldId("idSlide");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}

//funcão que gera a imagem dos moradores que se foram
function geraImgMoradoresSaudades($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagenssaudades");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}


//funcão que gera a imagem dos desaparecidos
function geraImgDesaparecidos($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagensdesaparecidos");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}


//funcão que gera as fotos do Litoral na página fotoslitoral.php
function geraLitoral($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagenslitoral");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}


//funcão que gera as fotos do Lugares na página fotoslugares.php
function geraLugares($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbimagenslugares");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}




// Imagem presente no busca em ajax dos serviços
if($_POST["local"] == "FrmUpFotosBuscaindex"){
	
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];	
	$caminho = "../../fotosbuscaempresa/".$_POST["tamanho"]."/".geraImgBusca($_POST["id"],$tipoArquivo);
	
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
		
	
	$new_name = geraImgBusca($_POST["id"], $tipoArquivo);
	echo " 
	    <script>
             send('$new_name');
         </script>";
}



// Imagem presente no conteúdo dos anúncios
if($_POST["local"] == "FrmUpFotosAnuncios"){
	
	$caminho = "../../fotosanuncios/".geraImgAnuncios($_POST["id"]);
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];
	
	if($tipoArquivo != "image/jpeg" && $tipoArquivo != "image/gif" && $tipoArquivo != "image/png"){
		$erro ="Atenção: Arquivos Permitidos são Apenas: <b>JPG | GIF | PNG</b><br> Este Arquivo é: ".$tipoArquivo;
	}else{
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
	}
	$new_name = geraImgAnuncios($_POST["id"]);
	echo " 
	    <script>
             send('$new_name');
         </script>";
}

// Imagem presente nos banners presentes no topo do site
if($_POST["local"] == "FrmUpBannersTopo"){
	
	$caminho = "../../bannertopo/".geraBannerTopo($_POST["id"]);
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];
	
	if($tipoArquivo != "image/jpeg" && $tipoArquivo != "image/gif" && $tipoArquivo != "image/png"){
		$erro ="Atenção: Arquivos Permitidos são Apenas: <b>JPG | GIF | PNG</b><br> Este Arquivo é: ".$tipoArquivo;
	}else{
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
	}
	$new_name = geraBannerTopo($_POST["id"]);
	echo " 
	    <script>
             send('$new_name');
         </script>";
}

// Imagem presente nos banners presentes no menu do site em cima da enquete
if($_POST["local"] == "FrmUpBannersMenu"){
	
	$caminho = "../../bannermenu/".geraBannerMenu($_POST["id"]);
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];
	
	if($tipoArquivo != "image/jpeg" && $tipoArquivo != "image/gif" && $tipoArquivo != "image/png"){
		$erro ="Atenção: Arquivos Permitidos são Apenas: <b>JPG | GIF | PNG</b><br> Este Arquivo é: ".$tipoArquivo;
	}else{
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
	}
	$new_name = geraBannerMenu($_POST["id"]);
	echo " 
	    <script>
             send('$new_name');
         </script>";
}


// Imagem presente no destaque na lateral direita do site em cima das empresas
if($_POST["local"] == "FrmUpFotosDestaq"){
	
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];	
	$caminho = "../../fotosdestaq/".$_POST["tamanho"]."/".geraImgDestaq($_POST["id"],$tipoArquivo);
	
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
		
	
	$new_name = geraImgDestaq($_POST["id"], $tipoArquivo);
	echo " 
	    <script>
             send('$new_name');
         </script>";
}



// Cadastra as logo das empresas presente na publicidade do lado direito

if($_POST["local"] == "FrmUpLogoEmprPubli"){
	
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];	
	$caminho = "../../fotoslogoempresas/".$_POST["tamanho"]."/".geraImgLogoPubli($_POST["id"],$tipoArquivo);
	
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
		
	
	$new_name = geraImgLogoPubli($_POST["id"], $tipoArquivo);
	echo " 
	    <script>
             send('$new_name');
         </script>";
} 


// Imagem presente no conteúdo dos eventos
if($_POST["local"] == "FrmUpFotosEventos"){
	
	$caminho = "../../fotoseventos/".geraImgEventos($_POST["id"]);
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];
	
	if($tipoArquivo != "image/jpeg" && $tipoArquivo != "image/gif" && $tipoArquivo != "image/png"){
		$erro ="Atenção: Arquivos Permitidos são Apenas: <b>JPG | GIF | PNG</b><br> Este Arquivo é: ".$tipoArquivo;
	}else{
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
	}
	$new_name = geraImgEventos($_POST["id"]);
	echo " 
	    <script>
             send('$new_name');
         </script>";
}





// Imagem presente no conteúdo das notícias

if($_POST["local"] == "FrmUpFotosNotic"){
	
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];	
	$caminho = "../../fotosnoticias/".$_POST["tamanho"]."/".geraImgNotic($_POST["id"],$tipoArquivo);
	
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
		
	
	$new_name = geraImgNotic($_POST["id"], $tipoArquivo);
	echo " 
	    <script>
             send('$new_name');
         </script>";
}


// Cadastra as imagens qualquer no site

if($_POST["local"] == "FrmUpFotosQualqueruma"){
	
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];	
	$caminho = "../../fotosqualquer/".$_POST["tamanho"]."/".geraImgQualqueruma($_POST["id"],$tipoArquivo);
	
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
		
	
	$new_name = geraImgQualqueruma($_POST["id"], $tipoArquivo);
	echo " 
	    <script>
             send('$new_name');
         </script>";
} 


// Cadastra as imagens presente nos textos dos eventos

if($_POST["local"] == "FrmUpSlide"){
	
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];	
	$caminho = "../imgslideg/".$_POST["tamanho"]."/".geraSlide($_POST["id"],$tipoArquivo);
	
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
		
	
	$new_name = geraSlide($_POST["id"], $tipoArquivo);
	echo " 
	    <script>
             send('$new_name');
         </script>";
} 



// Imagem presente no conteúdo dos textos da diversão
if($_POST["local"] == "FrmUpFotosDiverti"){
	
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];	
	$caminho = "../../fotosdivertido/".$_POST["tamanho"]."/".geraImgDiversao($_POST["id"],$tipoArquivo);
	
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
		
	
	$new_name = geraImgDiversao($_POST["id"], $tipoArquivo);
	echo " 
	    <script>
             send('$new_name');
         </script>";
}



// Imagem presente no conteúdo das Dicas
if($_POST["local"] == "FrmUpFotosDicas"){
	
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];	
	$caminho = "../../fotosdicas/".$_POST["tamanho"]."/".geraImgDics($_POST["id"],$tipoArquivo);
	
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
		
	
	$new_name = geraImgDics($_POST["id"], $tipoArquivo);
	echo " 
	    <script>
             send('$new_name');
         </script>";
}


// Imagem presente nos Imóveis dos classificados
if($_POST["local"] == "FrmUpFotosClassifImoveis"){
	
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];	
	$caminho = "../../fotosclassificadimovel/".$_POST["tamanho"]."/".geraImgClassifImovel($_POST["id"],$tipoArquivo);
	
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
		
	
	$new_name = geraImgClassifImovel($_POST["id"], $tipoArquivo);
	echo " 
	    <script>
             send('$new_name');
         </script>";
}


// Imagem presente nos Transportes dos classificados
if($_POST["local"] == "FrmUpFotosClassifTransporte"){
	
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];	
	$caminho = "../../fotosclassificadtransporte/".$_POST["tamanho"]."/".geraImgClassifTransporte($_POST["id"],$tipoArquivo);
	
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
		
	
	$new_name = geraImgClassifTransporte($_POST["id"], $tipoArquivo);
	echo " 
	    <script>
             send('$new_name');
         </script>";
}


// Imagem presente nos Diversos dos classificados
if($_POST["local"] == "FrmUpFotosClassifDiversos"){
	
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];	
	$caminho = "../../fotosclassificadiversos/".$_POST["tamanho"]."/".geraImgClassifDiversos($_POST["id"],$tipoArquivo);
	
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
		
	
	$new_name = geraImgClassifDiversos($_POST["id"], $tipoArquivo);
	echo " 
	    <script>
             send('$new_name');
         </script>";
}


// Imagem presente no menu principal
if($_POST["local"] == "FrmUpMainMenu"){
	
	$caminho = "../../img_menu/".geraNomeMainMenu($_POST["id"]);
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];
	
	if($tipoArquivo != "image/jpeg" && $tipoArquivo != "image/gif" && $tipoArquivo != "image/png"){
		$erro ="Atenção: Arquivos Permitidos são Apenas: <b>JPG | GIF | PNG</b><br> Este Arquivo é: ".$tipoArquivo;
	}else{
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
	}
	$new_name = geraNomeMainMenu($_POST["id"]);
	echo " 
	    <script>
             send('$new_name');
         </script>";
}

// se for arquivo banner, executa este if
if($_POST["local"] == "FrmUpBanners"){
	
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];	
	$caminho = "../../bannersanunc/".$_POST["tamanho"]."/".geraNomeBanner($_POST["id"],$tipoArquivo);

	if($tipoArquivo != "image/jpeg" && $tipoArquivo != "image/gif" && $tipoArquivo != "application/x-shockwave-flash"){
		$erro ="Atenção: Arquivos Permitidos são Apenas: <b>JPG | GIF | FLASH</b><br> Este Arquivo é: ".$tipoArquivo;
	}else{
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
	}
	$new_name = geraNomeBanner($_POST["id"], $tipoArquivo);
	echo " 
	    <script>
             send('$new_name');
         </script>";
} 

// Fotos do Litoral Cearence 

if($_POST["local"] == "FrmUpLitoral"){
	
	$caminhoA = "../../fotoslitoralp/".geraLitoral($_POST["id"]);
	$caminhoB = "../../fotoslitoralg/".geraLitoral($_POST["id"]);
	
	$tipoArquivoA = $_FILES ['arquivoA']['type'];
	$tipoArquivoB = $_FILES ['arquivoB']['type'];
	
	if($tipoArquivoA != "image/jpeg" &&	$tipoArquivoB != "image/jpeg" && $tipoArquivoB != "image/pjpeg" && $tipoArquivoB != "image/pjpeg"){
		$erro ="Atencao: Arquivos Permitidos sao Apenas: <b>JPG</b><br> Este Arquivo eh: ".$tipoArquivoA;
		@header("Location: ../telas/FrmUpLoad.php?msn=$erro");
	}else{
		if($decoracoes = move_uploaded_file($_FILES['arquivoA']['tmp_name'], $caminhoA)){
				// define o tamanho do arquivo em modo de upload
				list($largura,$altura,$tipo) = getimagesize($caminhoA);
				$imagem = imagecreatefromjpeg($caminhoA);
				$imgPequena = imagecreatetruecolor(40, 40);
				imagecopyresampled($imgPequena, $imagem, 0, 0, 0, 0, 40, 40, $largura, $altura);
				imagejpeg($imgPequena,$caminhoA);
				// fim da definição do tamanho do arquivo
				if($popup = move_uploaded_file($_FILES['arquivoB']['tmp_name'], $caminhoB)){		
					$erro = "enviados com sucesso!!";
				}else{
					$erro = "Ouve um erro ao enviar arquivos<br>Entre em contato com o programador!";
					@header("Location: ../telas/FrmUpLoad.php?msn=$erro");
				}
		}
	}
		  $new_name = geraLitoral($_POST["id"]);
		  echo " 
		    <script>
             send('$new_name');
            </script>";
		}
		
		
// Fotos dos Lugares do Brasil

if($_POST["local"] == "FrmUpLugares"){
	
	$caminhoA = "../../fotoslugaresp/".geraLugares($_POST["id"]);
	$caminhoB = "../../fotoslugaresg/".geraLugares($_POST["id"]);
	
	$tipoArquivoA = $_FILES ['arquivoA']['type'];
	$tipoArquivoB = $_FILES ['arquivoB']['type'];
	
	if($tipoArquivoA != "image/jpeg" &&	$tipoArquivoB != "image/jpeg" && $tipoArquivoB != "image/pjpeg" && $tipoArquivoB != "image/pjpeg"){
		$erro ="Atencao: Arquivos Permitidos sao Apenas: <b>JPG</b><br> Este Arquivo eh: ".$tipoArquivoA;
		@header("Location: ../telas/FrmUpLoad.php?msn=$erro");
	}else{
		if($decoracoes = move_uploaded_file($_FILES['arquivoA']['tmp_name'], $caminhoA)){
				// define o tamanho do arquivo em modo de upload
				list($largura,$altura,$tipo) = getimagesize($caminhoA);
				$imagem = imagecreatefromjpeg($caminhoA);
				$imgPequena = imagecreatetruecolor(40, 40);
				imagecopyresampled($imgPequena, $imagem, 0, 0, 0, 0, 40, 40, $largura, $altura);
				imagejpeg($imgPequena,$caminhoA);
				// fim da definição do tamanho do arquivo
				if($popup = move_uploaded_file($_FILES['arquivoB']['tmp_name'], $caminhoB)){		
					$erro = "enviados com sucesso!!";
				}else{
					$erro = "Ouve um erro ao enviar arquivos<br>Entre em contato com o programador!";
					@header("Location: ../telas/FrmUpLoad.php?msn=$erro");
				}
		}
	}
		  $new_name = geraLugares($_POST["id"]);
		  echo " 
		    <script>
             send('$new_name');
            </script>";
		}



		
		
// Fotos dos moradores que se foram 

if($_POST["local"] == "FrmUpMoradoresSaudades"){
	
	$caminhoA = "../../fotossaudadesp/".geraImgMoradoresSaudades($_POST["id"]);
	$caminhoB = "../../fotossaudadesg/".geraImgMoradoresSaudades($_POST["id"]);
	
	$tipoArquivoA = $_FILES ['arquivoA']['type'];
	$tipoArquivoB = $_FILES ['arquivoB']['type'];
	
	if($tipoArquivoA != "image/jpeg" &&	$tipoArquivoB != "image/jpeg" && $tipoArquivoB != "image/pjpeg" && $tipoArquivoB != "image/pjpeg"){
		$erro ="Atencao: Arquivos Permitidos sao Apenas: <b>JPG</b><br> Este Arquivo eh: ".$tipoArquivoA;
		@header("Location: ../telas/FrmUpLoadFotoSaudades.php?msn=$erro");
	}else{
		if($decoracoes = move_uploaded_file($_FILES['arquivoA']['tmp_name'], $caminhoA)){
				// define o tamanho do arquivo em modo de upload
				list($largura,$altura,$tipo) = getimagesize($caminhoA);
				$imagem = imagecreatefromjpeg($caminhoA);
				$imgPequena = imagecreatetruecolor(40, 40);
				imagecopyresampled($imgPequena, $imagem, 0, 0, 0, 0, 40, 40, $largura, $altura);
				imagejpeg($imgPequena,$caminhoA);
				// fim da definição do tamanho do arquivo
				if($popup = move_uploaded_file($_FILES['arquivoB']['tmp_name'], $caminhoB)){		
					$erro = "enviados com sucesso!!";
				}else{
					$erro = "Ouve um erro ao enviar arquivos<br>Entre em contato com o programador!";
					@header("Location: ../telas/FrmUpLoadFotoSaudades.php?msn=$erro");
				}
		}
	}
		  $new_name = geraImgMoradoresSaudades($_POST["id"]);
		  echo " 
		    <script>
             send('$new_name');
            </script>";
		}

		
// Fotos dos desaparecidos do bairro 

if($_POST["local"] == "FrmUpDesaparecidos"){
	
	$caminhoA = "../../fotosdesapap/".geraImgDesaparecidos($_POST["id"]);
	$caminhoB = "../../fotosdesapag/".geraImgDesaparecidos($_POST["id"]);
	
	$tipoArquivoA = $_FILES ['arquivoA']['type'];
	$tipoArquivoB = $_FILES ['arquivoB']['type'];
	
	if($tipoArquivoA != "image/jpeg" &&	$tipoArquivoB != "image/jpeg" && $tipoArquivoB != "image/pjpeg" && $tipoArquivoB != "image/pjpeg"){
		$erro ="Atencao: Arquivos Permitidos sao Apenas: <b>JPG</b><br> Este Arquivo eh: ".$tipoArquivoA;
		@header("Location: ../telas/FrmUpLoad.php?msn=$erro");
	}else{
		if($decoracoes = move_uploaded_file($_FILES['arquivoA']['tmp_name'], $caminhoA)){
				// define o tamanho do arquivo em modo de upload
				list($largura,$altura,$tipo) = getimagesize($caminhoA);
				$imagem = imagecreatefromjpeg($caminhoA);
				$imgPequena = imagecreatetruecolor(40, 40);
				imagecopyresampled($imgPequena, $imagem, 0, 0, 0, 0, 40, 40, $largura, $altura);
				imagejpeg($imgPequena,$caminhoA);
				// fim da definição do tamanho do arquivo
				if($popup = move_uploaded_file($_FILES['arquivoB']['tmp_name'], $caminhoB)){		
					$erro = "enviados com sucesso!!";
				}else{
					$erro = "Ouve um erro ao enviar arquivos<br>Entre em contato com o programador!";
					@header("Location: ../telas/FrmUpLoad.php?msn=$erro");
				}
		}
	}
		  $new_name = geraImgDesaparecidos($_POST["id"]);
		  echo " 
		    <script>
             send('$new_name');
            </script>";
		}		



// Fotos do bairro em destaque na index 

if($_POST["local"] == "FrmUpProdutos"){
	
	$caminhoA = "../../fotosbairrop/".geraBairroIndex($_POST["id"]);
	$caminhoB = "../../fotosbairrog/".geraBairroIndex($_POST["id"]);
	
	$tipoArquivoA = $_FILES ['arquivoA']['type'];
	$tipoArquivoB = $_FILES ['arquivoB']['type'];
	
	if($tipoArquivoA != "image/jpeg" &&	$tipoArquivoB != "image/jpeg" && $tipoArquivoB != "image/pjpeg" && $tipoArquivoB != "image/pjpeg"){
		$erro ="Atencao: Arquivos Permitidos sao Apenas: <b>JPG</b><br> Este Arquivo eh: ".$tipoArquivoA;
		@header("Location: ../telas/FrmUpLoad.php?msn=$erro");
	}else{
		if($decoracoes = move_uploaded_file($_FILES['arquivoA']['tmp_name'], $caminhoA)){
				// define o tamanho do arquivo em modo de upload
				list($largura,$altura,$tipo) = getimagesize($caminhoA);
				$imagem = imagecreatefromjpeg($caminhoA);
				$imgPequena = imagecreatetruecolor(40, 40);
				imagecopyresampled($imgPequena, $imagem, 0, 0, 0, 0, 40, 40, $largura, $altura);
				imagejpeg($imgPequena,$caminhoA);
				// fim da definição do tamanho do arquivo
				if($popup = move_uploaded_file($_FILES['arquivoB']['tmp_name'], $caminhoB)){		
					$erro = "enviados com sucesso!!";
				}else{
					$erro = "Ouve um erro ao enviar arquivos<br>Entre em contato com o programador!";
					@header("Location: ../telas/FrmUpLoad.php?msn=$erro");
				}
		}
	}
		  $new_name = geraBairroIndex($_POST["id"]);
		  echo " 
		    <script>
             send('$new_name');
            </script>";
		}
		
		
// Fotos do bairro antigas em destaque na página fotosjoao.php 

if($_POST["local"] == "FrmUpFotosbairroPag"){
	
	$caminhoA = "../../fotosbairroantigap/".geraBairroPag($_POST["id"]);
	$caminhoB = "../../fotosbairroantigag/".geraBairroPag($_POST["id"]);
	
	$tipoArquivoA = $_FILES ['arquivoA']['type'];
	$tipoArquivoB = $_FILES ['arquivoB']['type'];
	
	if($tipoArquivoA != "image/jpeg" &&	$tipoArquivoB != "image/jpeg" && $tipoArquivoB != "image/pjpeg" && $tipoArquivoB != "image/pjpeg"){
		$erro ="Atencao: Arquivos Permitidos sao Apenas: <b>JPG</b><br> Este Arquivo eh: ".$tipoArquivoA;
		@header("Location: ../telas/FrmUpLoad.php?msn=$erro");
	}else{
		if($decoracoes = move_uploaded_file($_FILES['arquivoA']['tmp_name'], $caminhoA)){
				// define o tamanho do arquivo em modo de upload
				list($largura,$altura,$tipo) = getimagesize($caminhoA);
				$imagem = imagecreatefromjpeg($caminhoA);
				$imgPequena = imagecreatetruecolor(40, 40);
				imagecopyresampled($imgPequena, $imagem, 0, 0, 0, 0, 40, 40, $largura, $altura);
				imagejpeg($imgPequena,$caminhoA);
				// fim da definição do tamanho do arquivo
				if($popup = move_uploaded_file($_FILES['arquivoB']['tmp_name'], $caminhoB)){		
					$erro = "enviados com sucesso!!";
				}else{
					$erro = "Ouve um erro ao enviar arquivos<br>Entre em contato com o programador!";
					@header("Location: ../telas/FrmUpLoadFotoJoaoPag.php?msn=$erro");
				}
		}
	}
		  $new_name = geraBairroPag($_POST["id"]);
		  echo " 
		    <script>
             send('$new_name');
            </script>";
		}	
	
			
// Fotos da galera em destaque na index 
			
			if($_POST["local"] == "FrmUpGaleraIndex"){
	
	$caminhoA = "../../fotosgalerap/".geraGaleraIndex($_POST["id"]);
	$caminhoB = "../../fotosgalerag/".geraGaleraIndex($_POST["id"]);
	
	$tipoArquivoA = $_FILES ['arquivoA']['type'];
	$tipoArquivoB = $_FILES ['arquivoB']['type'];
	
	if($tipoArquivoA != "image/jpeg" &&	$tipoArquivoB != "image/jpeg" && $tipoArquivoB != "image/pjpeg" && $tipoArquivoB != "image/pjpeg"){
		$erro ="Atencao: Arquivos Permitidos sao Apenas: <b>JPG</b><br> Este Arquivo eh: ".$tipoArquivoA;
		@header("Location: ../telas/FrmUpLoadGaleraIndex.php?msn=$erro");
	}else{
		if($decoracoes = move_uploaded_file($_FILES['arquivoA']['tmp_name'], $caminhoA)){
				// define o tamanho do arquivo em modo de upload
				list($largura,$altura,$tipo) = getimagesize($caminhoA);
				$imagem = imagecreatefromjpeg($caminhoA);
				$imgPequena = imagecreatetruecolor(35, 35);
				imagecopyresampled($imgPequena, $imagem, 0, 0, 0, 0, 35, 35, $largura, $altura);
				imagejpeg($imgPequena,$caminhoA);
				// fim da definição do tamanho do arquivo
				if($popup = move_uploaded_file($_FILES['arquivoB']['tmp_name'], $caminhoB)){		
					$erro = "enviados com sucesso!!";
				}else{
					$erro = "Ouve um erro ao enviar arquivos<br>Entre em contato com o programador!";
					@header("Location: ../telas/FrmUpLoadGaleraIndex.php?msn=$erro");
				}
		}
	}
		  $new_name = geraGaleraIndex($_POST["id"]);
		  echo " 
		    <script>
             send('$new_name');
            </script>";
} 

// Fotos da galera antiga em destaque na página fotosgalera.php 

if($_POST["local"] == "FrmUpFotosGaleraPag"){
	
	$caminhoA = "../../fotosgaleraantigap/".geraGaleraPag($_POST["id"]);
	$caminhoB = "../../fotosgaleraantigag/".geraGaleraPag($_POST["id"]);
	
	$tipoArquivoA = $_FILES ['arquivoA']['type'];
	$tipoArquivoB = $_FILES ['arquivoB']['type'];
	
	if($tipoArquivoA != "image/jpeg" &&	$tipoArquivoB != "image/jpeg" && $tipoArquivoB != "image/pjpeg" && $tipoArquivoB != "image/pjpeg"){
		$erro ="Atencao: Arquivos Permitidos sao Apenas: <b>JPG</b><br> Este Arquivo eh: ".$tipoArquivoA;
		@header("Location: ../telas/FrmUpLoad.php?msn=$erro");
	}else{
		if($decoracoes = move_uploaded_file($_FILES['arquivoA']['tmp_name'], $caminhoA)){
				// define o tamanho do arquivo em modo de upload
				list($largura,$altura,$tipo) = getimagesize($caminhoA);
				$imagem = imagecreatefromjpeg($caminhoA);
				$imgPequena = imagecreatetruecolor(40, 40);
				imagecopyresampled($imgPequena, $imagem, 0, 0, 0, 0, 40, 40, $largura, $altura);
				imagejpeg($imgPequena,$caminhoA);
				// fim da definição do tamanho do arquivo
				if($popup = move_uploaded_file($_FILES['arquivoB']['tmp_name'], $caminhoB)){		
					$erro = "enviados com sucesso!!";
				}else{
					$erro = "Ouve um erro ao enviar arquivos<br>Entre em contato com o programador!";
					@header("Location: ../telas/FrmUpLoadFotoGaleraPag.php?msn=$erro");
				}
		}
	}
		  $new_name = geraGaleraPag($_POST["id"]);
		  echo " 
		    <script>
             send('$new_name');
            </script>";
		}
		
		
// Fotos católicas em destaque na página fotoscatolica.php 

if($_POST["local"] == "FrmUpFotosCatolicaPag"){
	
	$caminhoA = "../../fotoscatolicap/".geraCatolicoPag($_POST["id"]);
	$caminhoB = "../../fotoscatolicag/".geraCatolicoPag($_POST["id"]);
	
	$tipoArquivoA = $_FILES ['arquivoA']['type'];
	$tipoArquivoB = $_FILES ['arquivoB']['type'];
	
	if($tipoArquivoA != "image/jpeg" &&	$tipoArquivoB != "image/jpeg" && $tipoArquivoB != "image/pjpeg" && $tipoArquivoB != "image/pjpeg"){
		$erro ="Atencao: Arquivos Permitidos sao Apenas: <b>JPG</b><br> Este Arquivo eh: ".$tipoArquivoA;
		@header("Location: ../telas/FrmUpLoad.php?msn=$erro");
	}else{
		if($decoracoes = move_uploaded_file($_FILES['arquivoA']['tmp_name'], $caminhoA)){
				// define o tamanho do arquivo em modo de upload
				list($largura,$altura,$tipo) = getimagesize($caminhoA);
				$imagem = imagecreatefromjpeg($caminhoA);
				$imgPequena = imagecreatetruecolor(40, 40);
				imagecopyresampled($imgPequena, $imagem, 0, 0, 0, 0, 40, 40, $largura, $altura);
				imagejpeg($imgPequena,$caminhoA);
				// fim da definição do tamanho do arquivo
				if($popup = move_uploaded_file($_FILES['arquivoB']['tmp_name'], $caminhoB)){		
					$erro = "enviados com sucesso!!";
				}else{
					$erro = "Ouve um erro ao enviar arquivos<br>Entre em contato com o programador!";
					@header("Location: ../telas/FrmUpLoadFotoCatolica.php?msn=$erro");
				}
		}
	}
		  $new_name = geraCatolicoPag($_POST["id"]);
		  echo " 
		    <script>
             send('$new_name');
            </script>";
		}


// Fotos evangélicas em destaque na página fotosevangelica.php 

if($_POST["local"] == "FrmUpLoadFotoEvangeli"){
	
	$caminhoA = "../../fotosevangelicap/".geraEvangelPag($_POST["id"]);
	$caminhoB = "../../fotosevangelicag/".geraEvangelPag($_POST["id"]);
	
	$tipoArquivoA = $_FILES ['arquivoA']['type'];
	$tipoArquivoB = $_FILES ['arquivoB']['type'];
	
	if($tipoArquivoA != "image/jpeg" &&	$tipoArquivoB != "image/jpeg" && $tipoArquivoB != "image/pjpeg" && $tipoArquivoB != "image/pjpeg"){
		$erro ="Atencao: Arquivos Permitidos sao Apenas: <b>JPG</b><br> Este Arquivo eh: ".$tipoArquivoA;
		@header("Location: ../telas/FrmUpLoadFotoEvangeli.php?msn=$erro");
	}else{
		if($decoracoes = move_uploaded_file($_FILES['arquivoA']['tmp_name'], $caminhoA)){
				// define o tamanho do arquivo em modo de upload
				list($largura,$altura,$tipo) = getimagesize($caminhoA);
				$imagem = imagecreatefromjpeg($caminhoA);
				$imgPequena = imagecreatetruecolor(40, 40);
				imagecopyresampled($imgPequena, $imagem, 0, 0, 0, 0, 40, 40, $largura, $altura);
				imagejpeg($imgPequena,$caminhoA);
				// fim da definição do tamanho do arquivo
				if($popup = move_uploaded_file($_FILES['arquivoB']['tmp_name'], $caminhoB)){		
					$erro = "enviados com sucesso!!";
				}else{
					$erro = "Ouve um erro ao enviar arquivos<br>Entre em contato com o programador!";
					@header("Location: ../telas/FrmUpLoadFotoEvangeli.php?msn=$erro");
				}
		}
	}
		  $new_name = geraEvangelPag($_POST["id"]);
		  echo " 
		    <script>
             send('$new_name');
            </script>";
		}
		
		
		
		
		


?>