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

    	$dia = isset($_GET["ds"]) ? $_GET["ds"] : 0;
    	
    	switch ($dia) {
    		case 1:
    		case 7:
    			echo "<br>Uhuuu, hoje não tem aula! :) <br>";
    			break;
    		case 2:
    		case 3:
    		case 4:
    		case 5:
    		case 6:
    			echo "<br>Hoje tem aula! :( <br>";
    			break;
    		default:
    			echo "Dia da semana inválido!";
    	}
        
    ?>
    <br><br><br><br><br><br><br><br>
    <a href="02-exercicio.html">Voltar</a>
</div>
</body>
</html>
 