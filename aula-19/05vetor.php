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

    	$v = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
    	print_r($v);
    	ksort($v); // funcao que ordena apenas os INDICES dos elementos do vetor
    	print_r($v);
    	krsort($v);
    	print_r($v); // ordenando agora por ordem decrescente
        
    ?>
	</pre>
</div>
</body>
</html>
 