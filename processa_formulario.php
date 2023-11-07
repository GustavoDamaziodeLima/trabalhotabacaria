<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $numero = $_POST["numero"];
    $mensagem = $_POST["mensagem"];
    $to = "damaziocsgoplayer@gmail.com";
    $subject = "Formulário de Contato - Fale Conosco";
    $headers = "From: $nome <$numero>";

    if (mail($to, $subject, $mensagem, $headers)) {
        echo "Mensagem enviada com sucesso. Entraremos em contato em breve.";
    } else {
        echo "Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
    }
} else {
    echo "Acesso inválido!";
}
?>
