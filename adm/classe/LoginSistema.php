<?php 
	include_once("mySqlConn.php");
	
	class LoginSistema extends MySqlConn{
		
		private $usuario, $senha;
		
		public function setUsuario($usr){
			$this->usuario = $usr;
		}
		
		public function setSenha($snh){
			$this->senha = md5($snh);
		}		
	
		public function executeLogin(){
			$sql = "SELECT * FROM tbusuario WHERE emailUser = '$this->usuario' AND senhaUser = '$this->senha'";
			$qr = self::execSql($sql);
			$total = self::countData($qr);  // resgatar quantos dados foram encontrados
			
			if($total > 1){
				$erro = base64_encode("Dados Duplicados, login n&atilde;o efetuado, entre em contato com o Administrador");
				@header("Location: ../login.php?msn=$erro");
			}else if($total <= 0){
				$erro = base64_encode("Login ou Senha Inv&aacute;lidos");
				@header("Location: ../login.php?msn=$erro");
			}else if($total == "1"){
				session_start();						//abre a sessao
				$dados = self::listQr($qr);				// resgato os dados
				$_SESSION["LOGADO"] = "TRUE";			// carregar a sessão logado
				$_SESSION["NOME"] = $dados["nomeUser"];	// carregar a sessão nome
				@header("Location: ../index.php");		// faço o redirect	
			}
		}
	}
/****************************************
**	executando o login
*****************************************/
	if($_POST["txtLocal"] == "frmLogin"){
		$login = new LoginSistema();
		$login->setUsuario($_POST["txtUsuario"]);
		$login->setSenha($_POST["txtSenha"]);
		$login->executeLogin();
	}else if($_GET["txtLocal"] == "logOff"){
		session_start();
		session_destroy();
		session_unset();
		$erro = base64_encode("Acabou de sair do sistema!!!");
		@header("Location: ../login.php?msn=$erro");
	}else{
		$erro = base64_encode("Acesso de forma inadequada, entre em contato com o Administrador");
		@header("Location: ../login.php?msn=$erro");
	}
?>