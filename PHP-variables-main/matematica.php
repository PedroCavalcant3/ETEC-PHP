<html>
    <meta charset="UTF-8">
    <title>Soma</title>
<body>
    <?php
        $dois = 2;
        $tres = 3;

        $opera = array('soma' => ($dois+$tres), 'sub' => ($dois-$tres), 'div' => ($dois/$tres), 'resto' => ($dois%$tres));

        echo '<table border="1">';
            echo '<tr>';
                printf("<td>%d + %d</td>", $dois, $tres);
                printf('<td>%d</td>', $opera['soma']);
            echo '<tr/>';

            echo '<tr>';
                printf("<td>%d - %d</td>", $dois, $tres);
                printf('<td>%d</td>', $opera['sub']);
            echo '<tr/>';

            echo '<tr>';
                printf("<td>%d &divide %d</td>", $dois, $tres);
                printf('<td>%d</td>', $opera['div']);
            echo '<tr/>';

            echo '<tr>';
                printf("<td>%d // %d</td>", $dois, $tres);
                printf('<td>%d</td>', $opera['resto']);
            echo '<tr/>';
        echo '<table/>';
    ?>
    <?php
        echo '<br/>';
        echo '<a href="index.html">sair</a>';
    ?>
</body>
</html>