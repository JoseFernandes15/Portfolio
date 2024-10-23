<?php

    $response = file_get_contents("https://ipinfo.io/json?token=2bd62e00ae7724");
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