<?php
session_start();

require 'vendor/autoload.php';
require 'config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$turnstile_secret = CLOUDFLARE_API_KEY;

$allowed_origin = "https://josefernandes.pt";
$csrf_token = $_POST['csrf_token'] ?? null;

// Verifica se o método é POST e se a origem da requisição é válida
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_SERVER['HTTP_ORIGIN']) || $_SERVER['HTTP_ORIGIN'] !== $allowed_origin) {
    header("Location: ./403.php"); 
    exit('Acesso não autorizado.');
}

// Verifica se o token CSRF está presente e se corresponde ao gerado na sessão
if (!$csrf_token || $csrf_token !== $_SESSION['csrf_token']) {
    header("Location: ./index.php?erro=csrf#contactos");
    exit('Token CSRF inválido.');
}

// Verifica a resposta do Turnstile da Cloudflare para evitar submissão automatizada (bots)
if (!empty($_POST['cf-turnstile-response'])) {
    $turnstile_response = $_POST['cf-turnstile-response'];
    
    // Preparar os dados para a verificação
    $data = array(
        'secret' => $turnstile_secret,
        'response' => $turnstile_response,
    );
} else {
    header("Location: ./index.php?erro=turnstile#contactos");
    exit;
}

$url = 'https://challenges.cloudflare.com/turnstile/v0/siteverify';

// Configuração para a requisição HTTP
$options = array(
    'http' => array(
        'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data),
    ),
);

$context = stream_context_create($options); // Cria um contexto de stream para a requisição
$response = file_get_contents($url, false, $context); // Envia a requisição e obtém a resposta
$result = json_decode($response, true); // Decodifica a resposta JSON

// Verifica se a verificação do Turnstile foi bem-sucedida
if ($result['success']) {

    try {
        // Filtra o email e o conteúdo do email para evitar injeção e XSS
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $conteudoEmail = htmlspecialchars($_POST['conteudoEmail'], ENT_QUOTES, 'UTF-8');
        $lang = $_COOKIE["language"] ?? 'en_en'; // Obtém o idioma selecionado, padrão 'en_en'
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
        $mail->Body = "<h3>Contacto pelo portfólio</h3><br>".$conteudoEmail . "<br>Enviado por: " . $email;
    
        // Envia o email e redireciona de acordo com o idioma selecionado
        $mail->send();
        if($lang==="pt_pt"){
            echo 'Email enviado com sucesso!';
            header("location:./index.php?sucesso=1");
        }else if($lang==="en_en"){
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
    // Redireciona caso a verificação do Turnstile falhe
    header("location:./index.php?robot=1");
}

// Gera um novo token CSRF para a próxima submissão
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));

?>