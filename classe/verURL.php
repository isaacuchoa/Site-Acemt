

<?php

class verURL{
	function trocarURL($url){
		if(empty($url)){
			$url = "secoes/home.php";
		}else{
			$url = "secoes/$url.php";
		}
		include_once($url);
	}

	
}