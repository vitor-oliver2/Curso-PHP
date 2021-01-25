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
    	$v1 = $_GET["x"];
    	$v2 = $_GET["y"];

    	echo "<h2> Valores Recebidos: $v1 e $v2 </h2>";
    	echo "O valor absoluto de $v2 é: " . abs($v2);
    	echo "<br> O valor de $v1 <sup>$v2</sup> é: " . pow($v1, $v2);
    	echo "<br> A raiz quadrada de $v2 é: " . sqrt($v2);
    	echo "<br> O valor de $v2 arredondado é: " . round($v2); // ceil - arredondar sempre para cima floor - arredondar sempre para baixo
    	echo "<br> A parte inteira de $v2 é: " . intval($v2);
    	echo "<br> O valor de $v1 em moeda é: R$" . number_format($v1, 2, ",", "."); //primeira virgula separa o valor decimal, o segundo ponto separa os milhares
    ?>
</div>
</body>
</html>
 