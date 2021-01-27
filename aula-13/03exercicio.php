<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style type="">
  	span#num{
  		color: #5271ff;
  		font-weight: bold;
  		font-size: 22pt;
  	}
  	span#primo{
  		color: #4ec207;
  		font-weight: bold;
  		font-size: 22pt;
  	}
  	span#naoprimo{
  		color: #df0c4c;
  		font-weight: bold;
  		font-size: 22pt;
  	}
  </style>
</head>
<body>
<div>
	<?php
		$num = $_GET["val"];
		$cont = 0;

		for ($i=1; $i <= $num ; $i++) { 
			if (($num % $i) == 0) {
				$cont += 1;
			}	
		}

		echo "<br>O valor recebido foi <span id='num'>$num</span>. <br>Analisando...<br>";

		if ($cont <= 2) {
			echo "O valor <span id='primo'>é Primo!</span>";
		}
		else{
			echo "O valor <span id='naoprimo'>não é Primo!</span>";
		}
	?>

	<br><br>

	<a href="03-exercicio.html">Voltar</a>
</div>
</body>
</html>
 