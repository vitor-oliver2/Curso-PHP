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

    	// função sem retorno de valor
    	function soma ($a, $b){
    		$s = $a + $b;
    		echo "<p>A soma vale $s</p>";
    	}
    	// função com retorno de valor
    	function somar ($a, $b){
    		$s = $a + $b;
    		return $s;
    	}

    	soma(3, 4);
    	$res = somar(3,4);
    	echo "A soma vale $res";
        
    ?>
</div>
</body>
</html>
 