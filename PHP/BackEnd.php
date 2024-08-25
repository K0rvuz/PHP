<?php

$result="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  // Verifica o metodo post
    $num1 = $_POST['num1']; // primeiro número
    $num2 = $_POST['num2']; // segundo número
    $opc =  $_POST['opc']; //terceiro número


    

    switch($opc) // escolha dada pela variavel em STR para saber qual operação será executada
    
    { 
        case 'mais'  : 
            $result = $num1 + $num2; 
            
            break; //caso a operação seja de adição, esse será o caso

            
            
            
        
        case 'menos':
            $result = $num1 - $num2; // o mesmo serve para a subtração e as demais operações
           
            break;
        
        case 'vezes':
            $result = $num1 * $num2; 
           
            break;

        case 'divisao':
            if ($num2 != 0) {
                $result = $num1 / $num2; 
                
            } else {
                echo "Não é possível dividir por zero"; // Mostra um caso em que o divisor seja diferente de zero, caso seja igual, o código exibe uma mensagem de erro
            }
            break;
        }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<form method="post"> <!-- Formulario para obeter os dados -->
    Número 1: <input type="number" name="num1" required><br><br> <!-- input do número 1 -->
    Número 2: <input type="number" name="num2" required><br><br>  <!-- input 2  -->

    <label for="opc">Escolha a operação:</label>
    <select name="opc" required> <!-- onde é gerado a variavel opc para o Switch pegar as operações-->
        <optgroup label="Operações:">
            <option value="mais" name="mais">+</option> <!--nomes e valores com qual será a operação realizada-->
            <option value="menos"  name="menos">-</option>

            <option value="vezes"  name="vezes">*</option>

            <option value="divisao"   name="divisao">/</option>

        </optgroup>
    </select>
    <br><br>
    <input type="submit" value="Resultado"> <!--resultado -->
</form>
<?php echo $result ?> <!--mostra o resultado da operação selecionada-->
</body>
</html>
