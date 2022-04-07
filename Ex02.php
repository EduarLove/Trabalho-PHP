<!DOCTYPE html
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 2</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Formula de Báskara</h1>
	<?php include_once 'menu.php' ?>
	<form action="Ex02.php" method="GET">
		
		<p>
			<label>Valor de A</label>
			<input type="number" name="A">
		</p>

		<p>
			<label>Valor de B</label>
			<input type="number" name="B">
		</p>

		<p>
			<label>Valor de C</label>
			<input type="number" name="C">
		</p>

		<p>
			<button type="submit" name="enviar">Calcular</button>
		</p>
	</form>

 	<?php 

 	if (isset($_GET['enviar'])) {
 		$A = $_GET['A'];
 		$B = $_GET['B'];
 		$C = $_GET['C'];

 		$delta = ($B*$B)-((4*$A)*$C);

 		if($delta>0){
    		$raiz1 = (-$B + sqrt($delta) )/(2*$A);
    		$raiz2 = (-$B - sqrt($delta) )/(2*$A);
    		echo " há duas raízes reais e diferentes:
    		<br> raiz 1: $raiz1 
    		<br> raiz 2: $raiz2 ";
    	}

 		elseif ($delta === 0) {
 			$raiz1 = (-$B + sqrt($delta) )/(2*$A);
 			echo "A equação tem 1 raiz: $raiz1";

 		}

 		else echo "não há raízes reais";

 	}

 	 ?>

</body>
</html>
