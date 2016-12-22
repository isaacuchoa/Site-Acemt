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

//funcão que gera as fotos dos eventos.
function geraFoto($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbfotos");
		 $criaNome->setFieldId("idImg");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
}


//funcão que gera a imagem dos Artigos na index
function geraArtigos($id){
	if ($id == ""){
         $criaNome = new ManipulateData();
		 $criaNome->setTable("tbartigos");
		 $criaNome->setFieldId("idArtigos");
		 $id = $criaNome->getLastId() + 1;
         return "$id.jpg";        
     }else{
		 return "$id.jpg";
     }
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


// Cadastra as fotos dos eventos ACEMT	

if($_POST["local"] == "FrmUpFotos"){
	
	$caminhoA = "../../fotosp/".geraFoto($_POST["id"]);
	$caminhoB = "../../fotosg/".geraFoto($_POST["id"]);
	
	$tipoArquivoA = $_FILES ['arquivoA']['type'];
	$tipoArquivoB = $_FILES ['arquivoB']['type'];
	
	if($tipoArquivoA != "image/jpeg" &&	$tipoArquivoB != "image/jpeg" && $tipoArquivoB != "image/pjpeg" && $tipoArquivoB != "image/pjpeg"){
		$erro ="Atencao: Arquivos Permitidos sao Apenas: <b>JPG</b><br> Este Arquivo eh: ".$tipoArquivoA;
		@header("Location: ../telas/FrmUpLoadFotos.php?msn=$erro");
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
					@header("Location: ../telas/FrmUpLoadFotos.php?msn=$erro");
				}
		}
	}
		  $new_name = geraFoto($_POST["id"]);
		  echo " 
		    <script>
             send('$new_name');
            </script>";
}


// Cadastra as imagens presente nos textos dos artigos

if($_POST["local"] == "FrmUpArtigos"){
	
    $nomeArquivo = $_FILES ['arquivo']['name'];
    $tamanhoArquivo = $_FILES ['arquivo']['size'];
    $tipoArquivo = $_FILES ['arquivo']['type'];
    $tmpName = $_FILES ['arquivo']['tmp_name'];	
	$caminho = "../../imgArtigo/".$_POST["tamanho"]."/".geraArtigos($_POST["id"],$tipoArquivo);
	
		if(move_uploaded_file($tmpName, $caminho)){
			$erro = "Enviado com Sucesso em:".$caminho;
		}else{
			$erro = "Ouve um erro ao enviar o arquivo, <br />Entre em contado com o programador.";
		}
		
	
	$new_name = geraArtigos($_POST["id"], $tipoArquivo);
	echo " 
	    <script>
             send('$new_name');
         </script>";
} 






?>