<?php 
	include_once("../classe/ManipulateData.php");

/***********************************************************
** ALTERAÇÃO DAS NOTÍCIAS NA INDEX
************************************************************/	
	if($_POST["local"] == "formAltSlideIndex" ){
		//resgatar os campos do form
		$id = $_POST["idSlide"];
		$titulo = $_POST["txtNome"];
		$link = $_POST["txtLink"];
		$titulink = $_POST["txtLinkTitulo"];
		$imagem = $_POST["txtImagem"];
		$desc = $_POST["txtNoticia"];
		
		//os passos para efetuar a alteração
		$altera = new ManipulateData();  //instanciando a classe
		$altera->setTable("tbslidenoticias");  // enviando o nome da tabela
		// enviando os campos do banco de dados
		$altera->setFields("tituloNoticia='$titulo', linkPagina='$link', tituloLink='$titulink', imgDestaque='$imagem', textoPagina='$desc'");  
		$altera->setFieldId("idSlide"); // envinado o campo referente ao código parão de pesquisa
		$altera->setValueId("$id"); // envinado o valor do campo de pesquisa
		$altera->update(); // efetuando a alteração..
		
		@header("Location: ../?telas=frmManuSlideNoticias");
	}
	
/***********************************************************
** ALTERAÇÃO DOS ARTIGOS 
************************************************************/	
	if($_POST["local"] == "formAltArtigos" ){
		//resgatar os campos do form
		$id = $_POST["idArtigos"];
		$titulo = $_POST["txtNome"];
		$imagem = $_POST["txtImagem"];
		$desc = $_POST["txtNoticia"];
		
		//os passos para efetuar a alteração
		$altera = new ManipulateData();  //instanciando a classe
		$altera->setTable("tbartigos");  // enviando o nome da tabela
		// enviando os campos do banco de dados
		$altera->setFields("tituloArtigos='$titulo', imagem='$imagem', descArtigos='$desc'");  
		$altera->setFieldId("idArtigos"); // envinado o campo referente ao código parão de pesquisa
		$altera->setValueId("$id"); // envinado o valor do campo de pesquisa
		$altera->update(); // efetuando a alteração..
		
		@header("Location: ../?telas=frmManuArtigos");
	}
	
	/***********************************************************
** ALTERAÇÃO DA AGENDA
************************************************************/	
	if($_POST["local"] == "formAltAgenda" ){
		//resgatar os campos do form
		$id = $_POST["idAgenda"];
		$titulo = $_POST["txttitulo"];
		$data = $_POST["txtData"];
		$hora = $_POST["txtHora"];
		$resumo = $_POST["txtResumo"];
		$desc = $_POST["txtdescri"];
		
		//os passos para efetuar a alteração
		$altera = new ManipulateData();  //instanciando a classe
		$altera->setTable("tbagenda");  // enviando o nome da tabela
		// enviando os campos do banco de dados
		$altera->setFields("tituloAgenda='$titulo', data='$data', hora='$hora', resumo='$resumo', descAgenda='$desc'");  
		$altera->setFieldId("idAgenda"); // envinado o campo referente ao código parão de pesquisa
		$altera->setValueId("$id"); // envinado o valor do campo de pesquisa
		$altera->update(); // efetuando a alteração..
		
		@header("Location: ../?telas=frmManuAgenda");
	}

