<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php

    	$preco = $_GET["p"];
    	// Exercício 01
        echo "O preço do produto é: R$ " . number_format($preco, 2);
        // $preco = $preco + ($preco * 0.1); modo antigo de fazer
        $preco -= $preco * 0.1; // modo usando o atribuidor de soma
        echo "<br>O resultado com 10% de desconto será: R$ " . number_format($preco, 2);
    ?>
</div>
</body>
</html>
 