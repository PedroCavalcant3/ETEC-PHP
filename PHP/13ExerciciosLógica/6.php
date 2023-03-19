
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="6.php" method="POST">
        Digite o primeiro número: <input type="text" name="N1" id=""><br>
        Digite o segundo número: <input type="text" name="N2" id="">
        <input type="submit" name="" id="">
    </form>
</body>
</html>


<?php
	$num1 = $_POST['N1'];
	$num2 = $_POST['N2'];

    for($i = $num1 + 1; $i < $num2; $i++)
    {
        echo $i. " ";
    }
?>

