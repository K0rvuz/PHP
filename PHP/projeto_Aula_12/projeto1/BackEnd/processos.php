<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 

{
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $assunto = htmlspecialchars($_POST['assunto']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Exibindo os dados processados
    echo "Nome: $nome <br>";
    echo "Email: $email <br>";
    echo "Assunto: $assunto <br>";
    echo "Mensagem: $mensagem <br>";
}
?>


