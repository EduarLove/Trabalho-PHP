<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 4</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Calculando o Pagamento</h1>
	<?php include_once 'menu.php' ?>
	<form action="Ex04.php" method="GET">		
		<p>
			<label>Valor</label>
			<input type="number" name="valor">
		</p>
		<h3>metodo de pagamento:</h3>
		<p>
			<input type="radio" name="metodo" value="um"> à vista em dinheiro ou cheque
			<br>
			<input type="radio" name="metodo" value="dois"> à vista no cartão de crédito
			<br>
			<input type="radio" name="metodo" value="tres"> em 2 vezes
			<br>
			<input type="radio" name="metodo" value="quatro"> em 3 vezes
		</p>
		<p>
			<button type="submit" name="enviar">Calcular</button>
		</p>
	</form>
	<?php 

	if (isset($_GET['enviar'])) {
		$valor = $_GET['valor'];
		$metodo =$_GET['metodo'];

		if ($metodo === 'um') {
			$desconto = ($valor * 10)/100;
			$valor_final = $valor - $desconto;
			echo "valor: $valor_final";
		}
		elseif($metodo === 'dois'){
			$desconto = ($valor * 5)/100;
			$valor_final = $valor - $desconto;
			echo "valor: $valor_final";
		}
		elseif($metodo === 'tres'){
			echo "valor: $valor";
		}
		else {
			$juros = ($valor * 10)/100;
			$valor_final = $valor + $juros;
			echo "valor: $valor_final";
		}
	}








	 ?>
</body>
</html>