<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<h2>Tabuada PHP 2.0</h2>
	<form method="get" action="02.1exercicio.php">
		<p>Selecione um valor: 
			<select name="val">
				<?php
					for ($i=1; $i <= 10 ; $i++) { 
						echo "<option>$i</option><br>";
					}
				?>
			</select>
		</p>
		<input type="submit" value="Enviar">
	</form>
</div>
</body>
</html>
 