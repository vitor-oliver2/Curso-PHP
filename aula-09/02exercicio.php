<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php

    $ano = isset($_GET["anoNasc"]) ? $_GET["anoNasc"] : 1900;
    $idade = date("Y") - $ano;
    echo "Você nasceu no ano de $ano e sua idade é $idade.";

    if ($idade < 16) {
    	$tipoVoto = "não pode votar";
    }
    else{
    	if ($idade >=16 and $idade < 18 or $idade > 65) {
    		$tipoVoto = "pode votar se quiser";
    	}
    	else {
    		$tipoVoto = "tem que votar";
    	}
    }

    echo "<br> Contanto, você $tipoVoto.";
        
    ?>
    <br>
    <br>
    <br>
    <br>
    <a href="02-exercicio.html">Voltar</a>
</div>
</body>
</html>
 