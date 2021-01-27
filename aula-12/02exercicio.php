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
    	$numero = $_GET["n"];
    	$contador = $numero;
    	$fatorial = 1;
    	do {
    		$fatorial = $fatorial * $contador;
    		$contador--;
    	}
    	while ($contador >= 1);

    	echo "$numero ! = $fatorial";
        
    ?>

    <br><br><br><br>
    <a href="02-exercicio.html">Voltar</a>
</div>
</body>
</html>
 