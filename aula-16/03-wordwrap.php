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

    	$texto = "Esta variavel recebeu um texto grande para exemplificar o uso da funcao PHP wordwrap, agora vamos ver como iria ficar isso se comecassemos a quebrar as linhas.";

    	$res = wordwrap($texto, 10, "<br>\n", false); //(variavel, numero de caracteres por linha, comando para saltar linhs html, comando para saltar linhas no PHP, false = deixar ultrapassar limite se estiver no meio da palavra / true = nunca deixar ultrapassar o limite)
    	echo "$res";
        
    ?>
</div>
</body>
</html>
 