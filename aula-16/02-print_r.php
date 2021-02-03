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

    	$v[0] = 4;
    	$v[1] = 8;
    	$v[2] = 3;

    	//print_r($v); // funcao imprime os valores do vetor

    	$v2 = array(3, 7, 7, 8, 10);
    	echo "Funcao print_r: <br><br>";
    	print_r($v2);
        echo "<br> Funcao var_dump: <br><br>";
        var_dump($v2);
        echo "<br>Funcao var_export: <br><br>";
        var_export($v2);
    ?>
</div>
</body>
</html>
 