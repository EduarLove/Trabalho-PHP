<!DOCTYPE html
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 1</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Calculando o peso ideal</h1>
	<?php include_once 'menu.php' ?>
	<form action="Ex01.php" method="GET">
		<p>
			<label>Altura</label>
			<input type="text" name="altura">
		</p>

		<p>
			<input type="radio" name="sexo" value="masculino"> Masculino
			<br>
			<input type="radio" name="sexo" value="feminino"> Feminino
		</p>
		<p>
			<button type="submit" name="enviar">Enviar</button>
		</p>
	</form>

<?php 

	if (isset($_GET['enviar'])) {
		$altura = $_GET['altura'];
		$Sexo = $_GET['sexo'];

		$peso_feminino = 62.1 * $altura -44.7;
		$peso_masculino = 72.2 * $altura -58;

		if ($Sexo === 'feminino') {
			$peso_final = $peso_feminino;
		}
		elseif ($Sexo === 'masculino') {
			$peso_final = $peso_masculino;
		}
		echo "seu peso ideal: $peso_final";
	}
 ?>


</body>
</html>
