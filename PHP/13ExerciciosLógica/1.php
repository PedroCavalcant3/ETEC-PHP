<!DOCTYPE html>
<html>
<head>
	<title>Verificação de idade</title>
</head>
<body>
	<h2>Verificação de idade</h2>
	<form method="POST">
		<label for="nome">Nome:</label>
		<input type="text" id="nome" name="nome" required><br>

		<label for="idade">Idade:</label>
		<input type="number" id="idade" name="idade" required><br>

		<input type="submit" value="Verificar">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$nome = $_POST["nome"];
			$idade = $_POST["idade"];

			if ($idade >= 18) {
				echo "$nome é maior de 18 e tem $idade anos.";
			} else {
				echo "$nome não é maior de 18 e tem $idade anos.";
			}
		}
	?>
</body>
</html>
