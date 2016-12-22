<?php 
include_once("../classe/ManipulateData.php");


/*******************************************************************
*** CADASTRO DO SLIDE SHOW NA INDEX
********************************************************************/
if($_POST["txtLocal"] == "formSlideNoticias"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"];
	$link = $_POST["txtLink"];
	$linktitulo = $_POST["txtLinkTitulo"]; 
	$imagem = $_POST["txtImagem"];
	$descricao = $_POST["txtNoticia"];
	$destaque = $_POST["txtDestaque"];
	
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbslidenoticias");
	
	$cad->setFields("tituloNoticia, linkPagina, tituloLink, imgDestaque, textoPagina, dtaqSlide");
	$cad->setDados("'$nome', '$link', '$linktitulo', '$imagem', '$descricao', '$destaque'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadSlideNoticias&msn=$erro");
}


/*******************************************************************
*** CADASTRO DOS ARTIGOS NA INDEX
********************************************************************/
if($_POST["txtLocal"] == "formCadArtigos"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"];
	$imagem = $_POST["txtImagem"];
	$desc = $_POST["txtDesc"];
	$destaque = $_POST["txtDestaque"];
		
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbartigos");
	
	$cad->setFields("tituloArtigos, imagem, descArtigos, destaqArtigos");
	$cad->setDados("'$nome', '$imagem', '$desc', '$destaque'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadArtigos&msn=$erro");
}

