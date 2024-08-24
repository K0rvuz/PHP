
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aluno</title>
</head>
<body>
<form method="post"> <!-- formulário para pegar o valor dos números -->
    <?php 
   echo "nota 1: <input type='number' name='num1'  placeholder='Nota1'><br><br>";
   echo "nota 2: <input type='number' name='num2' ><br><br> ";
   echo "nota 3: <input type='number' name='num3' ><br><br> ";

   

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o método de requisição é POST
    $num1 = $_POST['num1']; // Obtém o primeiro número
    if  ($num1 < 0 ||  $num1 > 10) {
        echo  "Nota 1 não pode ser negativa nem acima de 10";
        
        }else{

            $num2 = $_POST['num2']; // Obtém o segundo número
                if  ($num2 < 0 ||   $num2 > 10) {

                    echo  "Nota 2 não pode ser negativa nem maior que 10";
       
                    }else{
                         $num3 = $_POST['num3']; // Obtém o terceiro número
                                if  ($num3 < 0  ||  $num3 > 10) {

                                  echo  "Nota 3 não pode ser negativa nem maior que 10";
       
                                   }else
                                        {
    

    $resultado = ($num1+$num2+$num3)/3;//  Calcula a média dos números
 
    if($resultado>=7){
        echo "Média:  $resultado, Aprovado";
    
    } else if ($resultado <7) {
            echo "Média : $resultado, Reprovado";
    
            }

        }    
}
}
}
    ?>
        
    <br><br>
    <input type="submit" value="Resultado"> <!--botão de resultado -->
</form>


</body>
</html>