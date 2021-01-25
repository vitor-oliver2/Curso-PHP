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

	    $nota1 = isset($_GET["n1"]) ? $_GET["n1"] : "Nota não informada!";
	    $nota2 = isset($_GET["n2"]) ? $_GET["n2"] : "Nota não informada!";
	    $media = ($nota1 + $nota2) / 2;

	    if ($media < 5) {
	    	$situacao = "REPROVADO";
	    }
	    else {
	    	if ($media >= 5 and $media < 7) {
	    		$situacao = "RECUPERAÇÃO";
	    	}
	    	else {
	    		$situacao = "APROVADO";
	    	}
	    }

	    echo "A media final foi $media. <br> Portanto, a situação do aluno é $situacao";

    ?>   
    

    <br>
    <br>
    <br>
    <br>
    <a href="03-exercicio.html">Voltar</a>
</div>

</body>
</html> 