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

    	$estado = isset($_GET["est"]) ? $_GET["est"] : 0;

    	switch ($estado) {
    		case 1:
    			echo "<br>Você está na regão Norte!<br>";
    			break;
    		case 2:
    			echo "<br>Você está na região Nordeste!<br>";
    			break;
    		case 3:
    			echo "<br>Você está na região Centro-Oeste!<br>";
    			break;
    		case 4:
    			echo "<br>Você está na região Sudeste!<br>";
    			break;
    		case 5:
    			echo "<br>Você está na região Sul!<br>";
    			break;
    	}
        
    ?>
    <br><br><br><br><br><br><br><br>
    <a href="03-exercicio.html">Voltar</a>

    	<!-- legenda 1- região norte
    		 legenda 2- região nordeste
    		 legenda 3- região centro-oeste
    		 legenda 4- região sudeste
    		 legenda 5- região sul -->
</div>
</body>
</html>
 