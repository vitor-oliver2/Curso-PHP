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

    	$v = array(3,5,6,7);
    	print_r($v);
    	array_push($v, "O"); // insere um elemento no final do vetor
        array_pop($v); // remove um elemento do final do vetor

        array_unshift($v, 7); // insere um elemento no inicio do vetor
        array_shift($v); // remove um elemento do inicio do vetor
    	print_r($v);
        
    ?>
	</pre>
</div>
</body>
</html>
 