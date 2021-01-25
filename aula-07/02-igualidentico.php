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
    	$a = 3;
    	$b = "3";
    	/*$r = ($a == $b) ? "SIM" : "NÃO";
    	echo "As variáveis A e B são iguais? $r";*/
    	// neste caso o resultado será sim porque as variaveis tem o mesmo valor
    	$r = ($a === $b) ? "SIM" : "NÃO";
    	echo "As variáveis A e B são identicas? $r";
    	// neste caso o resultado será não porque as variaveis não possuem o mesmo tipo
    ?>
</div>
</body>
</html>
 