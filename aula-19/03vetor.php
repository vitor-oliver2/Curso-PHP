<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<pre>
    <?php

    	$v = array(18,9,12,4);
    	print_r($v);
    	sort($v); // coloca os elementos do vetor em ordem crescente *também funciona com caracteres
    	print_r($v);
    	rsort($v); // coloca os elementos do vetor em ordem decrescente
    	print_r($v);
        
    ?>
	</pre>
</div>
</body>
</html>
 