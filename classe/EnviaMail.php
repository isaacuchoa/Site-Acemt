<?php

class enviaMail{

	private $nome, $fone, $emailRemetente, $assunto, $mensagem, $destinatario, $status;
	
	public function setNome($i){
		$this->nome = $i;
	}
	
	public function setEmail($i){
		$this->emailRemetente = $i;
	}
	
	public function setFone($i){
		$this->fone = $i;
	}
	
	public function setAssunto($i){
		$this->assunto = $i;
	}
	
	public function setMensagem($i){
		$this->mensagem = $i;
	}

	public function setDestinatario($i){
		$this->destinatario = $i;
	}

	public function getStatus(){
		return $this->status;
	}
	
	public function enviar(){
		$corpo = "
				<b>nome:</b> $this->nome <br />
				<b>Telefone:</b> $this->fone <br />
				<b>E-mail:</b> $this->emailRemetente <br />
				<b>Assunto:</b> $this->assunto <br />
				<b>Mensagem:</b>  <br />
				$this->mensagem	
		";
		
		$assunto = "Contato do site ACEMT";
		
		$headers .= "From: ".$this->nome."<".strtolower($this->emailRemetente).">\r\n"; 
		$headers .= "X-Priority: 3\r\n"; 
		$headers .= "X-Mailer: Formmail [version 1.0]\r\n"; 
		$headers .= "MIME-Version: 1.0\r\n"; 
		$headers .= "Content-Transfer-Encoding: 8bit\r\n"; 
		$headers .= 'Content-Type: text/html; charset="iso-8859-1"'; 
		
		$enviado = @mail($this->destinatario,$assunto,$corpo,$headers);
		if($enviado){
			$this->status = base64_encode("Mensagem enviada com Sucesso. Aguarde o nosso contato!!!");
		}else{
			$this->status = base64_encode("Erro ao Enviar, tente novamente mais tarde!!!");
		}
	}
}

/***********************************************************************************
** EXECUTANDO O OBJETO...
*************************************************************************************/
$envia = new enviaMail();
$envia->setNome($_POST["txtNome"]);
$envia->setEmail($_POST["txtEmail"]);
$envia->setFone($_POST["txtFone"]);
$envia->setAssunto($_POST["txtAssunto"]);
$envia->setMensagem($_POST["txtMensagem"]);
$envia->setDestinatario("diretoria@acemt.com.br");
$envia->enviar();
header("Location: ../?secao=contato&msn=".$envia->getStatus());


?>