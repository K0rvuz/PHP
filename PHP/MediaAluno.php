
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aluno</title>
</head>
<body>
<form method="post"> <!-- formulário para pegar o valor das notas -->
    <?php 
   echo "nota 1: <input type='number' name='num1'  placeholder='Nota1'><br><br>"; #mostra nota 1 por meio do php
   echo "nota 2: <input type='number' name='num2' ><br><br> "; #mostra nota 2 por meio do php    
   echo "nota 3: <input type='number' name='num3' ><br><br> "; #mostra nota 3 por meio do php 

   

if ($_SERVER["REQUEST_METHOD"] == "POST") { // Verifica se o método de requisição é POST
    $num1 = $_POST['num1']; // Obtém a primeira nota
    if  ($num1 < 0 ||  $num1 > 10) {  #caso a primeira nota seja menor que zero ou maior que dez, mostra a mensagem:
        echo  "Nota 1 não pode ser negativa nem acima de 10"; 
        
        }else{ #caso não, prossegue para a próxima nota que gera uma estrutura de verificação, porém, a verificação só vai ocorrer depois do usuario enviar o
#formulário.

            $num2 = $_POST['num2']; // Obtém a segunda nota
                if  ($num2 < 0 ||   $num2 > 10) { //mesmo sistema da nota anterior 

                    echo  "Nota 2 não pode ser negativa nem maior que 10";
       
                    }else{
                         $num3 = $_POST['num3']; // Obtém a terceira nota
                                if  ($num3 < 0  ||  $num3 > 10) {

                                  echo  "Nota 3 não pode ser negativa nem maior que 10";
       
                                   }else
                                        {
    

    $resultado = ($num1+$num2+$num3)/3;//  Calcula a média das notas
 
    if($resultado>=7){ #estrutura pra saber se o aluno foi aprovado ou não
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
