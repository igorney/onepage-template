<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $name = $_POST["name"];
    $message = $_POST["message"];

    // Configuração para enviar o email
    $to = "contato@tradicaoelevadores.com"; 
    $subject = "Contato do site";
    $headers = "From: $email";
    $message = "Nome: $name\nEmail: $email\n\nMensagem:\n$message";

    // Envie o email
    if (mail($to, $subject, $message, $headers)) {
        // Email enviado com sucesso
        echo "O email foi enviado com sucesso!";
    } else {
        // Erro ao enviar o email
        echo "Houve um erro ao enviar o email. Por favor, tente novamente.";
    }
} else {
    // O formulário não foi submetido, redirecione ou lide com isso de acordo com suas necessidades.
}
?>
