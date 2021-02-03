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
    	// usando chaves personalizadas e tipos primitivos diferentes
    	$a = array(  "nome" => "Vitor",
                    "idade" => 21,
                    "peso" => 73.5);

    	print_r($a);
      foreach ($a as $cont => $val) {
          echo "O valor do campo $cont é $val<br>";
      }
        
    ?>
    	</tr>
    </table>
	</pre>
</div>
</body>
</html>
 