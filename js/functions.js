// JavaScript Document
/********************************** 
Função do AJAX
***********************************/
function ajax(){
try{
    xmlhttp = new XMLHttpRequest();
	}catch(ee){
    	try{
        	xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    	}catch(e){
        	try{
            	xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        	}catch(E){
            	xmlhttp = false;
        	}
    	}
	}
}
/********************************** 
Formatação para qualquer mascara 
***********************************/
function formatar(src, mask) 
{
  var i = src.value.length;
  var saida = mask.substring(0,1);
  var texto = mask.substring(i)
if (texto.substring(0,1) != saida) 
  {
	src.value += texto.substring(0,1);
  }
}

/*****************************************
*** POP-UP
******************************************/
function openWindow(url, nomeWindow,config){
  		janela = window.open(url,nomeWindow,config);
		text = "Se a janela não abrir, é porque você tem um programa \r bloquedor de pop-ups! \r o Windows XP Bloqueia Pop-up";
		if(janela == null) {
			alert(text); 
			return false;
		}
   		janela.moveTo(300,200);
}

/***********************************************
** Cadastro de MENUS
************************************************/
function verTipo(idS){
	var tipo = document.getElementById("txtTipo");
	var url = document.getElementById("txtUrl");
	
	if(tipo.value == "1"){
		url.value = "?secao=verdecoracao&idS="+idS+"&idSb=0";
		url.focus();
	}else{
		url.value = "JavaScript:void();";
	}	
}

/***********************************************
** Manipulando Strings
************************************************/
function limpa(str) {                
   var tamanho = str.length;
   var novaString = "";
   for(i = 0; i <= tamanho; i++ ) {
      if( str.charAt(i) != " " ) {
         novaString += str.charAt(i);
      }
   }
   return novaString;
}

function insereNomeCss(){
	var descricao = document.getElementById("txtDescricao");
	var css = document.getElementById("txtCss");
	
	css.value = "bt_"+limpa(descricao.value);
}

// Controla Imagens
function PrevFoto(img, id){
  foto1= new Image();
  foto1.src=(img);
  Controlla(img, id);
}

function Controlla(img , id){
  if((foto1.width!=0)&&(foto1.height!=0)){
    viewFoto(img, id);
  }
  else{
    funzione="Controlla('"+img+"')";
    intervallo=setTimeout(funzione,20);
  }
}

function viewFoto(img, id){
  largh=foto1.width;
  altez=foto1.height+60;
  stringa="width="+largh+",height="+altez+",scrollbars=yes";
  finestra=window.open("popup.php?img="+id,"",stringa);
  finestra.moveTo(300,200);
}
