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
    	$ano = $_GET["an"];
    	$idade = 2021 - $ano;
    	echo "Quem nasceu em $ano, tem agora $idade anos de idade. <br>";
    	$tipo = ($idade >= 18 and $idade <65) ? "obrigatório" : "não obrigatório";
    	// neste exemplo utilizamos os operadores unarios (para fazer a comparação) e os relacionais para realizar as operações
    	echo "E dessa forma, seu voto é $tipo";
    ?>
</div>
</body>
</html>
 