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
		$valor = $_GET["val"];

		for ($i=1; $i <= 10 ; $i++) { 
			$res = $valor * $i;
			echo "$valor x $i = $res <br>";
		}
	?>

	<br><br>

	<a href="02exercicio.php">Voltar</a>
</div>
</body>
</html>
 