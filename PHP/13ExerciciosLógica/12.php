<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Verificação de Triângulo</title>
  </head>
  <body>
    <h1>Verificação de Triângulo</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="a">Lado A:</label>
      <input type="number" name="a" required><br>
      <label for="b">Lado B:</label>
      <input type="number" name="b" required><br>
      <label for="c">Lado C:</label>
      <input type="number" name="c" required><br>
      <input type="submit" value="Verificar">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recebe os três números informados pelo usuário
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        
        // Verifica se os números formam um triângulo
        if ($a + $b > $c && $a + $c > $b && $b + $c > $a) {
          // Verifica o tipo de triângulo
          if ($a == $b && $b == $c) {
            echo "<p>Este é um triângulo equilátero</p>";
            echo "<img src='Imagem/equilatero.png' alt='Triângulo equilátero'>";
            
          } else if ($a == $b || $a == $c || $b == $c ) {
            echo "<p>Este é um triângulo isósceles.</p>";
            echo "<img src='Imagem/isosceles.png' alt='Triângulo isósceles'>";
          } else {
            echo "<p>Este é um triângulo escaleno.</p>";
            echo "<img src='Imagem/escaleno.png' alt='Triângulo escaleno'>";
          }
        } else {
          echo "<p>Os valores informados não formam um triângulo.</p>";
        }
      }
    ?>
  </body>
</html>
