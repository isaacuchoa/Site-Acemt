<?php
/*************************************************************************************
**	CLASSE EM PHP QUE FAZ A LEITURA DE BANNERS - MOSTRABANNERS VERSÃO 1.0
**	DATA DA CRIAÇÃO: XX/XX/XXXX
**	DESENVOLVIDO POR: EVERTON WILLIAM
**	CÓDIGO LIVRE MANTIDO PELA GNU
**
**************************************************************************************/
include_once("mySqlConn.php");
include_once("LeFlash.php");

class MostraBanners extends mySqlConn{
	
	private $tamanhoBanner, $caminhoBanner;
	
	public function setTamanhoBanner($t){
		$this->tamanhoBanner = $t;
	}
	
	public function setCaminhoBanner($c){
		$this->caminhoBanner = $c;
	}

	public function mostraBanner(){
		$sql = "SELECT * FROM tbbanners WHERE tamanhoBanner = '$this->tamanhoBanner' ORDER BY RAND()";
		$qr = self::execSql($sql);
				
		while($data = self::listQr($qr)){
		$tipoBanner = explode(".", $data["imgBanner"]);
			if($tipoBanner[1] == "swf"){
				$flash = new LeFlash();
				$flash->setArquivo($tipoBanner[0]);
				$flash->setCaminho($this->caminhoBanner);
				$dimensoes = explode("X", $this->tamanhoBanner);
				$flash->setHW($dimensoes[1], $dimensoes[0]);
				$flash->carregaFlash();
			}else{
				echo " <a href=\"classe/ContaCliques.php?id=".$data["idBanner"]."\" target=\"_blank\">
				<img src=\"".$this->caminhoBanner."/".$data["imgBanner"]."\" alt=\"".$data["descBanner"]."\" border=\"0\" /></a><br /><br />";
			}
		}
	}
	
	public function getUrlBanner($id){
		$sql = "SELECT idBanner, urlBanner FROM tbbanners WHERE idbanner = '$id'";
		$qr = self::execSql($sql);
		$data = self::listQr($qr);
		return $data["urlBanner"];
	}
}

$banner = new MostraBanners();
$banner->setTamanhoBanner("468X60");
$banner->setCaminhoBanner("banners/468X60");
$banner->mostraBanner();
?>