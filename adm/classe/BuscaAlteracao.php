<?php 
	include_once("mySqlConn.php");
/***************************************************************
***	ALTERAวรO DAS NOTอCIAS NA INDEX
****************************************************************/		
	class BuscaAlteracaoSlideIndex extends MySqlConn{
		
		private $id, $titulo, $link, $titulink, $imagem, $noticia;
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getTitulo(){
			return $this->titulo;
		}
		
		public function getLink(){
			return $this->link;
		}
		
		public function getTituLink(){
			return $this->titulink;
		}
		
		public function getImagem(){
			return $this->imagem;
		}
		
		public function getNoticia(){
			return $this->noticia;
		}
			
		public function geraDados(){
			$sql = "SELECT * FROM tbslidenoticias WHERE idSlide = '$this->id'";
			$qr = self::execSql($sql);
			$dados = self::listQr($qr);
			
			
			$this->titulo = $dados["tituloNoticia"];
			$this->link = $dados["linkPagina"];
			$this->titulink = $dados["tituloLink"];
			$this->imagem = $dados["imgDestaque"];
			$this->noticia = $dados["textoPagina"];
			
		}
	}
	
/***************************************************************
***	ALTERAวรO DOS ARTIGOS
****************************************************************/		
	class BuscaAlteracaoArtigos extends MySqlConn{
		
		private $id, $titulo, $imagem, $noticia;
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getTitulo(){
			return $this->titulo;
		}
		
		public function getImagem(){
			return $this->imagem;
		}
		
		public function getNoticia(){
			return $this->noticia;
		}
			
		public function geraDados(){
			$sql = "SELECT * FROM tbartigos WHERE idArtigos = '$this->id'";
			$qr = self::execSql($sql);
			$dados = self::listQr($qr);
			
			
			$this->titulo = $dados["tituloArtigos"];
			$this->imagem = $dados["imagem"];
			$this->noticia = $dados["descArtigos"];
			
		}
	}

	
/***************************************************************
***	ALTERAวรO DA HISTำRIA ACEMT
****************************************************************/		
	class BuscaAlteracaoHistoria extends MySqlConn{
		
		private $id, $descricao;
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function getDescricao(){
			return $this->descricao;
		}
			
		public function geraDados(){
			$sql = "SELECT * FROM tbhistoria WHERE idHistoria = '$this->id'";
			$qr = self::execSql($sql);
			$dados = self::listQr($qr);
			
			
			$this->nome = $dados["tituloHistoria"];
			$this->descricao = $dados["descHistoria"];
			
		}
	}
	
/***************************************************************
***	ALTERAวรO DA AGENDA
****************************************************************/		
	class BuscaAlteracaoAgenda extends MySqlConn{
		
		private $id, $titulo, $tempo, $hora, $resumo, $desc;
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getTitulo(){
			return $this->titulo;
		}
		
		public function getData(){
			return $this->tempo;
		}
		
		public function getHora(){
			return $this->hora;
		}
		
		public function getResumo(){
			return $this->resumo;
		}
		
		public function getDesc(){
			return $this->descricao;
		}
			
		public function geraDados(){
			$sql = "SELECT * FROM tbagenda WHERE idAgenda = '$this->id'";
			$qr = self::execSql($sql);
			$dados = self::listQr($qr);
			
			
			$this->titulo = $dados["tituloAgenda"];
			$this->tempo = $dados["data"];
			$this->hora = $dados["hora"];
			$this->resumo = $dados["resumo"];
			$this->descricao = $dados["descAgenda"];
			
		}
	}

/***************************************************************
***	ALTERAวรO DOS ASSOCIADOS
****************************************************************/		
	class BuscaAlteracaoAssociados extends MySqlConn{
		
		private $id, $titulo, $tempo, $site, $twitter, $email, $desc;
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getTitulo(){
			return $this->titulo;
		}
		
		public function getTempo(){
			return $this->tempo;
		}
		
		public function getSite(){
			return $this->site;
		}
		
		public function getTwitter(){
			return $this->twitter;
		}
		
		public function getEmail(){
			return $this->email;
		}
		
		public function getDesc(){
			return $this->desc;
		}
			
		public function geraDados(){
			$sql = "SELECT * FROM tbbusca WHERE idBusca = '$this->id'";
			$qr = self::execSql($sql);
			$dados = self::listQr($qr);
			
			
			$this->titulo = $dados["nomeMedico"];
			$this->tempo = $dados["dataAssociacao"];
			$this->site = $dados["site"];
			$this->twitter = $dados["twitter"];
			$this->email = $dados["email"];
			$this->desc = $dados["descricao"];
			
		}
	}

/***************************************************************
***	ALTERAวรO DAS FOTOS ACEMT
****************************************************************/		
	class BuscaAlteracaoFotos extends MySqlConn{
		
		private $id, $titulo, $local, $imagem, $destaq;
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getTitulo(){
			return $this->titulo;
		}
		
		public function getLocal(){
			return $this->local;
		}
		
		public function getImagem(){
			return $this->imagem;
		}
		
		public function getDestaq(){
			return $this->destaq;
		}
		
		public function geraDados(){
			$sql = "SELECT * FROM tbfotos WHERE idImg = '$this->id'";
			$qr = self::execSql($sql);
			$dados = self::listQr($qr);
			
			
			$this->titulo = $dados["nomeFoto"];
			$this->local = $dados["descFoto"];
			$this->imagem = $dados["imgFoto"];
			$this->destaq = $dados["destaqFoto"];
			
		}
	}

/***************************************************************
***	ALTERAวรO DA BIBLIOGRAFIA
****************************************************************/		
	class BuscaAlteracaoBibliografia extends MySqlConn{
		
		private $id, $descricao;
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function getDescricao(){
			return $this->descricao;
		}
			
		public function geraDados(){
			$sql = "SELECT * FROM tbbibliografia WHERE idBiblio = '$this->id'";
			$qr = self::execSql($sql);
			$dados = self::listQr($qr);
			
			
			$this->nome = $dados["tituloBiblio"];
			$this->descricao = $dados["descBiblio"];
			
		}
	}

	


/***************************************************************
***	ALTERAวรO DOS VอDEOS MARCOS BRAUN
****************************************************************/		
	class BuscaAlteracaoVideosMarc extends MySqlConn{
		
		private $id, $nome, $over, $descricao;
		
		public function setId($id){
			$this->id = $id;
		}
		
		public function getNome(){
			return $this->nome;
		}
		
		public function getOver(){
			return $this->over;
		}		
		
		public function getDescricao(){
			return $this->descricao;
		}
			
		public function geraDados(){
			$sql = "SELECT * FROM tbvideos WHERE idVideos = '$this->id'";
			$qr = self::execSql($sql);
			$dados = self::listQr($qr);
			
			$this->nome = $dados["video"];
			$this->over = $dados["txtOver"];
			$this->descricao = $dados["conteudoVideo"];
			
		}
	}
	


?>