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
		// ini fin inc - parametros passados pela url
		$inicio = $_GET["ini"];
		$final = $_GET["fin"];
		$incremento = $_GET["inc"];


		if ($inicio > $final) {
			while ($inicio >= $final) {
				echo "$inicio <br>";
				$inicio -= $incremento;
			}
		}
		if ($inicio < $final) {
			while ($inicio <= $final) {
				echo "$inicio <br>";
				$inicio += $incremento;
			}
		}

	?>
	<br><br><br><br>
	<a href="03-exercicio.html">Voltar</a>
</div>
</body>
</html>