<?php

$result="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {  // Check if the request method is POST
    $num1 = $_POST['num1']; // Get the first number
    $num2 = $_POST['num2']; // Get the second number
    $opc =  $_POST['opc']; 


    

    switch($opc)
    
    { // Switch based on the selected operation
        case 'mais'  : 
            $result = $num1 + $num2; 
             // Display the result
            break; // If the operation is addition

            
            
            
        
        case 'menos':
            $result = $num1 - $num2; // Perform subtraction
           
            break;
        
        case 'vezes':
            $result = $num1 * $num2; // Perform multiplication
           
            break;

        case 'divisao':
            if ($num2 != 0) {
                $result = $num1 / $num2; // Perform division
                
            } else {
                echo "Não é possível dividir por zero"; // Handle division by zero
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
<form method="post"> <!-- Form to submit data -->
    Número 1: <input type="number" name="num1" required><br><br> <!-- First number input -->
    Número 2: <input type="number" name="num2" required><br><br>  <!-- Second number input -->

    <label for="opc">Escolha a operação:</label>
    <select name="opc" required> <!-- Corrected name attribute for the select element -->
        <optgroup label="Operações:">
            <option value="mais" name="mais">+</option>
            <option value="menos"  name="menos">-</option>

            <option value="vezes"  name="vezes">*</option>

            <option value="divisao"   name="divisao">/</option>

        </optgroup>
    </select>
    <br><br>
    <input type="submit" value="Resultado"> <!-- Submit button -->
</form>
<?php echo $result ?>
</body>
</html>