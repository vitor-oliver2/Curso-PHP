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

    	$atual = $_GET["aa"];
      //echo "O ano atual é $atual, e o ano anterior é " . --$atual; //usando o pre-decremento ele primeiro irá subtrair 1 e depois mostrar a variavel

      echo "O ano atual é $atual, e o ano sucessor é " . ++$atual //dessa vez o pre-incremento soma 1 a variavel para depois mostra-la ao usuário
    ?>
</div>
</body>
</html>