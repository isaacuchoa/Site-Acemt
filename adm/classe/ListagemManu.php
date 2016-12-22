<?php 
include_once("CriaPaginacao.php");

class ListagemManu extends CriaPaginacao{

	private $strCampoPesquisa, $strNumPagina, $strPaginas, $strUrl, $idPesquisa;
	
	public function setNumPagina($x){
		$this->strNumPagina = $x;
	}

	public function setUrl($x){
		$this->strUrl = $x;
	}
	
	public function setIdPesquisa($id){
		$this->idPesquisa = $id;
	}
	
	public function setCampoPesquisa($x){
		$this->strCampoPesquisa = $x;
	}
	
	public function getPaginas(){
		return $this->strNumPagina = $x;
	}
	
/********************************************
** Manutenção da Slide de notícias na index
*********************************************/
	public function geraManuSlideNoticias(){
		$sql = "SELECT * FROM tbslidenoticias WHERE tituloNoticia LIKE '%$this->strCampoPesquisa%' ORDER BY tituloNoticia";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(6); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($historia = self::results()){
			$contador ++;
			echo '
					<tr>
					  <td width="65%" height="25" align="left">'.$historia["tituloNoticia"].'</td>
					 
					  <td width="17%" align="left"><a href="?telas=frmAltNoticiasSlideNoticias&id='.$historia["idSlide"].'">Alterar</a></td>
					  <td width="18%" align="center"><a href="funcoes/excluir.php?local=exsli&id='.$historia["idSlide"].'">Excluir</a></td>
					</tr>	
				';
			self::setContador($contador);
		}
	}
	
/********************************************
** Manutenção dos Artigos
*********************************************/
	public function geraManuArtigos(){
		$sql = "SELECT * FROM tbartigos WHERE tituloArtigos LIKE '%$this->strCampoPesquisa%' ORDER BY tituloArtigos";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(6); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($historia = self::results()){
			$contador ++;
			echo '
					<tr>
					  <td width="65%" height="25" align="left">'.$historia["tituloArtigos"].'</td>
					 
					  <td width="17%" align="left"><a href="?telas=frmAltArtigos&id='.$historia["idArtigos"].'">Alterar</a></td>
					  <td width="18%" align="center"><a href="funcoes/excluir.php?local=exartigos&id='.$historia["idArtigos"].'">Excluir</a></td>
					</tr>	
				';
			self::setContador($contador);
		}
	}
	
/**************************************
** Manutenção da História do Site
**************************************/
	public function geraManuHistoria(){
		$sql = "SELECT * FROM tbhistoria WHERE tituloHistoria LIKE '%$this->strCampoPesquisa%' ORDER BY tituloHistoria";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(6); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($historia = self::results()){
			$contador ++;
			echo '
					<tr>
					  <td width="65%" height="25" align="left">'.$historia["tituloHistoria"].'</td>
					 
					  <td width="17%" align="left"><a href="?telas=frmAltHistoria&id='.$historia["idHistoria"].'">Alterar</a></td>
					  <td width="18%" align="center"><a href="funcoes/excluir.php?local=exhistoria&id='.$historia["idHistoria"].'">Excluir</a></td>
					</tr>	
				';
			self::setContador($contador);
		}
	}

/**************************************
** Manutenção da Agenda do Site
**************************************/
	public function geraManuAgenda(){
		$sql = "SELECT * FROM tbagenda WHERE tituloAgenda LIKE '%$this->strCampoPesquisa%' ORDER BY tituloAgenda";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(6); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($historia = self::results()){
			$contador ++;
			echo '
					<tr>
					  <td width="65%" height="25" align="left">'.$historia["tituloAgenda"].'</td>
					 
					  <td width="17%" align="left"><a href="?telas=frmAltAgenda&id='.$historia["idAgenda"].'">Alterar</a></td>
					  <td width="18%" align="center"><a href="funcoes/excluir.php?local=exagenda&id='.$historia["idAgenda"].'">Excluir</a></td>
					</tr>	
				';
			self::setContador($contador);
		}
	}

/********************************************
** Manutenção dos Associados
*********************************************/
	public function geraManuAssociados(){
		$sql = "SELECT * FROM tbbusca WHERE nomeMedico LIKE '%$this->strCampoPesquisa%' ORDER BY nomeMedico";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(6); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($historia = self::results()){
			$contador ++;
			echo '
					<tr>
					  <td width="65%" height="25" align="left">'.$historia["nomeMedico"].'</td>
					 
					  <td width="17%" align="left"><a href="?telas=frmAltAssociados&id='.$historia["idBusca"].'">Alterar</a></td>
					  <td width="18%" align="center"><a href="funcoes/excluir.php?local=exassociados&id='.$historia["idBusca"].'">Excluir</a></td>
					</tr>	
				';
			self::setContador($contador);
		}
	}
	
/********************************************
** Manutenção das Fotos
*********************************************/
	public function geraManuFotos(){
		$sql = "SELECT * FROM tbfotos WHERE nomeFoto LIKE '%$this->strCampoPesquisa%' ORDER BY nomeFoto";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(6); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($historia = self::results()){
			$contador ++;
			echo '
					<tr>
					  <td width="65%" height="25" align="left">'.$historia["nomeFoto"].'</td>
					 
					  <td width="17%" align="left"><a href="?telas=frmAltFotos&id='.$historia["idImg"].'">Alterar</a></td>
					  <td width="18%" align="center"><a href="funcoes/excluir.php?local=exfotos&id='.$historia["idImg"].'">Excluir</a></td>
					</tr>	
				';
			self::setContador($contador);
		}
	}
	
/********************************************
** Manutenção da Bibliografia
*********************************************/
	public function geraManuBibliografia(){
		$sql = "SELECT * FROM tbbibliografia WHERE tituloBiblio LIKE '%$this->strCampoPesquisa%' ORDER BY tituloBiblio";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(6); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($historia = self::results()){
			$contador ++;
			echo '
					<tr>
					  <td width="65%" height="25" align="left">'.$historia["tituloBiblio"].'</td>
					 
					  <td width="17%" align="left"><a href="?telas=frmAltBibliogra&id='.$historia["idBiblio"].'">Alterar</a></td>
					  <td width="18%" align="center"><a href="funcoes/excluir.php?local=exbibliografia&id='.$historia["idBiblio"].'">Excluir</a></td>
					</tr>	
				';
			self::setContador($contador);
		}
	}

	
	

/**************************************
** Manutenção dos Vídeos do site
**************************************/
	public function geraManuVideosMarcos(){
		$sql = "SELECT * FROM tbvideos WHERE video LIKE '%$this->strCampoPesquisa%' ORDER BY video";
		$this->setParametro($this->strNumPagina); //numero de pagina atual
		$this->setFileName($this->strUrl); // nome da pagina atual
		$this->setInfoMaxPag(6); // quantidade de produtos por tela
		$this->setMaximoLinks(10); //quantidade de links para a paaginacao
		$this->setSQL($sql);
		self::iniciaPaginacao();
		$contador = 0; // contador para gerar o numero de paginas
		while($prod = self::results()){
			$contador ++;
			echo '
					<tr>
					  <td width="65%" height="25" align="left">'.$prod["video"].'</td>
					 
					  <td width="17%" align="left"><a href="?telas=frmAltVideos&id='.$prod["idVideos"].'">Alterar</a></td>
					  <td width="18%" align="center"><a href="funcoes/excluir.php?local=excurso&id='.$prod["idVideos"].'">Excluir</a></td>
					</tr>	
				';
			self::setContador($contador);
		}
	}
	
	


}
?>