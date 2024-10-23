<?php

require_once('PHPMailer/vendor/autoload.php');
require 'config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$turnstile_secret = CLOUDFLARE_API_KEY;

if (!empty($_POST['cf-turnstile-response'])) {
    $turnstile_response = $_POST['cf-turnstile-response'];
    
    // Preparar os dados para a verificação
    $data = array(
        'secret' => $turnstile_secret,
        'response' => $turnstile_response,
    );
} else {
    header("Location: ./index.php#contacto?erro=turnstile#contactos");
    exit;
}

$url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

$options = array(
    'http' => array(
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data),
    ),
);

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$result = json_decode($response, true);

if ($result['success']) {

    try {
        $email = $_POST['email'];
        $conteudoEmail = $_POST['conteudoEmail'];~
        $lang = $_POST['lang'];
        $mail = new PHPMailer(true);

        // Configuração do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.elasticemail.com'; // Endereço do servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'Portfolio@josefernandes.pt'; // Seu endereço de email
        $mail->Password = ELASTICMAIL_API_KEY; // Sua senha de email
        $mail->SMTPSecure = 'tls';
        $mail->Port = 2525; // Porta do servidor SMTP
    
        // Configuração do remetente e destinatário
        $mail->setFrom('Portfolio@josefernandes.pt', 'Contacto Portfolio');

        $mail->addAddress('zepedrofernandessampaio@gmail.com');
    
        // Conteúdo do email
        $mail->isHTML(true);
        $mail->Subject = 'Contacto - Portfolio';
        $mail->Body = "<h1>Contacto pelo portfólio</h1><br>".$conteudoEmail . "<br>Enviado por: " . $email."<br>Em:".$lang."<br>Morada: Rua alto da bandeira 154";
    
        // Enviar o email
        $mail->send();
        if($lang==="pt"){
            echo 'Email enviado com sucesso!';
            header("location:./index.php?sucesso=1");
        }else if($lang==="eng"){
            echo 'Email enviado com sucesso!';
            header("location:./index.php?success=1");
        }else{
            echo 'Email enviado com sucesso!';
            header("location:./index.php?success=1");
        }
       
    } catch (Exception $e) {
        echo "Erro ao enviar o email: {$mail->ErrorInfo}";
    }
} else {
    header("location:./index.php?robot=1");
}



?>