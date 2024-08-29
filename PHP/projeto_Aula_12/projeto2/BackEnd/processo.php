<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 

{

    $email = htmlspecialchars($_POST['email']);
    $senha = htmlspecialchars($_POST['senha']);
  

    // Exibindo os dados processados
   
    echo "Email: $email <br>";
    echo "senha: $senha <br>";

}
?>


