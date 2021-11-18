<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exercicio 3</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<h1>Clasificando idade de um nadador</h1>
	<?php include_once 'menu.php' ?>
	<form>
		<p>
			<label>Idade</label>
			<input type="number" name="idade">
		</p>
		<button type="submit" name="enviar">Clasifique</button>
	</form>

	<?php 

	if (isset($_GET['enviar'])) {
		$idade = $_GET['idade'];

		if ($idade <= 4) {
			echo "<h2> Sem categoria ";
		}
		elseif ($idade > 4 && $idade <= 7){
			echo "<h2> Infantil A";
		}
		elseif ($idade >7 && $idade <= 10) {
			echo "<h2> Infantil B";
		}
		elseif ($idade >10 && $idade <= 13) {
			echo "<h2> Juvenil A";
		}
		elseif ($idade >13 && $idade <=17) {
			echo "<h2> Juvenil B";
		}
		else
			echo "<h2> Adulto";


	




	}
	 ?>



</body>
</html>