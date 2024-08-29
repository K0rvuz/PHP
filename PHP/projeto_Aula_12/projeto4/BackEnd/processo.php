<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $assunto = htmlspecialchars($_POST['assunto']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    if  ($nome &&  $email && $assunto && $mensagem) {


    echo "Parabéns, $nome, seu cadastro foi posto no sistema. ";}
}
?>

