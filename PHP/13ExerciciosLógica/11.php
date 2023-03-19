<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="11.php" method="post">
Digite o primeiro número: <input type="text" name="VA" id="">
Digite o segundo número: <input type="text" name="VB" id="">
<input type="submit" value="Enviar">
</form>
</body>
</html>

<?php 

$VA = $_POST['VA'];
$VB = $_POST['VB'];

if ($VA > $VB) {

    echo "A maior que B";
}

else {
    
    echo "B maior que A";
}
?>