/********************************************************
*** CADASTRO DAS FOTOS DO MARCOS NA PÁGINA FOTOS 
*********************************************************/
if($_POST["txtLocal"] == "formCadFoto"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"]; 
	$imagem = $_POST["txtImagem"];
	$destaque = $_POST["txtDestaque"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbfotos");
	
	$cad->setFields("nomeFoto, descFoto, imgFoto, destaqFoto");
	$cad->setDados("'$nome', '$descricao', '$imagem', '$destaque'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFoto&msn=$erro");
}

/*******************************************************************
*** CADASTRO DA AGENDA NA INDEX
********************************************************************/
if($_POST["txtLocal"] == "formCadAgenda"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"];
	$data = $_POST["txtdata"];
	$hora = $_POST["txtHora"];
	$resumo = $_POST["txtResumo"];
	$desc = $_POST["txtDescAgenda"];
	$destaque = $_POST["txtDestaque"];
		
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbagenda");
	
	$cad->setFields("data, hora, tituloAgenda, resumo, descAgenda, destaqAgenda");
	$cad->setDados("'$data', '$hora', '$nome', '$resumo', '$desc', '$destaque'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadAgenda&msn=$erro");
}



/*******************************************************************
*** CADASTRO DA HISTORIA DA ACEMT
********************************************************************/
if($_POST["txtLocal"] == "formHistoria"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"];
	$descricao = $_POST["txtDesc"];
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbhistoria");
	
	$cad->setFields("tituloHistoria, descHistoria");
	$cad->setDados("'$nome', '$descricao'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadHistoria&msn=$erro");
}


/*******************************************************************
*** CADASTRO DA BIBLIOGRAFIA DA ACEMT
********************************************************************/
if($_POST["txtLocal"] == "formBibliografia"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"];
	$descricao = $_POST["txtDesc"];
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbbibliografia");
	
	$cad->setFields("tituloBiblio, descBiblio");
	$cad->setDados("'$nome', '$descricao'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadBibliografia&msn=$erro");
}


/*******************************************************************
*** CADASTRO DA DIRETORIA ACEMT
********************************************************************/
if($_POST["txtLocal"] == "formDiretoria"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"];
	$descricao = $_POST["txtDesc"];
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdiretoria");
	
	$cad->setFields("tituloDiretoria, desDiretoria");
	$cad->setDados("'$nome', '$descricao'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDiretoria&msn=$erro");
}

/*******************************************************************
*** CADASTRO DOS ASSOCIADOS ACEMT
********************************************************************/
if($_POST["txtLocal"] == "formCadAssoc"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"];
	$data = $_POST["txtData"];
	$especi = $_POST["txtEspecialidade"];
	$site = $_POST["txtSite"];
	$twitter = $_POST["txtTwitter"];
	$email = $_POST["txtEmail"];
	$desc = $_POST["txtDesc"];
		
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbbusca");
	
	$cad->setFields("nomeMedico, dataAssociacao, especialidade, site, twitter, email, descricao");
	$cad->setDados("'$nome', '$data', '$especi', '$site', '$twitter', '$email', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadAssociados&msn=$erro");
}



/********************************************************
*** CADASTRO DO MENU PRINCIPAL (1° Hierarquia)
*********************************************************/
if($_POST["txtLocal"] == "formCadMenuPrincipal"){
	//captando dados do Formulário
	$desc = $_POST["txtDescricao"]; 
	$imagem = $_POST["txtImagem"];
	$css = $_POST["txtCss"];
	$url = $_POST["txtUrl"];
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbmainmenu");
	$cad->setFieldId("descMainMenu");
	
	//verificando se existe a sessão cadastrada
	if($cad->getDadosDuplicados("$desc") >= 1){
		$erro = base64_encode("Item j&aacute; Cadastrado...");
	}else{
		$cad->setFields("descMainMenu, imgMainMenu, urlMainMenu, cssMainMenu");
		$cad->setDados("'$desc', '$imagem', '$url', '$css'");
		$cad->insert();
		$erro = base64_encode($cad->getStatus());
	}
@header("Location: ../?telas=frmCadMenuPrincipal&msn=$erro");
}

/********************************************************
*** CADASTRO DE SUB MENUS (2° hierarquia)
*********************************************************/
if($_POST["txtLocal"] == "formCadSubMenu"){
	//captando dados do Formulário
	$desc = $_POST["txtDescricao"]; 
	$pertence = $_POST["txtPertense"];
	$url = $_POST["txtUrl"];
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbsessao");
	$cad->setFieldId("descSessao");
	
	//verificando se existe a sessãao cadastrada
	if($cad->getDadosDuplicados("$desc") >= 1){
		$erro = base64_encode("Item j&aacute; Cadastrado...");
	}else{
		$cad->setFields("descSessao, codMenuPertence, urlSessao");
		$cad->setDados("'$desc', '$pertence', '$url'");
		$cad->insert();
		$erro = base64_encode($cad->getStatus());
	}
@header("Location: ../?telas=frmCadSubMenuPrincipal&msn=$erro");
}

/*****************************************************************
*** CADASTRO DAS ORIENTAÇÕES NO TOPO DA BUSCA
******************************************************************/
if($_POST["txtLocal"] == "formCadOrientaBusca"){
	//captando dados do Formulário
	$titulb = $_POST["tituloTexto"]; 
	$descb = $_POST["descTexto"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tborientacaotopobusca");
	
	$cad->setFields("tituloTexto, descTexto");
	$cad->setDados("'$titulb', '$descb'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadTextoTopoBusca&msn=$erro");
}

/********************************************************
*** CADASTRO DE BANNERS
*********************************************************/
if($_POST["txtLocal"] == "formCadBanners"){
	//captando dados do Formulário
	$desc = $_POST["txtDescricao"]; 
	$tamanho = $_POST["txtTamanho"];
	$url = $_POST["txtURL"];
	$imagem = $_POST["txtImagem"];
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbbanners");
	
	$cad->setFields("descBanner, imgBanner, urlBanner, tamanhoBanner");
	$cad->setDados("'$desc', '$imagem', '$url', '$tamanho'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadBanner&msn=$erro");
}


/********************************************************
*** CADASTRO DE Usuarios
*********************************************************/
if($_POST["txtLocal"] == "formCadUsers"){
	//captando dados do Formulário
	$nome = $_POST["txtNome"]; 
	$email = $_POST["txtEmail"];
	$senha = md5($_POST["txtSenha"]);
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbusuario");
	$cad->setFieldId("emailUser");
	
	//verificando se existe a sessãao cadastrada
	if($cad->getDadosDuplicados("$email") >= 1){
		$erro = base64_encode("Usu&aacute;rio j&aacute; Cadastrado...");
	}else{
		$cad->setFields("nomeUser,emailUser,senhaUser");
		$cad->setDados("'$nome', '$email', '$senha'");
		$cad->insert();
		$erro = base64_encode($cad->getStatus());
	}
@header("Location: ../?telas=frmCadUsers&msn=$erro");
}


/********************************************************
*** CADASTRO DOS EVENTOS NA INDEX DO SITE JOÃO XXIII
*********************************************************/
if($_POST["txtLocal"] == "formCadEventosIndex"){
	//captando dados do Formulário
	$titul = $_POST["tituloEventos"]; 
	$desc = $_POST["descEventos"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbeventosinicio");
	
	$cad->setFields("tituloEventos, descEventos");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadEventosIndex&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS LINKS PARA OS VÍDEOS NA INDEX
******************************************************************/
if($_POST["txtLocal"] == "formCadVideoIndex"){
	//captando dados do Formulário
	$concu = $_POST["txtUm"]; 
	$aconte = $_POST["txtDois"];
	$acade = $_POST["txtTres"];
	$clipe = $_POST["txtQuatro"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideosinicio");
	
	$cad->setFields("destaqconcurso, destaqaconteceu, destaqacademia, destaqclipes");
	$cad->setDados("'$concu', '$aconte', '$acade', '$clipe'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideosIndex&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS LINKS PARA OS ENTRETENIMENTOS NA INDEX
******************************************************************/
if($_POST["txtLocal"] == "formCadEntreteIndex"){
	//captando dados do Formulário
	$concu = $_POST["txtUm"]; 
	$aconte = $_POST["txtDois"];
	$acade = $_POST["txtTres"];
	$clipe = $_POST["txtQuatro"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdiversaoinicio");
	
	$cad->setFields("destaqPPS, destaqReflexao, destaqMensagem, destaqHumor");
	$cad->setDados("'$concu', '$aconte', '$acade', '$clipe'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadEntretenimentoIndex&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS LINKS PARA OS CLASSIFICADOS NA INDEX
******************************************************************/
if($_POST["txtLocal"] == "formCadClassifiIndex"){
	//captando dados do Formulário
	$concu = $_POST["txtUm"]; 
	$aconte = $_POST["txtDois"];
		
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbclassificadosinicio");
	
	$cad->setFields("destaqtransportesimoveis, destaqoutros");
	$cad->setDados("'$concu', '$aconte'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmClassificadosIndex&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS SAÚDE E QUALIDADE DE VIDA NA PÁGINA videosdicas.php
******************************************************************/
if($_POST["txtLocal"] == "formCadVideoSaude"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideosaude");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoSaude&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS ACONTECEU NO MUNDO NA PÁGINA videosoutros.php
******************************************************************/
if($_POST["txtLocal"] == "formCadVideoAconte"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideosaconteceu");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoAcontec&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS ACONTECEU NO BAIRRO NA PÁGINA videobairro.php
******************************************************************/
if($_POST["txtLocal"] == "formCadVideoBairro"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideobairro");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoBairro&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS CONCURSOS
******************************************************************/
if($_POST["txtLocal"] == "formCadVideoConcurso"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideoconcursos");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoConcursos&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS ACADEMIA
******************************************************************/
if($_POST["txtLocal"] == "formCadVideoAcademia"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideoacademia");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoAcademia&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS RECEITAS
******************************************************************/
if($_POST["txtLocal"] == "formCadVideoReceitas"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideoculinaria");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoReceitas&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS CABELOS E UNHAS
******************************************************************/
if($_POST["txtLocal"] == "formCadVideoCabelo"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideocabelounha");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoCabelo&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS CATÓLICOS
******************************************************************/
if($_POST["txtLocal"] == "formCadVideoCatolico"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideocatolico");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoCatolico&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS EVANGÉLICOS
******************************************************************/
if($_POST["txtLocal"] == "formCadVideoEvang"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideoevangelico");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoEvangelico&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS TORCIDAS
******************************************************************/
if($_POST["txtLocal"] == "formCadVideoTorcidas"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideotorcidas");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoTorcidas&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS DIVERTIDOS
******************************************************************/
if($_POST["txtLocal"] == "formCadVideoDiverti"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideodivertido");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoDivertido&msn=$erro");
}


/*****************************************************************
*** CADASTRO DOS VÍDEOS CLIPES ROCK NA PÁGINA videosgeral.php
******************************************************************/
if($_POST["txtLocal"] == "formCadClipeRock"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideoclipesrock");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoClipRock&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS CLIPES MPB NA PÁGINA videosgeral.php
******************************************************************/
if($_POST["txtLocal"] == "formCadClipeMPB"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideoclipesmpb");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoClipMPB&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS CLIPES REGGAE NA PÁGINA videosgeral.php
******************************************************************/
if($_POST["txtLocal"] == "formCadClipeReggae"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideoclipesreggae");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoClipReggae&msn=$erro");
}


/*****************************************************************
*** CADASTRO DOS VÍDEOS CLIPES ROCK NA PÁGINA videosgeral.php
******************************************************************/
if($_POST["txtLocal"] == "formCadClipePagode"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideoclipespagode");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoClipPagode&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS CLIPES RELIGIÃO NA PÁGINA videosgeral.php
******************************************************************/
if($_POST["txtLocal"] == "formCadClipeReligiao"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideoclipesreligiao");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoClipReligiao&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS CLIPES FORRÓ NA PÁGINA videosgeral.php
******************************************************************/
if($_POST["txtLocal"] == "formCadClipeForro"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideoclipesforro");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoClipForro&msn=$erro");
}

/*****************************************************************
*** CADASTRO DOS VÍDEOS CLIPES MÚSICA INTERNACIONAL NA PÁGINA videosgeral.php
******************************************************************/
if($_POST["txtLocal"] == "formCadClipeInternacio"){
	//captando dados do Formulário
	$titulb = $_POST["txtClipe"]; 
	$descb = $_POST["txtDesc"];
	$linkvideo = $_POST["txtLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbvideoclipesinternacio");
	
	$cad->setFields("tituloVideo, descVideo, linkVideo");
	$cad->setDados("'$titulb', '$descb', '$linkvideo'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadVideoClipInternacional&msn=$erro");
}


/*****************************************************************
*** CADASTRO DA HISTÓRIA DO BAIRRO NA PÁGINA historia.php
******************************************************************/
if($_POST["txtLocal"] == "formCadHistoriaBairro"){
	//captando dados do Formulário
	$titulb = $_POST["tituloHistoria"]; 
	$descb = $_POST["descHistoria"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbhistoriabairro");
	
	$cad->setFields("tituloHistoria, descHistoria");
	$cad->setDados("'$titulb', '$descb'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadHistoriaBairro&msn=$erro");
}

/****************************************************************************************************
*** Cadastro dos links para os comentários no mural das fotos da galera na pág "fotosgalera.php"
*****************************************************************************************************/
if($_POST["txtLocal"] == "formCadComentFotoGaler"){
	//captando dados do Formulário
	$titulb = $_POST["txtNomeComent"]; 
	$linkb = $_POST["txtLinkComent"];
	$nomepapob = $_POST["txtPapo"];
	$linkpapob = $_POST["txtPapoLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbcomentfotosglr");
	
	$cad->setFields("nomeComent, linkComent, papo, linkPapo");
	$cad->setDados("'$titulb', '$linkb', '$nomepapob', '$linkpapob'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadComentaFotoGalera&msn=$erro");
}

/****************************************************************************************************
*** Cadastro dos links para os comentários no mural das fotos católicas na pág "fotoscatolica.php"
*****************************************************************************************************/
if($_POST["txtLocal"] == "formCadComentFotoCatol"){
	//captando dados do Formulário
	$titulb = $_POST["txtNomeComent"]; 
	$linkb = $_POST["txtLinkComent"];
	$nomepapob = $_POST["txtPapo"];
	$linkpapob = $_POST["txtPapoLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbcomentfotoscatolica");
	
	$cad->setFields("nomeComent, linkComent, papo, linkPapo");
	$cad->setDados("'$titulb', '$linkb', '$nomepapob', '$linkpapob'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadComentaFotoCatol&msn=$erro");
}

/****************************************************************************************************
*** Cadastro dos links para os comentários no mural das fotos evangélicas na pág "fotosevangelica.php"
*****************************************************************************************************/
if($_POST["txtLocal"] == "formCadComentFotoEvang"){
	//captando dados do Formulário
	$titulb = $_POST["txtNomeComent"]; 
	$linkb = $_POST["txtLinkComent"];
	$nomepapob = $_POST["txtPapo"];
	$linkpapob = $_POST["txtPapoLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbcomentfotosevangelica");
	
	$cad->setFields("nomeComent, linkComent, papo, linkPapo");
	$cad->setDados("'$titulb', '$linkb', '$nomepapob', '$linkpapob'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadComentaFotoEvang&msn=$erro");
}

/*************************************************************************************************************
*** Cadastro dos links para os comentários no mural das fotos do litoral cearence na pág "fotoslitoral.php"
**************************************************************************************************************/
if($_POST["txtLocal"] == "formCadComentFotoLitoral"){
	//captando dados do Formulário
	$titulb = $_POST["txtNomeComent"]; 
	$linkb = $_POST["txtLinkComent"];
	$nomepapob = $_POST["txtPapo"];
	$linkpapob = $_POST["txtPapoLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbcomentfotoslitoral");
	
	$cad->setFields("nomeComent, linkComent, papo, linkPapo");
	$cad->setDados("'$titulb', '$linkb', '$nomepapob', '$linkpapob'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadComentaFotoLitoral&msn=$erro");
}

/*************************************************************************************************************
*** Cadastro dos links para os comentários no mural das fotos dos lugares no Brasil na pág "fotoslugares.php"
**************************************************************************************************************/
if($_POST["txtLocal"] == "formCadComentFotoLugares"){
	//captando dados do Formulário
	$titulb = $_POST["txtNomeComent"]; 
	$linkb = $_POST["txtLinkComent"];
	$nomepapob = $_POST["txtPapo"];
	$linkpapob = $_POST["txtPapoLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbcomentfotoslugares");
	
	$cad->setFields("nomeComent, linkComent, papo, linkPapo");
	$cad->setDados("'$titulb', '$linkb', '$nomepapob', '$linkpapob'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadComentaFotoLugares&msn=$erro");
}

/*************************************************************************************************************
*** Cadastro dos links para os comentários no mural das fotos dos desaparecidos na pág "desaparecidos.php"
**************************************************************************************************************/
if($_POST["txtLocal"] == "formCadComentFotoDesapare"){
	//captando dados do Formulário
	$titulb = $_POST["txtNomeComent"]; 
	$linkb = $_POST["txtLinkComent"];
	$nomepapob = $_POST["txtPapo"];
	$linkpapob = $_POST["txtPapoLink"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbcomentfotosdesapare");
	
	$cad->setFields("nomeComent, linkComent, papo, linkPapo");
	$cad->setDados("'$titulb', '$linkb', '$nomepapob', '$linkpapob'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadComentaFotoDesapare&msn=$erro");
}


/*****************************************************************
*** CADASTRO DO LINK ESTUDOS NA pág links.php
******************************************************************/
if($_POST["txtLocal"] == "formCadLinkEstudo"){
	//captando dados do Formulário
	$titnome = $_POST["txtNome"]; 
	$titlinknome = $_POST["txtLinkNome"];
	$titfone = $_POST["txtFone"];
	$titmapa = $_POST["txtMapa"];
	$titlinkmapa = $_POST["txtLinkMapa"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tblinksestudo");
	
	$cad->setFields("nomeLink, nomeUrl, fone, mapa, mapaUrl");
	$cad->setDados("'$titnome', '$titlinknome', '$titfone', '$titmapa', '$titlinkmapa'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadLinkEstudo&msn=$erro");
}


/*****************************************************************
*** CADASTRO DO LINK UTILIDADE NA pág links.php
******************************************************************/
if($_POST["txtLocal"] == "formCadLinkUtilidade"){
	//captando dados do Formulário
	$titnome = $_POST["txtNome"]; 
	$titlinknome = $_POST["txtLinkNome"];
	$titfone = $_POST["txtFone"];
	$titmapa = $_POST["txtMapa"];
	$titlinkmapa = $_POST["txtLinkMapa"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tblinksutilidade");
	
	$cad->setFields("nomeLink, nomeUrl, fone, mapa, mapaUrl");
	$cad->setDados("'$titnome', '$titlinknome', '$titfone', '$titmapa', '$titlinkmapa'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadLinkUtilidade&msn=$erro");
}

/*****************************************************************
*** CADASTRO DO LINK DIVERSÃO NA pág links.php
******************************************************************/
if($_POST["txtLocal"] == "formCadLinkDivert"){
	//captando dados do Formulário
	$titnome = $_POST["txtNome"]; 
	$titlinknome = $_POST["txtLinkNome"];
	$titfone = $_POST["txtFone"];
	$titmapa = $_POST["txtMapa"];
	$titlinkmapa = $_POST["txtLinkMapa"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tblinksdivertido");
	
	$cad->setFields("nomeLink, nomeUrl, fone, mapa, mapaUrl");
	$cad->setDados("'$titnome', '$titlinknome', '$titfone', '$titmapa', '$titlinkmapa'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadLinkDiversao&msn=$erro");
}

/*****************************************************************
*** CADASTRO DO LINK OUTROS NA pág links.php
******************************************************************/
if($_POST["txtLocal"] == "formCadLinkOutro"){
	//captando dados do Formulário
	$titnome = $_POST["txtNome"]; 
	$titlinknome = $_POST["txtLinkNome"];
	$titfone = $_POST["txtFone"];
	$titmapa = $_POST["txtMapa"];
	$titlinkmapa = $_POST["txtLinkMapa"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tblinksoutros");
	
	$cad->setFields("nomeLink, nomeUrl, fone, mapa, mapaUrl");
	$cad->setDados("'$titnome', '$titlinknome', '$titfone', '$titmapa', '$titlinkmapa'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadLinkOutro&msn=$erro");
}


/*********************************************
*** CADASTRO DA MATÉRIA DO MURAL DE RECADOS
*********************************************/
if($_POST["txtLocal"] == "formCadMateriaMural"){
	//captando dados do Formulário
	$titulb = $_POST["tituloMateria"]; 
	$descb = $_POST["tituloOpniao"];
		
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbmuralmaterias");
	
	$cad->setFields("tituloMateria, materia ");
	$cad->setDados("'$titulb', '$descb'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadMateriasMural&msn=$erro");
}


/*********************************************
*** CADASTRO DA MATÉRIA DO POR ONDE ANDA
*********************************************/
if($_POST["txtLocal"] == "formCadMateriaCdvc"){
	//captando dados do Formulário
	$titulb = $_POST["tituloMateria"]; 
	$descb = $_POST["tituloOpniao"];
		
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbmuralmateriascadevc");
	
	$cad->setFields("tituloMateria, materia ");
	$cad->setDados("'$titulb', '$descb'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadMateriasCadeVc&msn=$erro");
}


/*****************************************************************
*** CADASTRO DAS FORMAS DE ANÚNCIO NA PÁGINA anuncie.php
******************************************************************/
if($_POST["txtLocal"] == "formCadAnuncio"){
	//captando dados do Formulário
	$titulb = $_POST["tituloAnuncio"]; 
	$descb = $_POST["descAnuncio"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbanuncio");
	
	$cad->setFields("tituloAnuncio, descAnuncio");
	$cad->setDados("'$titulb', '$descb'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDivulgacao&msn=$erro");
}

/********************************************************
*** CADASTRO DAS COBERTURAS DO SITE JOÃO XXIII
*********************************************************/
if($_POST["txtLocal"] == "formCadCoberturas"){
	//captando dados do Formulário
	$titul = $_POST["tituloCobertura"]; 
	$link = $_POST["linkCobertura"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbcoberturatextos");
	
	$cad->setFields("nomeCobertura, linkCobertura");
	$cad->setDados("'$titul', '$link'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadCoberturas&msn=$erro");
}

/********************************************************
*** CADASTRO DOS LINKS DOWNLOADS CONCURSOS
*********************************************************/
if($_POST["txtLocal"] == "formCadLinkConcurso"){
	//captando dados do Formulário
	$titul = $_POST["tituloCobertura"]; 
	$link = $_POST["linkCobertura"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdownloadconcursos");
	
	$cad->setFields("nomeDownload, linkDownload");
	$cad->setDados("'$titul', '$link'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDownloadConcursos&msn=$erro");
}


/********************************************************
*** CADASTRO DOS LINKS DOWNLOADS INFORMÁTICA
*********************************************************/
if($_POST["txtLocal"] == "formCadLinkInformatica"){
	//captando dados do Formulário
	$titul = $_POST["tituloCobertura"]; 
	$link = $_POST["linkCobertura"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdownloadinformatica");
	
	$cad->setFields("nomeDownload, linkDownload");
	$cad->setDados("'$titul', '$link'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDownloadInformatica&msn=$erro");
}

/********************************************************
*** CADASTRO DOS LINKS DOWNLOADS APRESENTAÇÕES
*********************************************************/
if($_POST["txtLocal"] == "formCadLinkApresenta"){
	//captando dados do Formulário
	$titul = $_POST["tituloCobertura"]; 
	$link = $_POST["linkCobertura"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdownloadapresentacoes");
	
	$cad->setFields("nomeDownload, linkDownload");
	$cad->setDados("'$titul', '$link'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDownloadApresentacoes&msn=$erro");
}

/********************************************************
*** CADASTRO DOS LINKS DOWNLOADS ARQUIVOS EM GERAL
*********************************************************/
if($_POST["txtLocal"] == "formCadLinkArqGeral"){
	//captando dados do Formulário
	$titul = $_POST["tituloCobertura"]; 
	$link = $_POST["linkCobertura"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdownloadarquivos");
	
	$cad->setFields("nomeDownload, linkDownload");
	$cad->setDados("'$titul', '$link'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDownloadArquivos&msn=$erro");
}


/*****************************************************************
*** CADASTRO DA DIVERSÃO HUMOR na pág "diversaohumor.php"
******************************************************************/
if($_POST["txtLocal"] == "formCadDiversHumor"){
	//captando dados do Formulário
	$titulb = $_POST["txthumor"]; 
	$descb = $_POST["txtdesc"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdiversaohumor");
	
	$cad->setFields("titulohumor, deschumor");
	$cad->setDados("'$titulb', '$descb'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDiversaoHumor&msn=$erro");
}

/*****************************************************************
*** CADASTRO DA DIVERSÃO REFLEXÕES na pág "diversaoreflexoes.php"
******************************************************************/
if($_POST["txtLocal"] == "formCadDiversReflex"){
	//captando dados do Formulário
	$titulb = $_POST["txtmsg"]; 
	$descb = $_POST["txtdesc"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdiversaoreflexoes");
	
	$cad->setFields("titulomensagens, descmensagens");
	$cad->setDados("'$titulb', '$descb'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDiversaoReflexao&msn=$erro");
}

/*****************************************************************
*** CADASTRO DA DIVERSÃO MENSAGENS na pág "diversaomensagens.php"
******************************************************************/
if($_POST["txtLocal"] == "formCadDiversMsg"){
	//captando dados do Formulário
	$titulb = $_POST["txtmsg"]; 
	$descb = $_POST["txtdesc"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdiversaomensagens");
	
	$cad->setFields("titulomensagens, descmensagens");
	$cad->setDados("'$titulb', '$descb'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDiversaoMensagem&msn=$erro");
}

/*************************************************************************************
*** CADASTRO DA DIVERSÃO LETRAS E TRADUÇÕES DE MÚSICAS na pág "diversaoletras.php"
**************************************************************************************/
if($_POST["txtLocal"] == "formCadDiversLtr"){
	//captando dados do Formulário
	$titulb = $_POST["txttitulo"]; 
	$descb = $_POST["txtdesc"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdiversaoletras");
	
	$cad->setFields("tituloletras, descletras");
	$cad->setDados("'$titulb', '$descb'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDiversaoLetras&msn=$erro");
}


/*****************************************************************
*** CADASTRO DOS EVENTOS DO BAIRRO NA PÁGINA eventosbairro.php
******************************************************************/
if($_POST["txtLocal"] == "formCadEventosBairro"){
	//captando dados do Formulário
	$titulb = $_POST["tituloBairro"]; 
	$descb = $_POST["descBairro"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbeventosbairro");
	
	$cad->setFields("tituloBairro, descBairro");
	$cad->setDados("'$titulb', '$descb'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadEventosBairro&msn=$erro");
}

/*************************************************************************************
*** CADASTRO DOS EVENTOS CATÓLICOS DO BAIRRO NA PÁGINA "eventosreligiocatoli.php"
**************************************************************************************/
if($_POST["txtLocal"] == "formCadEventosCatolico"){
	//captando dados do Formulário
	$titul = $_POST["tituloReligiaoCatoli"]; 
	$desc = $_POST["descReligiaoCatoli"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbeventosreligiaocatolica");
	
	$cad->setFields("tituloReligiaoCatoli, descReligiaoCatoli");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadEventosCatolico&msn=$erro");
}



/****************************************************************************************
*** CADASTRO DOS EVENTOS EVANGÉLICOS DO BAIRRO NA PÁGINA "eventosreligioevangelico.php"
*****************************************************************************************/
if($_POST["txtLocal"] == "formCadEventosEvangelico"){
	//captando dados do Formulário
	$titul = $_POST["tituloReligiaoEvang"]; 
	$desc = $_POST["descReligiaoEvang"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbeventosreligiaoevang");
	
	$cad->setFields("tituloReligiaoEvang, descReligiaoEvang");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadEventosEvangelico&msn=$erro");
}

/****************************************************************************************
*** CADASTRO DOS EVENTOS ESPORTIVOS DO BAIRRO NA PÁGINA "eventosesportivos.php"
*****************************************************************************************/
if($_POST["txtLocal"] == "formCadEventosEsportivos"){
	//captando dados do Formulário
	$titul = $_POST["tituloEsport"]; 
	$desc = $_POST["descEsport"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbeventosesportivos");
	
	$cad->setFields("tituloEsport, descEsport");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadEventosEsportivos&msn=$erro");
}

/****************************************************************************************
*** CADASTRO DAS CURIOSIDADES DO BAIRRO NA PÁGINA "CURIOSIDADES.PHP"
*****************************************************************************************/
if($_POST["txtLocal"] == "formCadCuriosidadeBairro"){
	//captando dados do Formulário
	$titul = $_POST["tituloCuriosi"]; 
	$desc = $_POST["descCuriosi"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbcuriosidades");
	
	$cad->setFields("tituloCuriosidades, descCuriosidades");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadCuriosidadesBairro&msn=$erro");
}


/****************************************************************************************
*** CADASTRO DAS NOTÍCIAS NA INDEX DO SITE JOÃO XXIII
*****************************************************************************************/
if($_POST["txtLocal"] == "formCadNoticiasIndex"){
	//captando dados do Formulário
	$titul = $_POST["tituloNoticias"]; 
	$desc = $_POST["descNoticias"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbnoticiasinicio");
	
	$cad->setFields("tituloNoticias, descNoticias");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadNoticiasIndex&msn=$erro");
}


/****************************************************************************************
*** CADASTRO DOS EMPREGOS NA INDEX DO SITE JOÃO XXIII
*****************************************************************************************/
if($_POST["txtLocal"] == "formCadEmpregosIndex"){
	//captando dados do Formulário
	$titul = $_POST["tituloNoticias"]; 
	$desc = $_POST["descNoticias"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbempregosinicio");
	
	$cad->setFields("tituloEmpregos, descEmpregos");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadEmpregosIndex&msn=$erro");
}


/****************************************************************************************
*** CADASTRO DAS UTILIDADES PÚBLICA NA INDEX DO SITE JOÃO XXIII
*****************************************************************************************/
if($_POST["txtLocal"] == "formCadUtilidadeIndex"){
	//captando dados do Formulário
	$titul = $_POST["tituloUtilidade"]; 
	$desc = $_POST["descUtilidade"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbutilidadepub");
	
	$cad->setFields("tituloUtilidade, descUtilidade");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadUtilidadeIndex&msn=$erro");
}


/****************************************************************************************
*** CADASTRO DOS NOTÍCIAS DO BAIRRO NA PÁGINA BAIRRO
*****************************************************************************************/
if($_POST["txtLocal"] == "formCadNoticiasBairro"){
	//captando dados do Formulário
	$titul = $_POST["tituloBairro"]; 
	$desc = $_POST["descBairro"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbnoticiasbairro");
	
	$cad->setFields("tituloBairro, descBairro");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadNoticiasBairro&msn=$erro");
}

/****************************************************************************************
*** CADASTRO DOS NOTÍCIAS CATÓLICAS DO BAIRRO
***************************************************************************************/
if($_POST["txtLocal"] == "formCadNoticiasCatolico"){
	//captando dados do Formulário
	$titul = $_POST["tituloCatolica"]; 
	$desc = $_POST["descCatolica"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbnoticiascatolica");
	
	$cad->setFields("tituloCatolica, descCatolica");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadNoticiasCatolico&msn=$erro");
}

/****************************************************************************************
*** CADASTRO DOS NOTÍCIAS EVANGÉLICAS NA PÁGINA DO BAIRRO 
***************************************************************************************/
if($_POST["txtLocal"] == "formCadNoticiasEvangeli"){
	//captando dados do Formulário
	$titul = $_POST["tituloEvangel"]; 
	$desc = $_POST["descEvangel"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbnoticiasevangel");
	
	$cad->setFields("tituloEvangel, descEvangel");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadNoticiasEvangelica&msn=$erro");
}


/****************************************************************************************
*** CADASTRO DAS NOTÍCIAS ESPORTIVAS NAS PÁGINAS ESPORTIVAS DO BAIRRO 
***************************************************************************************/
if($_POST["txtLocal"] == "formCadNoticiasEsportivas"){
	//captando dados do Formulário
	$titul = $_POST["tituloEsportiva"]; 
	$desc = $_POST["descEsportiva"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbnoticiasesportiva");
	
	$cad->setFields("tituloEsportiva, descEsportiva");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadNoticiasEsportiva&msn=$erro");
}


/****************************************************************************************
*** CADASTRO DE OUTRAS NOTÍCIAS EM GERAL
***************************************************************************************/
if($_POST["txtLocal"] == "formCadNoticiasOutras"){
	//captando dados do Formulário
	$titul = $_POST["tituloDiversa"]; 
	$desc = $_POST["descDiversa"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbnoticiasdiversa");
	
	$cad->setFields("tituloDiversa, descDiversa");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadNoticiasOutras&msn=$erro");
}

/*****************************************************************
*** CADASTRO DAS DICAS NA INDEX
******************************************************************/
if($_POST["txtLocal"] == "formCadDicaIndex"){
	//captando dados do Formulário
	$concu = $_POST["txtUm"]; 
	$aconte = $_POST["txtDois"];
	$acade = $_POST["txtTres"];
	$clipe = $_POST["txtQuatro"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdicasinicio");
	
	$cad->setFields("destaqSaude, destaqEducacao, destaqTecnologia, destaqAdm");
	$cad->setDados("'$concu', '$aconte', '$acade', '$clipe'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDicasIndex&msn=$erro");
}


/****************************************************************************************
*** CADASTRO DAS DICAS EM GERAL
***************************************************************************************/
if($_POST["txtLocal"] == "formCadDicasDiversas"){
	//captando dados do Formulário
	$titul = $_POST["tituloOutras"]; 
	$desc = $_POST["descOutras"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdicaoutras");
	
	$cad->setFields("tituloOutras, descOutras");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDicasDiversas&msn=$erro");
}

/****************************************************************************************
*** CADASTRO DAS DICAS SOBRE SAÚDE E BELEZA
***************************************************************************************/
if($_POST["txtLocal"] == "formCadDicasSaude"){
	//captando dados do Formulário
	$titul = $_POST["tituloSaude"]; 
	$desc = $_POST["descSaude"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdicasaude");
	
	$cad->setFields("tituloSaude, descSaude");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDicasSaude&msn=$erro");
}

/****************************************************************************************
*** CADASTRO DO TÍTULO DA DICA SOBRE SAÚDE E BELEZA EM DESTAQUE NA INDEX
***************************************************************************************/
if($_POST["txtLocal"] == "formCadDicasSaudeIndex"){
	//captando dados do Formulário
	$titul = $_POST["tituloindexsaude"]; 
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdicasindexsaude");
	
	$cad->setFields("tituloindexsaude");
	$cad->setDados("'$titul'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDicasSaudeIndex&msn=$erro");
}


/****************************************************************************************
*** CADASTRO DAS DICAS SOBRE EDUCAÇÃO
***************************************************************************************/
if($_POST["txtLocal"] == "formCadDicasEducacao"){
	//captando dados do Formulário
	$titul = $_POST["tituloEduca"]; 
	$desc = $_POST["descEduca"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdicaeduca");
	
	$cad->setFields("tituloEduca, descEduca");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDicasEducacao&msn=$erro");
}

/****************************************************************************************
*** CADASTRO DAS DICAS SOBRE ADMINISTRAÇÃO
***************************************************************************************/
if($_POST["txtLocal"] == "formCadDicasADM"){
	//captando dados do Formulário
	$titul = $_POST["tituloAdm"]; 
	$desc = $_POST["descAdm"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdicaadm");
	
	$cad->setFields(" tituloAdm, descAdm");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDicasadm&msn=$erro");
}

/*****************************************************************
*** CADASTRO DA BUSCA NA LATERAL DIREITA SOBRE OS SERVIÇOS DO BAIRRO
******************************************************************/
if($_POST["txtLocal"] == "formCadBuscaServico"){
	//captando dados do Formulário
	$titulemp = $_POST["tituloempresa"]; 
	$descemp = $_POST["descEmpresa"];
	$endemp = $_POST["endUm"];
	$enddois = $_POST["endDois"];
	$endtres = $_POST["endTres"];
	$endquatro = $_POST["endQuatro"];
	$fone = $_POST["numTel"];
	$web = $_POST["emailSite"];
	$mapa = $_POST["mapaSite"];
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbempresas");
	
	$cad->setFields("nomeEmpresas, descEmpresas, endEmpresas, endDois, endTres, endQuatro, foneUm, endWeb, endMapa");
	$cad->setDados("'$titulemp', '$descemp', '$endemp', '$enddois', '$endtres', '$endquatro', '$fone', '$web', '$mapa'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadBuscaServico&msn=$erro");
}

/********************************************************
*** CADASTRO DAS LOGOMARCAS EM DESTAQUE NA PUBLICIDADE
*********************************************************/
if($_POST["txtLocal"] == "formCadLogoPubli"){
	//captando dados do Formulário
	
	$nome = $_POST["txtEmpresa"]; 
	$over = $_POST["txtOver"];
	$link = $_POST["txtLink"];
	$imagem = $_POST["txtImagem"];
	$destaq = $_POST["txtDestaq"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbempresaspublicidade");
	
	$cad->setFields("nomeEmpresa, textOver, linkEmpresa, imgDestaq, dtaqProd");
	$cad->setDados("'$nome', '$over', '$link', '$imagem', '$destaq'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadEmpresasPubli&msn=$erro");
}

/********************************************************
*** CADASTRO DAS FOTOS DO BAIRRO PRESENTE NA INDEX
*********************************************************/
if($_POST["txtLocal"] == "formCadFotoBairroIndex"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"]; 
	$imagem = $_POST["txtImagem"];
	$destaque = $_POST["txtDestaque"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensbairro");
	
	$cad->setFields("nomeProd, descProd, imgProd, dtaqProd");
	$cad->setDados("'$nome', '$descricao', '$imagem', '$destaque'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoBairroIndex&msn=$erro");
}

/*******************************************************************
*** CADASTRO DAS FOTOS DO BAIRRO PRESENTE NA PÁGINA FOTOSJOAO.PHP
********************************************************************/
if($_POST["txtLocal"] == "formCadFotoBairroPagina"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"]; 
	$imagem = $_POST["txtImagem"];
	$destaque = $_POST["txtDestaque"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensbairropag");
	
	$cad->setFields("nomeimg, descimg, imgpag, dtaqimg");
	$cad->setDados("'$nome', '$descricao', '$imagem', '$destaque'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoBairroPagina&msn=$erro");
}


/********************************************************
*** CADASTRO DAS FOTOS DA GALERA PRESENTE NA INDEX
*********************************************************/
if($_POST["txtLocal"] == "formCadFotoGaleraIndex"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"]; 
	$imagem = $_POST["txtImagem"];
	$destaque = $_POST["txtDestaque"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensgalera");
	
	$cad->setFields("nomeGalera, descGalera, imgGalera, dtaqGalera");
	$cad->setDados("'$nome', '$descricao', '$imagem', '$destaque'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoGaleraIndex&msn=$erro");
}

/*******************************************************************
*** CADASTRO DAS FOTOS DA GALERA PRESENTE NA PÁGINA FOTOSGALERA.PHP
********************************************************************/
if($_POST["txtLocal"] == "formCadFotoGaleraPag"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"]; 
	$imagem = $_POST["txtImagem"];
	$destaque = $_POST["txtDestaque"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensgalerapagin");
	
	$cad->setFields("nomeGaPag, descGaPag, imgGaPag, dtaqGaPag");
	$cad->setDados("'$nome', '$descricao', '$imagem', '$destaque'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoGaleraPagina&msn=$erro");
}


/*******************************************************************
*** CADASTRO DAS FOTOS DO LITORAL CEARENCE NA PÁG "fotoslitoral.php"
********************************************************************/
if($_POST["txtLocal"] == "formCadFotoLitoral"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"]; 
	$imagem = $_POST["txtImagem"];
	$destaque = $_POST["txtDestaque"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagenslitoral");
	
	$cad->setFields("nomeLitoral, descLitoral, imgLitoral, dtaqLitoral");
	$cad->setDados("'$nome', '$descricao', '$imagem', '$destaque'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoLitoral&msn=$erro");
}


/*******************************************************************
*** CADASTRO DAS FOTOS DOs LUGARES DO BRASIL NA PÁG "fotoslugares.php"
********************************************************************/
if($_POST["txtLocal"] == "formCadFotoLugares"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"]; 
	$imagem = $_POST["txtImagem"];
	$destaque = $_POST["txtDestaque"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagenslugares");
	
	$cad->setFields("nomeLitoral, descLitoral, imgLitoral, dtaqLitoral");
	$cad->setDados("'$nome', '$descricao', '$imagem', '$destaque'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoLugares&msn=$erro");
}


/*******************************************************************
*** CADASTRO DAS FOTOS DOS MORADORES FALECIDOS
********************************************************************/
if($_POST["txtLocal"] == "formCadFotoFalecidos"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"]; 
	$imagem = $_POST["txtImagem"];
	$destaque = $_POST["txtDestaque"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagenssaudades");
	
	$cad->setFields("nomeMorador, descMorador, imgMorador, dtaqMorador");
	$cad->setDados("'$nome', '$descricao', '$imagem', '$destaque'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoSaudades&msn=$erro");
}


/*******************************************************************
*** CADASTRO DAS FOTOS DOS DESAPARECIDOS
********************************************************************/
if($_POST["txtLocal"] == "formCadFotoDesaparecidos"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"]; 
	$imagem = $_POST["txtImagem"];
	$destaque = $_POST["txtDestaque"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensdesaparecidos");
	
	$cad->setFields("nomeDesaparecidos, descDesaparecidos, imgDesaparecidos, dtaqDesaparecidos");
	$cad->setDados("'$nome', '$descricao', '$imagem', '$destaque'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoDesaparecidos&msn=$erro");
}


/*******************************************************************
*** CADASTRO DAS FOTOS DA RELIGIÃO CATÓLICA
********************************************************************/
if($_POST["txtLocal"] == "formCadFotoCatolicaPag"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"]; 
	$imagem = $_POST["txtImagem"];
	$destaque = $_POST["txtDestaque"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagenscatolica");
	
	$cad->setFields("nomeCatol, descCatol, imgCatol, dtaqCatol");
	$cad->setDados("'$nome', '$descricao', '$imagem', '$destaque'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoReligiCatolica&msn=$erro");
}

/*******************************************************************
*** CADASTRO DAS FOTOS DA RELIGIÃO EVANGÉLICA
********************************************************************/
if($_POST["txtLocal"] == "formCadFotoEvangePag"){
	//captando dados do Formulário
	
	$nome = $_POST["txtNome"]; 
	$imagem = $_POST["txtImagem"];
	$destaque = $_POST["txtDestaque"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensevangelica");
	
	$cad->setFields("nomeEvang, descEvang, imgEvang, dtaqEvang");
	$cad->setDados("'$nome', '$descricao', '$imagem', '$destaque'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoReligiEvang&msn=$erro");
}

/***********************************************************************
*** CADASTRO DAS FOTOS PRESENTES NO TEXTO BUSCA DE SERVIÇOS NA INDEX
************************************************************************/
if($_POST["txtLocal"] == "formCadFotoBuscaServico"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensbuscalogo");
	
	$cad->setFields("logoNome, imglogo");
	$cad->setDados("'$descricao', '$imagem'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoBuscaServico&msn=$erro");
}


/********************************************************
*** CADASTRO DAS FOTOS PRESENTES NO TEXTO EVENTOS
*********************************************************/
if($_POST["txtLocal"] == "formCadFotoTextoEventos"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagenseventos");
	
	$cad->setFields("eventoNome, imgEvento");
	$cad->setDados("'$descricao', '$imagem'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoTextoEventos&msn=$erro");
}

/********************************************************
*** CADASTRO DAS FOTOS PRESENTES NO TEXTO DAS NOTÍCIAS
*********************************************************/
if($_POST["txtLocal"] == "formCadFotoTextoNotici"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensnoticias");
	
	$cad->setFields("noticiaNome, imgNoticia");
	$cad->setDados("'$descricao', '$imagem'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoTextoNoticias&msn=$erro");
}


/*********************************************************************
*** CADASTRO DAS FOTOS QUALQUER PRESENTES EM QUALQUER PARTE DO SITE 
**********************************************************************/
if($_POST["txtLocal"] == "formCadFotoqualqueruma"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensqualquer");
	
	$cad->setFields("nomeLocal, imgNome");
	$cad->setDados("'$descricao', '$imagem'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoQualquer&msn=$erro");
}


/********************************************************
*** CADASTRO DAS FOTOS PRESENTES NO TEXTO DAS DICAS
*********************************************************/
if($_POST["txtLocal"] == "frmCadFotoTextoDicas"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensdicas");
	
	$cad->setFields("noticiaDica, imgDica");
	$cad->setDados("'$descricao', '$imagem'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoTextoDicas&msn=$erro");
}

/********************************************************
*** CADASTRO DAS FOTOS PRESENTES NOS ANÚNCIOS
*********************************************************/
if($_POST["txtLocal"] == "formCadFotoAnuncio"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensanuncio");
	
	$cad->setFields("anuncioNome, imgAnuncio");
	$cad->setDados("'$descricao', '$imagem'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoAnuncio&msn=$erro");
}

/********************************************************
*** CADASTRO DAS FOTOS DOS BANNERS NO TOPO DO SITE
*********************************************************/
if($_POST["txtLocal"] == "formCadBannerTopo"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$nome = $_POST["txtNome"];
	$link = $_POST["txtLink"];
	$over = $_POST["txtOver"];
	$destaq = $_POST["txtDestaq"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbbannerstopo");
	
	$cad->setFields("nomeBanner, imgDestaq, textOver, linkDestaq, dtaqProd");
	$cad->setDados("'$nome', '$imagem', '$over', '$link', '$destaq'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadBannerTopo&msn=$erro");
}

/**************************************************************************
*** CADASTRO DAS FOTOS DOS BANNERS NO MENU PRINCIPAL EM CIMA DA ENQUETE
***************************************************************************/
if($_POST["txtLocal"] == "formCadBannerMenu"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$nome = $_POST["txtNome"];
	$link = $_POST["txtLink"];
	$over = $_POST["txtOver"];
	$destaq = $_POST["txtDestaq"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbbannersmenu");
	
	$cad->setFields("nomeBanner, imgDestaq, textOver, linkDestaq, dtaqProd");
	$cad->setDados("'$nome', '$imagem', '$over', '$link', '$destaq'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadBannerMenu&msn=$erro");
}

/********************************************************
*** CADASTRO DAS FOTOS PRESENTES NO DESTAQUE DO SITE
*********************************************************/
if($_POST["txtLocal"] == "formCadFotoDestaq"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$descricao = $_POST["txtDescricao"];
	$link = $_POST["txtLink"];
	$over = $_POST["txtOver"];
	$pagina = $_POST["txtPagina"];
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdestaque");
	
	$cad->setFields("textoDestaq, imgDestaq, textOver, linkDestaq, destaqPagina");
	$cad->setDados("'$descricao', '$imagem', '$link', '$over', '$pagina'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadDestaq&msn=$erro");
}

/********************************************************
*** CADASTRO DAS FOTOS PRESENTES NO TEXTO DO DIVERTIDO
*********************************************************/
if($_POST["txtLocal"] == "formCadFotoTextoDivertido"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensdivertido");
	
	$cad->setFields("divertidoNome, imgDivertido");
	$cad->setDados("'$descricao', '$imagem'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoTextoDivertido&msn=$erro");
}

/********************************************************
*** CADASTRO DOS ARQUIVOS PDF PARA DOWNLOADS
*********************************************************/
if($_POST["txtLocal"] == "formCadArqPDF"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdownloadpdf");
	
	$cad->setFields("arquivoNome, arquivoExtensao");
	$cad->setDados("'$descricao', '$imagem'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadArquivoDownload&msn=$erro");
}

/********************************************************
*** CADASTRO DOS ARQUIVOS PPS PARA DOWNLOADS
*********************************************************/
if($_POST["txtLocal"] == "formCadArqPPS"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbdownloadpps");
	
	$cad->setFields("arquivoNome, arquivoExtensao");
	$cad->setDados("'$descricao', '$imagem'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadArquivoDownloadPPS&msn=$erro");
}


/***********************************************************
*** CADASTRO DOS CLASSIFICADOS IMÓVEIS
************************************************************/
if($_POST["txtLocal"] == "formCadClassificaImovel"){
	//captando dados do Formulário
	$titul = $_POST["tituloImovel"]; 
	$desc = $_POST["descImovel"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbclassificadoimovel");
	
	$cad->setFields("tituloImovel, descImovel");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadClassificImoveis&msn=$erro");
}




/***********************************************************
*** CADASTRO DOS CLASSIFICADOS TRANSPORTES
************************************************************/
if($_POST["txtLocal"] == "formCadClassificaTranspor"){
	//captando dados do Formulário
	$titul = $_POST["tituloTransp"]; 
	$desc = $_POST["descTransp"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbclassificadotransporte");
	
	$cad->setFields("tituloTransp, descTransp");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadClassificTranspor&msn=$erro");
}

/***********************************************************
*** CADASTRO DOS CLASSIFICADOS DIVERSOS
************************************************************/
if($_POST["txtLocal"] == "formCadClassificaDiversos"){
	//captando dados do Formulário
	$titul = $_POST["tituloOutros"]; 
	$desc = $_POST["descOutros"];	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbclassificadodiversos");
	
	$cad->setFields("tituloOutros, descOutros");
	$cad->setDados("'$titul', '$desc'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadClassificDiversos&msn=$erro");
}

/**************************************************************************
*** CADASTRO DAS FOTOS PRESENTES NO TEXTO DOS IMÓVEIS NOS CLASSIFICADOS
*************************************************************************/
if($_POST["txtLocal"] == "formCadFotoTextoClassifImovel"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensclassificimovel");
	
	$cad->setFields("nomeImovel, imgImovel");
	$cad->setDados("'$descricao', '$imagem'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoTextoClassificaImovel&msn=$erro");
}


/**************************************************************************
*** CADASTRO DAS FOTOS PRESENTES NO TEXTO DOS TRANSPORTES NOS CLASSIFICADOS
*************************************************************************/
if($_POST["txtLocal"] == "formCadFotoTextoClassifTranspor"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensclassifictransporte");
	
	$cad->setFields("nomeTrans, imgTrans");
	$cad->setDados("'$descricao', '$imagem'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoTextoClassificaTransporte&msn=$erro");
}

/**************************************************************************
*** CADASTRO DAS FOTOS PRESENTES NO TEXTO DOS DIVERSOS NOS CLASSIFICADOS
*************************************************************************/
if($_POST["txtLocal"] == "formCadFotoTextoClassifDiversos"){
	//captando dados do Formulário
	
 
	$imagem = $_POST["txtImagem"];
	$descricao = $_POST["txtDescricao"];
	
	
	//instanciando o Objeto de Cadastro
	$cad = new ManipulateData();
	$cad->setTable("tbimagensclassificdiversos");
	
	$cad->setFields("nomeDivers, imgDivers");
	$cad->setDados("'$descricao', '$imagem'");
	$cad->insert();
	$erro = base64_encode($cad->getStatus());
	
@header("Location: ../?telas=frmCadFotoTextoClassificaDiverso&msn=$erro");
}


?>
