<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="10.php" method="post">
    Digite um número: <input type="text" name="Numero" id="">
    <input type="submit" value="Enviar">
</form>
</body>
</html>

<?php 

$Numero = $_POST['Numero'];

if ($Numero % 2 == 0) {
    
    echo "Esse número é par";
}

else {
    
    echo "Esse número é ímpar";
}
?>