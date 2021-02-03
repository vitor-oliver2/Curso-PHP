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
		<table border="1">
			<tr>
    <?php
    	// usando chaves personalizadas (não sequenciais)
    	$a = array(0 => 1,
    				5 => 1,
    				3 => 8,
    				4 => 6);

      unset($a[0]); // remover o valor da posição dada
    	print_r($a);
        
    ?>
    	</tr>
    </table>
	</pre>
</div>
</body>
</html>
 