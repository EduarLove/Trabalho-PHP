<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 5</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Exercicio 5</h1>
	<?php include_once 'menu.php' ?>
	<form action="Ex05.php" method="GET">
		<p>
			<label>operador</label>
			<input type="number" name="operador">
		</p>
		<p>
			<label>Raio</label>
			<input type="number" name="Raio">
		</p>
		<p>
		<button type="submit" name="enviar">Enviar</button>
		</p>
	</form>
	
	<?php 

 	if (isset($_GET['enviar'])) {
 		$operador = $_GET['operador'];
 		$Raio = $_GET['Raio'];


 		if($operador = 1){
    		$area = (3.14*$Raio*$Raio);
    		echo "Area da circunferência:$area";
 		}

 		elseif ($operador = 2) {
 			$perimetro = (2*3.14*$Raio);
 			echo "perímetro da circunferência: $perimetro";
 		}




 		else echo "erro";
	}
 	 ?>
</body>
</html>