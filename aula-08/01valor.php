<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>

  <style type="text/css">
  	a {
  		border: 1px 1px 1px solid black;
  	}
  </style>
</head>
<body>
<div>
    <?php

    	$valor = $_GET["v"];
    	echo "O valor enviado foi $valor <br>";
    	$r = sqrt($valor);
    	echo "<h2>A raiz quadrada deste valor é: " . number_format($r, 2) . "</h2>";
        
    ?>

    <a href="01-exercicio.html">Voltar</a>
</div>
</body>
</html>
 