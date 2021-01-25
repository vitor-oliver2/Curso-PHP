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

    if ($idade >= 18) {
    	$votar = "pode votar";
    	$dirigir = "pode dirigir";
    }

    else {
    	$votar = "não pode votar";
    	$dirigir = "não pode dirigir";
    }

    echo "<br> Contanto, você $votar e $dirigir.";
        
    ?>
    <br>
    <br>
    <br>
    <br>
    <a href="01-exercicio.html">Voltar</a>
</div>
</body>
</html>
 