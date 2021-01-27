<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>

  <style type="text/css">
  	span {
  		border: 2px solid black;
  		width: 200px;
  	}
  </style>
</head>
<body>
<div>
		<?php  

			$valor = $_GET["val"];
			$contador = 1;
			echo "<h2>Mostrando Tabuada de $valor</h2>";
			do {
				$res = $valor * $contador;
				echo "$valor x $contador = $res <br>";
				$contador++;
			}
			while($contador <=10);

		?>
		<br><br><br>
		<a href="03exercicio.php">Voltar</a>
</div>
</body>
</html>
 