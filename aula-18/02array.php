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

    	$c = range(5, 20, 5); //1 parametro - inicio do vetor / 2 parametro - final do vetor 3 parametro - intervalo entre os valores.
    	// print_r($c);
    	foreach ($c as $v) {
    		print("<td>$v</td>");
    	}
        
    ?>
    	</tr>
    </table>
	</pre>
</div>
</body>
</html>
 