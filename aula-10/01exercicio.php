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

    	$numero = isset($_GET["n"]) ? $_GET["n"] : 0; 
    	$opcao = isset($_GET["op"]) ? $_GET["op"] : 1;

    	echo "O valor digitado foi $numero<br>";

    	switch ($opcao) {
    		case 1:
    			$numero = $numero * 2;
    			break;
    		case 2:
    			$numero = $numero * $numero * $numero;
    			break;
    		case 3:
    			$numero = sqrt($numero);
    			break;
    		default:
    			echo "<br> ERRO! Opção inválida!<br>";
    			break;
    	}

    	echo "A opção escolhida foi $opcao. <br>O valor é $numero.";
        
    ?>
    <br><br><br><br><br><br><br><br>
    <a href="01-exercicio.html">Voltar</a>
</div>
</body>
</html>
 