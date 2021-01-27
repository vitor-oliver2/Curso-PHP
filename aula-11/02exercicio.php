<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<form method="get" action="02.2exercicio.php">
		<?php
			$contador = 1;
			while ($contador <= 5) {
				echo "<p>Digite $contador º o valor: <input type='number' name='v$contador' max='100' min='0' value='0'></p>";
				$contador++;
			}
		?>
		<br><br><br>
		<input type="submit" value="Enviar">
	</form>
</div>
</body>
</html>
 