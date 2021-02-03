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

    	$v = array(4,1,3,2);
    	print_r($v);
    	asort($v); // ordena os elementos porém mantem os mesmos indices anteriores
    	print_r($v);
    	arsort($v);
    	print_r($v); // ordena em ordem inversa mantendo os indices
        
    ?>
	</pre>
</div>
</body>
</html>
 