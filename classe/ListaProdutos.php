<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include_once("CriaPaginacao.php");

class ListaProdutos extends CriaPaginacao{

	private $strSessao, $strNumPagina, $strPaginas, $strUrl;
	
	public function setNumPagina($x){
		$this->strNumPagina = $x;
	}

	public function setUrl($x){
		$this->strUrl = $x;
	}
	
	public function setSessao($x){
		$strSessao = $x;
	}
	
	public function getPaginas(){
		return $this->strNumPagina = $x;
	}
	

/**********************************************************
** Fotos e conteudo do slide de noticias na index
***********************************************************/
	public function geraSlideNoticias(){
		$sql = "SELECT idSlide, tituloNoticia, linkPagina, tituloLink, imgDestaque, textoPagina, dtaqSlide FROM tbslidenoticias WHERE dtaqSlide='1' ORDER BY RAND()";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(5); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($conteudoslide = self::results()){
			$contador ++;
			echo "
			<li>
			<a href=\"noticiadestaque.php?id=".$conteudoslide["idSlide"]."\" title=\"".$conteudoslide["tituloLink"]."\">
				<img src=\"adm/imgslideg/".$conteudoslide["imgDestaque"]."\" alt=\"Destaque/".Fotos."\" />
			</a>
			<div class=\"fundo\"><!--  --></div>
			<p><a href=\"noticiadestaque.php?id=".$conteudoslide["idSlide"]."\" title=\"".$conteudoslide["tituloLink"]."\" >".$conteudoslide["tituloNoticia"]."</a></p>
			</li>
								
				";
			self::setContador($contador);
		}
	}


/**********************************************************
** História do site
***********************************************************/
	public function geraHistoria(){
		$sql = "SELECT idHistoria, tituloHistoria, descHistoria FROM tbhistoria ORDER BY idHistoria DESC";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(1); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($historia = self::results()){
			$contador ++;
			echo "
			<p>
			".$historia["descHistoria"]." 
			</p>
								
				";
			self::setContador($contador);
		}
	}
	
	
/**********************************************************
** Bibliografia do site
***********************************************************/
	public function geraBibliografia(){
		$sql = "SELECT idBiblio, tituloBiblio, descBiblio FROM tbbibliografia ORDER BY idBiblio DESC";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(1); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($historia = self::results()){
			$contador ++;
			echo "
			<p>
			".$historia["descBiblio"]." 
			</p>
								
				";
			self::setContador($contador);
		}
	}

/**********************************************************
** Diretoria do site
***********************************************************/
	public function geraDiretoria(){
		$sql = "SELECT idDiretoria, tituloDiretoria, desDiretoria FROM tbdiretoria ORDER BY idDiretoria DESC";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(1); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($diretoria = self::results()){
			$contador ++;
			echo "
			<p>
			".$diretoria["desDiretoria"]." 
			</p>
								
				";
			self::setContador($contador);
		}
	}
	
	
/**********************************************************
** Agenda do site
***********************************************************/
	public function geraAgenda(){
		$sql = "SELECT idArtigos, imagem, tituloArtigos, descArtigos FROM tbartigos ORDER BY idArtigos DESC";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(7); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($agenda = self::results()){
			$contador ++;
			echo "
			<div class=\"data_evento\">".$agenda["data"]."\" - ".$agenda["hora"]."</div>
<div class=\"evento\">".$agenda["tituloAgenda"]." </div>
								
				";
			self::setContador($contador);
		}
	}
	
/**********************************************************
** Fotos dos Eventos ACEMT
***********************************************************/
	public function geraPagFotos(){
		$sql = "SELECT idImg, nomeFoto, imgFoto, descFoto, destaqFoto FROM tbfotos WHERE destaqFoto='1' ORDER BY RAND()";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(500); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($fotos = self::results()){
			$contador ++;
			echo "
					<a href=\"fotosg/".$fotos["imgFoto"]."\" title=\"".$fotos["descFoto"]."\" rel=\"gallery-plants\" class=\"thickbox\">
					<img src=\"fotosp/".$fotos["imgFoto"]."\" alt=\"Foto ACEMT/".$fotos["descFoto"]."\" />
					</a>
								
				";
			self::setContador($contador);
		}
	}
/**********************************************************
** Página agenda do site
***********************************************************/
	public function geraAgendaPag(){
		$sql = "SELECT idAgenda, data, hora, tituloAgenda, descAgenda FROM tbagenda ORDER BY idAgenda DESC";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(15); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($agenda = self::results()){
			$contador ++;
			echo "
			
			<div class=\"AccordionPanel\">
    <div class=\"AccordionPanelTab\">".$agenda["tituloAgenda"]." | ".$agenda["data"]." - ".$agenda["hora"]."</div>
    <div class=\"AccordionPanelContent\">".$agenda["descAgenda"]."</div>
  			</div>
								
				";
			self::setContador($contador);
		}
	}	
	

/**********************************************************
** Página Associados do site
***********************************************************/
	public function geraAssociadosPag(){
		$sql = "SELECT idBusca, nomeMedico, dataAssociacao, especialidade, site, twitter, email, descricao FROM tbbusca ORDER BY idBusca DESC";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(15); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($associados = self::results()){
			$contador ++;
			echo "
			
			<div class=\"AccordionPanel\">
    <div class=\"AccordionPanelTab\">Associado: ".$associados["nomeMedico"]."</div>
    <div class=\"AccordionPanelContent\">
	<strong>Data da Associação:</strong> ".$associados["dataAssociacao"]." <br> Site: ".$associados["site"]."
	
	<br>Twitter: ".$associados["twitter"]." <br>Email: ".$associados["email"]." <p><strong>Descrição:</strong> ".$associados["descricao"]."
	
	
	</div>
  			
			
			
			</div>
			
			
								
				";
			self::setContador($contador);
		}
	}	
	
	
/**********************************************************
** Página Artigos do site
***********************************************************/
	public function geraArtigosPag(){
		$sql = "SELECT idArtigos, imagem, tituloArtigos, descArtigos, destaqArtigos FROM tbartigos ORDER BY idArtigos DESC";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(15); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($artigos = self::results()){
			$contador ++;
			echo "
			
			<div class=\"AccordionPanel\">
    <div class=\"AccordionPanelTab\">".$artigos["tituloArtigos"]."</div>
    <div class=\"AccordionPanelContent\">".$artigos["descArtigos"]."</div>
  			</div>
  			
											
				";
			self::setContador($contador);
		}
	}	
	

/**********************************************************
** Página Empregos do site
***********************************************************/
	public function geraEmpregosPag(){
		$sql = "SELECT idEmprego, tituloEmprego, descEmprego FROM tbempregos ORDER BY idEmprego DESC";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(15); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($artigos = self::results()){
			$contador ++;
			echo "
			
			<div class=\"AccordionPanel\">
    <div class=\"AccordionPanelTab\">".$artigos["tituloEmprego"]."</div>
    <div class=\"AccordionPanelContent\">".$artigos["descEmprego"]."</div>
  			</div>
  			
											
				";
			self::setContador($contador);
		}
	}	

	

/*****************************************
** Lista Pesquisa
******************************************/
	public function geraListaPesquisa($strBusca){
		$sql = "SELECT idProd, nomeProd, imgProd, descProd FROM tbprodutos WHERE nomeProd LIKE '%$strBusca%' ";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(3); // quantidade de produtos por tela
		$this->setMaximoLinks(6); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($prod = self::results()){
			$contador ++;
			echo "
					<li>
					<a href=\"fotospopup/".$prod["imgProd"]."\" title=\"".$prod["descProd"]."\">
					<img src=\"fotosproduto/".$prod["imgProd"]."\" alt=\"".$prod["nomeProd"]."\" />
					</a>
					<span class=\"desc-heart\">".$prod["nomeProd"]."</span>
					</li>						
				";
			self::setContador($contador);
		}		
	}
}



?>

<script src='http://ads24110.hotwords.com.br/show.jsp?id=24110'></script>

</body>
</html>