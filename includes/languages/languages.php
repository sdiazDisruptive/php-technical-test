<?php

    // PHP code to extract IP 
    function getVisIpAddr() {
        
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else {
            return $_SERVER['REMOTE_ADDR'];
        }
    }
    
    // Store the IP address
    $ip = getVisIPAddr();
    
    // Use JSON encoded string and converts it into a PHP variable
    $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

    $countryCode = $ipdat->geoplugin_countryCode;

    $spanishCodes = array( 'MX', 'GT', 'HN', 'SV', 'NI', 'CR', 'PA', 'CU', 'DO', 'PR', 'VE', 'CO', 'EC', 'PE', 'BO', 'PY', 'CL', 'AR', 'UY', 'ES', 'GQ' );

    if (@$_GET['language']) {
        
        $_SESSION['language']=$_GET['language'];
    } elseif (!isset($_SESSION["language"])) {
        // Con este lenguaje inicia la pagina
        if (in_array($countryCode, $spanishCodes)){
            $_SESSION['language']='spanish';
        } else {
            $_SESSION['language']='english';
        }
    }

    // include("{$_SESSION['language']}.php");  //Descomentar para activar multilenguaje
    include("spanish.php");  //Comentar para desactivar lenguaje único
?>