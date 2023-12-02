<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST["mensagem"];

    $destinatario = "allisonmatheuspanda@icloud.com"; 

    $corpo_email = "Nome: $nome\nTelefone: $telefone\nE-mail: $email\nAssunto: $assunto\nMensagem:\n$mensagem";

    mail($destinatario, "Novo formulário de contato", $corpo_email);

   
}
?>
</body>
</html>