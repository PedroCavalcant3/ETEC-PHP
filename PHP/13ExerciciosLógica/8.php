<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="8.php" method="post">
    Adivinhe o número entre 1 e 50: <input type="text" name="Numero" id="Numero">
    <input type="submit" value="Verificar">
</form>

</body>
</html>

<?php
    $ale = rand(1,50);
    $num = $_POST['Numero'];

    if ($num == $ale) {
        echo nl2br(" Parabéns você acertou. \n");
    }

    else {
        echo nl2br("Você errou,tente de novo \n");
    }

    echo "Valor correto: ".$ale;

?>
