<!DOCTYPE html>
<html>
<head>
	<title>Verificação de nota</title>
</head>
<body>
	<h2>Verificação de nota</h2>
	<form method="POST">
		<label for="nota">Digite uma nota entre 0 e 10:</label>
		<input type="number" id="nota" name="nota" min="0" max="10" required><br>

		<input type="submit" value="Verificar">
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$nota = $_POST["nota"];

			if ($nota < 0 || $nota > 10) {
				echo "Nota inválida. Digite uma nota entre 0 e 10.";
			} else {
				echo "Nota válida: $nota";
			}
		}
	?>
</body>
</html>
