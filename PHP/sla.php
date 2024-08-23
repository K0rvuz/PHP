<?php
$resultado = ""; // Variável para armazenar o resultado

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o método de requisição é POST
    $num1 = $_POST['num1']; // Obtém o primeiro número
    $num2 = $_POST['num2']; // Obtém o segundo número
    $opc = $_POST['opc']; // Obtém a operação selecionada

    switch($opc) { // Realiza a operação com base na seleção do usuário
        case 'mais':
            $resultado = $num1 + $num2; // Adição
            break;
        
        case 'menos':
            $resultado = $num1 - $num2; // Subtração
            break;
        
        case 'vezes':
            $resultado = $num1 * $num2; // Multiplicação
            break;

        case 'divisao':
            if ($num2 != 0) {
                $resultado = $num1 / $num2; // Divisão
            } else {
                $resultado = "Não é possível dividir por zero"; // Tratamento para divisão por zero
            }
            break;
        
        default:
            $resultado = "Operação inválida"; // Caso a operação não seja reconhecida
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h1>Calculadora Simples</h1>
    <form method="post"> <!-- Formulário para entrada de dados -->
        Número 1: <input type="number" name="num1" required><br><br> <!-- Primeiro número -->
        Número 2: <input type="number" name="num2" required><br><br> <!-- Segundo número -->

        <label for="opc">Escolha a operação:</label>
        <select name="opc" required> <!-- Seleção da operação -->
            <optgroup label="Operações:">
                <option value="mais">+</option>
                <option value="menos">-</option>
                <option value="vezes">*</option>
                <option value="divisao">/</option>
            </optgroup>
        </select>
        <br><br>
        <input type="submit" value="Calcular"> <!-- Botão para enviar o formulário -->
    </form>

    <?php if ($resultado !== ""): ?> <!-- Exibe o resultado se houver -->
        <h2>Resultado: <?php echo $resultado; ?></h2>
    <?php endif; ?>
</body>
</html>