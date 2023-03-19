<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="9.php" method="Post">
      Escreva um número: <input type="text" name="Valor" id="">
      <input type="submit" value="Enviar">
</form>
</body>
</html>

<?php 

$Numero = $_POST['Valor'];

if ($Numero > 0) {
    
    echo "Valor Positivo";
}

if ($Numero < 0) {
    echo "Valor Negativo";
}

if ($Numero == 0) {
    
    echo "Igual a zero";
}
?>