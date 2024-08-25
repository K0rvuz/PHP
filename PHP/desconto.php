

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form method="post"> <!-- formulário para pegar o valor dos números -->
    Valor: <input type="number" name="num1" required placeholder="Valor do produto"><br><br> <!-- input do valor do produto-->
    Desconto <input type="number" name="num2" required placeholder="Desconto em %"><br><br>  <!-- input do desconto -->

    <br><br>
    <input type="submit" value="Resultado"> <!--botão de resultado -->
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o método de requisição é POST
    $valor = $_POST['num1']; // Obtém o valor do produto 
    $desconto = $_POST['num2'] /100; // Obtém o valor do desconto que é convertido à porcentagem 
    $valor2=  $valor * $desconto; //valor2 é o valor do produto vezes o desconto que vai gerar o quanto será descontado do valor inicial
                                           //por exemplo, se o produto for R$100 e o desconto for 10%, o calculo seria 
                                           //{100-( 100*10/100)}     10/100 é 0,1
                                           //ou seja, o VALOR DO DESCONTO vai ser {100*0,1} que será 10 reais 
                                           //100{valor original do produto} -(10){valor a ser descontado}

    $total = $valor-($valor2); // mostra na tela qual será o resultado da operação dando o valor inicial, valor do desconto e valor final com desconto aplicado
    echo " O valor inicial do produto é R$ $valor, o valor do desconto foi de R$ $valor2  e o valor final do produto é :R$ $total"; // Mostra o valor 
                                                                                                                                    //do desconto aplicado

   

}


        

?>


<!-- exibe o resultado -->


</body>
</html>
