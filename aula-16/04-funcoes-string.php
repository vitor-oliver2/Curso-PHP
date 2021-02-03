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
    	echo "Funcao strlen: <br>";
    	$txt = "Curso em Video";
    	$tamanho = strlen($txt); // conta comprimento da string
    	echo "$tamanho";

    	echo "<br><br>";

    	echo "Funcao trim: <br>";
    	$txt1 = "      Vitor Oliveira      ";
    	$tam1 = strlen($txt1);
    	echo "$tam1 <br>";
    	$txt2 = trim($txt1); // tira os espacos antes e depois da string
    	$tam2 = strlen($txt2);
    	echo "$tam2";
    	// Da mesma forma existem as funcoes ltrimm e rtrim para tirar os espacos somente da esquerda e direita respectivamente.

    	echo "<br><br>";

    	echo "Funcao str_word_count: <br>";
    	$txt3 = "Eu vou estudar PHP";
    	$cont = str_word_count($txt3, 1); // conta as palavras dentro de uma string, ela aceita os parametros 0- somente conta as palavras 1- gera um vetor e coloca uma palavra em cada posição 2- cria um vetor mantendo cada palavra na posicao real dos caracteres dentro do vetor
    	//echo "$cont";
    	print_r($cont);

    	echo "<br><br>";

		echo "Funcao explode: <br>";
		$site = "Curso em Video";
		$vetor = explode(" ", $site); // separa uma string em vetores *parecidamente com a funcao str_word_count
		print_r($vetor);     

		echo "<br><br>";

		echo "Funcao str_split: <br>";
		$nome = "Vitor";
		$vetor2 = str_split($nome); // separa cada letra por um vetor
		print_r($vetor2);


		echo "<br><br>";

		echo "Funcao implode: <br>";
		$vetor3[0] = "Curso";
    	$vetor3[1] = "em";
    	$vetor3[2] = "Video";

    	$text = implode(" ", $vetor3); // junta um vetor em somente uma string com um separador qualquer, nesse caso um espaco.
    	print($text);

    	echo "<br><br>";

    	echo "Funcao chr: <br>";
    	$letra = chr(99); // exibe qual letra pertence ao codigo informado
    	echo "A letra de codigo 99 é: $letra";

    	echo "<br><br>";

    	echo "Funcao ord: <br>";
    	$cod = ord("c"); // exibe qual codigo pertence a letra informada
    	echo "O codigo da letra c é: $cod";

    ?>
</div>
</body>
</html>
 