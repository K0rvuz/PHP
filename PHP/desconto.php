

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<form method="post"> <!-- formulário para pegar o valor dos números -->
    Valor: <input type="number" name="num1" required placeholder="Valor do produto"><br><br> <!-- input do primeiro número-->
    Desconto <input type="number" name="num2" required placeholder="Desconto em %"><br><br>  <!-- input do segundo número -->

    <br><br>
    <input type="submit" value="Resultado"> <!--botão de resultado -->
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o método de requisição é POST
    $valor = $_POST['num1']; // Obtém o primeiro número
    $desconto = $_POST['num2'] /100; // Obtém o segundo número
    $valor2=  $valor * $desconto; 

    $total = $valor-($valor2);
    echo " O valor inicial do produto é R$ $valor, o valor do desconto foi de R$ $valor2  e o valor final do produto é :R$ $total"; // Mostra o valor

   

}


        

?>


<!-- exibe o resultado -->


</body>
</html>