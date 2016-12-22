<?php 
include_once("../classe/ManipulateData.php");

/*********************************************
*** EXCLUSÃO DAS NOTÍCIAS NO SLIDE INDEX
**********************************************/
if($_GET["local"] == "exsli"){
	$deletar = new ManipulateData();
	$deletar->setTable("tbslidenoticias");
	$deletar->setFieldId("idSlide");
	$deletar->setValueId($_GET["id"]);
	$deletar->delete();
	
	@header("Location: ../?telas=frmManuSlideNoticias");
}

/*********************************************
*** EXCLUSÃO DOS ARTIGOS
**********************************************/
if($_GET["local"] == "exartigos"){
	$deletar = new ManipulateData();
	$deletar->setTable("tbartigos");
	$deletar->setFieldId("idArtigos");
	$deletar->setValueId($_GET["id"]);
	$deletar->delete();
	
	@header("Location: ../?telas=frmManuArtigos");
}

/*********************************************
*** EXCLUSÃO DA AGENDA
**********************************************/
if($_GET["local"] == "exagenda"){
	$deletar = new ManipulateData();
	$deletar->setTable("tbagenda");
	$deletar->setFieldId("idAgenda");
	$deletar->setValueId($_GET["id"]);
	$deletar->delete();
	
	@header("Location: ../?telas=frmManuAgenda");
}

/*********************************************
*** EXCLUSÃO DA HISTÓRIA
**********************************************/
if($_GET["local"] == "exhistoria"){
	$deletar = new ManipulateData();
	$deletar->setTable("tbhistoria");
	$deletar->setFieldId("idHistoria");
	$deletar->setValueId($_GET["id"]);
	$deletar->delete();
	
	@header("Location: ../?telas=frmManuHistoria");
}

/*********************************************
*** EXCLUSÃO DA BIBLIOGRAFIA
**********************************************/
if($_GET["local"] == "exbibliografia"){
	$deletar = new ManipulateData();
	$deletar->setTable("tbbibliografia");
	$deletar->setFieldId("idBiblio");
	$deletar->setValueId($_GET["id"]);
	$deletar->delete();
	
	@header("Location: ../?telas=frmManuBibliografia");
}


/*********************************************
*** EXCLUSÃO DOS ASSOCIADOS
**********************************************/
if($_GET["local"] == "exassociados"){
	$deletar = new ManipulateData();
	$deletar->setTable("tbbusca");
	$deletar->setFieldId("idBusca");
	$deletar->setValueId($_GET["id"]);
	$deletar->delete();
	
	@header("Location: ../?telas=frmManuAssociados");
}

/*********************************************
*** EXCLUSÃO DAS FOTOS
**********************************************/
if($_GET["local"] == "exfotos"){
	$deletar = new ManipulateData();
	$deletar->setTable("tbfotos");
	$deletar->setFieldId("idImg");
	$deletar->setValueId($_GET["id"]);
	$deletar->delete();
	
	@header("Location: ../?telas=frmManuFotos");
}


?>
