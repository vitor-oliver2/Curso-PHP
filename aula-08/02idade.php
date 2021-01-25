<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>

  <style type="text/css">
  	a {
  		border: 1px solid black;
      padding: 5px;
      position: relative;
      top: 150px;
      left: -185px
  	}
  </style>
</head>
<body>
<div>
    <?php
    	$nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não informado!]";
    	$sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo!]";
    	$ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;

    	// A função acima verifica se a variável recebeu algum valor antes de seguir com a execução, evitando desta forma a mensagem de erro proveniente de variáveis que não foram atribuidas pela URL. 

    	$idade = date("Y") - $ano;

    	echo "$nome é $sexo e tem $idade anos!";

    ?>

    <a href="02-exercicio.html">Voltar</a>
</div>
</body>
</html>
 