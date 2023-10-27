<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Você pode fazer o que quiser com os dados do formulário, como enviar um email ou armazenar em um banco de dados.
    
    // Exemplo de envio de e-mail
    $to = "joao.pedroml@hotmail.com"; // Substitua pelo seu endereço de e-mail
    $subject = "Nova mensagem de contato de $name";
    $messageContent = "Nome: $name\nEmail: $email\nTelefone: $phone\nMensagem:\n$message";

    if (mail($to, $subject, $messageContent)) {
        // E-mail enviado com sucesso
        echo "Mensagem enviada com sucesso. Obrigado!";
    } else {
        // Erro no envio de e-mail
        echo "Houve um erro ao enviar a mensagem. Tente novamente mais tarde.";
    }
}
?>
