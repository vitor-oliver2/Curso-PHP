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

    	// Função que pega como parametro o VALOR
    	function soma_val ($a){
    		$a = $a + 2;
    		echo "Somando por valor: $a <br>";
    	}
    	// Função que pega como parametro a REFERENCIA
    	function soma_ref (&$a){
    		$a = $a + 2;
    		echo "<br>Somando por referência: $a <br>";
    	}

    	$num = 3;
    	echo "<h2>A variável vale: $num </h2>";
    	soma_val($num);
    	echo "Valor da variável: $num <br>";
    	soma_ref($num);
    	echo "Valor da variável: $num <br>";
        
    ?>
</div>
</body>
</html>
 