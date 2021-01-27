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
		$contador = 1;
		while ($contador <= 5) {
			$num = $_GET["v$contador"];
			echo "<br>O $contador º valor foi: $num<br>";
			$contador++;
		}
	?>
</div>
</body>
</html>