<?php

 

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o método de requisição é POST
    $num1 = $_POST['num1']; // Obtém o dividendo
    $num2 = $_POST['num2']; // Obtém o divisor
   
while ($num2!=0){ // estrutura de repetição para enquanto o divisor ser diferente de zero (por razões matemáticas) o código seguir normalmente
    $resultado = $num1/$num2 ;
    break;
   

}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>divisão maior que 10</title>
</head>
<body>
<form method="post"> <!-- formulário para pegar o valor dos números -->
    Número 1: <input type="number" name="num1" required><br><br> <!-- input do dividendo-->
    Número 2: <input type="number" name="num2" required><br><br>  <!-- input do divisor -->

    <br><br>
    <input type="submit" value="Resultado"> <!--botão de resultado -->
</form>

<?php
if ($resultado > 10) { // estrutura para saber se o resultado é maior, menor ou igual a dez. 
    echo "$resultado é maior que 10";
    
    } else if  ($resultado < 10) {

        echo "$resultado é menor que 10";
        
        } else{
            echo "$resultado é igual a 10";
        }
        

?>


<!-- exibe o resultado -->


</body>
</html>
