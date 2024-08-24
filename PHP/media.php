<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o método de requisição é POST
    $num1 = $_POST['num1']; // Obtém o primeiro número
    $num2 = $_POST['num2']; // Obtém o segundo número
    $num3 = $_POST['num3']; // Obtém o terceiro número
    $resultado = ($num1+$num2+$num3)/3;//  Calcula a média dos números


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
<form method="post"> <!-- formulário para pegar o valor dos números -->
    Número 1: <input type="number" name="num1" required><br><br> <!-- input do primeiro número-->
    Número 2: <input type="number" name="num2" required><br><br>  <!-- input do segundo número -->
    Número 3: <input type="number" name="num3" required><br><br>   <!-- Input do terceiro número -->


        
    <br><br>
    <input type="submit" value="Resultado"> <!--botão de resultado -->
</form>
<?php echo $resultado ?>  <!-- exibe o resultado -->

</body>
</html>