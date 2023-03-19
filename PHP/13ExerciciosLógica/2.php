<!DOCTYPE html>
<html>
<head>
	<title>Verificação de mês</title>
</head>
<body>
	<h2>Verificação de mês</h2>
	<form method="POST">
		<label for="numero">Digite um número inteiro entre 1 e 12:</label>
		<input type="number" id="numero" name="numero" required><br>

		<input type="submit" value="Verificar">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$numero = $_POST["numero"];

			switch ($numero) {
				case 1:
					echo "Janeiro";
					break;
				case 2:
					echo "Fevereiro";
					break;
				case 3:
					echo "Março";
					break;
				case 4:
					echo "Abril";
					break;
				case 5:
					echo "Maio";
					break;
				case 6:
					echo "Junho";
					break;
				case 7:
					echo "Julho";
					break;
				case 8:
					echo "Agosto";
					break;
				case 9:
					echo "Setembro";
					break;
				case 10:
					echo "Outubro";
					break;
				case 11:
					echo "Novembro";
					break;
				case 12:
					echo "Dezembro";
					break;
				default:
					echo "Não existe mês com este número.";
					break;
			}
		}
	?>
</body>
</html>
