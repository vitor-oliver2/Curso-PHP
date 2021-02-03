<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>

  <style type="text/css">
  	p {
  		margin-bottom: 20px;
  	}
  </style>
</head>
<body>
<div>
    <?php

    	$nome = "Vitor Oliveira Araujo";

    	$nome2 = strtolower($nome);
    	echo "<p>$nome deve estar normal <br>$nome2 deve estar minusculo</p>";

    	$nome3 = strtoupper($nome);
    	echo "<p>$nome3 Agora o nome está em maiusculas.</p>";

    	$nome4 = ucfirst($nome2);
    	echo "<p>$nome4 O primeiro nome ficou em maiuscula.</p>";

    	$nome5 = ucwords($nome2);
    	echo "<p>$nome5 Todos os nomes ficaram com a primeira letra maiuscula.</p>";

    	$nome6 = strrev($nome5);
    	echo "<p>$nome6 Agora o nome ficou todo ao contrario</p>";

    	$frase = "Estou aprendendo PHP";
    	$pos = strpos($frase, "PHP"); //também podemos usar a variante 'stripos' para ignorar se a substring está em maiusculas ou não
    	echo "<p>$frase<br>A string 'PHP' foi encontrada na posicao $pos</p>";

    	$frase2 = "<p>Estou aprendendo PHP no curso em video de PHP";
    	echo "<br> $frase2";
    	$cont = substr_count($frase2, "PHP");
    	echo "<br> PHP encontrado $cont vezes!</p>";

    	$site = "Curso em Video";
    	echo "<p>$site<br>";
    	$sub = substr($site, 0, 5);
    	echo "Da primeira à quinta posição a palavra é: $sub</p>";

    	$nome7 = "Guanabara";
    	$novo = str_pad($nome7, 30, "_", STR_PAD_LEFT);
    	echo "<p>Meu professor $novo é lindo!</p>";

    	$str = "Php";
    	$repete = str_repeat($str, 5);
    	echo "<p>A string digitada foi $str<br>A string repetida 5x é $repete</p>";

    	$frase3 = "Eu gosto de estudar Matemática!";
    	$novafrase3 = str_replace("Matemática", "PHP", $frase3);
    	echo "<p>A frase original é:<br> $frase3<br>Trocando a palavra fica: <br>$novafrase3</p>";
        
    ?>
</div>
</body>
</html>
 