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
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    
    $to = "allisonmatheuspanda@icloud.com"; 
    $assunto = "Nova mensagem do formulário do site";
    
    $mensagemFormatada = "Nome: $nome\n";
    $mensagemFormatada .= "Email: $email\n";
    $mensagemFormatada .= "Mensagem:\n$mensagem";
    
    $headers = "From: $email";
    
    // Enviar e-mail
    mail($to, $assunto, $mensagemFormatada, $headers);
    
    // Redirecionar para uma página de confirmação
    header("Location: obrigado.html");
    exit;
    }
    ?>
</body>
</html>