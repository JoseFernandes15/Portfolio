<?php
require 'config.php';

$api_key=IP_INFO_API_KEY;

if (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
    $user_ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
} else {
    // Caso não esteja disponível, usa o IP remoto padrão
    $user_ip = $_SERVER['REMOTE_ADDR'];
}
 $response = file_get_contents("https://ipinfo.io/{$user_ip}/json?token=");
 echo $response;
 if ($response === false) {
        echo "erro";
    }
    $data = json_decode($response, true);

    $countryCode = $data['country'];
    echo "countrycode",$countryCode,'<br>';

    
        // Define o idioma com base no país
        switch ($countryCode) {
            case 'PT':
                echo "pt_pt";
                break;
            case 'BR':
                echo "br_br";
                break;
            default:
                echo "en_en";
                break;
        }
    
        // Define o cookie de linguagem por 30 dias
        echo "<br>linguagem";
  

?>