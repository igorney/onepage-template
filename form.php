<?php
$response = array();

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
        $response['status'] = 'success';
        $response['message'] = 'O email foi enviado com sucesso!';
    } else {
        // Erro ao enviar o email
        $response['status'] = 'error';
        $response['message'] = 'Houve um erro ao enviar o email. Por favor, tente novamente.';
    }
} else {
    // O formulário não foi submetido, lide com isso de acordo com suas necessidades.
    $response['status'] = 'error';
    $response['message'] = 'Requisição inválida.';
}

echo json_encode($response);
?>