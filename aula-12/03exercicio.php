<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
	<form method="get" action="03.1exercicio.php">
		<h1>Gerador de Tabuada PHP</h1>
		<p>Escolha um valor:
			   
			<select name="val">
				<?php
					$c = 1;
					do {
						echo "<option value='$c'>$c</option>";
						$c++;
					}
					while ($c<=10);
				?>
			</select>
		</p>

		<input type="submit" value="Visualizar">
	</form>
</div>
</body>
</html>
 