/***********************************************************
** ALTERAÇÃO DA HISTÓRIA
************************************************************/	
	if($_POST["local"] == "formAltHistoria" ){
		//resgatar os campos do form
		$id = $_POST["idHistoria"];
		$titulo = $_POST["txtNome"];
		$descricao = $_POST["txtDesc"];
		
		//os passos para efetuar a alteração
		$altera = new ManipulateData();  //instanciando a classe
		$altera->setTable("tbhistoria");  // enviando o nome da tabela
		// enviando os campos do banco de dados
		$altera->setFields("tituloHistoria='$titulo', descHistoria='$descricao'");  
		$altera->setFieldId("idHistoria"); // envinado o campo referente ao código parão de pesquisa
		$altera->setValueId("$id"); // envinado o valor do campo de pesquisa
		$altera->update(); // efetuando a alteração..
		
		@header("Location: ../?telas=frmManuHistoria");
	}
	
	/***********************************************************
** ALTERAÇÃO DOS ASSOCIADOS
************************************************************/	
	if($_POST["local"] == "formAltAssociados" ){
		//resgatar os campos do form
		$id = $_POST["idBusca"];
		$titulo = $_POST["txttitulo"];
		$data = $_POST["txtData"];
		$site = $_POST["txtSite"];
		$email = $_POST["txtEmail"];
		$twitter = $_POST["txtTwitter"];
		$desc = $_POST["txtdescri"];
		
		//os passos para efetuar a alteração
		$altera = new ManipulateData();  //instanciando a classe
		$altera->setTable("tbbusca");  // enviando o nome da tabela
		// enviando os campos do banco de dados
		$altera->setFields("nomeMedico='$titulo', dataAssociacao='$data', site='$site', email='$email', twitter='$twitter', descricao='$desc'");  
		$altera->setFieldId("idBusca"); // envinado o campo referente ao código parão de pesquisa
		$altera->setValueId("$id"); // envinado o valor do campo de pesquisa
		$altera->update(); // efetuando a alteração..
		
		@header("Location: ../?telas=frmManuAssociados");
	}
	
/***********************************************************
** ALTERAÇÃO DAS FOTOS
************************************************************/	
	if($_POST["local"] == "formAltFotos" ){
		//resgatar os campos do form
		$id = $_POST["idImg"];
		$titulo = $_POST["txtnome"];
		$textofoto = $_POST["txtfotogrande"];
		$imagem = $_POST["txtImagem"];
		$dtq = $_POST["txtDestaque"];
		
		//os passos para efetuar a alteração
		$altera = new ManipulateData();  //instanciando a classe
		$altera->setTable("tbfotos");  // enviando o nome da tabela
		// enviando os campos do banco de dados
		$altera->setFields("nomeFoto='$titulo', descFoto='$textofoto', imgFoto='$imagem', destaqFoto='$dtq'");  
		$altera->setFieldId("idImg"); // envinado o campo referente ao código parão de pesquisa
		$altera->setValueId("$id"); // envinado o valor do campo de pesquisa
		$altera->update(); // efetuando a alteração..
		
		@header("Location: ../?telas=frmManuFotos");
	}

/***********************************************************
** ALTERAÇÃO DA BIBLIOGRAFIA
************************************************************/	
	if($_POST["local"] == "formAltBibliografia" ){
		//resgatar os campos do form
		$id = $_POST["idBiblio"];
		$titulo = $_POST["txtNome"];
		$descricao = $_POST["txtDesc"];
		
		//os passos para efetuar a alteração
		$altera = new ManipulateData();  //instanciando a classe
		$altera->setTable("tbbibliografia");  // enviando o nome da tabela
		// enviando os campos do banco de dados
		$altera->setFields("tituloBiblio='$titulo', descBiblio='$descricao'");  
		$altera->setFieldId("idBiblio"); // envinado o campo referente ao código parão de pesquisa
		$altera->setValueId("$id"); // envinado o valor do campo de pesquisa
		$altera->update(); // efetuando a alteração..
		
		@header("Location: ../?telas=frmManuBibliografia");
	}


	
/***********************************************************
** ALTERAÇÃO DOS VÍDEOS
************************************************************/	
	if($_POST["local"] == "formAltVideosMarcos" ){
		//resgatar os campos do form
		$id = $_POST["idVideos"];
		$nome = $_POST["txttitulo"];
		$over = $_POST["txtOver"];
		$descricao = $_POST["txtdescri"];
		
		//os passos para efetuar a alteração
		$altera = new ManipulateData();  //instanciando a classe
		$altera->setTable("tbvideos");  // enviando o nome da tabela
		// enviando os campos do banco de dados
		$altera->setFields("video='$nome', txtOver='$over', conteudoVideo='$descricao'");  
		$altera->setFieldId("idVideos"); // envinado o campo referente ao código parão de pesquisa
		$altera->setValueId("$id"); // envinado o valor do campo de pesquisa
		$altera->update(); // efetuando a alteração..
		
		@header("Location: ../?telas=frmManuVideos");
	}
	
	
		
?>
