Desenvolva uma aplicação em PHP que represente o jogo Jokenpô (Pedra, Papel e Tesoura), 
onde o usuário informa seu nome e indica em qual opção quer apostar (pedra, papel ou tesoura) 
e aguarda a jogada do computador (ela deverá ser automática), de acordo com as regras do 
Jokenpô exiba quem ganhou e as imagens referentes as escolhas do computador e o usuário. 



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Pedra Papel, Tesoura</title>
  </head>
  <body>
    <h1>Jokenpô</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <label for="a">Digite Seu Nome:</label>
      <input type="text" name="a" required><br>
      <label for="b">Pedra, Papel ou Tesoura?:</label>
      <input type="text" name="b" required><br>
      <input type="submit"  value="Verificar">
    </form>

    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $A = $_POST['a'];
        $B = $_POST['b'];
        $ESCOLHA = ["PEDRA","PAPEL","TESOURA"];
        $C = rand(0,2);
        $jogadaComputador = $ESCOLHA[$C];
      

        if($B !== $jogadaComputador){
            if($B == 'PEDRA' && $jogadaComputador == "TESOURA" || $B == 'PAPEL' && $jogadaComputador == "PEDRA" || $B == 'TESOURA' && $jogadaComputador == "PAPEL"){
                echo "Voce ganhou, o computador jogou "."<img src = 'Imagem/" .$jogadaComputador.".JPG' width='120px'>"." voce jogou ". "<img src = 'Imagem/" .$B.".JPG' width='120px'>";
                
            } 
            else{
                echo "Voce perdeu, o computador jogou "."<img src = 'Imagem/" .$jogadaComputador.".JPG' width='120px'>"." voce jogou ". "<img src = 'Imagem/" .$B.".JPG' width='120px'>";
            }
        }
        else{
            echo "Voce empatou, o computador jogou "."<img src = 'Imagem/" .$jogadaComputador.".JPG' width='120px'>"." voce jogou ". "<img src = 'Imagem/" .$B.".JPG' width='120px'>";
        }
               
        }  
      
    ?>
  </body>
</html>
