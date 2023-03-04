<html>
<head>
    <title>Palavra</title>
    <meta charset="utf-8">
</head>
<body>
    <?php
    
        $person = array('name' => 'Ruth', 'lastName' => 'Cardoso', 'nacionality' => 'Brasileira', 'homeLand' => 'Araraquara - SP');
        $person['birthDay'] = 19;
        $person['birthMonth'] = 9;
        $person['birthYear'] = 1953;

        echo "Nome: ". $person['name']. $person['lastName'];
        echo '<br/><br/>';
        
        echo "Nacionalidade: ". $person['nacionality'];
        echo '<br/><br/>';

        echo "Local de Nascimento: ". $person['homeLand'];
        echo '<br/><br/>';

        echo "Data de nascimento: ". $person['birthDay']. '/'. $person['birthMonth']. '/'. $person['birthYear'];
        echo '<br/><br/>';
        
    ?>
</body>
</html>